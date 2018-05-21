<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ShareRide.Inc</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="material/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="material/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="material/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="material/css/style.css" rel="stylesheet">
</head>

<body>


<!-- Start your project here-->
<div style="height: 100vh" >
    
        
    <div class="flex-center flex-column" id="home_page">
            
        <h1 class="animated fadeIn mb-2 font-snow">Welcome to <i class="fa fa-car" style="color: purple; font-size: 50px"></i>ShareRide Experience</h1>

        <h5 class="animated fadeIn mb-1 font-snow">Thank you for choosing ShareRide. We're glad you're with us.</h5>
        <div class="row">
                <button class="btn btn-lg button-white" id="Driver" data-toggle="collapse" data-target="#driver_jumbotron"><span class="font-purple">Proceed as Driver</span></button>
                <button class="btn btn-lg button-white" id="Rider" data-toggle="collapse" data-target="#rider_jumbotron"><span class="font-purple">Proceed as Rider</span></button>
           
         </div>
        <div class="jumbotron-fluid collapse" id="driver_jumbotron" align="center">
            <button class="btn btn-lg button-purple" id="driver_register_button" data-toggle="collapse"
                    data-target="#driver_form_register">REGISTER
            </button>
            <button class="btn btn-lg button-purple" id="driver_login_button" data-toggle="collapse" data-target="#driver_form_login">
                LOGIN
            </button>
            <div class="md-form">
                
                <form class="form-group collapse " id="driver_form_register"  method="POST">
                    <span style="text-decoration-color: palevioletred">You are about to register as a driver</span>
                    <input type="text" placeholder="Phone No" class="form-control" required>
                    <span class="small text-muted">Enter your Phone number</span>
                    <input type="email" placeholder="email" class="form-control" required>
                    <span class="small text-muted">Enter a valid email</span>
                    <input type="text" placeholder="username" class="form-control" required>
                    <span class="small text-muted"> Enter your username hint: can only contain numbers and letters</span>
                    <input type="password" placeholder="password" class="form-control" required>
                    <span class="small text-muted">Enter password hint: contains both uppercase, lowercase and numbers</span>
                    <center>
                        <button type="submit" class="btn btn-lg button-purple">Register</button>
                    </center>
                </form>
                <form class="form-group collapse" id="driver_form_login" action="javascript:driverLogin()" method="POST">
                    <span style="text-decoration-color: palevioletred">Driver login</span>
                    <input type="email" placeholder="email" class="form-control" required>
                    <span class="small text-muted"> Enter your registered email</span>
                    <input type="password" placeholder="password" class="form-control" required>
                    <span class="small text-muted"> Enter your registered password</span>
                    <center>
                        <button type="submit" class="btn btn-lg button-purple" onclick="driverLogin">Login</button>
                    </center>

                </form>
            </div>

        </div>
        <div class="jumbotron-fluid collapse" id="rider_jumbotron" align="center">
                <button class="btn btn-lg button-purple" id="rider_register_button" data-toggle="collapse"
                        data-target="#rider_form_register">REGISTER
                </button>
                <button class="btn btn-lg button-purple" id="rider_login_button" data-toggle="collapse" data-target="#rider_form_login">
                    LOGIN
                </button>
                <div class="md-form">
                    <form class="form-group collapse " id="rider_form_register" action="" method = "POST">
                        <span style="text-decoration-color: palevioletred">You are about to register as a rider</span>
                        <input type="text" name="phone" placeholder="Phone No" class="form-control" required>
                        <span class="small text-muted">Enter your Phone number</span>
                        <input type="email"  name= "email"placeholder="email" class="form-control" required>
                        <span class="small text-muted">Enter a valid email</span>
                        <input type="text" name = "username" placeholder="username" class="form-control" required>
                        <span class="small text-muted"> Enter your username hint: can only contain numbers and letters</span>
                        <input type="password" name="password"  placeholder="password" class="form-control" required>
                        <span class="small text-muted">Enter password hint: contains both uppercase, lowercase and numbers</span>
                        <center>
                            <button type="submit" name="register" class="btn btn-lg button-purple">Register</button>
                        </center>
                    </form>
                    <form class="form-group collapse" id="rider_form_login" action = "javascript:riderLogin()">
                        <span style="text-decoration-color: palevioletred">Rider login</span>
                        <input type="email" name = "email"placeholder="email" class="form-control" required>
                        <span class="small text-muted"> Enter your registered email</span>
                        <input type="password" name = "password" placeholder="password" class="form-control" required>
                        <span class="small text-muted"> Enter your registered password</span>
                        <center>
                            <button type="submit" name="login"class="btn btn-lg button-purple">Login</button>
                        </center>
    
                    </form>
                </div>
    
            </div>

    </div>
    <div id="main_page" class="d-none" style="width: 100%">
        <div class="navbar navbar-toggleable-sm">
            <a class="navbar-brand font-purple" href="#"><i class="fa fa-car" style="color: purple;"></i>ShareRide</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" data-target="#profile" href="#"><span
                                class="font-purple">DRIVER PROFILE</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" data-target="#dashboard" href="#"><span
                                class="font-purple">DASHBOARD</span></a>
                    </li>
                    <li class="nav-item" data-toggle="collapse" id="#logout">
                        <a class="nav-link" href="#" onclick="driverLogout()"><span class="font-purple">LOGOUT</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control form-control-sm mr-sm-2" type="text" placeholder="Search"
                           aria-label="Search">
                    <button class="btn btn-md button-purple my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
        </br>
        <div class="flex-center">
            <div class=" jumbotron collapse font-purple" id="dashboard">
                <p class="font-purple"> Welcome username, Fill in the form below to make your Ride available to potential riders</p>
                <div class="md-form font-purple">
                    <div class="form-group" id="Add_ride">
                        <table>
                            <tr>
                               <td><input type="text" placeholder="Vehicle number" class="form-control" required>
                                <span class="small text-muted font-purple">Enter your vehicle registration number</span></td>
                               <td><input type="text" placeholder="Origin" class="form-control" required>
                                <span class="small text-muted font-purple"> From eg Nyeri</span></td>
                                <td><input type="text" placeholder="Destinaton" class="form-control" required>
                                <span class="small text-muted font-purple">To eg Nakuru</span></td>
                                <td><input type="text" placeholder="Space available" class="form-control" required>
                                <span class="small text-muted font-purple">How many persons can you give a ride?</span></td>
                                <td><button type="submit" class="btn btn-lg button-purple">Add Ride</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class=" jumbotron collapse" id="profile">
                <div class="md-form">
                    <div class="form-group">
                        <p class="font-purple"> Change your password </p>
                        <input type="text" placeholder="current password" class="form-control" required>
                        <span class="small text-muted font-purple">Enter your password</span>
                        <input type="password" placeholder="new password" class="form-control" required>
                        <span class="small text-muted font-purple">Enter your new password</span>
                        <input type="password" placeholder="confirm password" class="form-control" required>
                        <span class="small text-muted font-purple">Confirm new password</span>
                        <center>
                            <button type="submit" class="btn btn-lg button-purple">Change password</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rider_main_page" class="d-none" style="width: 100%">
            <div class="navbar navbar-toggleable-sm">
                <a class="navbar-brand font-purple" href="#"><i class="fa fa-car" style="color: purple;"></i>ShareRide</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" data-target="#rider_profile" href="#"><span
                                    class="font-purple">RIDER PROFILE</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" data-target="#rider_dashboard" href="#"><span
                                    class="font-purple">DASHBOARD</span></a>
                        </li>
                        <li class="nav-item" data-toggle="collapse" id="#rider_logout">
                            <a class="nav-link" href="" onclick="riderLogout()"><span class="font-purple">LOGOUT</span></a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control form-control-sm mr-sm-2" type="text" placeholder="Search"
                               aria-label="Search">
                        <button class="btn btn-md button-purple my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
            </br>
            <div class="flex-center">
                <div class=" jumbotron collapse font-purple" id="rider_dashboard">
                    <p class="font-purple"> Welcome username, Below are available rides </p>
                    <div class="md-form font-purple">
                        
                        <div class="form-group" id="book_ride">
                            <table>
                                <tr>
                                    <td><input type="text" placeholder="" class="form-control" required>
                                    <span class="small text-muted font-purple">Driver Name</span></td>
                                    <td><input type="text" placeholder="" class="form-control" required>
                                    <span class="small text-muted font-purple">Vehicle registration number</span></td>
                                    <td><input type="text" placeholder="" class="form-control" required>
                                    <span class="small text-muted font-purple"> Origin</span></td>
                                    <td><input type="text" placeholder="" class="form-control" required>
                                    <span class="small text-muted font-purple">Destination</span></td>
                                    <td><input type="text" placeholder="" class="form-control" required>
                                    <span class="small text-muted font-purple ">Available spaces</span></td>
                                    
                                    <td><button type="submit" class="btn btn-lg button-purple">Book Ride</button></td>
                                    
                            </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=" jumbotron collapse" id="rider_profile">
                    <div class="md-form">
                        <div class="form-group">
                            <p class="font-purple"> Change your password </p>
                            <input type="text" placeholder="current password" class="form-control" required>
                            <span class="small text-muted font-purple">Enter your password</span>
                            <input type="password" placeholder="new password" class="form-control" required>
                            <span class="small text-muted font-purple">Enter your new password</span>
                            <input type="password" placeholder="confirm password" class="form-control" required>
                            <span class="small text-muted font-purple">Confirm new password</span>
                            <center>
                                <button type="submit" class="btn btn-lg button-purple">Change password</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>      
</div>
<!-- /Start your project here-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="material/js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="material/js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="material/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="material/js/mdb.min.js"></script>
<script type="text/javascript" src="material/js/action.js"></script>
</body>

</html>
