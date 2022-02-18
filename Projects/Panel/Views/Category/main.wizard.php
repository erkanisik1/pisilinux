<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
      <h5>CATEGORIES</h5>
      <div class="pull-right" style="margin:5px;"><a href="/panel/category/new"><button>NEW CATEGORY</button> </a></div>
    </div>
   	<div class="widget-content nopadding">
     	<table class="table table-bordered table-striped">
        <thead>
          <tr>
            
            <th>CATEGORY</th>
            <th>DESCRIPTION</th> 
            <th width="60">LANGUAGE</th> 
            <th width="80">TRANSACTIONS</th>
          </tr>
        </thead>
        <tbody>
        @foreach (contentCategory() as $key)
           <tr>
             <td>{{$key->name}}</td>
             <td>{{$key->description}}</td>
             <td class="text-center">{{$key->lang}}</td>
             <td class="text-center">
               <a href="/panel/category/edit/{{$key->id}}"><button><i class="fas fa-edit"></i></button></a>
               <a href="/panel/category/delete/{{$key->id}}"><button><i class="fas fa-trash"></i></button></a>
             </td>
           </tr>
        @endforeach

          
          
        </tbody>
      </table>
 	  </div>
  </div>
