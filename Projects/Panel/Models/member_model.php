<?php 

/**
 * 
 */
class Member_model extends Model{
	
	function active_member(){
		return DB::orderBy('user_id','desc')->where('status','1')->get('user')->result();
	}

	function pending_member(){
		return DB::select('user_id','date','username','mail','aktivizasyon')->orderBy('user_id','asc')->where('status','0')->get('user')->result();
	}

		function disable_member(){
		return DB::orderBy('user_id','asc')->where('status','2')->get('user')->result();
	}

	function edit($id){
		return DB::where('user_id',$id)->get('user')->row();
	}

	function update($post){
		if ($post['aktivizasyon'] == '') {
			$aktivizasyon = '0';
		}else{
			$aktivizasyon = $post['aktivizasyon'];
		}
		DB::where('user_id',$post['id'])->update('user',[
			'username'	=> $post['username'],
			'mail' 		=> $post['mail'],
			'status' 	=> $post['status'],
			'authority'	=> $post['authority'],
			'aktivizasyon'	=> $aktivizasyon
			
		]);
		if (DB::error()) {
			jalert(DB::error());
		}else{
			redirect('user');
		}
	}
}


	
  