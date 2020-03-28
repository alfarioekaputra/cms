<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public function init()
    {
        parent::init();
        if (YII_ENV === 'dev') {
            $this->css[] = 'assets/inertia/css/app.css';
            $this->js[] = 'assets/inertia/js/app.js';
        } else {
            $this->css[] = 'assets/inertia/css/app.min.css';
            $this->js[] = 'assets/inertia/js/app.min.js';
        }
    }
}
