<?php

namespace app\controllers;

use Yii;
use app\models\Subscriptions;
use app\models\State;
use app\models\Events;
use app\models\Clubs;
use app\models\Teams;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;

class TurnamentsController extends \yii\web\Controller
{ 	 
		
    public function actionIndex($team_id = null, $club_id = null)
    {
			/*
			SELECT t.name as Mannschaft, e.name as Event, s.date as Datum, e.date_begin as Beginn 
			
			FROM subscriptions as s, teams as t,events as e 
			
			where s.team_id = t.id AND s.event_id = e.id
			*/
			$query = Events::find();
		
			$query->select('*')
				->from('events')
				->where('parent_event = 0 OR parent_event IS NULL')
				->orderBy('date_begin DESC');
				
			
			
				/*
			if($club_id != null && !empty($club_id))
			{
				$query->where('t.club_id=:club_id');
				
				if($team_id == null && empty($team_id)){
					$query->addParams([':club_id' => $club_id]);
				}
			}
			if($team_id != null && !empty($team_id) && ($club_id == null || empty($club_id)))
			{
				$query->where('tc.club_id=:club_id');
				$query->addParams([':team_id' => $team_id]);
			}
			else if($team_id != null && !empty($team_id) && ($club_id != null || !empty($club_id)))
			{
				$query->andwhere('s.team_id=:team_id');
				$query->addParams([':team_id' => $team_id, ':club_id' => $club_id]);
			}
			
			*/
				
			
			
			$pagination = new Pagination([
				'defaultPageSize' => 25,
				'totalCount' => $query->count(),
			]);
			
			$events = $query
					->offset($pagination->offset)
					->limit($pagination->limit)
					->all();
					
					
			return $this->render('index', [
				'events' => $events,
				'pagination' => $pagination,
				'selectedTeam' => $team_id,
				'selectedClub' => $club_id,
			]);
    }
		
}
