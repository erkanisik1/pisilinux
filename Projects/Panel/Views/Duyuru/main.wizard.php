<a href="/panel/duyuru/new"><button  class="btn btn-primary">Yeni Duyuru</button></a>

<style>
  .status{
    border: 1px solid #4C4C4C;
    padding: 3px;
    cursor: pointer;
  }
</style>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-bars"></i> </span>
      <h5>Duyuru List</h5>
      
    </div>
    <div class="widget-content nopadding" >

      <table class="table table-bordered data-table">
        <thead>
          <tr>
            <th width="100">Create Date</th>
            <th>Title</th>
            <th>Text</th>
            <th>Lang</th>           
            <th>Status</th>
            <th>Operation</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($list as $key)
          <tr >            
            <td>{{tarih($key->createDate,'-')}}</td>
            <td><a href="/panel/duyuru/edit/{{$key->id }} "><i class="fa fa-edit"></i> {{$key->title}}</a></td>
          
            <td>{{$key->text}}</td>
            <td>{{$key->lang}}</td>
            <td><p class="status" data-id='{{$key->id}}' data-status='{{$key->status}}' title="durumu değiştirmek için tıklayın">{{status($key->status)}}</p></td>
            
            <td>                      
              <a href="/panel/download/delete/{{$key->id }} " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
              </a>
            </td>
           
          </tr>    
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
