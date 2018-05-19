<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property integer $id_gallery
 * @property string $jdl_gallery
 * @property string $gbr_gallery
 * @property string $aktif
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jdl_gallery'], 'required'],
            [['aktif'], 'string'],
            ['gbr_gallery', 'image', 'minWidth' => 350, 'maxWidth' => 1000, 'extensions' => 'jpg, gif, png', 'maxSize' => 500000, 'tooBig' => 'Ukuran tidak lebih dari 500KB'],
            [['jdl_gallery', 'gbr_gallery'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_gallery' => 'Id',
            'jdl_gallery' => 'Judul',
            'gbr_gallery' => 'Gambar',
            'aktif' => 'Aktif',
        ];
    }
}
