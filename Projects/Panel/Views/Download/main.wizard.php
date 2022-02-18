
<a href="download/new"><button class="btn btn-primary">+ New Download</button></a>
<h1>Download Management</h1>


<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-bars"></i> </span>
      <h5>Download List</h5>
      
    </div>
    <div class="widget-content nopadding" >

      <table class="table table-bordered data-table">
        <thead>
          <tr>
            <th>Title</th>
           
            <th>Link</th>
            <th>Hit</th>
            <th>MD5-SHA1</th>
            <th>Lang</th>
           
            <th>Operation</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($list as $key)
          <tr >            
            <td><a href="/panel/download/edit/{{$key->id }} "><i class="fa fa-edit"></i> {{$key->baslik}}</a></td>
          
            <td>{{$key->link}}<br>{{$key->link2}}</td>
            <td>{{$key->count}}</td>
            <td>{{'MD5: '.$key->md5sum.'<br>SHA1:'.$key->sha1sum}}</td>
            <td>{{$key->lang}}</td>
            
            <td>
              <a href="/panel/download/copy/{{$key->id }}"><button class="btn"><i class="fas fa-copy"></i></button></a>

              <a href="/panel/download/edit/{{$key->id }}"><button class="btn"><i class="fa fa-edit"></i></button></a>
           
            <a href="/panel/download/delete/{{$key->id }} " onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')"><button><i class="fa fa-trash"></i></button></a>
            </td>
           
          </tr>    
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
