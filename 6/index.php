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
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
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
                
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo1.png" />
                </a>



            </div>
            <div style="float: right; margin-top: 40px" class="navbar-header">
                
                <a class="btn btn-primary" href="tambah/tambah.php">
                    ADD
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
            
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Cashier</th>
                                            <th>Product</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    	include 'koneksi.php';
                                    	$sql = mysqli_query($con, "SELECT p.id as id, p.name as name, p.price as price, cy.name as categori, cr.name as cashier 
                                    		from product as p 
                                    		LEFT JOIN category as cy ON cy.id=p.id_categori
                                    		LEFT JOIN cashier as cr ON cr.id=p.id_cashier");
                                    	$no = 1;
                                    	foreach ($sql as $s) {
                                    
                                    	?>
                                    	 
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $s['cashier'];?></td>
                                            <td><?php echo $s['name'];?></td>
                                            <td><?php echo $s['categori'];?></td>
                                            <td><?php echo 'Rp. '.number_format($s['price'], 0, ".", ".")?></td>
                                            <td>
                                            		
                                            		<?php
                    								echo "<a href='edit/edit.php?id=$s[id]' class='btn btn-warning'><i class='icon-edit'></i> EDIT</a>";
                                                    echo " ";
                    								echo "<a href='hapus/hapus.php?id=$s[id]' class='btn btn-danger' onclick='return confirm('Apakah anda yakin mau menghapus')''><i class='icon-edit'></i> DELETE</a>";
                    								?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
               
            </div>
               
                
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
  
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
