<?php namespace Project\Controllers;

class Sss extends Controller{

	function main(){
		$liste = $this->sss_model->listele();
		View::liste($liste);
	}

}