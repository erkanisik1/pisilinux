<?php namespace Project\Controllers;

use DB, Import, URL, Cookie, Session, URI,  Method;

class Forum extends Controller{

	function main(){
		$messages = $this->forum_model->messages();
		$mymessages = $this->forum_model->mymessages();
		View::messages($messages)->mymessages($mymessages);
	}

	function edit()	{
		$id = URI::get('edit');
		
		if (Method::post()) {$this->forum_model->update(Method::post());}

		$query = DB::where('id', $id)->get('forum')->row();

		if ($query->content_id == '0') {$id1 = $query->id;} else {$id1 = $query->content_id;}

		view::id($id)->id1($id1);
	}

	function message_edit(){
		$id = URI::get('message_edit');
		if (Method::post()) {$this->forum_model->update(Method::post());}
		$data['edit'] = $this->forum_model->edit($id);
		import::view('forum/message_edit', $data);
	}

	function tasi(){
		if (Method::post()) {
			$this->forum_model->tasi(Method::post());
		}
		$id = URI::get('tasi');
		$cat_id = DB::where('id',$id)->forumRow();
		view::id($id)->catid($cat_id->category_id);
	}



}
