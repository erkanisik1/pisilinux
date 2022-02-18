<?php 


class Duyuru_model extends Model
{
	
	function new($post)
	{
		DB::insert('duyuru',[
			'title' => $post['title'],
			'text' => $post['duyuru'],
			'lang' => $post['lang']
		]);

		if (!DB::error()) {
			redirect('duyuru');
		}
	}


	function update($post)
	{
		DB::where('id',$post['id'])->update('duyuru',[
			'title' => $post['title'],
			'text' => $post['duyuru'],
			'lang' => $post['lang'],
			'status' => $post['status']
		]);

		if (!DB::error()) {
			redirect('duyuru');
		}
	}

	function contentList(){
		return DB::duyuruResult();
	}

	
}