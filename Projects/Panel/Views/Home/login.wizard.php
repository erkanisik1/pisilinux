

        <div id="loginbox">            
            <form id="loginform" class="form-vertical"  method="post">
                 <div class="control-group normal_text"> 
                        
                 <h3>{[ //echo ayar()->ayar_title; ]} Login</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="fas fa-envelope"></i></span><input type="text" name="mail" value="" placeholder="Mail Adresiniz" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="fas fa-lock"></i></span><input type="password" value="" name="pass" placeholder="Şifre" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                  
                    <span class="pull-right"><button type="submit" class="btn btn-success">Giriş</button ></span>
                </div>
            </form>
        </div>
