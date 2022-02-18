
<h1 style="text-align: center;">ÜYE YÖNETİM PANELİ</h1>
<hr>
<a href="/panel/user/pending_member" class="btn btn-primary">Onay Bekleyen Üyeler</a>
<a href="/panel/user/disable_member" class="btn btn-primary">Yasaklanmış Üyeler</a>
<a href="panel/user/isimTekrarlananUyeler" class="btn btn-primary">İsme göre çoklu kayıtlar</a>
<a href="panel/user/mailTekrarlananUyeler" class="btn btn-primary">E-Postaya göre çoklu kayıtlar</a>
<hr>
<style>
  .gri a{
    color: #666 !important;
  }
</style>

 <div class="widget-box">
   <div class="widget-title">
    <h5>Üye Ara</h5>
  </div>
  <div class="widget-content nopadding">
    <form action="#" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Kullanıcı Adı :</label>
              <div class="controls">
                <input type="text" class="span11" name="username" />
              </div>
            </div>
              
            <div class="form-actions">
              <button type="submit" class="btn btn-success">ARA</button>
            </div>
          </form>
  </div>
</div>
<hr>
  <div class="widget-box">
   
  <div class="widget-content nopadding">
    <table class="table table-bordered">
     <thead>
      <tr>
        <th width="10">#</th>
        <th width="70">KAYIT TARİHİ</th>
        <th>ÜYE ADI</th>
        <th>MAİL ADRESİ</th>
        <th width="50">YETKİSİ</th>
        <th width="100">Durumu</th>
        <th width="100">SON GİRİŞ TARİHİ</th>        
        <th width="110">İŞLEMLER</th> 
      </tr>
    </thead>
    <style>
      .disable_member{
        width: 37px;

      }
      .disable_member:hover{
        color: red;
      }
      .center{
        text-align: center !important;
      }
    </style>
    <tbody role="alert" aria-live="polite" aria-relevant="all">
      @if($active_member)
    @foreach ($active_member as $key)
        <tr>
          <td class="center">{{$key->user_id}}</td>
          <td class="center">{{tcevir($key->date)}}</td>
          <td class="gri"><a href="/panel/messages/write/{{$key->user_id}}">{{$key->username}}</a></td>
          <td class="gri"><a href="/panel/user/mail/{{$key->user_id}} "><i class="fa fa-envelope fa-2x"></i> {{$key->mail}}</a></td>
          <td class="center">{{member_role($key->authority)}}</td>
          <td class="center">{{statusAdmin($key->status)}}</td>
          <td class="center">
            @if (isset($key->login_date))
             {{$key->login_date}}
            @endif
         </td>
          <td style="text-align: center" class="gri">
            <e class="disable_member" data-id='{{$key->user_id ]}'><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></e>
            <a href="/panel/user/edit/{{$key->user_id}} "><i class="fa fa-edit fa-2x"></i> </a>
            <e class="delete_member" data-id='{{$key->user_id ]}'><i class="fa fa-trash fa-2x"></i></e>
         </td>
       </tr>
  @endforeach
  @endif
   </tbody>
 </table>

</div>
</div>
