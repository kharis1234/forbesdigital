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
 * @property string $type
 */
class Tentangkami extends \yii\db\ActiveRecord
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
            [['judul', 'isi_halaman', 'gambar', 'show_foto', 'type'], 'required'],
            [['isi_halaman', 'show_foto'], 'string'],
            [['judul', 'gambar'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 10],
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
            'type' => 'Type',
        ];
    }
}
