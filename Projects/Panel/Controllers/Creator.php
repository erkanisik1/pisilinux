<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, Method, Folder, File; 

class Creator extends Controller
{
	function main(){


		if (Method::post()) {
			if (Method::post('controller') == '1') {
				$filename = Ucwords(Method::post('name'));
				$path = REAL_BASE_DIR.'/Projects/'.Method::post('section').'/Controllers/'.$filename.'.php';

				touch($path);
				$dosya=fopen($path,"a");
				$yazdir ="<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session,Method; 

class $filename extends Controller{\n
	function main(){ \n";

	if (Method::post('section') == 'Frontend') {
		$yazdir .= "Import::view(THEMA_NAME.'$filename/$filename.view');}\n}";
	}else{
		
	}
					
			fwrite($dosya, $yazdir);
			}

	if (Method::post('models') == '1') {
		$filename = Ucwords(Method::post('name')).'_model';
		$path = REAL_BASE_DIR.'/Projects/'.Method::post('section').'/Models/'.$filename.'.php';
		touch($path);
	
		$dosya=fopen($path,"a");
		$yazdir ="<?php 
class $filename extends Model{\n
	function new(){ \n }";
		fwrite($dosya, $yazdir);


			}

			if (Method::post('views') == '1') { 
				$filename = Ucwords(Method::post('name')); 
				$folder = REAL_BASE_DIR.'Projects/'.Method::post('section').'/Views/'.$filename;
				Folder::create($folder, 777);
				
				$path =  REAL_BASE_DIR.'Projects/'.Method::post('section').'/Views/'.$filename.'/main.php';
				File::create('Projects/'.Method::post('section').'/Views/'.$filename.'/main.wizard.php', 0655);
			}
		}

	}	
	
}

