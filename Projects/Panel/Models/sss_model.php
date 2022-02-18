<?php 

class Sss_model extends Model{
	
	function liste(){
		return DB::get('sss')->result();
	}

	function new($post){
		DB::insert('post:sss');
		if (DB::affectedRows()) { 
			redirect('sss');
		}else{
			jalert(DB::error());
		}
	}

	function update($post){
		DB::where('id',$post['id'])->update('post:sss');
		if (DB::affectedRows()) { 
			redirect('sss');
		}else{
			jalert(DB::error());
		}
	}

	function edit($id){
		return DB::where('id',$id)->get('sss')->row();
	}


}