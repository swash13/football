<?php

namespace app\models;

use yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface {
    public static function tableName() {
        return 'user';
    }

    public function rules() {
        return [
            [['login', 'email', 'password'], 'required'],
            [['login', 'email', 'password'], 'string', 'max' => 100],
            [['login', 'email'], 'unique'],
            [['avatar'], 'string'],
            [['avatar'], 'validateAvatar']
        ];
    }

    public function attributeLabels() {
        return [
            'login' => 'Логин',
            'email' => 'Email',
            'password' => 'Пароль'
        ];
    }

    public static function findIdentity($id) {
        return self::findOne($id);
    }

    public function getId() {
        return $this->id;
    }

    public static function findIdentityByAccessToken($token, $type = null) {}

    public function getAuthKey() {}

    public function validateAuthKey($authKey) {}

    public function validateAvatar() {
        if (!file_exists(Yii::$app->basePath . '/web/uploads/' . $this->avatar . '.png')) {
            $this->addError('avatar', 'Avatar image file not exists');
        }
    }
}