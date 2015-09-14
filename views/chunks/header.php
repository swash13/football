<?php
use yii\helpers\Url;
use app\components\widgets\Popup;
?>
<?php if (Yii::$app->user->isGuest) { ?>
    <header role="banner">
        <div class="wrapIn">
            <a href="" title="" class="logo"><img src="images/logo.png" /></a>
            <nav>
                <ul>
                    <li class="hasSub"><a href="" title="">Чемпионаты</a>
                        <ul>
                            <li><a href="" title="">Круговой чепионат</a></li>
                            <li><a href="" title="">Групповой чемпионат</a></li>
                            <li><a href="" title="">Турнир на вылет</a></li>
                            <li><a href="" title="">Свой турнир</a></li>
                        </ul>
                    </li>
                    <li><a href="" title="">Новости</a></li>
                    <li><a href="" title="">Правила</a></li>
                </ul>
            </nav>
            <div class="search">
                <input type="text" placeholder="Поиск среди игроков:" />
                <input type="submit" value="" />
            </div>
            <div class="logBtns">
                <a href="" title="" class="btn1" onclick="$('#userRegistrationPopup').arcticmodal(); return false;">Регистрация</a>
                <a href="" title="" class="in" onclick="$('#userLoginPopup').arcticmodal(); return false;">Войти</a>
            </div>
        </div>
    </header>

    <?php $userRegistration = Yii::$app->session->has('userRegistration') ? Yii::$app->session->remove('userRegistration') : new \app\models\UserRegistration(); ?>
    <?= Popup::widget([
        'id' => 'userRegistrationPopup',
        'title' => 'Регистрация',
        'hidden' => !$userRegistration->hasErrors(),
        'content' => '/chunks/form-user-registration',
        'contentParams' => ['model' => $userRegistration]
    ]) ?>

    <?php $userLogin = Yii::$app->session->has('userLogin') ? Yii::$app->session->remove('userLogin') : new \app\models\UserLogin(); ?>
    <?= Popup::widget([
        'id' => 'userLoginPopup',
        'title' => 'Войти',
        'hidden' => !$userLogin->hasErrors(),
        'content' => '/chunks/form-user-login',
        'contentParams' => ['model' => $userLogin]
    ]) ?>
<?php } else { ?>
    <header role="banner" class="subHeader">
        <div class="wrapIn">
            <a href="" title="" class="logo"><img src="images/logo.png"></a>
            <nav>
                <ul>
                    <li><a href="" title="">Сообщения<i>1</i></a></li>
                    <li class="purpose"><a href="" title="">Приглашения<i>1</i></a>
                        <ul>
                            <li>
                                <div class="image"><img src="images/ppl1.png"></div>
                                <div class="text">
                                    <div class="name"><a href="" title="">ExU`Antoxa 1337</a><time> / 22.07.2014 10:39</time></div>
                                    <h3>Приглашение на <b>ТУРНИР+ АНГЛИЯ ЧЕМПИОНШИП ПЛАТФОРМА ПК</b></h3>
                                    <div class="price">Стоимость участия: <span>100 денег</span></div>
                                    <a href="" title="" class="btn2">Принять</a>
                                    <a href="" title="" class="btn1">Отклонить</a>
                                </div>
                            </li>
                            <li>
                                <div class="image"><img src="images/ppl1.png"></div>
                                <div class="text">
                                    <div class="name"><a href="" title="">ExU`Antoxa 1337 my long nickname</a><time> / 22.07.2014 10:32</time></div>
                                    <h3>Приглашение на <b>Чемпионат Четвертой Лиги</b></h3>
                                    <div class="price">Стоимость участия: <span>100 денег</span></div>
                                    <a href="" title="" class="btn2">Принять</a>
                                    <a href="" title="" class="btn1">Отклонить</a>
                                </div>
                            </li>
                            <li>
                                <div class="image"><img src="images/ppl1.png"></div>
                                <div class="text">
                                    <div class="name"><a href="" title="">ExU`Antoxa 1337</a><time> / 22.07.2014 10:31</time></div>
                                    <h3>Приглашение на <b>Чемпионат Четвертой</b></h3>
                                    <div class="price">Стоимость участия: <span>100 денег</span></div>
                                    <a href="" title="" class="btn2">Принять</a>
                                    <a href="" title="" class="btn1">Отклонить</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="search">
                <input type="text" placeholder="Поиск среди игроков:">
                <input type="submit" value="">
            </div>
            <div class="personInfo">
                <p>Привет, <?= Yii::$app->user->identity->login ?></p>
                <div class="money">На счету: <span>14,88 денег</span></div>
            </div>
            <div class="logBtns">
                <a onclick="$('#Popup2').arcticmodal()" title="" class="settingsBtn"></a>
                <a href="" title="" class="faqBtn"></a>
                <a href="<?= Url::toRoute('cabinet/index')?>" title="" class="btn1"><img src="images/ppl1.png" width="26" height="26"> В кабинет</a>
                <a href="<?= Url::toRoute('auth/logout'); ?>" title="" class="in">Выйти</a>
            </div>
        </div>
    </header>
<?php } ?>