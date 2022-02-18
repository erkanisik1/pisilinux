<?php namespace Project\Controllers;
use Import, Url, Method;

class Galery extends Controller{
	function main(){

    	Import::view('Galery/main');
    	
	}

	function new(){
		if(Method::post()){
			$this->galeryModel->new(Method::post());
		}
		Import::view('Galery/new');
	}

}