<?php

namespace maybeworks\angular;

use yii\web\AssetBundle;

class AngularAsset extends AssetBundle
{
    public $depends = [
        'maybeworks\angular\AngularLocaleAsset',
        'maybeworks\angular\AngularRouteAsset',
        'maybeworks\angular\AngularSanitizeAsset',
        'maybeworks\angular\AngularAnimateAsset',
        'maybeworks\angular\AngularToasterAsset',
        'maybeworks\angular\AngularStrapAsset',
    ];
}
