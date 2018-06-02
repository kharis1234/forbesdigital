<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "footer".
 *
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $phone
 * @property string $email
 * @property integer $ordercol
 */
class Footer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'footer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'title', 'phone', 'email', 'ordercol'], 'required'],
            [['ordercol'], 'integer'],
            [['name', 'title'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'phone' => 'Phone',
            'email' => 'Email',
            'ordercol' => 'Ordercol',
        ];
    }

    /**
     * @inheritdoc
     * @return FooterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FooterQuery(get_called_class());
    }
	
	public function search($prm=array())
    {
        //$prm=array();
        $connection = Yii::$app->getDb();
        $sql='SELECT * FROM footer ';

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
}
