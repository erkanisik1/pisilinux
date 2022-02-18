<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>New Language</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="post" class="form-horizontal">

               <div class="control-group">
              <label class="control-label">Language :</label>
              <div class="controls">
                <input type="text" name="language" class="span11" value="{{langRow($id)->language}}">
              </div>
            </div>

		         <div class="control-group">
              <label class="control-label">Slug :</label>
              <div class="controls">
                <input type="text" name="slug" class="span11" value="{{langRow($id)->slug}}">
              </div>
            </div>


             <div class="control-group">
              <label class="control-label">Flag link :</label>
              <div class="controls">
                <input type="text" name="flag" class="span11" value="{{langRow($id)->flag}}">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Flag img :</label>
              <div class="controls">
                <img src="{{langRow($id)->flag}}" alt="">
              
              </div>
            </div>
            <div class="form-actions">
              <input type="hidden" name="id" value="{{$id}}">
              <button type="submit" class="btn btn-success btn-block">{{translate('save')}}</button>
            </div>
      </form>
        </div>
      </div>