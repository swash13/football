<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

use app\models\TournamentType;
use app\models\TournamentLevel;

$form = ActiveForm::begin([
    'id' => 'createTournamentPopup',
    'action' => Url::toRoute('tournament/create'),
    'method' => 'post',
    'enableClientValidation' => false,
    'errorCssClass' => 'error-field',
    'requiredCssClass' => 'required-field',
    'options' => [
        'class' => 'personForm createForm'
    ],
    'fieldConfig' => [
        'template' => "{label}\n{error}\n{input}",
        'options' => [
            'class' => 'line'
        ]
    ]
]);

?>

<?= $form->field($model, 'name')->textInput() ?>
<?= $form->field($model, 'type')->dropDownList(ArrayHelper::map(TournamentType::find()->orderBy(['id' => 'SORT_ASC'])->all(), 'id', 'title')) ?>
<?= $form->field($model, 'level')->dropDownList(ArrayHelper::map(TournamentLevel::find()->orderBy(['id' => 'SORT_ASC'])->all(), 'id', 'title')) ?>
<?= $form->field($model, 'gamers_count')->textInput() ?>
<?= $form->field($model, 'bet')->textInput() ?>
<?= $form->field($model, 'public')->radioList([1 => 'Открытый для всех', 0 => 'Только моим друзьям']) ?>

<input type="submit" class="btn1" id="send" value="Создать турнир">
<div class="arcticmodal-close"><a href="#">Закрыть</a></div>
<div class="clear"></div>
<?php ActiveForm::end(); ?>










<div style="display:none">
    <div class="modal" id="Popup">
        <div class="title">Создать турнир</div>
        <form id="form" class="personForm createForm">
            <div class="file_upload">
                <input type="file">
                <div class="picture"><span>Выберите картинку для турнира</span></div>
                <mark>Файл не выбран</mark>
            </div>
            <div class="line">
                <label>Название турнира</label>
                <input type="text" value="Турнир+ Англия Чемпионшип Платформа"/>
            </div>
            <div class="line">
                <label>Тип турнира:</label>
                <select>
                    <option>Товарищеский матч</option>
                    <option>Лига чемпионов</option>
                    <option>Матч на вылет</option>
                </select>
            </div>
            <div class="line">
                <label>Профессиональная категория:</label>
                <select>
                    <option>Уровень 1 (10 денег)</option>
                    <option>Уровень 2 (20 денег)</option>
                    <option>Уровень 3 (50 денег)</option>
                    <option>Уровень 4 (100 денег)</option>
                    <option>Уровень 5 (250 денег)</option>
                    <option>VIP уровень (250+ денег)</option>
                </select>
            </div>
            <div class="line">
                <label>Количество игроков</label>
                <div class="spine">
                    <span class="bt minus">minus</span>
                    <input type="text" value="20">
                    <span class="bt plus">plus</span>
                </div>
            </div>
            <div class="line">
                <label>Денежный взнос</label>
                <div class="spine">
                    <span class="bt minus">minus</span>
                    <input type="text" value="0">
                    <span class="bt plus">plus</span>
                </div>
            </div>
            <div class="line">
                <label>Пригласить друзей</label>
                <select data-placeholder="Выберите друзей..." class="chosen-select" multiple>
                    <option value=""></option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                </select>
            </div>
            <div class="line">
                <label>Участие</label>
                <input type="checkbox" name="check" id="check1" value=""/><label class="name" for="check1">Не участвовать в созданном турнире</label>
            </div>
            <div class="line" id="radioBlock1">
                <label>Приватность</label>
                <input type="radio" name="radio" id="radio1" value=""/><label class="name" for="radio1">Открытый для всех</label>
                <input type="radio" name="radio" id="radio2" value=""/><label class="name" for="radio2">Только моим друзьям</label>
            </div>
            <input type="submit" class="btn1" id="send" value="Создать турнир">
            <div class="arcticmodal-close"><a href="#">Закрыть</a></div>
            <div class="clear"></div>
        </form>
    </div>
</div>
