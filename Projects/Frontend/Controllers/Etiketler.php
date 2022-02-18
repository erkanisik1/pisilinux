<?php namespace Project\Controllers;
use DB;
use Import;
use URL;
use Cookie;
use Session;
use ML; 

/**
 * 
 */
class Etiketler extends Controller
{
	
	function main($label){
		$label = explode('.',$label);

		$data['list'] = $this->blog_model->label_list($label['0']);
		import::view(THEMA_NAME.'blog/label_view',$data);
	}
}