<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML,  Method, Email; 
	/**
	* Created By   : Erkan IŞIK
	* Created Date : 2018-02-19
	* Update Date  : 2018-02-19
	*/
class Contact extends Controller{
	 function __construct(){if (!USERID) {redirect(URL::base('panel'));}}
	function main()	{
		$data['mesaj'] = DB::orderBy('id','desc')->get('iletisim')->result();
		
		import::view('iletisim/index',$data);
	}

	function oku($ata){
		
		$data['read'] = DB::where('id',$ata)->get('iletisim')->row();
		
		import::view('iletisim/read',$data);
	}
}