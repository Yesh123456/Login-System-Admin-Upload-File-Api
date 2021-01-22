 <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin | Home</title>
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
                position:absolute;
                top:30%;
                left:30%;
                max-width: 35%;
                max-height: 40%;
                background-color: rgba(255,255,255, 0.4);
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
                </ul>
            </div>
        </div>
    </nav>
    <section id="home">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 style="text-align: center">Hello Admin!</h2>
          <h2 style="text-align: center">Welcome<br><i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
          </h2>
        </div>
      </div>
    </div>
  </section>

    <footer class="py-3 bg-dark footer">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
    </footer> 
    <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"src="<?php echo base_url(); ?>bootstrap/js/test/vendor/jquery-1.9.1.min.js"></script>
</body>
</html> 