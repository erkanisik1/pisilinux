<?php namespace Project\Controllers;
use DB, URL, Cookie, Session, ML, Method,Email, URI, Captcha,Validator;

/**
* Created By  : Erkan IŞIK
* Created Date: 2017-12-06
* Update Date : 2018-11-24
* 
*/


class Member extends Controller{
	
	function main(){
		if(Method::post()) {$this->user_model->logincheck(Method::post());} 
	}

	function register(){
		$securtyCode = Captcha::size(90,40)->textCoordinate(23,11)->length(5)->borderColor('0|0|0')->bgColor('219|219|219')->create(true);
		echo "<script>document.cookie = \"secret=".Captcha::getCode()."\"</script>";
		View::code($securtyCode);
	}

	function control(){
        $this->user_model->yeniuye(Method::post());
	}

	
	function aktivizasyon($act){
		DB::where('aktivizasyon',$act)->update('user',[
			'aktivizasyon' => '',
			'status' => '1',
		]);
		if (DB::affectedRows()) {

			//import::view(THEMA_NAME.'member/basarili');
		}
	}

	function password_forgot(){
		if (method::post()) {$this->user_model->sifremiunuttum_model(method::post());}
		
	}

	function ref($data){

		$exp = explode('-', $data);
		$ref = $exp['0'].'/'.$exp['1'].'/'.$exp['2'].'-'.seo($exp['3']);
		Session::insert('ref', $ref);

		if(method::post()) {$this->user_model->logincheck(method::post());} 
		

	}

	function yenisifre(){
		$act = Uri::get('yenisifre');
		if (method::post()) {$this->user_model->yenisifre(method::post());}
		
		$id = DB::select('user_id')->where('aktivizasyon',$act)->get('user')->value();
		$act = $act;
		View::id($id)->act($act);
		
		
	}

	function logout(){
		Session::deleteAll();
		redirect(URL::base());
	}

	
}