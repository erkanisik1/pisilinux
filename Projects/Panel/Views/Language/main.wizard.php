<a href="/panel/language/new"><button class="btn btn-primary">New Language</button></a>

<h1>Language Management</h1>
<div class="widget-box">
  <div class="widget-title"><i class="icon-expand"></i>
    <h5>Language List</h5>
  </div>
  <div class="widget-content nopadding">
    <table class="table table-bordered table-striped data-table">
      <thead>
        <tr>            
          <th width="90">ID</th>
          <th>Language</th>
          <th>slug</th>
          <th>seo</th>
          <th>flag</th>
          <th>Operation</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($list as $key)
        <tr class="odd gradeX">
          <td>{{$key->id}}</td>
          <td><a href="/panel/language/edit/{{$key->id}}"><i class="fa fa-edit"></i>{{$key->language}} </a></td>
          <td>{{$key->slug}} </td>
          <td>{{$key->seo}} </td> 
          <td><img src="{{$key->flag}}" alt="" width="50"></td>
          <td>
            <a href="/panel/content/delete/{{$key->id}}" onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')"><button class="btn-danger"><i class="fa fa-trash"></i></button></a>
          </td>
        </tr>    
        @endforeach
      </tbody>
    </table>
  </div>
</div>
