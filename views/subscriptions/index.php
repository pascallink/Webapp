<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubscriptionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eintragungen';
$this->params['breadcrumbs'][] = $this->title;

Yii::$app->formatter->locale = 'de-DE';
?>
<div class="subscriptions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Subscriptions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
				'filterModel' => $searchModel,
				'filterRowOptions' => ['class' => 'filterRow'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
						[                     
								'label' => 'ID',
								'value' => 'id',
								'enableSorting' => '1',
								'options' =>  ['width' => '75'],
								'filter' =>  Html::activeTextInput($searchModel, 'id', ['class' => 'form-control input-sm', 'placeholder' => 'ID']),
								
						],
						[                     // 'date',
								'label' => 'Datum',
								'value' => 'date',
								'format' =>  ['date', 'php:d. M Y - H:i:s'],
						],
						
						
						[                     
								'label' => 'Team',
								//'value' => 'team.short',
								'value'=>function($searchModel,$row){
									
									return $searchModel->team->name.Html::beginTag('small').' ('.$searchModel->team->id.')'.Html::endTag('small');
								},
								'format' => 'html',
								'filter' =>  Html::activeTextInput($searchModel, 'team_id', ['class' => 'form-control input-sm', 'placeholder' => 'Team ID']),

						],
						
						[                     
								'label' => 'Veranstaltung',
								
								'value'=>function($searchModel,$row){
									
									return $searchModel->event->name.Html::beginTag('small').' ('.$searchModel->event->id.')'.Html::endTag('small');
								},
								'format' => 'html',
								'filter' =>  Html::activeTextInput($searchModel, 'event_id', ['class' => 'form-control input-sm', 'placeholder' => 'Event ID']),
						],
						
						[                     
								'label' => 'Status',
								
								'value'=>function($searchModel,$row){
									
									return $searchModel->state->name.Html::beginTag('small').' ('.$searchModel->state->id.')'.Html::endTag('small');
								},
								'format' => 'html',
								'filter' =>  Html::activeTextInput($searchModel, 'state_id', ['class' => 'form-control input-sm', 'placeholder' => 'Status ID']),
						],
						

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
