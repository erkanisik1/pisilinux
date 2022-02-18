<div class="span12">
<form action="islem" method="post">
<button class="btn btn-danger">Deleted</button>
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-bars"></i> </span>
      <h5>Onay bekleyen Üyeler</h5>
    </div>
    <div class="widget-content nopadding">
      <button type="button" id="selectAll" class="btn btn-primary">
          <span class="sub"></span> Select All</button>
      <table class="table table-bordered data-table " id="example">
        <thead class="table-dark">
          <tr>
            <th></th>
            <th>#</th>
            <th width="100">KAYIT TARİHİ</th>
          
            <th>ÜYE ADI</th>
            <th>MAİL ADRESİ</th>
            <th>AKTİVİZASYON KODU <br>( Kodu tekrar göndermek için kodun üstüne tıklayın ) </th>
            <th width="100">İŞLEMLER</th> 
          </tr>
        </thead>
        <tbody>
          @foreach ($pending_member as $key)
            <tr>
              
              <td class="center"><input type="checkbox" name="select[]" value="{{$key->user_id}}" /></td>
              <td>{{$key->user_id}}</td>
              <td>{{tcevir($key->date)}}</td>
            
              <td>{{$key->username}}</td>
              <td>{{$key->mail}}</td>
              <td><p class="active1" data-id="{{$key->aktivizasyon}}" >{{$key->aktivizasyon}}</p></td>
              <td style="text-align: center">
                <a href="/panel/user/mail/{{$key->user_id}} "><button><i class="fa fa-envelope"></i></button></a>
                <a href="/panel/user/edit/{{$key->user_id}} "><button><i class="fa fa-edit"></i></button></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</form>
</div>