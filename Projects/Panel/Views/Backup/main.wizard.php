

	<h1 class="text-center">Database Backup Manage</h1>
	<hr>
	<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-bars"></i> </span>
      <h5>Backup List</h5>
    </div>
    <div class="widget-content nopadding">
<table class="table table-bordered table-striped data-table">
        <thead>
          <tr>
            <th width="110">Create date</th>
            
            <th width="300">Name</th>

            <th>Description</th>
           
            <th width="20" >Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach (Folder::files('/DbBackups') as $key)
          {[ 
            $ex = explode('-',$key);
            $date = $ex['2'].'-'.$ex['1'].'-'.$ex['0'];
          ]}    
          
        
          <tr class="odd gradeX">
            <td>{[ echo $date; ]}</td>
          
            <td><a href="/DbBackups/{{$key}}" title="İndirmek için tıklayın">{{$ex['3']}}</a></td>
            <td >{{File::size('/DbBackups/'.$key, 'mb', 2).' MB'}}</td>
            <td>
            <a href="{[file::delete('/DbBackups/'.$key)]} " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')"><button><i class="fa fa-trash"></i></button></a></td>
          </tr>    
          @endforeach
        </tbody>
      </table>
      
    </div>
  </div>
