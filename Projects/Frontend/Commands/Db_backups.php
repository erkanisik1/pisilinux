<?php namespace Project\Commands;

use File, Crontab,DBTool;

class Db_backups extends Command
{
    public function do()
    {
        $dbname = 'Pisilinux_DB_Backup-'.date('YmdHis').'.sql';
        $zipname = 'DbBackups/'.$dbname.'.zip';
       
        DBTool::backup('*',$dbname, 'DbBackups'); 
        File::createZip($zipname, ['DbBackups/']);
        File::delete('DbBackups/'.$dbname);

        Crontab::limit(1, 1);
    }
}