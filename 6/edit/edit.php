<?php
include '../koneksi.php';

  $id          = $_GET['id'];
  $sql         = mysqli_query($con, "SELECT * FROM product WHERE id='$id'");
  $k           = mysqli_fetch_array($sql);
// membuat data jurusan menjadi dinamis dalam bentuk array
  
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Free Responsive Admin Theme - ZONTAL</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="../assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="../index.php">
                    <img src="../assets/img/logo1.png" />
                </a>



            </div>
            <div style="float: right; margin-top: 40px" class="navbar-header">
                
                <a class="btn btn-primary" href="../index.php">
                    BACK
                </a>

               

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            
          <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           TAMBAH
                        </div>
                        <div class="panel-body">
                       <form method="post" action="aksiedit.php">
                        <div class="form-group">
     <label for="exampleInputEmail1">CASHIER</label>
                
                
                  <select name="cashier" id="saldo" class="form-control">
                    <option value="">-- Pilih Cashier --</option>

                   <?php      
                    include '../koneksi.php';
                    $sql = mysqli_query($con, "SELECT * from cashier");

                    foreach ($sql as $r) { ?>  
                    <option value="<?php echo $r['id'];?>"<?php if ($k['id_cashier']==$r['id']) echo 'selected="selected"'; ?>><?php echo $r['name'];?></option>

                    <?php } ?>
                  </select>
                  
                
  </div>
  <div hidden class="form-group">
    <label for="exampleInputEmail1">ID</label>
    <input type="text" class="form-control" name="id" value="<?php echo $k['id']; ?>"/>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NAME</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $k['name']; ?>"/>
  </div>
<div class="form-group">
     <label for="exampleInputEmail1">CATEGORI</label>
                
                
                  <select name="categori" id="categori" class="form-control">
                    <option value="">-- Pilih Category --</option>

                   <?php      
                    include '../koneksi.php';
                    $sql = mysqli_query($con, "SELECT * from category");

                    foreach ($sql as $r) { ?>  
                    <option value="<?php echo $r['id'];?>"<?php if ($k['id_categori']==$r['id']) echo 'selected="selected"'; ?>><?php echo $r['name'];?></option>

                    <?php } ?>
                  </select>
                  
                
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">PRICE</label>
    <input type="text" class="form-control" name="price" value="<?php echo $k['price']; ?>"/>
  </div>
 
  
  
  <button type="submit" class="btn btn-default">Submit</button>
                          
</form>
                            </div>
                            </div>
                    </div>      
               
                
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
  
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../assets/js/bootstrap.js"></script>
</body>
</html>
