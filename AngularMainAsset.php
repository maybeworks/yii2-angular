<?php

namespace maybeworks\angular;

use yii\web\AssetBundle;

class AngularMainAsset extends AssetBundle
{

    public $sourcePath = '@bower/angular';

    public $css = [
    ];

    public $js = [
        'angular.js',
    ];

    public $depends = [
    ];
}
