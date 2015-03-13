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

class TeamSubscriptionController extends \yii\web\Controller
{ 	 
		
    public function actionIndex($team_id = null, $club_id = null)
    {
			/*
			SELECT t.name as Mannschaft, e.name as Event, s.date as Datum, e.date_begin as Beginn 
			
			FROM subscriptions as s, teams as t,events as e 
			
			where s.team_id = t.id AND s.event_id = e.id
			*/
			$query = Subscriptions::find();
		
			$query->select('s.id, st.id as state_id, st.name as status, e.date_begin, t.short as teilnehmer, e.name as event, ec.name as veranstalter, tc.name as verein, e.id AS event_id, ec.id AS club_event_id, t.id as team_id')
				->from('subscriptions s')
				->leftJoin('teams t', 't.id  = s.team_id')		// team
				->leftJoin('events e', 'e.id = s.event_id')   // event
				->leftJoin('state st', 'st.id  = s.state_id')  // state
				->leftJoin('clubs ec', 'ec.id  = e.club_id')  // club of event
				->leftJoin('clubs tc', 'tc.id  = t.club_id')  // club of team 
				->orderBy('date_begin DESC');
				
			
			
				
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
			
			
				
			
			
			$pagination = new Pagination([
				'defaultPageSize' => 25,
				'totalCount' => $query->count(),
			]);
			
			$teamSubs = $query
					->offset($pagination->offset)
					->limit($pagination->limit)
					->all();
					
					
			return $this->render('index', [
				'teamSubs' => $teamSubs,
				'pagination' => $pagination,
				'selectedTeam' => $team_id,
				'selectedClub' => $club_id,
			]);
    }
		
}
