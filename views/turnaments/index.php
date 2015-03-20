<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Übersicht Turniere';
$this->params['breadcrumbs'][] = $this->title;

Yii::$app->formatter->locale = 'de-DE';

?>
<div class="subscriptions-index">

    <h1><?= Html::encode($this->title) ?> (<?= sizeof($events) ?>)</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<td>#</td>
					<td>Datum</td>
					<td>Turnier </td>
					<td>Ausrichter</td>
				</tr>
			</thead>
			<tbody>
				<?php 
					$isToday = false; 
					$isArchive = false; 
					$current = null;
					$current_compare = null;
					$today = date('Ymd', time());
					$today_string = date('Y-m-d');
				?>
				<?php foreach ($events as $event): ?>
					<?php
						$current = $event->date_begin;
						$current_compare = Yii::$app->formatter->asDate($current, 'YMMdd');
					?>
					<?php	if($current != null && $current_compare < $today && !$isToday) : ?>
						<?php $isToday = true; ?>
				<tr>
					<td colspan="5" class="success"><center><b><?= Yii::$app->formatter->asDate($today_string, 'full') ?></b></center></td>
				</tr>
				
					<?php endif; ?>
					
				<tr>
					<td><?= $event->id ?></td>
					<td><?= Yii::$app->formatter->asDate($current, 'full') ?></td>
					<td><?= $event->name ?> </td>
					<td><?= $event->club->name ?></td>
				</tr>
					
				<?php endforeach; ?>
				
				<?php	if(!$isToday) : ?>
				<tr>
					<td colspan="5" class="success"><center><b><?= Yii::$app->formatter->asDate($today, 'full') ?></b></center></td>
				</tr>
				<?php endif; ?>
				
				
			</tbody>
			<tfoot>
			<tr><tr>
			</tfoot>
		</table>
		
		<?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>
