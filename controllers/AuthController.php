<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;

use yii\widgets\ActiveForm;

use app\models\UserRegistration;
use app\models\UserLogin;

class AuthController extends Controller {
    public function actionRegistration() {
        if (Yii::$app->request->isPost) {
            $model = new UserRegistration(Yii::$app->request->post('UserRegistration'));
            $model->avatar = UploadedFile::getInstance($model, 'avatar');
            if (!$model->registration()) {
                Yii::$app->session->set('userRegistration', $model);
            }
        }

        $this->goBack();
    }

    public function actionLogin() {
        if (Yii::$app->request->isPost) {
            $model = new UserLogin(Yii::$app->request->post('UserLogin'));
            if (!$model->login()) {
                Yii::$app->session->set('userLogin', $model);
            }
        }

        $this->goHome();
    }

    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionAjaxFormValidation() {
        switch (Yii::$app->request->post('form')) {
            case 'userRegistration' : {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate(new UserRegistration(Yii::$app->request->post('UserRegistration')), ['login', 'email']);
            }
        }
    }
}