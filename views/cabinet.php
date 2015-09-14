<?php
use app\components\widgets\Popup;
$this->title = 'Мой кабинет';
?>
<main role="main">
<div class="mainContent subPages cabinet">
<div class="wrapIn">
<div class="headBlock">
    <div class="left">
        <div class="breadcrumbs">
            <a href="">Sport.com.ua</a><a href="" title="">Мой кабинет</a>
        </div>
        <div class="title">Мой кабинет</div>
    </div>
    <a href="" title="" class="btn2" id="registrate">Выбрать турнир</a>
    <a onclick="$('#tournamentCreatePopup').arcticmodal(); return false;" title="" class="btn1">Создать турнир</a>
    <div class="clear"></div>
</div>
<div class="leftPart">
<div class="sliderBlock">
    <h3>Награды</h3>
    <div class="cups"><span class="gold">54</span><span class="silver">9</span><span class="bronze">23</span></div>
    <div class="frame" id="basic">
        <ul>
            <li class="silver">
                <span>20<sup>pts</sup></span>
                <div class="cup"></div>
                <a href="">Турнир+ Англия Чемпионшип Платформа Пк</a>
                <small>Вчера, 22:45</small>
            </li>
            <li class="gold">
                <span>35<sup>pts</sup></span>
                <div class="cup"></div>
                <a href="">Чемпионат Четвертой Лиги</a>
                <small>Вчера, 22:45</small>
            </li>
            <li class="bronze">
                <span>15<sup>pts</sup></span>
                <div class="cup"></div>
                <a href="">Чемпионат Четвертой Лиги</a>
                <small>Вчера, 22:45</small>
            </li>
            <li>
                <span>0<sup>pts</sup></span>
                <div class="cup">401</div>
                <a href="">Чемпионат Четвертой Лиги</a>
                <small>Вчера, 22:45</small>
            </li>
            <li>
                <span>1<sup>pts</sup></span>
                <div class="cup">8</div>
                <a href="">Турнир+ Англия Чемпионшип Платформа Пк</a>
                <small>Вчера, 22:45</small>
            </li>
            <li>
                <span>2<sup>pts</sup></span>
                <div class="cup">5</div>
                <a href="">Турнир+ Англия Чемпионшип Платформа Пк</a>
                <small>Вчера, 22:45</small>
            </li>
            <li>
                <span>0<sup>pts</sup></span>
                <div class="cup">401</div>
                <a href="">Чемпионат Четвертой Лиги</a>
                <small>Вчера, 22:45</small>
            </li>
            <li>
                <span>1<sup>pts</sup></span>
                <div class="cup">8</div>
                <a href="">Турнир+ Англия Чемпионшип Платформа Пк</a>
                <small>Вчера, 22:45</small>
            </li>
            <li>
                <span>2<sup>pts</sup></span>
                <div class="cup">5</div>
                <a href="">Турнир+ Англия Чемпионшип Платформа Пк</a>
                <small>Вчера, 22:45</small>
            </li>
        </ul>
    </div>
    <div class="scrollbar">
        <div class="handle">
            <div class="mousearea"></div>
        </div>
    </div>
</div>
<div class="statistic">
<h3>Общая статистика</h3>
<div class="groupTable">
    <table>
        <thead>
        <tr>
            <th><b>игры</b></th>
            <th>всего</th>
            <th>турниры</th>
            <th>товы</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Всего</td>
            <td>1536</td>
            <td>1514</td>
            <td>22</td>
        </tr>
        <tr>
            <td>Побед</td>
            <td>1028</td>
            <td>1015</td>
            <td>13</td>
        </tr>
        <tr>
            <td>Поражений</td>
            <td>254</td>
            <td>250</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Ничьих</td>
            <td>254</td>
            <td>249</td>
            <td>5</td>
        </tr>
        </tbody>
    </table>
</div>
<div class="groupTable last">
    <table>
        <thead>
        <tr>
            <th><b>голы</b></th>
            <th>всего</th>
            <th>турниры</th>
            <th>товы</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Забито</td>
            <td>3855</td>
            <td>1514</td>
            <td>22</td>
        </tr>
        <tr>
            <td>Пропущено</td>
            <td>1668</td>
            <td>1015</td>
            <td>13</td>
        </tr>
        <tr>
            <td>Забито за игру</td>
            <td>2,51</td>
            <td>2,50</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Пропущено за игру</td>
            <td>2,54</td>
            <td>2,49</td>
            <td>5</td>
        </tr>
        </tbody>
    </table>
