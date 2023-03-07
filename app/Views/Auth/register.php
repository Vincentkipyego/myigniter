<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Register</title>
    <style>
    	#moreinfo{
    		display: none;
    	}
    </style>

    <script type="text/javascript">
    	 function showmore(){
    	 	document.getElementById('moreinfo').style.display = 'block';
    	 	document.getElementById('personalinfo').style.display = 'none';
    	 }

    </script>
</head>
<body>
    <div class= 'container'>
        <div class='row'>
            <div class="col-md-6 offset-3">
            <div class="d-grid">
                <label><h3><b>Club Investment</b></h3></label>
            </div>
            <h4>SIGN UP</h4><hr>
            <div class="d-grid">
<input type="submit" class="btn btn-dark" name="gotogoogle" value="sign up with google">
            </div>

            <form action="<?php echo base_url(); ?>/SignupController/store" method="post">
            <div id="personalinfo">
               <div class= 'row mb-3'>                   
                <div class='form-group  col-md-6 ' >
                    <label ><b>First Name</b></label>
                    <input type="text" name="f_name" class='form-control' placeholder="enter firstname">
                </div>     

                <div class='form-group col-md-6 '>
                    <label ><b>Second Name</b></label>
                    <input type="text" name="s_name" class='form-control' placeholder="enter secondname">
                </div>
</div> 

                <div class='form-group '>
                    <label ><b>Email Adress</b></label>
                    <input type="email" name="mail" class='form-control' placeholder="enter Email adress">
                </div> 

                <div class='form-group '>
                    <label ><b>Password</b></label>
                    <input type="password" name="pass" class='form-control' placeholder="enter password">
                </div>   
                
                <div class='form-group '>
                    <label ><b>Confirm Password</b></label>
                    <input type="password" name="c_pass" class='form-control' placeholder="Re-enter password">
                </div>   
                
                <div class='form-group '>
                    <label ><b>Mobile Number</b></label>
                    <input type="phone number" name="phonen" class='form-control' placeholder="enter phone number">
                </div>    
                
                <div class='form-group '>
                    <label ><b>First Name</b></label>
                    <input type="text" name="f_name" class='form-control' placeholder="enter firstname">
                </div>     

                <label><b>ADRESS</b></label>
                <div class= 'row'>
                <div class='form-group  col-md-6'>
                    <label ><b>Country</b></label>
                    <input type="text" name="country" class='form-control' placeholder="enter country">
                </div>    
                
                <div class='form-group  col-md-6'>
                    <label ><b>State</b></label>
                    <input type="text" name="state" class='form-control' placeholder="enter State">
                </div>  

                </div>

                <div class="row">
                <div class='form-group col-md-6'>
                    <label ><b>City</b></label>
                    <input type="text" name="city" class='form-control' placeholder="enter city">
                </div>     
                
                <div class='form-group col-md-6 mb-3'>
                    <label ><b>Street</b></label>
                    <input type="text" name="street" class='form-control' placeholder="enter street">
                </div>  
                </div>   
                <div class="d-grid">
          <button type="button" class="btn btn-dark" onclick="showmore()"> Next</button>
                 </div>
                 </div>

<div id="moreinfo" class="row justify-content-md-center">
                        <div class="row mb-5">
                            <div class="card">
                                <div class="card-header">
                                    Please pick your Category
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" name="creators"
                                            id="creators">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Idea Creators(Global Trading Companies)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" name="investors"
                                            id="investors" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Investors
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="card">
                                <div class="card-header">
                                    From the list below, please select the category you would like to register on
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                            name="realestate" id="realestate">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Real Estate
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                            name="stocks" id="stocks">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Stocks
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                            name="bonds" id="bonds">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Bonds
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                            name="mining" id="mining">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Mining
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">Signup</button>
                        </div>
                    </div>
                
                

</form>
            </div>
        </div>
</div>
    
</body>
</html>