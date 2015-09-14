<?php

use yii\widgets\ActiveForm;
use yii\helpers\Url;

$form = ActiveForm::begin([
    'id' => 'userLogin',
    'action' => Url::toRoute('auth/login'),
    'method' => 'post',
    'enableClientValidation' => true,
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

<?= $form->field($model, 'email')->input('email') ?>
<?= $form->field($model, 'password')->passwordInput() ?>

    <input type="submit" class="btn1" value="Войти" />

    <div class="arcticmodal-close"><a href="">Закрыть</a></div>

    <div class="clear"></div>

<?php ActiveForm::end(); ?>