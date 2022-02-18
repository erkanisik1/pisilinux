<?php 


class Forum_model extends model{
	
	function edit($data){return DB::where('id',$data)->get('forum')->row();}

	function update($post){
		if (isset($post['dissolved'])) {
			$dissolved = '1';
		}else{
			$dissolved = '0';
		}
		DB::where('id',$post['id'])->update('forum',[
			'title'		=> $post['title'],
			'title_seo' => seo($post['title']),  		
			'content' 	=> $post['content'],
			'dissolved'	=> $dissolved, 
		]);
		
		if (DB::affectedRows()) {redirect($post['link']);}
	}

	function messages(){return DB::orderBy('id','desc')->where('user_id',Session::select('userid'),'and')->where('content_id','0')->get('forum')->result();}

	function mymessages(){return DB::orderBy('id','desc')->where('user_id',Session::select('userid'),'and')->whereNot('content_id','0')->get('forum')->result();}

	function tasi($post){
		
		DB::where('id',$post['id'])->update('forum',[
			'category_id' => $post['category_id']
		]);
		$seo = DB::select('title_seo')->where('id',$post['id'])->get('forum')->value();
		$link = URL::base('forum/subject/'.$post['id'].'-'.$seo);
		redirect($link);
		
	}

}