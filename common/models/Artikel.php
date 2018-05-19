<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "artikel".
 *
 * @property integer $id_artikel
 * @property string $tanggal
 * @property string $judul
 * @property string $isi_artikel
 * @property integer $id_kategori
 * @property integer $jumlah_baca
 * @property integer $create_by
 * @property string $gambar
 * @property string $aktif
 */
class Artikel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artikel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'isi_artikel', 'id_kategori'], 'required'],
            ['gambar', 'image', 'minWidth' => 270, 'maxWidth' => 1280, 'extensions' => 'jpg, gif, png', 'maxSize' => 500000, 'tooBig' => 'Ukuran tidak lebih dari 500KB'],
            [['isi_artikel', 'aktif'], 'string'],
            [['id_kategori', 'jumlah_baca', 'create_by'], 'integer'],
            [['judul'], 'string', 'max' => 255],
            [['gambar'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_artikel' => 'Id Artikel',

            'judul' => 'Judul',
            'isi_artikel' => 'Isi Artikel',
            'id_kategori' => 'Kategori',
            'jumlah_baca' => 'Jumlah Baca',
            'create_by' => 'Create By',
            'gambar' => 'Gambar',
            'aktif' => 'Aktif',
        ];
    }



    public function getIdKategori()
    {
        return $this->hasOne(Kategori::className(), ['id_kategori' => 'id_kategori']);
    }



    public function getIdKategori0()
    {
        return $this->hasOne(Kategori::className(), ['id_kategori' => 'id_kategori']);
    }



    public function beforeSave($insert)
    {
        parent::beforeSave($insert);
        if ($this->isNewRecord)
        {
            $this->jumlah_baca = 0;
            $this->tanggal =  date("Y-m-d H:i:s");

        }

        return true;
    }

    public static function topArtikel()
    {
        $model  = self::find()
            ->orderBy('jumlah_baca DESC')
            ->where(['aktif'=>'Y'])
            ->limit(10)
            ->all();
        return $model;
    }
    public static function lastArtikel()
    {
        $model  = self::find()
            ->orderBy('tanggal DESC')
            ->where(['aktif'=>'Y'])
            ->limit(10)
            ->all();
        return $model;
    }

    public static function lastArtikelIndexpage1()
    {
        $model  = self::find()
            ->orderBy('id_artikel DESC')
            ->where(['aktif'=>'Y'])
            ->limit(2)
            ->all();
        return $model;
    }

    public static function lastArtikelIndexpage2()
    {
        $model  = self::find()
            ->orderBy('id_artikel DESC')
            ->where(['aktif'=>'Y'])
            ->limit(2)
            ->offset(2)
            ->all();
        return $model;
    }


}
