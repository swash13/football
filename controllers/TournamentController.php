<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use yii\helpers\Url;

use app\models\TournamentCreate;
use app\models\Tournament;

class TournamentController extends Controller {

    public function actionCreate() {
        $tournamentCreate = new TournamentCreate(Yii::$app->request->post('TournamentCreate'));
        if ($tournament = $tournamentCreate->create()) {
            $this->redirect(Url::toRoute(['tournament/view', 'tournament' => $tournament->id]));
        } else {
            Yii::$app->session->set('tournamentCreate', $tournamentCreate);
            $this->goBack();
        }
    }

    public function actionView($tournament) {
        $tournament = Tournament::findOne($tournament);

        return $this->render('/champ', ['tournament' => $tournament]);
    }
}