
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title><?php //echo ayar()->ayar_title; ?></title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       
        <link rel="stylesheet" href="/<?php echo THEMES_DIR ?>panel/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/<?php echo THEMES_DIR ?>panel/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="/<?php echo THEMES_DIR ?>panel/css/matrix-login.css" />
        <link href="/<?php echo THEMES_DIR ?>panel/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>

        <div id="loginbox">            
            <form id="loginform" class="form-vertical"  method="post">
                 <div class="control-group normal_text"> 
                        
                 <h3><?php //echo ayar()->ayar_title; ?> Login</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-envelope"></i></span><input type="text" name="mail" value="" placeholder="Mail Adresiniz" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" value="" name="pass" placeholder="Şifre" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                  
                    <span class="pull-right"><button type="submit" class="btn btn-success">Giriş</button ></span>
                </div>
            </form>
        </div>
        
        <script src="/<?php echo THEMES_DIR ?>panel/js/jquery.min.js"></script>  
        <script src="/<?php echo THEMES_DIR ?>panel/js/matrix.login.js"></script> 
    </body>

</html>
