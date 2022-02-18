<?php 
/**
* Created By: Erkan IŞIK
* Created Date: 2017-08-28
*/
class Login_model extends Model{
	
	function userControl($data){
		$password = md5($data['pass']);

		$user = DB::where('mail', $data['mail'], 'and')
		->where('password', $password)
		->get('user')
		->row();
		
		if(DB::affectedRows()){

			Session::insert('login', True);
			Session::insert('username', $user->username);
			Session::insert('userid', $user->user_id);
			session::insert('yetki', $user->authority);
			DB::where('user_id',$user->user_id)->update('user',[
				'login_date' => date('Y-m-d H:i:s'),
				]);
			redirect(baseUrl().'panel');
		}
		
	}

	function update($post){



		Upload::settings([
			    'encode'     => 'md5',
			    'extensions' => 'jpg|png',
			    ])->target('upload/avatar/'.$post['user_id'])->start('avatar');

		if (Upload::info()->path) {
			DB::where('user_id',$post['user_id'])->update('user',[
				'username' => $post['username'],
				'mail' => $post['mail'] ,
				'avatar' => Upload::info()->path ,
				'egitim' => $post['egitim'] ,
				'meslek' => $post['meslek'] ,
				'beceri' => $post['beceri'] ,
				'nickname' => $post['nickname'], 
			]);
		}else{
			DB::where('user_id',$post['user_id'])->update('user',[
				'username' => $post['username'],
				'mail' => $post['mail'] ,
				'egitim' => $post['egitim'] ,
				'meslek' => $post['meslek'] ,
				'beceri' => $post['beceri'] ,
				'nickname' => $post['nickname'], 
			]);
		}
		
	}

	function passrename($post){
		$userid = Session::select('userid');
		$pass = md5($post['pass']);
		$passcontrol = DB::where('password',$pass,'and')->where('user_id',$userid)->get('user')->row();


		if($passcontrol){
		
			if($post['newpass'] == $post['newpassrepeat']){
				
				$newpass = md5($post['newpass']);

				DB::where('user_id', $userid)->update('user',[
					'password'    => $newpass,
				]);
					
				
				if(DB::affectedRows()){redirect('user/logout');}

			}else{
				return 'Yeni girdiğiniz şifre ve şifre tekrar uyuşmuyor!';
			}
		
		}else{	return 'Eski şifrenizi yanlış girdiniz...';	}
		
	}
}