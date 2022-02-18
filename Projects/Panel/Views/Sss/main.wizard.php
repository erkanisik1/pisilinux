
<a href="/panel/sss/new"><button class="btn btn-primary">New SSS Content</button></a>
<a href="/panel/sss/category"><button class="btn btn-primary">SSS category management</button></a>
<h1>S.S.S Management</h1>
<div class="widget-box">
      <div class="widget-title"><span class="icon"><i class="fa fa-th"></i></span>
            <h5>Sık Sorulan Sorular</h5>
      </div>
      <div class="widget-content nopadding">
            <table class="table table-bordered">
                  <thead>
                        <tr>
                              <th width="10">ID</th>
                              <th>Soru</th>
                              <th>Cevap</th>
                              <th width="120">İşlemler</th>
                        </tr>
                  </thead>
                  <tbody>
                  @foreach ($liste as $key )
                        <tr>
                              <td>{{$key->id }}</td>
                              <td><a href="/panel/sss/edit/{{$key->id }}">{{$key->question }}</a></td>
                              <td>{{$key->answer }}</td>
                              <td><a href="/panel/sss/delete/{{$key->id }}"><button class="btn btn-danger">sil</button></a></td>
                        </tr>
                  @endforeach
                  </tbody>
            </table>
      </div>
</div>