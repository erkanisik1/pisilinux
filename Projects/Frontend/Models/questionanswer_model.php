<?php 

class Questionanswer_model extends Model{

	function kategori($par = '0'){return DB::where('kat_ustid',$par)->get('forum_kat')->result();}

	
	function newsubject($post){
		$title = linkcleaner($post['title']);
		DB::insert('forum',[
			'category_id'	=> $post['category_id'], 
			'title' 		=> $title, 
			'title_seo'		=> seo($title), 
			'content' 		=> $post['content'],
			'user_id'		=> Session::select('userid'),
			'content_id'	=> '0',
			'view'			=> '0',
			'message'		=> '0'
			
		]);
	
		if (DB::affectedRows()) {
			$konu_id = DB::insertID();
            $url = 'forum/konulist/'.$konu_id;
        	$konu_url = 'forum/konu/'.isset($konu_id).'-'.seo($post['title']);
            $message = "Mesajın geldiği yer: Forum\nGönderen: ".yazar(Session::select('userid'))."\nBaşlık: ".$post['title']."\nMesaj: ".decode1($post['content'])."\nLink: https://pisilinux.org/forum/konu/".DB::insertID()."-".seo($post['title'])."'>".$post['title'];
			
			telegram($message);
			redirect('forum');
		}
		
	}
		
		function newsubject1($post){
		$title = linkcleaner($post['title']);
		DB::insert('forum',[
			'category_id'	=> $post['category_id'], 
			'title' 		=> $title, 
			'title_seo'		=> seo($title), 
			'content' 		=> $post['content'],
			'user_id'		=> Session::select('userid'),
			'content_id'	=> '0',
			'view'			=> '0',
			'message'		=> '0'
			
		]);
	
		if (DB::affectedRows()) {
			$subject_id = DB::insertID();
            $url = 'question_answer/konulist/'.$subject_id;
        	$subject_url = 'question_answer/subject/'.isset($subject_id).'-'.seo($post['title']);
            $message = "Mesajın geldiği yer: Forum\nGönderen: ".yazar(Session::select('userid'))."\nBaşlık: ".$post['title']."\nMesaj: ".decode1($post['content'])."\nLink: <a href='https://pisilinux.org/question_answer/".DB::insertID()."-".seo($post['title'])."'>".$post['title']."</a>";
			
			//telegram($message);
			redirect($subject_url);
		}
		
	}

	function forumkonu($post){
		$title_seo = explode('.',$post);
		return DB::where('id',$post)->get('forum')->row();
	}

	function cevap($post){
		$fd = DB::where('id', $post['konu_id'])->get('forum')->row();
	
		// $baslik = DB::select('title_seo')->where('title_seo',$post['konu_id'])->get('forum')->value();
			
		DB::insert('forum',[
			'category_id'	=> $fd->category_id, 
			'title' 		=> $fd->title, 
			'title_seo'		=> $fd->title_seo, 
			'content' 		=> $post['konu_cevap'],
			'user_id'		=> Session::select('userid'),
			'content_id'	=> $post['konu_id'],
			'view'			=> '0',
			'message'		=> '0'
		]);

		if (DB::affectedRows()) {

		//redirect(baseUrl('forum/konu/'.$post['konu_id'].'-'.$post['title_seo'].'.html'));
		}else{
			output(DB::error());
		}
	}

	function edit($data){
		return DB::where('id',$data)->get('forum')->row();
	}


	function update($post){

		DB::where('id',$post['id'])->update('forum',[
			'title'		=> $post['title'], 
			'title_seo'	=> seo($post['title']), 
			'content' 	=> $post['content'],
			
		]);

		if (DB::affectedRows()) {
		redirect($post['link']);
		}
		
	}


}