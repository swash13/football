<?php

namespace app\models;

use yii\db\ActiveRecord;

class TournamentLevel extends ActiveRecord {
    public static function tableName() {
        return 'tournament_level';
    }

    public function rules() {
        return [
            ['title', 'required'],
            ['title', 'string', 'max' => 100]
        ];
    }
}