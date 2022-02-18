<?php 
/*
* Created By: Erkan IŞIK
* Created Date: 2017-12-07
* Update Date: 2018-04-26
*/
class Download_model extends Model
{
	
	function new($post){
		

		DB::insert('download',[
			'baslik' 	=> $post['baslik'],
			'aciklama' 	=> $post['yazi'],
			'link' 		=> $post['link'],
			'link2' 	=> $post['link2'],
			'md5sum' 	=> $post['md5sum'],
			'sha1sum' 	=> $post['sha1sum'],
			'surum'		=> '2x',
			'image'		=> $post['image'],
			'lang'		=> $post['lang']
		]);
		if (DB::affectedRows()) {
			redirect('download');
		}else{
			echo DB::error();
		}
	}

	function copy($post){
		DB::insert('download',[
			'baslik' 	=> $post['baslik'],
			'aciklama' 	=> $post['yazi'],
			'link' 		=> $post['link'],
			'link2' 	=> $post['link2'],
			'md5sum' 	=> $post['md5sum'],
			'sha1sum' 	=> $post['sha1sum'],
			'surum'		=> '2x',
			'image'		=> $post['image'],
			'lang'		=> $post['lang']
		]);
		if (DB::affectedRows()) {
			redirect('download');
		}else{
			echo DB::error();
		}
	}

	function update($post){

		DB::where('id',$post['id'])->update('download',[
			'baslik' 	=> $post['baslik'],
			'aciklama' 	=> $post['yazi'],
			'link' 		=> $post['link'],
			'link2' 	=> $post['link2'],
			'md5sum' 	=> $post['md5sum'],
			'sha1sum'	=> $post['sha1sum'],
			'surum'		=> '2x',
			'image'		=> $post['image'],
			'lang'		=> $post['lang']
		]);
		if (DB::affectedRows()) {
			redirect('download');
		}
	}

}