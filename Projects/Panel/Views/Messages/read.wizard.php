<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
            <h5>Read Messages</h5>
          </div>
          <div class="widget-content nopadding">
            <ul class="recent-posts">
              <li>
                <strong>{{messageRow($id)->title}}</strong>
                	
                
                <div class="article-post">
                  <div class="fr">
                  	<a href="/panel/messages/delete/{{$id}}" class="btn btn-danger btn-mini"  onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">Delete</a></div>
                  <span class="user-info"> By: {{userRow(messageRow($id)->userId)->username}} / Date: {{tcevir(messageRow($id)->createDate)}} </span>
                  <p><a href="#">{{messageRow($id)->message}}</a> </p>
                </div>
              </li>
             
            </ul>
          </div>
        </div>