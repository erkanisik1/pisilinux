<?php 

/*
* Created By  : Erkan IŞIK
* Created Date: 2018-11-05
* Update Date : 2018-11-05
*/

class Wiki_model extends Model{

	function catlist(){
		return DB::where('kat_ustid',30)->get('wiki_kat')->result();
	}
	
	function wikikat($kat_id){
		$id = explode('-', $kat_id);
		return DB::orderBy('id','desc')->where('katid',$id['0'],'and')->where('durum','1')->get('wiki')->result();
	}

	function content($id){
		$p = explode('-', $id);
		$content = DB::where('id',$p[0])->get('wiki')->row();
		$say = $content->hits + 1;
		DB::where('id',$id)->update(
				'wiki',[
					'hits' => $say,
				]);
		return $content;
	}
	
}