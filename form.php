<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="student_signup.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="first">
		<div class="second">
		<form method="post" action="form_signup_process">
        <h2 class="text-center">Signup</h2> 
        <hr>      
         <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" id="exampleInputPassword1">

  </div>

  <div class="form-group">
  <label for="exampleInputPassword1">password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" required="required">
</div>

     <div class="form-group">
    <label for="exampleInputPassword1">Telephone Number</label>
    <input type="Numbers" class="form-control" id="exampleInputPassword1" required="required">

  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">date</label>
    <input type="text" class="form-control" id="exampleInputPassword1">

  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">School</label>
    <input type="Numbers" class="form-control" id="exampleInputPassword1" required="required">

    <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <label>Level Of Education</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose level</option>
        <option value="1">JHS</option>
        <option value="2">SHS</option>
        <option value="3">Tertiary</option>
      </select>
    </div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>

    </form>
</div>


		
	</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>


</body>
</html>