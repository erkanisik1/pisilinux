<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method,URI;
/*
* Created By: Erkan IŞIK
* Created Date: 2020-04-23
*/

class question_answer extends Controller{
	/*
	function __construct()	{

		if (Cookie::select('forum')) {

			if (Cookie::select('forum') == 'sorucevap') {
				redirect('forum/sorucevap');
			} else {
				redirect('forum/forum1');
			}
		} else {
			redirect('forum/sorucevap');
		}
	}
*/

		
	

	function main(){
		define('TITLE', ' Soru Cevap');
		define('desc', 'Soru Cevap');
		import::view(THEMA_NAME . 'question_answer/index');
	}


	function subject($id){

		$par = explode('-', $id);
		if (method::post()) {$this->forum_model->cevap(method::post());}
		$data['fk'] = $this->forum_model->forumkonu($par['0']);
		if (isset($data['fk']->title_seo)) {
			define('TITLE', ' ' . $data['fk']->title_seo);
			session::insert('return', 'question_answer/subject/' . $data['fk']->id . '-' . $data['fk']->title_seo);
			$hits = DB::select('view')->where('id', $par[0])->get('forum')->value();
			$hit = $hits + 1;
			DB::where('id', $par[0])->update('forum', ['view' => $hit]);
			import::view(THEMA_NAME . 'question_answer/subject', $data);
		} else {
			import::view(THEMA_NAME . 'question_answer/noSubject');
		}
	}


	function category(){
		$par = URI::category();		
		$par = explode('-', $par);
		define('TITLE', 'Soru cevap / 	category');
		$data['id'] = $par['0'];		
		import::view(THEMA_NAME . 'question_answer/category', $data);
	}

	function newsubject(){
		$par = URI::newsubject();		
		$par = explode('-', $par);
		if (method::post()) {$this->questionanswer_model->newsubject(method::post());}
		$data['id'] = $par['0'];		
		import::view(THEMA_NAME . 'question_answer/newsubject',$data);
	}

	function nocatnewsubject(){
		if (method::post()) {
		output(method::post());
			$this->questionanswer_model->newsubject1(method::post());
		}
		import::view(THEMA_NAME . 'question_answer/noCategoryNewSubject');
	}

	function delete($id){
		$par = explode('-', $id);
		$id = $par['0'];
		$link = 'question_answer/category/'.$par['1'].'-'.forum_kategori_row($par['1'])->adi_seo;
		 
		DB::where('id', $id)->delete('forum');
		redirect($link);
	}


	function edit($id){

		if (Method::post()) {$this->questionanswer_model->update(Method::post());}
		
		$query = DB::where('id', $id)->get('forum')->row();
		if ($query->content_id == '0') {$id1 = $query->id;}else{$id1 = $query->content_id;}
		$data['id'] = $id;
		$data['id1'] = $id1;
		import::view(THEMA_NAME.'question_answer/edit', $data);
	}

}

