<?php 

/*
* Created By  : Erkan IŞIK
* Created Date: 2018-01-26
* Update Date : 2018-01-26
*/
class Blog_model extends Model{
	
	function content_list(){
		return DB::where('icerik_tur','icerik','and')->where('icerik_durum','1')->orderBy('icerik_id','desc')->get('content')->result();
	}

	function label_list($data){
		return DB::like('icerik_tag',$data)->get('content')->result();
	}

	function content($id){
		$content = DB::where('id',$id)->get('content')->row();
		$say = $content->hits + 1;
		DB::where('id',$id)->update(
				'content',[
					'hits' => $say,
				]);
		

		return $content;
	}
}