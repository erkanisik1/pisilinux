
<a href="page/new"><button class="btn btn-primary"><i class="fas fa-plus-square"></i> New Page Content</button></a>
<h1>Page Management</h1>

<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-bars"></i> </span>
      <h5>Sayfa Listesi</h5>
    </div>
    <div class="widget-content nopadding">
      <table class="table table-bordered table-striped data-table">
        <thead>
          <tr>
            <th width="100">Create Date</th>
            <th>Title</th>
            <th>Language</th>
            <th>Status</th>
            <th width="70">İşlemler</th>
          </tr>
        </thead>
        <tbody>
          @foreach (pageList() as $key)
          <tr class="odd gradeX">
            <td>{{tcevir($key->create_date); }}</td>
            <td><a href="page/edit/{{$key->id; }} "><i class="fa fa-edit"></i> {{$key->title; }}</a></td>
            <td>{{$key->lang}}</td>
            <td >{{status($key->status) }}</td>
            <td  style="text-align:center;">
            <a href="page/delete/{{$key->id; }} " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')"><button><i class="fa fa-trash"></i></button></a></td>
          </tr>    
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
