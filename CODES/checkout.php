<?php
	session_start();
  if(!isset($_SESSION['user']))
       header("location: index.php?Message=Login To Continue");
	include "dbconnect.php";
         $customer=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Checkout">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta name="author" content="Shivangi Gupta">
    <title>Checkout</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
    <style>
        #checkout {margin-top:30px;margin-bottom:30px;}
        .panel {border:1px solid #D67B22;padding-left:0px;padding-right:0px;}
        .panel-heading {background:#D67B22 !important;color:white !important;}        
        @media only screen and (width: 767px) { body{margin-top:150px;}}
    </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
         	 </button>
          	<a class="navbar-brand" href="index.php" style="padding: 1px;"><img class="img-responsive" alt="Brand" src="img/logo.jpg"  style="width: 147px;margin: 0px;"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
	        <?php
	        if(!isset($_SESSION['user']))
	          {
	            echo'
	            <li>
	                <button type="button" id="login_button" class="btn btn-lg" data-toggle="modal" data-target="#login">Login</button>
	                  <div id="login" class="modal fade" role="dialog">
	                    <div class="modal-dialog">
	                        <div class="modal-content">
	                            <div class="modal-header">
	                                <button type="button" class="close" data-dismiss="modal">&times;</button>
	                                <h4 class="modal-title text-center">Login Form</h4>
	                            </div>
	                            <div class="modal-body">
	                              <ul >
	                                <li>
	                                  <div class="row">
	                                      <div class="col-md-12 text-center">
	                                          <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8">
	                                              <div class="form-group">
	                                                  <label class="sr-only" for="username">Username</label>
	                                                  <input type="text" name="login_username" class="form-control" placeholder="Username" required>
	                                              </div>
	                                              <div class="form-group">
	                                                  <label class="sr-only" for="password">Password</label>
	                                                  <input type="password" name="login_password" class="form-control"  placeholder="Password" required>
	                                                  <div class="help-block text-right">
	                                                      <a href="#">Forget the password ?</a>
	                                                  </div>
	                                              </div>
	                                              <div class="form-group">
	                                                  <button type="submit" name="submit" value="login" class="btn btn-block">
	                                                      Sign in
	                                                  </button>
	                                              </div>
	                                          </form>
	                                      </div>
	                                  </div>
	                                </li>
	                              </ul>
	                            </div>
	                            <div class="modal-footer">
	                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                            </div>
	                        </div>
	                    </div>
	                  </div>
	            </li>
	            <li>
	              <button type="button" id="register_button" class="btn btn-lg" data-toggle="modal" data-target="#register">Sign Up</button>
	                <div id="register" class="modal fade" role="dialog">
	                  <div class="modal-dialog">
	                      <div class="modal-content">
	                          <div class="modal-header">
	                              <button type="button" class="close" data-dismiss="modal">&times;</button>
	                              <h4 class="modal-title text-center">Member Registration Form</h4>
	                          </div>
	                          <div class="modal-body">
	                            <ul >
	                              <li>
	                                <div class="row">
	                                    <div class="col-md-12 text-center">
	                                        <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8">
	                                            <div class="form-group">
	                                                <label class="sr-only" for="username">Username</label>
	                                                <input type="text" name="register_username" class="form-control" placeholder="Username" required>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="sr-only" for="password">Password</label>
	                                                <input type="password" name="register_password" class="form-control"  placeholder="Password" required>
	                                            </div>
	                                            <div class="form-group">
	                                                <button type="submit" name="submit" value="register" class="btn btn-block">
	                                                    Sign Up
	                                                </button>
	                                            </div>
	                                        </form>
	                                    </div>
	                                </div>
	                              </li>
	                            </ul>
	                          </div>
	                          <div class="modal-footer">
	                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                          </div>
	                      </div>
	                  </div>
	                </div>
	            </li>';
	          } 
	        else
	            echo' <li> <a href="destroy.php" class="btn btn-lg"> LogOut </a> </li>';
	        ?>

        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div id="top" >
      <div id="searchbox" class="container-fluid" style="width:112%;margin-left:-6%;margin-right:-6%;">
          <div>
              <form role="search" method="POST" action="Result.php">
                  <input type="text" class="form-control" name="keyword" style="width:80%;margin:20px 10% 20px 10%;" placeholder="Search for a Book , Author Or Category">
              </form>
          </div>
      </div>

<?php
echo '<div class="container-fluid" id="checkout">
      <div class="row">
          <div class="col-xs-12 text-center" id="heading">
                 <h2 style="color:#D67B22;text-transform:uppercase;">  YOUR ORDER </h2>
           </div>
        </div>';
  if(isset($_SESSION['user']))
      {   $query="SELECT PID,Title,Author,Edition,Quantity,Price FROM cart INNER JOIN products ON cart.Product=products.PID 
                      WHERE Customer='$customer'";
          $result=mysqli_query($con,$query); 
          $total=0;
          if(mysqli_num_rows($result)>0)
          {    $i=1;
               $j=0;
               while($row = mysqli_fetch_assoc($result))
               {       $path = "img/books/".$row['PID'].".jpg";
                           $Stotal = $row['Quantity'] * $row['Price'];
                           if($i % 2 == 1)  $offset= 1;
                           if($i % 2 == 0)  $offset= 2;                                                
                           if($j%2==0)
                               echo '<div class="row">'; 
                               echo '                
                                    <div class="panel col-xs-12 col-sm-4 col-sm-offset-'.$offset.' col-md-4 col-md-offset-'.$offset.' col-lg-4 col-lg-offset-'.$offset.' text-center" style="color:#D67B22;font-weight:800;">
                                        <div class="panel-heading">Order '. $i .'
                                        </div>
                                        <div class="panel-body">
                                                                    <img class="image-responsive block-center" src="'.$path.'" style="height :100px;"> <br>
                                                                   Title : '.$row['Title'].'  <br> 
                                                                    Code : '.$row['PID'].'     <br>        	 
                                                                   Author : '.$row['Author'].' <br>                            	      
                                                                   Edition : '.$row['Edition'].' <br>
                                                                   Quantity : '.$row['Quantity'].' <br>
                                                                   Price : '.$row['Price'].' <br>
                                                                   Total : '.$Stotal.'  <br>   							   
                                        </div>
                                    </div>';
                               $total = $total + $Stotal;
                           if($j%2==1)
                               echo '</div>';
                               $i++;
                               $j++;
               }
                echo '</div>';
               if($j%2==1) 
                  echo '</div>';       
?>
    <div class="container-fluid">
     <div class="row">
      <div class="col-xs-12 text-center" id="heading">
          <h2 style="color:#D67B22;text-transform:uppercase;">TOTAL</h2>
      </div>
      </div>
      <div class="row">
      <div class="col-xs-12 text-center">
           <h3 style="color:#D67B22;text-transform:uppercase;"><?php echo $total; ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 text-center">
           <h3 style="color:#D67B22;text-transform:uppercase;">PLEASE ENTER YOUR ADDRESS</h3>
      </div>
    </div>

    <div class="row">
        <form role="form" method="post" action="order.php" accept-charset="UTF-8">
         <div class="col-xs-12 text-center" id="heading">
           <div class="form-group">
               <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
           </div>
         </div>

     </div>
    <div class="row">
      <div class="col-xs-12 text-center">
            <a href="checked.php" class="btn btn-lg" style="background:#D67B22;color:white;font-weight:800;">Place</a>
      </div>
    </div>
    </div>
<?php     } 
            else
            echo'<div class="container-fluid" id="checkout">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <h3 style="color:#D67B22;">YOUR ORDER IS EMPTY</h3>
                  </div>
                </div>';
          }   
?>
</div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
