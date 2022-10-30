
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
          <div class="col-sm-5 ytl-panel-left">
            <div class="brand-col">
              <div class="headline">
                <!-- brand-logo start -->
                <div class="brand-logo">
                  <img src="images/yes-logo-new-white.png" width="150" alt="yes">
                </div>
			<!-- ./brand-logo -->               
              </div>
            </div>
          </div>
          <div class="col-sm-7 ytl-panel-right">			  
            <div class="ytl-login">	
			<!-- ./form -->				
               <div class="ytl-panel panel-signup text-center active">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="ytl-heading">
                      <h3 class="auth-title">Registration</h3>
                    </div>
                    <form name="signupForm" class="signupForm" action="thanku.php" method="post">
						<div class="form-inner">
						
						<div class="form-group wrap-input">
                        <input type="text" class="form-control" name="firstname" placeholder="First name" id="firstname">
                        <span class="focus-input"></span>						
                      </div>
					 <span id="firstnameError" style="font-size:12px; color: red; text-align: left"></span>
                      
						
						<div class="form-group wrap-input">
                        <input type="text" class="form-control" name="lastname" placeholder="Last name" id="lastname">
                        <span class="focus-input"></span>
                      </div>
                      <span id="lastnameError" style="font-size:12px; color: red; text-align: left"></span>

                      <div class="form-group wrap-input">
                        <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                        <span class="focus-input"></span>
                      </div>
                      <span id="emailError" style="font-size:12px; color: red; text-align: left"></span>
					 <div class="form-group wrap-input">
                        <input type="email" class="form-control" name="confirmemail" placeholder="Confirm Email" id="cemail">
                        <span class="focus-input"></span>
                      </div>
                      <span id="cemailError" style="font-size:12px; color: red; text-align: left"></span>
					<div class="form-group wrap-input">
                        <input type="text" class="form-control" name="address" placeholder="Address" id="address">
                        <span class="focus-input"></span>
                      </div>
                      <span id="addressError" style="font-size:12px; color: red; text-align: left"></span>

						<div class="form-group wrap-input">
                        <input type="text" class="form-control" name="postcode" placeholder="Post code" id="postcode">
                        <span class="focus-input"></span>
                      </div>
						
                      <span id="postcodeError" style="font-size:12px; color: red; text-align: left"></span>

						<div class="form-group wrap-input">
                        						 
              <select name="state" class="form-control" id="state">
                <option value="">Select State</option>
                <option value="State 1">State 1</option>
                <option value="State 2">State 2</option>
                <option value="State 3">State 3</option>
                <option value="State 4">State 4</option>
                <option value="State 5">State 5</option>
              </select>
              
              <span class="focus-input"></span>
            </div>
            <span id="stateError" style="font-size:12px; color: red; text-align: left"></span>

					<div class="form-group wrap-input">
                        					 
						 <select name="city" class="form-control" id="city">
							 <option value="">Select City</option>
							 <option value="City 1">City 1</option>
							 <option value="City 2">City 2</option>
							 <option value="City 3">City 3</option>
							 <option value="City 4">City 4</option>
							 <option value="City 5">City 5</option>
						</select>
						
                        <span class="focus-input"></span>
                      </div>
            <span id="cityError" style="font-size:12px; color: red; text-align: left"></span>

                     
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Submit</button>
                      </div>
							</div>
                    </form>
                    
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
