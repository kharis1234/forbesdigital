<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "daftarharga".
 *
 * @property integer $id_daftarharga
 * @property string $judul
 * @property string $jenis
 * @property string $pekerjaan
 * @property string $jenisfreon
 * @property string $qty
 * @property string $harga
 * @property string $aktif
 */
class Daftarharga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daftarharga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'jenis', 'pekerjaan', 'jenisfreon', 'qty', 'harga'], 'required'],
            [['aktif'], 'string'],
            [['judul', 'jenis', 'pekerjaan', 'jenisfreon', 'harga'], 'string', 'max' => 100],
            [['qty'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_daftarharga' => 'Id Daftarharga',
            'judul' => 'Judul',
            'jenis' => 'Jenis',
            'pekerjaan' => 'Pekerjaan',
            'jenisfreon' => 'Jenis freon',
            'qty' => 'Qty',
            'harga' => 'Harga',
            'aktif' => 'Aktif',
        ];
    }
}
