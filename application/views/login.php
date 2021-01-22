<!DOCTYPE html>
<html>
<head>
    <title>Admin | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/dist/css/bootstrap.min.css">
    <style type="text/css">

                body {
                background: linear-gradient(132deg, #f44336, #E91E63, #9C27B0, #673AB7, #3F51B5, #2196F3,#03A9F4, #00BCD4, #009688, #4CAF50, #FFC107, #FF9800, #f44336, #E91E63, #9C27B0, #673AB7, #3F51B5, #2196F3,#03A9F4, #00BCD4, #009688, #4CAF50, #FFC107, #FF9800);
                background-size: 400% 400%;
                animation: BackgroundGradient 30s ease infinite;
            }
            @keyframes BackgroundGradient {
                0% {background-position: 0% 50%;}
                50% {background-position: 100% 50%;}
                100% {background-position: 0% 50%;}
            }

        .container{
            position:absolute;
            top:30%;
            left:30%;
            max-width: 40%;
            background-color: rgba(255,255,255, 0.4);
        }
        .error{
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            color: red;
        }
        .colorgraph {
              height: 10px;
              border-top: 0;
              background: #c4e17f;
              border-radius: 5px;
              background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
              background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
              background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
              background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        }
    </style>
</head>
<body>
    <div style="background-image: url(); background-attachment: fixed; background-size: cover; width: 100%; height: 100vh; position: relative;"  >
    <div class="container col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

    <fieldset>
                        <?php
                            echo form_open($this->uri->uri_string());
                            
                                echo '<div class="error">';
                                echo  validation_errors();
                                echo '</div>';

                                $error_msg= $this->session->flashdata('error_msg');

                                  if($error_msg){
                                    ?>
                                    <div class="alert alert-danger">
                                    <strong>Try Again!</strong>
                                    <?php echo $error_msg; ?>
                                    </div>
                                    <?php
                                  }
                  ?>

            <h1 style="text-align: center; font-weight:bold;">Admin Login</h1>
                    <hr class="colorgraph">
            <div class="form-group">
                <input type="text" name="username" id="username" placeholder="Username" class="form-control input-lg" maxlength="25" value="<?php echo get_cookie('username'); ?>"> 
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Password" class="form-control input-lg" maxlength="50" value="<?php echo get_cookie('username'); ?>"> 
            </div>
            <hr class="colorgraph">
            <div class="form-group">
                <input type="checkbox" name="remember" 
                <?php echo get_cookie('remember') ? 'checked="checked"' : ''; ?>/>
                <label for="remember">Remember me</label>
            </div>
            <div class="form-group">
                <input type="submit" name="login" id="login" value="Login" class="btn btn-info btn-block">
            </div>
            
        </form>
    </fieldset>
    </div>
    </div>
<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>