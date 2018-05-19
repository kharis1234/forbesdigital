<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "download".
 *
 * @property integer $id_download
 * @property string $judul
 * @property string $nama_file
 * @property integer $hits
 */
class Download extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'download';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'nama_file', 'hits'], 'required'],
            [['hits'], 'integer'],
            [['judul'], 'string', 'max' => 100],
            [['nama_file'], 'string', 'max' => 400],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_download' => 'Id Download',
            'judul' => 'Judul',
            'nama_file' => 'Nama File',
            'hits' => 'Hits',
        ];
    }
}
