 <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin | Upload</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>font-awesome-4.7.0/css/font-awesome.min.css">
        <style type="text/css">

            body{
                background: rgb(238,238,174);
            }
            header {
                padding: 156px 0 100px;
            }

            section {
                padding: 150px 0;
            }

            .container1{
                
                position: relative;
                width: 100%;
                min-height: 1px;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
                background-color: rgba(255,255,255,0.4);

            }

            #form1{
                padding-top: 30px;
                padding-bottom: 40px;
            }
            .custom-file-input.selected:lang(en)::after {
              content: "" !important;
            }

            .custom-file {
              overflow: hidden;
            }

            .custom-file-input {
              white-space: nowrap;
            }
            #logout{
                float:right;
            }

        </style>
    </head>
    <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i> Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo site_url('records/index');?>">Records</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo site_url('csv/index') ?>">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>index.php/user/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section id="upload">           
         <div class="container1 col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <div class="row">
                <div class="col-lg-8 mx-auto">       
                    <?php
        
                        $success = $this->session->flashdata('success');
                        $warning = $this->session->flashdata('warning');

                        if($success)
                        {
                    ?>
                    
                    <div class="alert alert-success">
                    <strong>Successfull!</strong>
                    <?php 

                        echo $success; 
                    ?>
                    </div>
                    <?php
                        
                        }
                        if($warning)
                        {
                    ?>
                    
                    <div class="alert alert-danger">
                    <strong>Successfull!</strong>
                    <?php 

                        echo $warning; 
                    ?>
                    </div>
                    <?php
                       
                       }
                    ?>

                    <h1 style="text-align: center; font-weight:bold; font-family: Sans;">   Upload file
                    </h1>
                    <form action="<?php echo site_url();?>/csv/uploadData" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
                   
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="userfile" id="customFileInput" aria-describedby="customFileInput">
                                <label class="custom-file-label" for="customFileInput">Select file</label>
                            </div>
                            <div class="input-group-append">
                                 <button class="btn btn-outline-primary" name="submit" type="submit" id="customFileInput">Upload</button>
                            </div>
                        </div>
                        <div style="text-align: center; padding-top:50px; height: 100px;">
                        <button class="btn btn-outline-info"><a style="text-decoration: none; color: black;" href="<?php echo site_url();?>/records/random"?>Generate</a></button>
                        </div>
                       
                        <script type="text/javascript">

                            document.querySelector('.custom-file-input').addEventListener('change', function (e) {
                                var name = document.getElementById("customFileInput").files[0].name;
                                var nextSibling = e.target.nextElementSibling;
                                nextSibling.innerText = name;
                            })
                        </script>
                        </form> 
                    </div>
                </div>    
            </div>
    </section>
     
    <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
    </footer> 
    <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"src="<?php echo base_url(); ?>bootstrap/js/test/vendor/jquery-1.9.1.min.js"></script>
</body>
</html>