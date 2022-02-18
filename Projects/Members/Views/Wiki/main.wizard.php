<!-- liste  -->
<div class="col-md-12">
 <div class="panel panel-default">
  <div class="panel-heading">
    Wiki {[ translate('posts') ]}
     <div class="pull-right" style="margin:-6px;"><a href="/members/wiki/new" target="_blank"><button class="btn btn-default"> + {[ translate('add') ]}</button></a></div>
  </div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table">  
        <thead>
          <tr>
              
            <th width="100">{[ translate('AdditionDate') ]}</th>
            <th>{[ translate('title') ]}</th>
            <th width="100">{[ translate('category') ]}</th>
            <th width="150">Status</th>
            <th width="300">{[ translate('action') ]}</th>
          </tr>
        </thead> 
        <tbody>
          @foreach ($yazilist as $key)
          @if($key->deleted != '1')
          <tr>
            <td>{[ echo tcevir($key->zaman); ]}</td>
            <td>{[ echo $key->baslik; ]}</td>
            <td>{[ echo wiki_katname($key->katid); ]}</td>
            <td>{{wikiStatus($key->durum)}}</td>           
           <td>
              <a href="/wiki/preview/{[ echo $key->id ]}" target="_blank"><button><i class="fa fa-eye"></i> Ön İzleme</button></a>
              <a href="/members/wiki/edit/{[ echo $key->id ]} "><button><i class="fa fa-edit"></i> Düzenle</button></a>
              <a href="/members/wiki/delete/{[ echo $key->id ]} " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
                <button><i class="fa fa-trash-o"></i> Sil</button>
              </a>
            </td>
          </tr>
          @endif
         @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<!--  -->

