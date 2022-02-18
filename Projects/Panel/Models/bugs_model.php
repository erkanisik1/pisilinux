<?php 


class Bugs_model extends Model{
	
	function bugs_update($post){
		DB::where('id',$post['id'])->update('bugs', [
			'title' => $post['title'],
			'titleSeo' => seo($post['title']),
			'tasktype' => $post['tasktype'],
			'status' => $post['status'],
			'system' => $post['system'],
			'details' => $post['details'],
		]);
		if (!DB::error()) {
			redirect('bugs');
		}
	}
}