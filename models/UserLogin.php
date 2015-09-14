<?php

namespace app\models;

use yii;
use yii\base\Model;

use app\models\User;

class UserLogin extends Model
{
    public $email;
    public $password;

    private $_user;

    public function getUser() {
        return $this->_user;
    }

    public function rules()
    {
        return [
            [['email', 'password'], 'required', 'message' => 'Введите {attribute}'],
            [['email', 'password'], 'string', 'max' => 100, 'tooLong' => '{attribute} должен быть не более 100 символов'],
            [['email', 'password'], 'existUser']
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'password' => 'Пароль',
        ];
    }

    public function existUser() {
        $this->_user = User::findOne(['email' => $this->email]);
        if (!$this->user || !Yii::$app->security->validatePassword($this->password, $this->user->password)) {
            $this->addError('email', 'Неверный email или пароль');
        }
    }

    public function login()
    {
        if ($this->validate()) {
                Yii::$app->user->login($this->user);
                return true;
        }

        return false;
    }
}
