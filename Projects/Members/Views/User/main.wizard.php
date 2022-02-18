
<!-- bluebox theme  -->
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">{[ echo lang('form', 'myprofile') ]}</div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
          <form role="form" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label>{[ echo lang('form', 'namesurname') ]}</label>
              <input class="form-control" name="username" value="{[ echo $profil->username; ]}">
            </div>

             <div class="form-group">
              <label>{[ echo lang('form', 'nickname') ]}</label>
              <input class="form-control" name="nickname" value="{[ echo $profil->nickname; ]}">
            </div>


            <div class="form-group">
              <label>{[ echo lang('form', 'mailadress') ]}</label>
              <input class="form-control" name="mail" value="{[ echo $profil->mail; ]}">
            </div>

            <div class="form-group">
              <label>{[ echo lang('form', 'avatar') ]} (<strong>{[ echo lang('form', 'avatarsub') ]}..</strong>)</label><br>

              <img src="/{[ echo $profil->avatar; ]} " alt="" width="80">
              <input type="file" name="avatar" class="form-control"  >
            </div>
        

              <div class="form-group">
              <label>{[ echo lang('form', 'traning') ]}</label>
              <input class="form-control" name="egitim" value="{[ echo $profil->egitim; ]}">
            </div>

            <div class="form-group">
              <label>{[ echo lang('form', 'job') ]}</label>
              <input class="form-control" name="meslek" value="{[ echo $profil->meslek; ]}">
            </div>

            <div class="form-group">
              <label>{[ echo lang('form', 'skills') ]}</label>
              <input class="form-control" name="beceri" value="{[ echo $profil->beceri; ]}">
            </div>

             <input type="hidden" name="user_id" value="{[ echo $profil->user_id; ]}">
              <button type="submit" class="btn btn-primary btn-block">{[ echo lang('form', 'update') ]}</button>
              
            </form>
        </div>
        </div>
        </div>
      </div>
