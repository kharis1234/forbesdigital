<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "identitas".
 *
 * @property integer $id_identitas
 * @property string $nama_website
 * @property string $email
 * @property string $alamat
 * @property string $tlp
 * @property string $website
 * @property string $meta_deskripsi
 * @property string $meta_keyword
 * @property string $facebook_id
 * @property string $instagram_id
 * @property string $logo
 * @property string $favico
 */
class Identitas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'identitas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_website', 'email', 'alamat', 'tlp', 'website', 'meta_deskripsi', 'meta_keyword', 'facebook_id', 'instagram_id'], 'required'],
            [['nama_website', 'website', 'facebook_id', 'favico'], 'string', 'max' => 100],
            [['email', 'instagram_id', 'logo'], 'string', 'max' => 50],
            [['alamat', 'tlp'], 'string', 'max' => 200],
            [['meta_deskripsi', 'meta_keyword'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_identitas' => 'Id Identitas',
            'nama_website' => 'Nama Website',
            'email' => 'Email',
            'alamat' => 'Alamat',
            'tlp' => 'Tlp',
            'website' => 'Website',
            'meta_deskripsi' => 'Meta Deskripsi',
            'meta_keyword' => 'Meta Keyword',
            'facebook_id' => 'Facebook ID',
            'instagram_id' => 'Instagram ID',
            'logo' => 'Logo',
            'favico' => 'Favico',
        ];
    }
}
