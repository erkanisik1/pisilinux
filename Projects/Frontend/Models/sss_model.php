<?php 

class Sss_model extends Model{
	
	function listele(){
		return DB::get('sss')->result();
	}
}