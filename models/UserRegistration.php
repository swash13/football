<?php

namespace app\models;

use yii;
use yii\base\Model;

use app\models\User;

class UserRegistration extends Model {
    public $avatar;
    public $login;
    public $email;
    public $password;
    public $confirm;

    public function rules () {
        return [
            [['login', 'email', 'password', 'confirm'], 'required', 'message' => 'Введите {attribute}'],
            [['login', 'email', 'password', 'confirm'], 'string', 'max' => 100, 'tooLong' => '{attribute} должен быть не более 100 символов'],
            [['login', 'email'], 'unique', 'targetClass' => 'app\models\User', 'message' => 'Этот {attribute} уже занят'],
            [['password'], 'compare', 'compareAttribute' => 'confirm', 'message' => 'Пароли не совпадают'],
            [['avatar'], 'image', 'mimeTypes' => 'image/png, image/jpg, image/jpeg', 'maxSize' => 2097152, 'wrongMimeType' => 'Файл должен быть картинкой', 'tooBig' => 'Допустимый размер картинки не более 2 мегабайт', 'notImage' => 'Файл должен быть картинкой']
        ];
    }

    public function attributeLabels() {
        return [
            'avatar' => 'Загрузить аватар',
            'login' => 'Логин',
            'email' => 'Email',
            'password' => 'Пароль',
            'confirm' => 'Подтверждение пароля'
        ];
    }

    public function registration() {
        if ($this->validate()) {
            $user = new User();
            $user->login = $this->login;
            $user->email = $this->email;
            $user->password = Yii::$app->security->generatePasswordHash($this->password);

            $fileName = uniqid();
            $this->avatar->saveAs(Yii::$app->basePath . '/web/uploads/' . $fileName);

            $image = Yii::$app->image->load(Yii::$app->basePath . '/web/uploads/' . $fileName);
            $image->resize(200, 200, yii\image\drivers\Kohana_Image::ADAPT);
            $image->save(Yii::$app->basePath . '/web/uploads/' . $fileName . '.png');
            unlink(Yii::$app->basePath . '/web/uploads/' . $fileName);

            $user->avatar = $fileName;
            if ($user->save()) {
                Yii::$app->user->login($user);
                return true;
            }
        }

        return false;
    }
}