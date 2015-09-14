<?php
namespace app\controllers;

use app\models\UserRegistration;
use app\models\UserLogin;
use Yii;
use yii\web\Controller;

class MainController extends Controller {
    public function actionIndex() {
        return $this->render('/index');
    }
}