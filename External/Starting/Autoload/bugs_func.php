<?php 
		
	function taskType(){
		return DB::tasktypeResult();
	}


	function bugs(){
		return DB::where('status',1)->bugsResult();
	}

	function bugsRow($id){
		return DB::where('id',$id)->bugsRow();
	}

	function taskTypeName($id){
		return DB::select('tasktype')->where('id', $id)->get('tasktype')->value();

	}

	function taskName($id){
	 return DB::whereId($id)->tasktypeRowTasktype();
	}

	function taskTypeList($id = 0){
		if ($id==0) {
			return DB::orderBY('id','desc')->where('contentId','0')->bugsResult();
			//return DB::orderBY('id','desc')->whereNot('status','0')->bugsResult();
		}else{

		return DB::orderBY('id','desc')->whereAnd('tasktype',$id)->whereNot('status','0')->bugsResult();
		}
	}

	function bugsResult($id){
		return DB::where('contentId',$id)->bugsResult();
	}