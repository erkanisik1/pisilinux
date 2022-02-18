<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method,URI;
/*
* Created By: Erkan IŞIK
* Created Date: 2017-12-05
* Update Date: 2018-01-22
*/

class Forum extends Controller{
	

	function main(){
		Cookie::insert('returnlink', 'forum');
	}


	function category(){
		$id = URI::get('category');
		$id_ext = explode('-', $id);
		$konular = DB::orderBy('id', 'desc')->where('category_id', $id_ext['0'], 'and')->where('content_id', '0')->get('forum')->result();
		$kategori = $id;
	
		define('TITLE', ' ' . forum_kategori_adi($id_ext[0])->adi);
		View::seokat($id)->konular($konular)->kategori($id);
	}

	function newsubject(){
		 
		if (USERID) {
			if (method::post()) {
				$this->forum_model->konu_kaydet(method::post());
				rssForumSonKonular();
			}
		}else{
			redirect('member');
		}
		
	}

	/* forum yeni konu girişi*/
	function newthread(){
		$id = URI::get('newthread');
		if (Session::select('userid')) {
			$id_ext = explode('-', $id);
			if (method::post()) {$this->forum_model->konu_kaydet1(method::post());}
			View::id($id);
		}else{
			redirect('member');
		}
	}


	function subject(){
		$id = URI::get('subject'); 
		$id1 = explode('-',$id);
		$id2 = $id1['0'];	

		if (method::post()) {$this->forum_model->cevap(method::post());	}

		$fk = $this->forum_model->forumkonu($id2);

		if (isset($fk->title_seo)) {

			define('TITLE', ' ' . $fk->title_seo);
			session::insert('return', 'forum/subject/' . $fk->id . '-' . $fk->title_seo);
			if (!Cookie::select('count')) {
				$hits = DB::select('view')->where('id', $id2)->get('forum')->value();
				$hit = $hits + 1;
				DB::where('id', $id2)->update('forum', ['view' => $hit]);	
			}
			Cookie::time(60 * 60 * 24)->insert('count',$id2);
					
			view::fk($fk);
			 
		} 
	}

	function konu_duzenle($id){
		if (method::post()) {$this->forum_model->Update(method::post());}
		$data['dzn'] = $this->forum_model->edit($id);
		import::view(THEMA_NAME . 'forum/konu_duzenle', $data);
	}

	


	function delete($id){
		$forum = DB::where('id', $id)->get('forum')->row();
		if ($forum->content_id > 0) {
			$link = '/forum/subject/' . $forum->content_id . '-' . seo(forum_title($forum->content_id)->title);
		} else {
			$link = '/forum';
		}
		DB::where('id', $id)->delete('forum');
		redirect($link);
		
	}
}