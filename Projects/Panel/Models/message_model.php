<?php 

class Message_model extends Model{
	
	function send($data){
		DB::insert('messages',[
			'title' 	=> 'Pisi GNU/Linux Yönetim',
			'userId' 	=> $data['userid'],
			'message'	=> $data['message'],
			'admin' 	=> '0',
		]);

	}
}