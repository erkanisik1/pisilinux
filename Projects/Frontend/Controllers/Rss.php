<?php namespace Project\Controllers;
use DB,File,URL,Limiter;
/*
*
*/
class Rss extends Controller
{
	
	function main(){
		rssForumSonKonular();
		
	}
}