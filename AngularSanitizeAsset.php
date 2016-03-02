<?php

namespace maybeworks\angular;

use yii\web\AssetBundle;

class AngularSanitizeAsset extends AssetBundle
{

    public $sourcePath = '@bower/angular-sanitize';

    public $css = [
    ];

    public $js = [
        'angular-sanitize.js',
    ];

    public $depends = [
         'maybeworks\angular\AngularMainAsset'
    ];
}
