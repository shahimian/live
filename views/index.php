<?php
use yii\helpers\Html;
use yii\web\View;
use shahimian\live\LiveAsset;

$liveAsset = LiveAsset::register($this);
$this->registerJs("$('svg.close, #recent-tracks-list').click(function(){ $('div.recent-tracks-list').fadeToggle(); });", View::POS_END);
?>
<audio preload="auto" autoplay>
    <source src="<?= $source ?>">
</audio>
<div class="recent-tracks-list">
    <svg width="0.736in" height="0.722in" class="close">
        <path fill="rgb(221, 221, 221)" d="M41.204,0.013 L51.993,10.589 L11.796,51.987 L1.007,41.411 L41.204,0.013 Z"/>
        <path fill="rgb(221, 221, 221)" d="M0.763,11.368 L11.237,0.632 L52.237,40.632 L41.763,51.368 L0.763,11.368 Z"/>
    </svg>
    <div class="cc_recenttracks_list" data-username="<?= $username ?>">Please wait it is loading...</div>
</div>
<div class="main">
    <div id="<?= $theme ?>">
        <div>
            <div class="title-program">Program name</div>
            <div class="properties">
                <div>
                    <div class="title cc_streaminfo" data-type="song" data-username="<?= $username ?>">Please wait, it is loading...</div>
                    <div>
                        <?= Html::a(Html::img($logo != '' ? $logo : ''), Yii::$app->homeUrl, [
                            'target' => '_blank',
                        ]) ?>
                    </div>
                </div>
                <div class="logo"><?= Html::img(null, [
                    'class' => 'cc_streaminfo',
                    'data-type' => "trackimageurl",
                    'data-username' => $username,
                ]) ?></div>
            </div>
        </div>
    </div>

    <div class="streams">
        <?= Html::a(Html::img($liveAsset->baseUrl . '/images/quick-time.png'), "https://control.internet-radio.com:2199/tunein/$username.qtl") ?>
        <?= Html::a(Html::img($liveAsset->baseUrl . '/images/real-player.png'), "https://control.internet-radio.com:2199/tunein/$username.ram") ?>
        <?= Html::a(Html::img($liveAsset->baseUrl . '/images/winamp.png'), "https://control.internet-radio.com:2199/tunein/$username.pls") ?>
        <?= Html::a(Html::img($liveAsset->baseUrl . '/images/windows-media-player.png'), "https://control.internet-radio.com:2199/tunein/$username.asx") ?>
        <?= Html::a(Html::img($logo != '' ? $logo : ''), Yii::$app->homeUrl, [
            'target' => '_blank',
        ]) ?>
    </div>

</div>
