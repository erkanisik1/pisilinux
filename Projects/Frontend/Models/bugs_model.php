<?php 

class Bugs_model extends Model{
	
	function new($post){		
		DB::insert('bugs', [
			'userid' 	=> USERID,
			'title' 	=> $post['title'],
			'titleSeo' 	=> seo($post['title']),
			'tasktype' 	=> $post['tasktype'],
			'status' 	=> 1,
			'system' 	=> $post['system'],
			'details' 	=> $post['details'],
		]);
	
		if (!DB::error()) {
			$message = "Bugs bölümüne ".username(USERID)." ".$post['title']." mesajı bıraktı kontrol edin..";
			telegram($message);
			redirect('bugs/search');
		}		
	}

	function insert($post){
		//bugRow($post['post_id'])->title

		DB::insert('bugs', [
			'userid' 	=> USERID,
			'title' 	=> bugsRow($post['post_id'])->title,
			'titleSeo' 	=> seo(bugsRow($post['post_id'])->title),
			'tasktype' 	=> bugsRow($post['post_id'])->tasktype,
			'status'	=> '1',
			'details' 	=> $post['bugs_post'],
			'contentId'	=> $post['post_id'],
		]);
	
		if (!DB::error()) {
			
			$message = "Bugs bölümüne ".username(USERID)." ".$post['title']." mesajına cevap yazdı kontrol edin...";
			telegram($message);
			
			$link = 'bugs/detail/'.$post['post_id'].'/'.seo(bugsRow($post['post_id'])->title);
			redirect($link);
		}		
	}

	function edit($post){

		DB::where('id', $post['id'])->update('bugs', [			
			'title' 	=> $post['title'],
			'titleSeo' 	=> seo($post['title']),
			'tasktype' 	=> $post['tasktype'],
			'details' 	=> $post['details'],
			
		]);
		$contentId = bugsRow($post['id'])->contentId;
	
		if (!DB::error()) {
			
			
			if (bugsRow($post['id'])->contentId != '0') {
				$link = 'bugs/detail/'.$contentId.'/'.seo($post['title']);
			}else{
				$link = 'bugs/detail/'.$post['id'].'/'.seo($post['title']);
			}
			$message = "Bugs bölümüne ".username(USERID)." ".$post['title']." mesajına cavap yazdı.
			Link ".URL::base($link);
			telegram($message);
			
			redirect($link);
		}		
	}


}