<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Turnierplaner',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    
												
										[
											'label' => 'Turnierübersicht',
											'items' => [
												['label' => 'TSG Mainz-Kastel', 'url' => ['/team-subscription', 'team_id' => '', 'club_id' => '1']],
												['label' => 'U14', 'url' => ['/team-subscription',  'team_id' => '1', 'club_id' => '1']],
												['label' => 'U7', 'url' => ['/team-subscription', 'team_id' => '12', 'club_id' => '1' ]],
											],
										],
										
										[
											'label' => 'Admin',
											'items' => [
												['label' => 'Vereine', 'url' => ['/clubs/index']],
												['label' => 'Teams', 'url' => ['/teams/index']],
												['label' => 'Events', 'url' => ['/events/index']],
												['label' => 'Adressen', 'url' => ['/adresses/index']],
												['label' => 'Eintragung', 'url' => ['/subscriptions/index']],
												['label' => 'Status', 'url' => ['/state/index']],
											],
										],
                    
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; Turnierplaner <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
