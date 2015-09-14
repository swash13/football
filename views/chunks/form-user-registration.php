<?php

use yii\widgets\ActiveForm;
use yii\helpers\Url;

$form = ActiveForm::begin([
    'id' => 'userRegistration',
    'action' => Url::toRoute('auth/registration'),
    'method' => 'post',
    'enableClientValidation' => true,
    'enableAjaxValidation' => false,
    'validationUrl' => Url::toRoute('auth/ajax-form-validation'),
    'ajaxDataType' => 'json',
    'ajaxParam' => 'form',
    'errorCssClass' => 'error-field',
    'requiredCssClass' => 'required-field',
    'options' => [
        'class' => 'personForm createForm',
        'enctype' => 'multipart/form-data'
    ],
    'fieldConfig' => [
        'template' => "{label}\n{error}\n{input}",
        'options' => [
            'class' => 'line'
        ]
    ]
]);
?>

<?= $form->field($model, 'avatar')->fileInput() ?>
<?= $form->field($model, 'login', ['enableAjaxValidation' => true])->textInput() ?>
<?= $form->field($model, 'email', ['enableAjaxValidation' => true])->input('email') ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<?= $form->field($model, 'confirm')->passwordInput() ?>

<input type="submit" class="btn1" value="Регистрация" />

<div class="arcticmodal-close"><a href="">Закрыть</a></div>

<div class="clear"></div>

<?php ActiveForm::end(); ?>