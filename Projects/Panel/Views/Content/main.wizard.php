<a href="/panel/content/new"><button class="btn btn-primary">New Content</button></a>
<a href="/panel/category"><button class="btn btn-primary">Blog category management</button></a>
<h1>Content Management</h1>
<div class="widget-box">
  <div class="widget-title"><i class="icon-expand"></i>
    <h5>Content List</h5>
  </div>
  <div class="widget-content nopadding">
    {{DB::error()}}
    <table class="table table-bordered table-striped data-table">
      <thead>
        <tr>
          <th>#</th>            
          <th width="90">Create Date</th>
          <th>Title</th>
          <th>Status</th>
          <th>hit</th>
          <th>Lang</th>
          <th>Editör</th>
          <th>Operation</th>
        </tr>
      </thead>
      <tbody>
        @foreach (contentListAdmin() as $key)
        <tr class="odd gradeX">
          <td>{{$key->id}}</td>
          <td>{{tcevir($key->create_date)}}</td>
          <td><a href="/panel/content/edit/{{$key->id}}"><i class="fa fa-edit"></i> {{$key->title}}</a></td>
          <td> {{ status($key->status) }}</td>
          <td> {{$key->hits}}</td> 
          <td>{{$key->lang}}</td>
          <td>{{yazar($key->editor)}}</td>
          <td>
            <a href="/panel/content/copy/{{$key->id }}"><button><i class="fas fa-copy"></i></button></a>
            
            <a href="/panel/content/delete/{{$key->id }} " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')"><button class="btn-danger"><i class="fa fa-trash"></i></button></a>
          </td>
        </tr>    
        @endforeach
      </tbody>
    </table>
  </div>
</div>
