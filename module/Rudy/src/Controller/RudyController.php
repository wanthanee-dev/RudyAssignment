<?php
namespace Rudy\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class RudyController extends AbstractActionController
{
	public function rudyAction(){
		return new ViewModel();
	}

	public function findingAction(){
		//5-3 = 2
		//9-5 = 4
		//15-9 = 6
		//x-15 = 8
		//y-x = 10 
		//z-y = 12
		$res = 3;
		$arrayres = [$res];
		for($i = 2;$i <=12 ;$i+=2){
			$res = $res+$i;
			array_push($arrayres, $res);
		}

		return new ViewModel(['answer' => $arrayres]);
	}

	public function placesearchAction(){

		return new ViewModel();
	}

	public function placeapiajaxAction(){

		// $jsonData = 'success';
		// $url = 'https://maps.googleapis.com/maps/api/place/textsearch/json?query=restaurants+in+Bangsue&key=AIzaSyDOjUbGoZnfLTlOb8jMT5TbObwnKZl6Gdc';

		$path = 'https://maps.googleapis.com/maps/api/place/textsearch/json?query=restaurants+in+Bangsue&key=AIzaSyC_zWOAQl95YBLVfHdxcZtPelVxGqrPF0o';
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL,$path);
	    curl_setopt($ch, CURLOPT_FAILONERROR,1);
	    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	    $retValue = curl_exec($ch);          
	    curl_close($ch);
    //return $retValue;

		echo json_encode($retValue,true);
     	exit();
	}
}
?>