<?php namespace Project\Controllers;
use DB,Import,DBTool,URL,File,Email; 

class Back extends Controller{
	
	function main(){

		$dbname = 'pisilinuxorg_pisi20';
		
		$path = REAL_BASE_DIR.'DbBackups/';

		$backup_file = $path.$dbname.'_'.date("Y-m-d_H-i-s").'.bzip2';
		
		$fileName = $dbname .'_'.date("Y-m-d_H-i-s").'.sql';
		$message = $fileName.' veritabanı yedeklemesi yapıldı.';
		$ff = $path.'pisilinuxorg_pisi20_2022-02-18_01-06-02.bzip2';
		$dbtool = DBTool::backup('*', $fileName, $path);

		file_put_contents("compress.bzip2://$backup_file", file_get_contents($path.$fileName));
		File::delete($path.$fileName);

		Email::from('info@pisilinux.org', 'Pisi Linux','info@pisilinux.org')
		    ->receiver('admins@pisilinux.org')
		    ->subject('DB Backup')
		    ->message($message)
		    ->attachment($backup_file)
		    ->send();
			telegram($message);

	}

	function dizin(){
		$list = ftp::files('/2.0-Beta.1/');
		
		foreach ($list as $key) {
			$par = explode('/', $key);
			echo '<a href="/back/dizin/'.$par['2'].'">'.$par['2'].'</a><br>';
			

			 //echo $par['2'].'<br>';
		
		}
	}
}