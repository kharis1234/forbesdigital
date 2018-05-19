<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registrasi".
 *
 * @property integer $id
 * @property string $startup_name
 * @property string $reg_buss_name
 * @property string $date_founded_in
 * @property string $category
 * @property string $address
 * @property string $email
 * @property string $website
 * @property string $title
 * @property string $firstname
 * @property string $lastname
 * @property string $date_birth
 * @property string $position
 * @property string $quest1
 * @property string $quest2
 * @property string $quest3
 * @property string $quest4
 * @property string $quest5
 * @property string $quest6
 */
class Registrasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registrasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['startup_name', 'reg_buss_name', 'date_founded_in', 'category', 'address', 'email', 'website', 'title', 'firstname', 'lastname', 'date_birth', 'position', 'quest1', 'quest2', 'quest3', 'quest4', 'quest5', 'quest6'], 'required'],
            [['date_founded_in', 'date_birth'], 'safe'],
            [['address', 'position', 'quest1', 'quest2', 'quest3', 'quest4', 'quest5', 'quest6'], 'string'],
            [['startup_name', 'reg_buss_name'], 'string', 'max' => 100],
            [['category', 'email', 'website', 'firstname', 'lastname'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'startup_name' => 'Startup Name',
            'reg_buss_name' => 'Reg Buss Name',
            'date_founded_in' => 'Date Founded In',
            'category' => 'Category',
            'address' => 'Address',
            'email' => 'Email',
            'website' => 'Website',
            'title' => 'Title',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'date_birth' => 'Date Birth',
            'position' => 'Position',
            'quest1' => 'Quest1',
            'quest2' => 'Quest2',
            'quest3' => 'Quest3',
            'quest4' => 'Quest4',
            'quest5' => 'Quest5',
            'quest6' => 'Quest6',
        ];
    }

    /**
     * @inheritdoc
     * @return RegistrasiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RegistrasiQuery(get_called_class());
    }
}
