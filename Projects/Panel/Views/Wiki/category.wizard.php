<!-- liste  -->
<div class="col-md-12">
 <div class="panel panel-default">
  <div class="panel-heading">
    Wiki Kategorileri
     <div class="pull-right" style="margin:-3px;"><a href="/panel/wiki/new_category"><button class="btn btn-primary">YENİ KATEGORİ EKLE</button></a></div>
  </div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
              <th width="70">Resim</th>
             <th>Kategori</th>
             <th>Açıklama</th>
            <th>İşlemler</th> 
          </tr>
        </thead>
        <tbody>
          @foreach (wikiCategory() as $key) 
          <tr>
           <td><img src="/{{$key->img}}" alt="" width="65"></td>
          
           <td>{[ echo $key->adi; ]}</td>
           <td>{[ echo $key->aciklama; ]}</td>
           
            <td>
              <a href="/panel/wiki/edit/{{$key->id}} "><button><i class="fa fa-edit"></i></button></a>
              <a href="/panel/wiki/delete/{{$key->id}} " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
                <button><i class="fa fa-trash-o"></i></button>
              </a>
            </td>
          </tr>


          <!-- alt kategoriler varsa -->
{[$a = '']} 

@foreach (wikiCategory($key->id) as $key1)
    <tr>
           <td><img src="{{$key1->img}}" alt="" width="65"></td>          
           <td>{[ echo '----»'.$key1->adi; ]}</td>
           <td>{[ echo $key1->aciklama; ]}</td>           
            <td>
              <a href="/panel/wiki/edit/{{$key1->id}} "><button><i class="fa fa-edit"></i></button></a>
              <a href="/panel/wiki/delete/{{$key1->id}} " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
                <button><i class="fa fa-trash-o"></i></button>
              </a>
            </td>
          </tr>
@foreach (wikiCategory($key1->id) as $key2)
    <tr>
           <td><img src="{{$key1->img}}" alt="" width="65"></td>          
           <td>{[ echo '--------»'.$key2->adi; ]}</td>
           <td>{[ echo $key2->aciklama; ]}</td>           
            <td>
              <a href="/panel/wiki/edit/{{$key2->id}} "><button><i class="fa fa-edit"></i></button></a>
              <a href="/panel/wiki/delete/{{$key2->id}} " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
                <button><i class="fa fa-trash-o"></i></button>
              </a>
            </td>
          </tr>
@endforeach
@endforeach

@endforeach
         

          
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
