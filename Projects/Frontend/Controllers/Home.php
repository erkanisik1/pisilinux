<?php namespace Project\Controllers;
USE Import,Cookie;
class Home extends Controller{
    
	public function main(){
		Cookie::insert('returnlink', '/');
		Masterpage::meta([
			'name:description' => setting('description'),
			'name:keywords' => setting('keywords'),
		]);
		
    }
}