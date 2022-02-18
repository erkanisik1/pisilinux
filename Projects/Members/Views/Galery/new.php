<?php import::view('header'); ?>

<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading"><?php echo lang('content','add_content') ?></div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
          <form role="form" method="post">
            <h4><span class="label label-danger"><?php echo lang('content','Fields_marked_with_*_cannot_be_empty') ?>...</span></h4>
            <div class="form-group">
              <label>*<?php echo lang('content','category') ?></label>
               <select name="category_id" id="" class="form-control" required>
                  <option value=""><?php echo lang('content','select_article_category') ?>...</option>
                  <?php foreach (galeryCategory() as $key): ?>
                    <option value="<?php echo $key->id ?>"><?php echo $key->name ?></option>
                  <?php endforeach ?>
                 
                </select>                     
            </div>
             <div class="form-group">
              <label>*<?php echo lang('content','labels') ?></label>
              <input type="text" name="link" class="form-control" placeholder="<?php echo lang('content','label_placeholder') ?>..." required>            
            </div>

             <div class="form-group">
              <label>*<?php echo lang('content','description') ?></label>
              <input type="text" name="description" class="form-control" required placeholder="<?php echo lang('content','description_placeholder') ?>...">            
            </div>
 <button type="submit" class="btn btn-primary btn-block"><?php echo lang('content','save') ?></button><br>
<h4><span class="label label-danger"><?php echo lang('content','note') ?></span></h4>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>




    
     
      
<?php import::view('footer'); ?>