</div>
<h3>Статистика в текущих турнирах</h3>
<h4>Турнир четырех</h4>
<div class="tabs">
									<span id="wrapper" class="tab1">
										<a class="tab1 active"><span>Группы</span></a>
										<a class="tab2"><span>1/16</span></a>
										<a class="tab3"><span>1/8</span></a>
										<a class="tab4"><span>1/4</span></a>
										<a class="tab5"><span>1/2</span></a>
										<a class="last tab6"><span>Финал</span></a>
										<span class="clear"></span>
										<div class="tab1">
                                        <div class="groupTable">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Группа <b>A</b></th>
                                                    <th>И</th>
                                                    <th>В</th>
                                                    <th>Н</th>
                                                    <th>П</th>
                                                    <th>Г</th>
                                                    <th>Р</th>
                                                    <th>О</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>7:7</td>
                                                    <td>0</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/flag2.png" /><a href="" title="" class="online"><img src="images/ppl1.png" /><p>Spark52</p></a></td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>6:4</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/flag3.png" /><a href="" title=""><img src="images/ppl1.png" /><p>Anton</p></a></td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>5:3</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                    <td>4:8</td>
                                                    <td>-4</td>
                                                    <td>3</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="groupTable last">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Группа <b>B</b></th>
                                                    <th>И</th>
                                                    <th>В</th>
                                                    <th>Н</th>
                                                    <th>П</th>
                                                    <th>Г</th>
                                                    <th>Р</th>
                                                    <th>О</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>7:7</td>
                                                    <td>0</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/flag2.png" /><a href="" title="" class="online"><img src="images/ppl1.png" /><p>Spark52</p></a></td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>6:4</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/flag3.png" /><a href="" title=""><img src="images/ppl1.png" /><p>Anton</p></a></td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>5:3</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                    <td>4:8</td>
                                                    <td>-4</td>
                                                    <td>3</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="groupTable">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Группа <b>C</b></th>
                                                    <th>И</th>
                                                    <th>В</th>
                                                    <th>Н</th>
                                                    <th>П</th>
                                                    <th>Г</th>
                                                    <th>Р</th>
                                                    <th>О</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>7:7</td>
                                                    <td>0</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/flag2.png" /><a href="" title="" class="online"><img src="images/ppl1.png" /><p>Spark52</p></a></td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>6:4</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/flag3.png" /><a href="" title=""><img src="images/ppl1.png" /><p>Anton</p></a></td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>5:3</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                    <td>4:8</td>
                                                    <td>-4</td>
                                                    <td>3</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="groupTable last">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Группа <b>D</b></th>
                                                    <th>И</th>
                                                    <th>В</th>
                                                    <th>Н</th>
                                                    <th>П</th>
                                                    <th>Г</th>
                                                    <th>Р</th>
                                                    <th>О</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>7:7</td>
                                                    <td>0</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/flag2.png" /><a href="" title="" class="online"><img src="images/ppl1.png" /><p>Spark52</p></a></td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>6:4</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/flag3.png" /><a href="" title=""><img src="images/ppl1.png" /><p>Anton</p></a></td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>5:3</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                    <td>4:8</td>
                                                    <td>-4</td>
                                                    <td>3</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
										<div class="tab2">
                                            <div class="groupTable playOff">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="groupTable playOff last">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><p>Spark52</p><img src="images/ppl2.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="groupTable playOff">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="groupTable playOff last">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><p>Spark52</p><img src="images/ppl2.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="groupTable playOff">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="groupTable playOff last">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><p>Spark52</p><img src="images/ppl2.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="groupTable playOff">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="groupTable playOff last">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><p>Spark52</p><img src="images/ppl2.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
										<div class="tab3">
                                            <div class="groupTable playOff">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="groupTable playOff last">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><p>Spark52</p><img src="images/ppl2.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="groupTable playOff">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="groupTable playOff last">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><p>Spark52</p><img src="images/ppl2.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
										<div class="tab4">
                                            <div class="groupTable playOff">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="groupTable playOff last">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><p>Spark52</p><img src="images/ppl2.png" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><img src="images/ppl2.png" /><p>Spark52</p></a></td>
                                                        <td>0:1</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
										<div class="tab5">
                                            <div class="groupTable playOff">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="groupTable playOff last">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag2.png" /><a href="" title=""><p>Spark52</p><img src="images/ppl2.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
										<div class="tab6">
                                            <div class="groupTable playOff">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
                                                        <td>4:2</td>
                                                        <td><img src="images/flag1.png" /><a href="" title=""><p>ExU`Antoxa 1337</p><img src="images/ppl1.png" /></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
									</span>
</div>
<h4>Чемпионат Украины 2014-2015</h4>
<div class="groupTable championship">
<table>
<thead>
<tr>
    <th>#</th>
    <th>Команда</th>
    <th>И</th>
    <th>В</th>
    <th>Н</th>
    <th>П</th>
    <th>Г</th>
    <th>Р</th>
    <th>О</th>
</tr>
</thead>
<tbody>
<tr>
    <td>1</td>
    <td><img src="images/flag1.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>2</td>
    <td>0</td>
    <td>0</td>
    <td>7:7</td>
    <td>0</td>
    <td>6</td>
</tr>
<tr>
    <td>2</td>
    <td><img src="images/flag2.png" /><a href="" title="" class="online"><img src="images/ppl1.png" /><p>Spark52</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>6:4</td>
    <td>2</td>
    <td>4</td>
</tr>
<tr>
    <td>3</td>
    <td><img src="images/flag3.png" /><a href="" title=""><img src="images/ppl1.png" /><p>Anton</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>5:3</td>
    <td>2</td>
    <td>4</td>
</tr>
<tr>
    <td>4</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>5</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>6</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>7</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>8</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>9</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>10</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>11</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>12</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>13</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>14</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>15</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>16</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>17</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>18</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>19</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
<tr>
    <td>20</td>
    <td><img src="images/flag4.png" /><a href="" title=""><img src="images/ppl1.png" /><p>ExU`Antoxa 1337</p></a></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>4:8</td>
    <td>-4</td>
    <td>3</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="statistic created">
