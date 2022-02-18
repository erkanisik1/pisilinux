

<!-- bluebox theme  -->
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">{[ echo lang('form','Password_Change_Form') ]}</div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
          <form role="form" method="post" >

        @if(isset($message))
          <div class="alert alert-error alert-block" style="margin:10px;border-radius: 5px;"> 
            <a class="close" data-dismiss="alert" href="#">×</a>
            <h4 class="alert-heading">Hata!</h4>
            {{$message}} 
          </div>
        @endif
             <div class="form-group">
              <label>{{lang('form','Your_Current_Password')}}</label>
              <input class="form-control" type="password" name="pass" value="">
            </div>


             <div class="form-group">
              <label>{[ echo lang('form','new_password') ]}</label>
              <input class="form-control" type="password" name="newpass" value="">
            </div>


             <div class="form-group">
              <label>{[ echo lang('form','password_again') ]}</label>
              <input class="form-control" type="password" name="newpassrepeat" value="">
            </div>
                    
              <button type="submit" class="btn btn-default">{[ echo lang('form','update') ]}</button>
              
            </form>
        </div>
        </div>
        </div>
      </div>
    <!--  -->


