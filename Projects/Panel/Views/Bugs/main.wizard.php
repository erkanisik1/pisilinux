
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="fa fa-th"></i></span>
      <h5>Bugs</h5>
    </div>
      <div class="widget-content nopadding table-responsive">
          <table class="table table-bordered data-table">
             <thead >
                <tr class="info">
                  <td>ID</td>
                  <td width="100">Create Date</td>
                  <td>Title</td>
                  <td>Editor</td>
                  <td>Task Type</td>
                  <td>Status</td>
                  <td width="140">Operation</td>
                </tr>
              </thead>
              <tbody>
                @foreach ($list as $key)
                  <tr>
                    <td>{{$key->id}} </td>
                    <td>{{tcevir($key->createdate,  '1')}} </td>
                    <td>{{$key->title}}</td>
                    <td>{{editor($key->userid)}} </td>
                    <td>{{taskName($key->tasktype)}} </td>
                    <td>{{status($key->status)}}</td>
                    <td>
                    
                      <a href="/panel/bugs/edit/{{$key->id}}" class="btn btn-primary">Edit</a> 
                      <a href="/panel/bugs/delete/{{$key->id}}" class="btn btn-danger" onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">delete</a>


                    </td>
                  </tr>
                  
                @endforeach

               
              </tbody>
          </table>
      </div>
  </div>
