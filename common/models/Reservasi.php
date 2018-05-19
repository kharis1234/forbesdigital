<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reservasi".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $company_name
 * @property string $industry
 * @property string $address
 * @property integer $cityid
 * @property string $state
 * @property integer $zipcode
 * @property integer $phone
 * @property integer $fax
 * @property integer $hp
 * @property string $email
 * @property string $job_title
 */
class Reservasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reservasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'company_name', 'industry', 'address', 'cityid', 'state', 'zipcode', 'phone', 'fax', 'hp', 'email', 'job_title'], 'required'],
            [['address'], 'string'],
            [['cityid', 'zipcode', 'phone', 'fax', 'hp'], 'integer'],
            [['firstname', 'lastname', 'state', 'email'], 'string', 'max' => 50],
            [['company_name', 'industry'], 'string', 'max' => 100],
            [['job_title'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'company_name' => 'Company Name',
            'industry' => 'Industry',
            'address' => 'Address',
            'cityid' => 'Cityid',
            'state' => 'State',
            'zipcode' => 'Zipcode',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'hp' => 'Hp',
            'email' => 'Email',
            'job_title' => 'Job Title',
        ];
    }
	
	public function search($prm=array())
    {
        //$prm=array();
        $connection = Yii::$app->getDb();
        $sql='SELECT * FROM reservasi ';

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
