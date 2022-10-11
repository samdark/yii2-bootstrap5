<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

declare(strict_types=1);

namespace yii\bootstrap5;

use yii\web\AssetBundle;

/**
 * Twitter Bootstrap 5 JavaScript bundle.
 */
class BootstrapPluginAsset extends AssetBundle
{
    /**
     * @inheritDoc
     */
    public $sourcePath = '@bower/bootstrap/dist';
    /**
     * @inheritDoc
     */
    public $js = [
        YII_ENV_PROD ? 'js/bootstrap.bundle.min.js' : 'js/bootstrap.bundle.js'
    ];
    /**
     * @inheritDoc
     */
    public $publishOptions => [
        'only' => ['js/bootstrap.bundle.*']
    ];
    /**
     * @inheritDoc
     */
    public $depends = [
        BootstrapAsset::class
    ];
}
