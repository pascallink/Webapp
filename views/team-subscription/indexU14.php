<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Turnierübersicht';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscriptions-index">

    <h1><?= Html::encode($this->title) ?></h1>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<td>Team</td>
					<td>Event</td>
					<td>Begin</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($teamSubs as $ts): ?>
				<tr>
					<td><?= $ts->team->name ?></td>
					<td><?= $ts->event->name ?></td>
					<td><?= $ts->event->date_begin ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
			<tr><tr>
			</tfoot>
		</table>
		
		<?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>