<h3>Заполнение результатов созданных турниров</h3>
<h4>Турнир четырех</h4>
<div class="tabs">
									<span id="wrapper2" class="tab1">
										<a class="tab1 active"><span>Группы</span></a>
										<a class="tab2"><span>1/16</span></a>
										<a class="tab3"><span>1/8</span></a>
										<a class="tab4"><span>1/4</span></a>
										<a class="tab5"><span>1/2</span></a>
										<a class="last tab6"><span>Финал</span></a>
										<span class="clear"></span>
										<div class="tab1">
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>Группа А</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>Группа А</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>Группа А</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>Группа А</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                        </div>
										<div class="tab2">
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>1/16 финала</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>1/16 финала</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>1/16 финала</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                        </div>
										<div class="tab3">
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>1/8 финала</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>1/8 финала</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                        </div>
										<div class="tab4">
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>1/4 финала</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>1/4 финала</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                        </div>
										<div class="tab5">
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>Полуфинал</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>1/8 финала</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                        </div>
										<div class="tab6">
                                            <div class="item">
                                                <div class="name"><time><a href="" title="">назначить дату</a></time><span>Финал</span></div>
                                                <div class="in">
                                                    <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                                                    <div class="score"><input type="text" /> : <input type="text" /></div>
                                                    <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
                                                </div>
                                                <div class="btns">
                                                    <a href="" title="" class="btn2">Применить</a>
                                                    <a href="" title="" class="btn1">Редактировать</a>
                                                </div>
                                            </div>
                                        </div>
										<a href="" title="" class="delete">удалить турнир</a>
									</span>
</div>
<h4>Чемпионат Украины 2014-2015</h4>
<div class="tabs">
    <div class="groupTable championship">
        <div class="item">
            <div class="name"><time><a href="" title="">назначить дату</a></time><span>Круг 1, Тур 1</span></div>
            <div class="in">
                <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                <div class="score"><input type="text" /> : <input type="text" /></div>
                <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
            </div>
            <div class="btns">
                <a href="" title="" class="btn2">Применить</a>
                <a href="" title="" class="btn1">Редактировать</a>
            </div>
        </div>
        <div class="item">
            <div class="name"><time><a href="" title="">назначить дату</a></time><span>Круг 2, Тур 16</span></div>
            <div class="in">
                <a href="" class="ppl1"><img src="images/ppl1.png" /><p>Spark52Rus</p><br/><small>EAID: 42638562375</small></a>
                <div class="score"><input type="text" /> : <input type="text" /></div>
                <a href="" class="ppl2"><img src="images/ppl2.png" /><p>Agent23Rus</p><br/><small>EAID: 42638562375</small></a>
            </div>
            <div class="btns">
                <a href="" title="" class="btn2">Применить</a>
                <a href="" title="" class="btn1">Редактировать</a>
            </div>
        </div>
        <a href="" title="" class="delete">удалить турнир</a>
        <a href="" title="" class="btn2 start">Завершить соревнование</a>
    </div>
