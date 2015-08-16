<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Chat controller
 */
class ChatController extends Controller
{
	public function actionSendChat() 
	{ 	if (!empty($_POST)) 
		{ 
			echo \sintret\chat\ChatRoom::sendChat($_POST); 
		} 
	}
}
