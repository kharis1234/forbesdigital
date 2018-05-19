<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property integer $id_kategori
 * @property string $nama_kategori
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kategori','aktif'], 'required'],
            [['nama_kategori'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Id Kategori',
            'nama_kategori' => 'Nama Kategori',
            'aktif' => 'Aktif',
        ];
    }
    public static function getKategoriMenu()
    {
        $ar = [];
        foreach(Kategori::find()->all() as $row)
        {
            $ar[] = ['label' => $row->nama_kategori, 'url' => ['/site/index', 'kategori' => $row->id_kategori]];
        }

        return $ar;
    }
	
	public function search($prm=array())
    {
        //$prm=array();
        $connection = Yii::$app->getDb();
        $sql='SELECT * FROM kategori ';

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
