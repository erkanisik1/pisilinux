  <div class="stat">
    <a href="/panel/user">
      <button>
        <i class="fas fa-users"></i> Active Users: {{activeUserCount()}}
      </button>
    </a>
    <a href="/panel/user/disable_member">
      <button>
        <i class="fas fa-users-slash"></i> Banned Users: {{disableMemberCount()}}
      </button>
    </a>
    <a href="/panel/user/pending_member">
      <button>
        <i class="fas fa-user-plus"></i> Members Approval : {{pendingMemberCount()}}
      </button>
    </a>
  </div>

  <hr>

  <a href="/panel/user">
    <button class="btn btn-primary btn-large tip-top" data-original-title="Kullanıcılar bölümünü açar.">
      <i class="fas fa-user-plus 2x"></i> User
    </button>
  </a>

  <a href="/panel/duyuru">
    <button class="btn btn-primary btn-large tip-top" data-original-title="Duyuru bölümünü açar.">
      <i class="fas fa-cog 2x"></i> Duyuru
    </button>
  </a>

  <a href="/panel/content">
    <button class="btn btn-primary btn-large tip-top" data-original-title="Blog bölümünü açar.">
      <i class="fas fa-cog 2x"></i> Blog
    </button>
  </a>

  <a href="/panel/slayt">
    <button class="btn btn-primary btn-large tip-top" data-original-title="Slider bölümünü açar.">
      <i class="fas fa-cog 2x"></i> Slider
    </button>
  </a>

  <a href="/panel/wiki">
    <button class="btn btn-primary btn-large tip-top" data-original-title="Slider bölümünü açar.">
      <i class="fas fa-cog 2x"></i> Wiki
    </button>
  </a>

  <hr>

  <div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="fa fa-th"></i></span>
      <h5>Yönetim Mesaj Alanı</h5>
    </div>
    <div class="widget-content nopadding">
      <table class="table table-bordered table-striped">
        <tbody>
        @foreach (messageListAdmin() as $key ):
          <tr class="gradeX"><td><b><a href="/panel/messages/read/{{$key->id}}">{{$key->title}}</a></td></tr> 
        @endforeach 
        </tbody>
      </table>
    </div>
  </div>
  
  <hr>
  
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="fa fa-th"></i></span>
      <h5>Onay bekleyen wiki yazıları</h5>
    </div>
    <div class="widget-content nopadding">
      <table class="table table-bordered table-striped">
        <thead class="thead-dark">
          <tr>
            <td width="16">ID</td>
            <td width="100">Create Date</td>
            <td>Title</td>
            <td>Editor</td>
            <td>Category</td>
            <td>Status</td>
          </tr>
        </thead>
        <tbody>
        @foreach (wiki_update_content() as $key)
          <tr class="gradeX">
            <td>{{$key->id}} </td>
            <td>{{tcevir($key->zaman,  '1')}} </td>
            <td><a href="/panel/wiki/edit/{{$key->id}}">{{$key->baslik}}</a></td>
            <td>{{editor($key->editor)}} </td>
            <td>{{wikiCategoryName($key->katid);}} </td>
            <td>{{status($key->durum)}}</td>
          </tr>                  
        @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="fa fa-th"></i></span>
      <h5>Onay bekleyen yazılar</h5>
    </div>
    <div class="widget-content nopadding">
      <table class="table table-bordered table-striped">
        <thead class="thead-dark">
          <tr>
            <td width="16">ID</td>
            <td width="100">Create Date</td>
            <td>Title</td>
            <td>Editor</td>
            <td>Category</td>
          </tr>
        </thead>
        <tbody>
        @foreach (content_confirmation() as $key)
          <tr class="gradeX">
            <td>{{$key->id}} </td>
            <td>{{tcevir($key->create_date,  '1')}} </td>
            <td><a href="/panel/content/edit/{{$key->id}}">{{$key->title}}</a></td>
            <td>{{editor($key->editor)}} </td>
            <td>{{wikiCategoryName($key->category_id);}} </td>
          </tr>                  
        @endforeach
      </tbody>
    </table>
  </div>
</div>