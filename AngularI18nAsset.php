<?php

namespace maybeworks\angular;

use yii\web\AssetBundle;

class AngularI18nAsset extends AssetBundle
{

    public $sourcePath = '@bower/angular-i18n';

    public $css = [
    ];

    public $js = [
        'angular-locale_ru.js',
    ];

    public $depends = [
        'maybeworks\angular\AngularMainAsset'
    ];
}
