
<a href="/panel/slayt/new"><button class="btn btn-primary">New Slayt</button></a>
<h1>Slayt Management</h1>
</div>
<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="fa fa-th"></i></span>
    <h5>Slayt Listesi</h5>    
  </div>
  <div class="widget-content nopadding">
    <table class="table table-bordered data-table">
      <thead>
        <tr>
          
          <th>BAŞLIK</th>
          <th width="10">DURUM</th>
          
          
          <th width="20" colspan="2">SIRALAMA</th>
          <th width="100">İŞLEMLER</th> 
        </tr>
      </thead>
      <tbody>
        @foreach ($slider_list as $key)
          <tr>
            
            <td>{{$key->baslik}}</td>
            <td class="sliderStat" data-id="{{$key->id}}" data-status='{{$key->durum}}' style="text-align: center;">{{status1($key->durum)}}</td>
           <style>
             .up{color: #000;}
           </style>
            <td style="text-align: center">{{$key->sira}}</td>
            <td width="30" style="text-align: center;">  
              @if ($key->sira > 1)
                <a href="/panel/slayt/up/{{$key->id}}"><i class="fa fa-chevron-up up"></i></a>
              @endif
              @if ($sira_max > $key->sira)                
                <a href="/panel/slayt/down/{{$key->id}}"><i class="fa fa-chevron-down up"></i></a>
              @endif                 
            </td>
            <td style="text-align: center;" >
              <a href="/panel/slayt/edit/{{$key->id}} "><button><i class="fa fa-edit fa-lg"></i></button></a>
              <a href="/panel/slayt/delete/{{$key->id}}" onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')"><button><i class="fa fa-trash fa-lg"></i></button></a>
            </td>
          </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
