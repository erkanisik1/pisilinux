<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method,DBTool,File,Crontab; 

class Backup extends Controller
{	
	 function __construct(){if (!USERID) {redirect(URL::base('panel'));}}
    function main(){ 
    	Masterpage::title('Backup Manage');

       
    }

   

    function cron(){
        Crontab::daily()->command('Db_backups:do');
    }

  
}