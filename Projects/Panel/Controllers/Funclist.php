<?php namespace Project\Controllers;
use DB;
use Import;
use URL;
use Cookie;
use Session;
use ML; 
use Method; 
	/**
	* 
	*/
	class Funclist extends Controller{

		 function __construct(){if (!USERID) {redirect(URL::base('panel'));}}
		
		function main(){ import::view('funclist_view');} 
	} 