</div>
<h4>Лига чемпионов (участников 5/16)</h4>
<div class="tabs">
    <div class="groupTable championship registration">
        <div class="item">
            <div class="name"><span>Вася Пупкин</span></div>
            <div class="btns">
                <a href="" title="" class="btn2">Принять</a>
                <a href="" title="" class="btn1">Отклонить</a>
            </div>
        </div>
        <div class="item">
            <div class="name"><span>Вася Пупкин</span></div>
            <div class="btns">
                <a href="" title="" class="btn2">Принять</a>
                <a href="" title="" class="btn1">Отклонить</a>
            </div>
        </div>
        <div class="item">
            <div class="name"><span>Вася Пупкин</span></div>
            <div class="btns">
                <a href="" title="" class="btn2">Принять</a>
                <a href="" title="" class="btn1">Отклонить</a>
            </div>
        </div>
        <div class="item">
            <div class="name"><span>Вася Пупкин</span></div>
            <div class="btns">
                <a href="" title="" class="btn2">Принять</a>
                <a href="" title="" class="btn1">Отклонить</a>
            </div>
        </div>
        <div class="item">
            <div class="name"><span>Вася Пупкин</span></div>
            <div class="btns">
                <span>Игрок принят!</span>
                <a href="" title="" class="btn1">Отклонить</a>
            </div>
        </div>
        <a href="" title="" class="btn2 start">Начать соревнование</a>
    </div>
    <a href="" title="" class="delete">удалить турнир</a>
</div>
</div>
</div>
<div class="rightPart">
    <div class="information" id="information">
        <div class="place">7 место</div>
        <div class="infoBlock">
            <div class="avatar"><img src="images/avatar.png" /></div>
            <p class="name">ExU`Antoxa 1337 my long nickname</p>
            <div class="moneyBlock">
                <p>5 417 <small>денег</small></p>
                <a href="" title="" class="btn1">Пополнить</a>
            </div>
        </div>
    </div>
    <div class="personForm regForm" id="regForm">
        <div class="line">
            <label>Выберите тип турнира:</label>
            <select>
                <option>Товарищеский матч</option>
                <option>Лига чемпионов</option>
                <option>Матч на вылет</option>
            </select>
        </div>
        <div class="line">
            <label>Выберите профессиональную категорию:</label>
            <select>
                <option>Уровень 1 (10 денег)</option>
                <option>Уровень 2 (20 денег)</option>
                <option>Уровень 3 (50 денег)</option>
                <option>Уровень 4 (100 денег)</option>
                <option>Уровень 5 (250 денег)</option>
                <option>VIP уровень (250+ денег)</option>
            </select>
        </div>
        <a href="" title="" class="btn1">Случайный турнир</a>
        <a href="" title="" class="btn1">Выбрать</a>
        <a href="" title="" class="cancel" id="cancel">Отмена</a>
    </div>
    <div class="allChamps messages">
        <div class="title">Мои друзья</div>
        <div class="scroll-pane">
            <ul>
                <li class="online"><a href="" title="">ExU`Antoxa 1337<span>+1</span></a></li>
                <li class="online"><a href="" title="">Вася</a></li>
                <li><a href="" title="">Петрович<span>+1</span></a></li>
                <li><a href="" title="">Вася</a></li>
                <li><a href="" title="">Петрович<span>+1</span></a></li>
                <li><a href="" title="">Вася</a></li>
                <li><a href="" title="">Петрович<span>+1</span></a></li>
                <li><a href="" title="">Вася, Петрович, Семеныч, Иваныч<span>+1</span></a></li>
                <li><a href="" title="">Петрович<span>+1</span></a></li>
                <li><a href="" title="">Петрович<span>+1</span></a></li>
                <li><a href="" title="">Петрович<span>+1</span></a></li>
                <li><a href="" title="">Петрович<span>+1</span></a></li>
                <li><a href="" title="">Петрович<span>+1</span></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="clear"></div>
</div>
</div>
</main>

<?php $tournamentCreate = Yii::$app->session->has('tournamentCreate') ? Yii::$app->session->remove('tournamentCreate') : new \app\models\TournamentCreate(); ?>
<?= Popup::widget([
    'id' => 'tournamentCreatePopup',
    'title' => 'Создать турнир',
    'hidden' => !$tournamentCreate->hasErrors(),
    'content' => '/chunks/form-tournament-create',
    'contentParams' => ['model' => $tournamentCreate]
]) ?>
