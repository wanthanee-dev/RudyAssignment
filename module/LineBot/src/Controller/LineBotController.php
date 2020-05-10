<?php
namespace LineBot\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class LineBotController extends AbstractActionController
{
	public function linebotAction(){
		echo 'linebot';
		exit();
	}
}