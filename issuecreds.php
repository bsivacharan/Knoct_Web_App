<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/login.css">  
<style>
	.qr-code {
	max-width: 200px;
	margin: 10px;
	}
</style>  
</head>
<body>
<script>
document.getElementById("demo").innerHTML = "Hello JavaScript!";
</script>
<div id="dots">sssss</div>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="assets/images/logo.svg" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Issued Credentials, Check Knoct app</p>
              <div class="text-center">
				<!-- Get a Placeholder image initially,
				this will change according to the
				data entered later -->
				<img src="" class="qr-code img-thumbnail img-responsive" id="image" />
				</div>
				<script src="fetch_bkp.js"></script>
                <a href="#!" class="forgot-password-link">Do not have Knoct wallet?</a>
                <p class="login-card-footer-text">Already have credentials <a href="#!" class="text-reset">Login here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
	  
	   <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main>
  <script>
  
let knoctuid = (Math.random() + 1).toString(36).substring(8);

const data = {'"auto_issue":true,"auto_remove":true,"comment":"string","connection_id":"'+<?php echo $_POST['connid'];?>+'","cred_def_id":"Urp6sxLC92y1JYhFna7Vf7:3:CL:232942:default","credential_preview":{"@type":"'+<?php echo $_POST['conndid'];?>+';spec/issue-credential/1.0/credential-preview","attributes":[{"mime-type":"text/plain","name":"knoctuid","value":"'+knoctuid+'"},{"mime-type":"text/plain","name":"knoctuqid","value":"kontest90h"}]},"trace":true'};

console.log(data);


//POST request with body equal on data in JSON format
fetch('http://ec2-3-129-77-197.us-east-2.compute.amazonaws.com:8003/issue-credential/send-offer', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify(data),
})
.then((response) => {console.log(response.status);
response.json();
})
//Then with the data from the response in JSON...
.then((data) => {
  console.log('Success:', data);
  //document.write("Then success refiff:" + data.invitation_url);
  //var obj = JSON.parse(json);
//  connId =  data.connection_id;
})
//Then with the error genereted...
.catch((error) => {
  console.error('Error:', error);
});

  </script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

