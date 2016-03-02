<?php

namespace maybeworks\angular;

use yii\web\AssetBundle;

class AngularAnimateAsset extends AssetBundle
{

    public $sourcePath = '@bower/angular-animate';

    public $css = [
    ];

    public $js = [
        'angular-animate.js',
    ];

    public $depends = [
         'maybeworks\angular\AngularMainAsset'
    ];
}
