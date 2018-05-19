<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "registrasi".
 *
 * @property integer $id
 * @property string $startup_name
 * @property string $reg_buss_name
 * @property string $date_founded_in
 * @property string $category
 * @property string $address
 * @property string $email
 * @property string $website
 * @property string $title
 * @property string $firstname
 * @property string $lastname
 * @property string $date_birth
 * @property string $position
 * @property string $quest1
 * @property string $quest2
 * @property string $quest3
 * @property string $quest4
 * @property string $quest5
 * @property string $quest6
 */
class Registrasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registrasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['startup_name', 'reg_buss_name', 'date_founded_in', 'category', 'address', 'email', 'website', 'title', 'firstname', 'lastname', 'date_birth', 'position'], 'required'],
            [['date_founded_in', 'date_birth'], 'safe'],
            [['address', 'position', 'quest1', 'quest2', 'quest3', 'quest4', 'quest5', 'quest6'], 'string'],
            [['startup_name', 'reg_buss_name'], 'string', 'max' => 100],
            [['category', 'email', 'website', 'firstname', 'lastname'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'startup_name' => 'Startup Name',
            'reg_buss_name' => 'Reg Buss Name',
            'date_founded_in' => 'Date Founded In',
            'category' => 'Category',
            'address' => 'Address',
            'email' => 'Email',
            'website' => 'Website',
            'title' => 'Title',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'date_birth' => 'Date Birth',
            'position' => 'Position',
            'quest1' => 'Whats Is History of your Startup ?',
            'quest2' => 'What is the problem taht your startup tries to solve?',
            'quest3' => 'What is the chalange and oppourtunity of your bussiness?',
            'quest4' => 'Tell us how your startup has been growing so far (for example term of transaction, number of user, product and service management, etc) and what its your future goal for it ?',
            'quest5' => 'What receive financings and what did you use it ?	',
            'quest6' => 'Are you planning or currently raising series B or C, or in search for strategic partner of investor? what will the funds be used and what is your criteria of strategic investor?',
        ];
    }
	
	public function search($prm=array())
    {
        //$prm=array();
        $connection = Yii::$app->getDb();
        $sql='SELECT * FROM registrasi ';

        if(isset($prm['search_field']) && $prm['search_val']!="")
        {
            if(count($prm['search_field'])>0 && $prm['search_val']!="")
            {
                for($f=0;$f<count($prm['search_field']);$f++)
                { 
                    if($f == 0) 
                    {
                        $sql .= 'where (upper('.$prm['search_field'][$f].') LIKE \'%' .strtoupper($prm['search_val']). '%\' ';
                    }
                    else 
                    {
                        $sql .=  ' OR upper('.$prm['search_field'][$f].') LIKE \'%' .strtoupper($prm['search_val']). '%\' ';
                    }    
                }
                $sql .= ')';
            }
        }


        if(isset($prm['search_footer']) && count($prm['search_footer'])>0)
        {
            $no=1;
            foreach ($prm['search_footer'] as $key => $value) {
                # code...
                if($no==1)
                {
                    $sql .= ' where (upper('.$key.') LIKE \'%' .strtoupper($value). '%\' ';
                }
                else
                {
                    $sql .= 'or (upper('.$key.') LIKE \'%' .strtoupper($value). '%\' ';
                }

                $no++;
            }
            $sql .= ')';
        }

        if((isset($prm['limit_start']) && $prm['limit_start']!="") && (isset($prm['limit_end']) && $prm['limit_end']!=""))
        {
            $sql .=' limit '.$prm['limit_start'].','.$prm['limit_end'];
        }
        
        $model = $connection->createCommand($sql);
        $rowData = $model->queryAll();
        return $rowData;
    }

    /**
     * @inheritdoc
     * @return RegistrasiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RegistrasiQuery(get_called_class());
    }
}
