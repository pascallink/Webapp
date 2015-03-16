<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Turnierübersicht';
$this->params['breadcrumbs'][] = $this->title;

Yii::$app->formatter->locale = 'de-DE';

?>
<div class="subscriptions-index">

    <h1><?= Html::encode($this->title) ?> (<?= sizeof($teamSubs) ?>)
			<?php if(sizeof($teamSubs) > 0) : ?>
				<?php if($selectedTeam > 0 && !empty($teamSubs[0]->team->short)) : ?> 
					&nbsp;<small><?= $teamSubs[0]->team->short ?></small>
				<?php endif; ?>
				<?php if($selectedTeam == 0 && $selectedClub > 0 && !empty($teamSubs[0]->team->club->full)) : ?> 
					&nbsp;<small><?= $teamSubs[0]->team->club->full ?></small>
				<?php elseif($selectedTeam == 0 && $selectedClub > 0) : ?>
					&nbsp;<small><?= $teamSubs[0]->team->club->name ?></small>
				<?php endif; ?>
			<?php endif; ?>
		</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<td>#</td>
					<td>Datum</td>
					<?php if($selectedTeam == 0) : ?><td>Mannschaft <?php if(!$selectedClub) : ?><small>(Verein)</small></td><?php endif; ?><?php endif; ?>
					<td>Turnier <small>(Ausrichter)</small></td>
					<td>Status</td>
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
				<?php foreach ($teamSubs as $ts): ?>
					<?php
						$current = $ts->event->date_begin;
						$current_compare = Yii::$app->formatter->asDate($current, 'YMMdd');
					?>
					<?php	if($current != null && $current_compare < $today && !$isToday) : ?>
						<?php $isToday = true; ?>
				<tr>
					<td colspan="5" class="success"><center><b><?= Yii::$app->formatter->asDate($today_string, 'full') ?></b></center></td>
				</tr>
				
					<?php endif; ?>
					
				<tr>
					<td><?= $ts->id ?></td>
					<td><?= Yii::$app->formatter->asDate($current, 'full') ?></td>
					<?php if($selectedTeam == 0) : ?><td><?= $ts->team->short ?> <?php if(!$selectedClub) : ?><small>(<?= $ts->team->club->name ?>)</small><?php endif; ?></td><?php endif; ?>
					<td><?= $ts->event->name ?> <small>(<?= $ts->event->club->name ?>)</small></td>
					<td><?php
						try {
							echo $ts->state->name;
						}
						catch (Exception $e){
							echo 'error';
						}
						
				?></td>
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
