<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Admin | Display</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <section id="home">
    <div class="container1">
        <div class="row">
            <div class="col-lg-8 mx-auto">
            <h1 style="text-align: center; font-weight:bold;">Record of data</h1>
            <?php
        
                $success1 = $this->session->flashdata('success1');
                $warning1 = $this->session->flashdata('warning1');

                if($success1)
                {
            ?>
            
            <div class="alert alert-success">
            <strong>Success!</strong>
            <?php 

                echo $success1; 
            ?>
            </div>
            <?php
                
                }
                if($warning1)
                {
            ?>
            
            <div class="alert alert-secondary">
            <strong>Alert!</strong>
            <?php 

                echo $warning1; 
            ?>
            </div>
            <?php
               
               }
            ?>

            <div class="bs-example">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Email-Id</th>
                            <th>Username</th>
                            <th>User_id</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                       
                        $query = $this->db->get('upload');
                        for($i = 0, $j = $query->num_rows(); $i < $j; $i++)
                        {   
                            // if(is_array($all_data))
                            // {
                                foreach($query->result() as $row)
                                {
                                  echo "<tr>";
                                  echo "<td>".$i."</td>";
                                  echo "<td>".$row->email."</td>";
                                  echo "<td>".$row->username."</td>";
                                  echo "<td>".$row->user_id."</td>";
                                  // echo "<td>".$row->password."</td>";
                                  echo "</tr>";
                                  $i++;
                                 }
                            // }
                         }
                        ?>
                    </tbody>
                </table>
                <br>
                <button class="btn btn-info" style="width: 200px; margin: 20px 480px; justify-content: center;">
                    <a style="text-decoration: none; color: white;" href="<?php echo site_url();?>/records/sending_model"?>Send</a>
                </button>
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
