<?php

namespace app\models;

use yii\db\ActiveRecord;

use yii\helpers\ArrayHelper;

class Tournament extends ActiveRecord {
    public static function tableName() {
        return 'tournament';
    }

    public function rules() {
        return [
            [['name', 'type', 'level', 'gamers_count', 'bet'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['gamers_count', 'bet'], 'number'],
            [['type'], 'exist', 'targetClass' => 'app\models\TournamentType', 'targetAttribute' => 'id'],
            [['level'], 'exist', 'targetClass' => 'app\models\TournamentLevel', 'targetAttribute' => 'id'],
            [['public'], 'compare', 'compareValue' => '1', 'skipOnEmpty' => true]
        ];
    }
}