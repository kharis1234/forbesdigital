<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "halamanstatis".
 *
 * @property integer $id_halaman
 * @property string $judul
 * @property string $isi_halaman
 * @property string $gambar
 * @property string $show_foto
 */
class Halamanstatis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'halamanstatis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'isi_halaman', 'gambar', 'show_foto'], 'required'],
            [['isi_halaman', 'show_foto'], 'string'],
            [['judul', 'gambar'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_halaman' => 'Id Halaman',
            'judul' => 'Judul',
            'isi_halaman' => 'Isi Halaman',
            'gambar' => 'Gambar',
            'show_foto' => 'Show Foto',
        ];
    }
	
	public function search($prm=array())
    {
        //$prm=array();
        $connection = Yii::$app->getDb();
        $sql='SELECT * FROM halamanstatis ';

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
