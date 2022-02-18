<?php 
/**
* Created By: Erkan IŞIK
* Created Date: 2017-08-28
*/
class Login_model extends Model{
	
	function userControl($data){
		$password = md5($data['pass']);

		$user = DB::where('mail', $data['mail'], 'and')
		->where('password', $password,'and')
		->where('authority','1')
		->get('user')
		->row();
		
		if($user){

			Session::insert('ADMINLOGIN', True);
			Session::insert('username', $user->username);
			Session::insert('userid', $user->user_id);

			DB::where('user_id',$user->user_id)->update('user',[
				'login_date' => date('Y-m-d H:i:s'),
				]);


			redirect(URL::base().'panel');
		}
		
	}

	function passrename($post){
		
		$pass = md5($post['pass']);
		$passcontrol = DB::where('password',$pass)->get('user')->row();


		if(DB::affectedRows()){
		
			if($post['newpass'] == $post['newpassrepeat']){
				$userid = Session::select('userid');
				$newpass = md5($post['newpass']);

				DB::where('user_id', 1)->update('user',['password'    => $newpass,]);
				if(DB::affectedRows()){
					redirect(URL::base('panel/home/logout'));
				}

			}else{
				return 'Yeni girdiğiniz şifre ve şifre tekrar uyuşmuyor!';
			}
		
		}else{
		
			return 'Eski şifrenizi yanlış girdiniz...';

		}
		
	}
}