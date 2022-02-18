<?php   namespace Project\Controllers;
use Method,URI;

/**
 * 
 */
class Duyuru extends Controller{
	
	function main(){	
		$content = $this->Duyuru_model->contentList();

		view::list($content);

	}

	function new(){
		if (Method::post()){$this->Duyuru_model->new(Method::post());}
					
	}

	function edit(){
		$id = Uri::get('edit');
		if (Method::post()){$this->Duyuru_model->update(Method::post());}

		View::id($id);
					
	}
}