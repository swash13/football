<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use yii\helpers\ArrayHelper;

use app\models\TournamentType;


class CabinetController extends Controller {
    public function actionIndex() {
        return $this->render('/cabinet');
    }
}
