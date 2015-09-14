<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

/**
 * UploadForm is the model behind the upload form.
 */
class TournamentCreate extends Model
{
    public $name;
    public $type;
    public $level;
    public $gamers_count;
    public $bet;
    public $public;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'type', 'level', 'gamers_count', 'bet'], 'required', 'message' => 'Введите {attribute}'],
            [['name'], 'string', 'max' => 100, 'tooLong' => 'Название турнира не может превышать 100 символов'],
            [['gamers_count', 'bet'], 'number', 'message' => 'Введите число'],
            [['public'], 'compare', 'compareValue' => '1', 'skipOnEmpty' => true],
            [['type'], 'exist', 'targetClass' => 'app\models\TournamentType', 'targetAttribute' => 'id'],
            [['level'], 'exist', 'targetClass' => 'app\models\TournamentLevel', 'targetAttribute' => 'id']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Название турнира',
            'type' => 'Тип турнира',
            'level' => 'Профессиональная категория',
            'gamers_count' => 'Количество игроков',
            'bet' => 'Денежный взнос',
            'public' => 'Приватность'
        ];
    }

    public function create() {
        if ($this->validate()) {
            $tournament = new Tournament($this->toArray());
            if ($tournament->save()) {
                return $tournament;
            }
        }

        return null;
    }
}