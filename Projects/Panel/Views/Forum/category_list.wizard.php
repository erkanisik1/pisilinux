<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
    <h5>FORUM KATEGORİLER</h5>
    <div class="pull-right" style="margin:5px;"><a href="/panel/forum/forumKat"><button>YENİ KATEGORİ</button> </a></div>
  </div>
  <div class="widget-content nopadding">
<style>
  tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Kategoriler</th>
          <th>Açıklama</th> 
          <th>Status</th> 
          <th width="80">İşlemler</th>
        </tr>
      </thead>
      <tbody>   
        @foreach ($catList as $key)
        <tr>
          <td><b>{{$key->adi}}</b></td>
          <td>{{$key->aciklama}}</td>
          <td>{{status($key->status)}}</td>
          <td class="islemler" style="text-align: center;">
            <a href="/panel/forum/kategori_edit/{{$key->id;}}"><i class="fas fa-pencil-alt"></i></a>
            <a href="/panel/forum/category_delete/{{$key->id;}}" onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')"><i class="fa fa-trash"></i></a>
          </td>
        </tr>     
        @foreach (forun_alt_kat($key->id) as $key )
                     <tr>
          <td>--{{$key->adi}}</td>
          <td>{{$key->aciklama}}</td>
          <td>{{status($key->status)}}</td>
          <td class="islemler" style="text-align: center;">
<a href="/panel/forum/kategori_edit/{{$key->id;}}"><i class="fas fa-pencil-alt"></i></a>
<a href="/panel/forum/category_delete/{{$key->id;}}" onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')"><i class="fas fa-trash"></i></a>
</td>
        </tr>  
           @endforeach    
     @endforeach            
      

    </tbody>
  </table>
</div>
</div>