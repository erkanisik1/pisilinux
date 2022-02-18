<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">Yazılarım
       <div class="pull-right" style="margin:-6px;"><a href="/members/content/new"><button class="btn btn-default"> + İÇERİK EKLE</button></a></div>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
           <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>            
                    <th>Tarih</th>
                    <th>Başlık</th>
                    <th>Kategori</th>
                    <th>Durum</th>
                    <th>İşlemler</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach (user_content_list(session::select('userid')) as $key)
                     <tr>
                    <td></td>
                    <td>{{tcevir($key->create_date)}}</td>
                    <td>{{$key->title}}</td>
                    <td>{{category_name($key->category_id)}}</td>
                    <td>{{contentStatus($key->status)}}</td>
                    <td>
                      <a href="/members/content/edit/{[ echo $key->id; ]}"><button alt="Düzenle"><i class="glyphicon glyphicon-pencil"></i></button></a>
                      <button class="btn-danger" id="delete" data-id="{[ echo $key->id; ]}" alt="Sil"><i class="glyphicon glyphicon-remove"></i></button></a>
                    </td>
                  </tr>                    
                 @endforeach
                 
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>