<?php namespace Project\Controllers;
use DB, Import,URL; 

class Galery extends Controller{
	
	function main(){
		Import::view(THEMA_NAME.'Galery/main');
	}
}