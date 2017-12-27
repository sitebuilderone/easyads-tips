<?php
use app\components\AdsListWidget;
use app\assets\AppAsset;

AppAsset::register($this);
$this->title = html_encode(options()->get('app.settings.common.siteName', 'EasyAds'));
?>

<section class="main-search">
    <?= $this->render('_homepage-search', [
            'searchModel' => $searchModel,
    ]); ?>

    <?= $this->render('_categories', [
        'categories' => $categories
    ]); ?>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php app()->trigger('home.under.categories', new \app\yii\base\Event()); ?>
        </div>
    </div>
</div>

<?= $promoted = AdsListWidget::widget(['listType' => AdsListWidget::LIST_TYPE_PROMOTED, 'title' => t('app', 'Promoted ads'), 'quantity' => options()->get('app.settings.common.homePromotedNumber', 8)]) ?>
<?php
    if (!empty($promoted)) {
        echo AdsListWidget::widget(['listType' => AdsListWidget::LIST_TYPE_NEW, 'title' => t('app', 'New ads'), 'emptyTemplate' => false, 'quantity' => options()->get('app.settings.common.homeNewNumber', 8)]);
    } else {
        echo AdsListWidget::widget(['listType' => AdsListWidget::LIST_TYPE_NEW, 'title' => t('app', 'New ads'), 'emptyTemplate' => true, 'quantity' => options()->get('app.settings.common.homeNewNumber', 8)]);
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php app()->trigger('home.above.footer', new \app\yii\base\Event()); ?>
        </div>
    </div>
</div>
