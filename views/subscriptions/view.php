<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Subscriptions */

$name = $model->team->name;
$this->title = $name;
$this->params['breadcrumbs'][] = ['label' => 'Subscriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscriptions-view">


    <h3><?= $model->id ?>: <?= $name ?> <small>(Jahrgang: <?= Html::encode($model->team->year) ?>)</small></h3>
		
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
						[                     //'event_id',
								'label' => 'Veranstaltung',
								'value' => $model->event->name,
						],
            'date',
						
						[                     //'state_id',
								'label' => 'Status',
								'value' => $model->state->name,
						],
        ],
    ]) ?>

</div>
