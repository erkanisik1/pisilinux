
<style>
  .tr2{
    background: #CFCFCF;
  }
</style>
<a href="/panel/forum/category_list"><button class="btn btn-primary">Forum category management</button></a>
<h1>Forum Management</h1>
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
    <h5>Konular</h5>
    
  </div>
  <div class="widget-content nopadding">

    <table class="table table-bordered table-striped data-table">
      <thead>
        <tr>
        	<th>#</th>
	        <th>Ana Konu başlığı</th>
	        
	        <th width="150">Kategori</th>
	        <th width="175">İşlemler</th>
        </tr>
      </thead>
      <tbody>   

		@foreach ($konu as $key)
			<tr class="tr2">
				<td class="text-center">{{$key->id}}</td>
				<td>{{$key->title}}</td>
			
				<td>{{forumCategoryName($key->category_id)}}</td>
				<td>
          <a href="/panel/forum/konu/{{$key->id}}"><button>Cevaplar</button></a> 
          <a href="/panel/forum/edit/{{$key->id}}"><button>Düzenle</button></a>  
          <a href="/panel/forum/delete/{{$key->id}}"><button>Sil</button></a></td>
			</tr>				
		@endforeach

      </tbody>
  </table>