<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/global.css',
    ];
    public $js = [
        'js/sly.js',
        'js/jquery.arcticmodal-0.2.min.js',
        'js/chosen.jquery.min.js',
        'js/jquery.jscrollpane.min.js',
        'js/jquery.mousewheel.js',
        'js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
    public $jsoptions = [
        'position' => View::POS_END
    ];
}
