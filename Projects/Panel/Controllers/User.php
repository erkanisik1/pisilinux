<?php namespace Project\Controllers;
use DB, Method, Import, URL, Cookie, Session, URI; 

	/**
	* Created By: Erkan IŞIK
	* Created Date: 2017-08-28
	*/
	class User extends Controller{
 		function __construct(){if (!USERID) {redirect(URL::base('panel'));}}
		function main(){
			$search = '';
			 if(Method::post()){
			 	$search = DB::whereLike('username',method::post('username'))->userResult();
			 }
			View::active_member($search);
			
		}



		function pending_member(){
   			View::pending_member($this->member_model->pending_member());
   		}

  		function disable_member(){
    		View::disable_member($this->member_model->disable_member());
      	}

     	
		function passRename()
		{
			$data['message'] = null;
			if(method::post()){
				$data['message'] = $this->login->passrename(method::post());
			}

			import::view('user/passRename',$data);
		}

		function deleteMemberAjax(){
			$id = method::post('par');
			DB::where('user_id',$id)->delete('user');
			echo 'Üye Silinmiştir!';

			//redirect('user');
		}

		function edit(){
			if (method::post()) {$this->member_model->update(method::post());}
		    $edit = $this->member_model->edit(URI::get('edit'));
		    view::edit($edit);

    }

    function islem(){
    	foreach (Method::post('select') as $key) {
    		DB::where('user_id',$key)->delete('user');    	
    	}

    	redirect('user/pending_member');
    }

    function disableMemberAjax(){
		$id = method::post('par');
		DB::where('user_id', $id)->update('user',['status' => '2']); 
		if(!DB::error()) {echo 'Üye yasaklandı';}else{echo DB::error();}
		//echo 'Üye yasaklandı';
	}

}