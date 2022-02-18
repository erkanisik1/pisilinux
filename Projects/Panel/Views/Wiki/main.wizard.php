

<a href="/panel/wiki/new_content"><button class="btn btn-primary">New Wiki Content</button></a>
<a href="/panel/wiki/category"><button class="btn btn-primary">Wiki category management</button></a>
<h1>Wiki Management</h1>
<!-- liste  -->
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
    <h5>Wiki Yazıları</h5>
     
  </div>
  <div class="widget-content nopadding">
     <table class="table table-bordered data-table">
        <thead>
          <tr>
            <th>#</th>            
            <th>Tarih</th>
            <th>Başlık</th>
            <th>Kategori</th>
            <th>Ekleyen</th>
            <th>Dil</th>
            <th width="20">Durum</th>
            <th width="100">İşlemler</th> 
          </tr>
        </thead>
        <tbody>
          @foreach ($yazilist as $key)            
          <tr >
            <td>{{$key->id}}</td>
            <td>{{tcevir($key->zaman)}}</td>
            <td><a href="/panel/wiki/edit/{{$key->id}}" style="color:#000 !important; ">{{$key->baslik}}</a></td>
            <td>{{wiki_katname($key->katid)}}</td>
            <td>{{editor($key->editor)}}</td>
            <td>{{$key->lang}}</td>
            <td>{{status1($key->durum) }}</td>
            <td class="text-center">
              <a href="/wiki/content/{[ echo $key->id ]}" target="_blank">
                <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
              </a>
              <a href="/panel/wiki/adminDelete/{{$key->id}} " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>