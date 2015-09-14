<?php

namespace app\models;

use yii\db\ActiveRecord;

class TournamentType extends ActiveRecord {
    public static function tableName() {
        return 'tournament_type';
    }

    public function rules() {
        return [
            ['title', 'required'],
            ['title', 'string', 'max' => 100]
        ];
    }
}