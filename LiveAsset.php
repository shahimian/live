<?php

namespace shahimian\live;

use yii\web\AssetBundle;

class LiveAsset extends AssetBundle {

    public $sourcePath = '@vendor/shahimian/yii2-live/assets';

    public $css = [
        'styles.css',
    ];

    public $js = [
        'https://control.internet-radio.com:2199/system/streaminfo.js',
        'https://control.internet-radio.com:2199/system/recenttracks.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
