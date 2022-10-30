
<!DOCTYPE html>
<html lang="zxx">
  <head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- For Search Engine Meta Data  -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
	
  <title>Yes : Form</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/icon" href="images/favicon-16x16.png"/>
   
  <!-- Main structure css file -->
  <link  rel="stylesheet" href="css/yes-style.css">
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
 
  </head>
  
  <body>
    	  
    <div class="container-fluid">
      <div class="row">
        <div class="ytl-container col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
          
          <div class="col-sm-12 ytl-panel-right">			  
            <div class="ytl-login">	
			<!-- ./form -->				
               <div class="ytl-panel panel-signup text-center active">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 text-left">
                    <div class="ytl-heading">
                      <h3 class="auth-title" style="color: green">Thank you for submission</h3>
                    </div>
                    <?php 

                    if (isset($_POST['submit'])) {
                        echo '<label>First name - </label> '.$_POST['firstname'].'<br>'; 
                        echo '<label>Last name - </label> '.$_POST['lastname'].'<br>'; 
                        echo '<label>Email Id - </label> '.$_POST['email'].'<br>'; 
                        echo '<label>Confirm Email Id - </label> '.$_POST['confirmemail'].'<br>'; 
                        echo '<label>Address - </label> '.$_POST['address'].'<br>'; 
                        echo '<label>Post Code - </label> '.$_POST['postcode'].'<br>'; 
                        echo '<label>State - </label> '.$_POST['state'].'<br>'; 
                        echo '<label>City - </label> '.$_POST['city'].'<br>'; 

                    }

                    ?>
                    
                  </div>
                </div>
              </div> 
			
              
            </div> 
			 <!-- ./end form -->
          </div>
        </div>
      </div> 
	<!-- ./row -->
    </div>
  <!-- ./container -->
    
    <!-- Javascript Files -->

    <!-- initialize jQuery Library -->
    <script src="js/jquery-2.2.4.min.js"></script>
  
    <!-- for Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
  
    <!-- Custom js-->
    <script src="js/custom.js"></script>
  
  </body>	
</html>
