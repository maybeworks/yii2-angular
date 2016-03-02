<?php

namespace maybeworks\angular;

use yii\web\AssetBundle;

class AngularRouteAsset extends AssetBundle
{

    public $sourcePath = '@bower/angular-route';

    public $css = [
    ];

    public $js = [
        'angular-route.js',
    ];

    public $depends = [
        'maybeworks\angular\AngularMainAsset'
    ];
}
