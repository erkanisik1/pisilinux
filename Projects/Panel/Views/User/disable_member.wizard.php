
<div class="span12">
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-bars"></i> </span>
      <h5>Yasaklı Üyeler</h5>
    </div>
    <div class="widget-content nopadding">
      <table class="table table-bordered data-table" id="disable_member">
        <thead>
          <tr>
            <th>#</th>
            <th width="100">KAYIT TARİHİ</th>
            <th width="50">AVATAR</th>
            <th>ÜYE ADI</th>
            <th>MAİL ADRESİ</th>
           
            <th width="100">İŞLEMLER</th> 
          </tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          @foreach ($disable_member as $key)
            <tr cclass="gradeA odd">
              <td>{{$key->user_id}}</td>
              <td>{{tcevir($key->date)}}</td>
              <td><img src="../{{$key->avatar}}" alt="" width="50"></td>
              <td>{{$key->username}}</td>
              <td>{{$key->mail}}</td>
            
              <td style="text-align: center">
                <a href="/panel/user/mail/{{$key->user_id}} "><i class="fa fa-envelope fa-2x"></i></a>
                <a href="/panel/user/edit/{{$key->user_id}} "><i class="fa fa-edit fa-2x"></i></a>
                <a href="/panel/user/delete/{{$key->user_id}}" onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
                  <i class="fa fa-trash fa-2x"></i>
                </a>
              </td>
            </tr>
          @endforeach 
        </tbody>
      </table>
    </div>
  </div>
</div>
