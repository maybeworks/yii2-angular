<?php

namespace maybeworks\angular;

use yii\web\AssetBundle;

class AngularAsset extends AssetBundle
{
    public $depends = [
        'maybeworks\angular\AngularMainAsset',
        'maybeworks\angular\AngularI18nAsset',
        'maybeworks\angular\AngularRouteAsset',
        'maybeworks\angular\AngularSanitizeAsset',
        'maybeworks\angular\AngularAnimateAsset',
        'maybeworks\angular\AngularStrapAsset',
    ];
}
