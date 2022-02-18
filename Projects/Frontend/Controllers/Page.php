<?php namespace Project\Controllers;
use DB,Cookie,Session,URI; 
/**
* Created By  : Erkan IŞIK
* Created Date: 2017-12-24
* Update Date : 2020-07-26
* 
*/

class Page extends Controller{
	
	function main(){
		Cookie::insert('returnlink', 'page');
		$id = URI::get('page');
		$p = explode('-', $id);	
		
		Masterpage::title(contentRow($p['0'])->title.' - Pisi GNU/Linux');
		Masterpage::meta([
			'name:keywords' => contentRow($p['0'])->label,
			'name:description' => contentRow($p['0'])->keywords,
			
		]);
		
		View::id($p['0']);
	}
}