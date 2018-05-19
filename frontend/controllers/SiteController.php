<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use common\models\Artikel;
use common\models\Kategori;
use common\models\Halamanstatis;
use common\models\Reservasi;
use common\models\Registrasi;
use yii\data\ActiveDataProvider;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProviderArtikel = new ActiveDataProvider([
            'query' => Artikel::find()
                ->where('id_kategori != :kategori', [':kategori' => isset($_GET['kategori']) ? $_GET['kategori'] : 'NULL'
                ]),
            'pagination' => ['pageSize' => 3],
            'sort' => [
                'defaultOrder' => [
                    'id_artikel' => SORT_DESC
                ]
            ]
        ]);



       // $halamanstatis=Halamanstatis::find()->where(['IN', 'id_halaman', [64,66]])->all();

        return $this->render('index', [
            'dataProviderArtikel' => $dataProviderArtikel
        ]);
    }
	
	public function actionTentangkami()
    {
        $halamanstatis=Halamanstatis::find()->where(['IN', 'id_halaman', [64,66]])->all();


        return $this->render('tentangkami', ['halamanstatis' => $halamanstatis]);

    }
	
	public function actionDaftarharga()
    {
        return $this->render('daftarharga');
    }

    public function actionKategori()
    {
        $dataProviderKategori = new ActiveDataProvider([
            'query' => Artikel::find()
                ->where('id_kategori = :kategori', [':kategori' => isset($_GET['kategori']) ? $_GET['kategori'] : 'NULL'
                ]),
            'pagination' => ['pageSize' => 3],
            'sort' => [
                'defaultOrder' => [
                    'id_artikel' => SORT_DESC
                ]
            ]
        ]);



        return $this->render('kategori', [
            'dataProviderKategori' => $dataProviderKategori
        ]);
    }


	
		public function actionGaleri()
    {
        return $this->render('galeri');
    }
	
	public function actionHubungikami()
    {
        return $this->render('hubungikami');
    }
	
	public function actionArtikel()
    {
        $dataProviderArtikel = new ActiveDataProvider([
            'query' => Artikel::find()
                ->where('id_kategori != :kategori', [':kategori' => isset($_GET['kategori']) ? $_GET['kategori'] : 'NULL'
                ]),
            'pagination' => ['pageSize' => 3],
            'sort' => [
                'defaultOrder' => [
                    'id_artikel' => SORT_DESC
                ]
            ]
        ]);



        return $this->render('artikel', [
            'dataProviderArtikel' => $dataProviderArtikel
        ]);


    }


    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionView($id)
    {
        $model = Artikel::findOne($id);

        // menambahkan jumlah baca 1
        $model->updateCounters(['jumlah_baca' => 1]);



        return $this->render('view', [
            'model' => $model
        ]);
    }
	
	public function actionRegistration()
	{
		$model = new Registrasi();
		
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_halaman]);
        } else {
			   return $this->render('registration', [
				'model' => $model
			]);
        }
		 
	}
	
	public function actionReservation()
	{
		$model = new Reservasi();
		
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
			    return $this->render('reservation', [
            'model' => $model
        ]);
        }
		
		
	}
}
