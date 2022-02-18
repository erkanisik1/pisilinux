<?php view('header');  ?>

 <div class="cevap"></div>
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>Mesaj</h5>
        </div>
        <div class="widget-content nopadding">
    
       <div class="form">
          <form action='#' method="post" id="cevap1" class="form-horizontal">  

              <div class="control-group">
              <label class="control-label">Tarih :</label>
              <div class="controls">
                <input type="text" name="" class="span11" id="gonderen" value="<?php echo $read->date; ?>" readonly >
              </div>
            </div>        

             <div class="control-group">
              <label class="control-label">Gönderen :</label>
              <div class="controls">
                <input type="text" name="gonderen" class="span11" id="gonderen" value="<?php echo $read->isim; ?>" readonly >
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Mail Adresi :</label>
              <div class="controls">
                <input type="text" name="email" class="span11" id="email" value="<?php echo $read->email; ?>" readonly>
              </div>
            </div>
            
             <div class="control-group">
              <label class="control-label">Mesajı :</label>
              <div class="controls">
                <div class="alert alert-success alert-block span11">           
                  <p><?php echo $read->mesaj ?></p> 
               </div>
               
              </div>
            </div>
        

            <div class="control-group">
              <label class="control-label">Cevap :</label>
              <div class="controls">
                <textarea name="cevap" id="cevap" rows="10"  class="span11"><?php echo $read->cevap ?></textarea>
              </div>
            </div>


             <div class="form-actions">
              <input type="hidden" name="senddate" id="currentDate" value="">
              <input type="hidden" name="id" value="<?php echo $read->id; ?>">
              <button type="button" id="" class="sendform btn btn-success btn-block">Maili Cevapla</button>
            </div>
          </form>
          </div>
          <div class="messageout" style="display:none;"></div>
    </div>
  </div>
<?php view('footer'); ?>