<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sell a Product</title>
    <!-- SWEET ALERT -->
    <script src="js/sweetalert.min.js"></script>
    
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet"/>
</head>

<body id="page-top" class="index">
     
     <!-- Navigation -->
     <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Welcome</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="register.php"><strong>Register</strong></a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="userhome.php">My Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="profile.php">Profile</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">Sell a Product</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="buy.php">Buy a Product</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section><h1 align="center">Sell A Product</h1>
    <div class="container">
    <form action="<?php $_SERVER['PHP_SELF'];?>" METHOD ="POST"">
                                <div class="form-group">
                        <label for="name">PRODUCT NAME:</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Enter Product name.." required>
                        </div>
                        <div class="form-group">
                            <label for="seller">SELLER NAME:</label>
                            <input class="form-control" type="text" name="seller" id="seller" placeholder="Enter Seller Name.." required>
                        </div>
                        <div class="form-group">
                                <label for="email">EMAIL:</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Enter Email.." required>
                        </div>
                        <div class="form-group">
                                <label for="description">DESCRIPTION:</label>
                                <textarea class="form-control" type="text" name="description" id="description" Placeholder="Description.." required></textarea>
                        </div>
                        <!-- <div class="form-group">
                                    <label for="confirm">CONFIRM PASSWORD:</label>
                                    <input class="form-control" type="password" name="confirm" id="confirm" required>
                        </div> -->
                        <div class="form-group">
                            <label for="price">PRICE:</label>
                            <input class="form-control" type="text" name="price" id="price" placeholder="Enter price.." required>
                        </div>
                        <div class="form-group">
                            <label for="standard">STANDARD:</label>
                            <input class="form-control" type="text" name="standard" id="standard" placeholder="Enter Standard.." required>
                        </div>
                        <div class="form-group">
                                    <label for="contact">CONTACT NO:</label>
                                    <input class="form-control" type="text" name="contact" id="contact" placeholder="Enter Contact number.." required>
                        </div>
                                <div class="form-group">
                                        
                                        <input type="submit" class="btn btn-primary" value="SELL">
                                </div>
                            </form>
            <!-- MAKING IT STORE TO A DATABASE -->
                            <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $name=$_POST['name'];
            $seller =$_POST['seller'];
            $email=$_POST['email'];
            $description=$_POST['description'];
            $price=$_POST['price'];
            $standard=$_POST['standard'];
            $contact=$_POST['contact'];
            
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="stationary";

            //CREATE CONNECTION
            $conn=mysqli_connect($servername,$username,$password,$dbname);
            //CHECK CONNECTION
            if(!$conn){
                die("connection failed:" . mysqli_connect_error());
            }
            $sql=" INSERT INTO sell (name,seller,email,description,price,standard,contact)
                    VALUES ('$name','$seller','$email','$description','$price','$standard','$contact')";
            if (mysqli_query($conn,$sql))
            {
                echo '<script type="text/javascript">';
                echo 'swal("Good!","Advertised","success")';
                echo '</script>';
            }
            else
            {
                echo"Error:" .mysqli_error($conn);
            }
        mysqli_close($conn);
    }
 
    ?>
                            </div>

    
    
    
    </section>
      <!-- jQuery -->
      <script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>
</html>