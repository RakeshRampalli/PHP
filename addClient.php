<?php
    $servername = "localhost";          // The database host
    $username = "u635771671_unicuspro"; // The database username
    $password = "6K?lifhm3Q!u";         // The database password
    $database = "u635771671_unicuspro"; // The database name
    
    $conn = new mysqli($servername, $username, $password, $database);

    $salutation = "";
    $clientName ="";
    $email = "";
    $password = "";
    $country="";
    $mobile = "";
    $companyName = "";
    $website ="" ;
    $taxName = "";
    $gstVatNumber = "";
    $officePhoneNumber = "";
    $city = "";
    $state = "";
    $postalCode ="";
    $comanyaddress = "";
    $shippingaddress = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $salutation = $_POST['salutation'];
        $clientName = $_POST['clientName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $country = $_POST['country'];
        $mobile = $_POST['mobile'];
        $photo = $_POST['photo'];
        $companyName = $_POST['companyName'];
        $website = $_POST['website'];
        $taxName = $_POST['taxName'];
        $gstVatNumber = $_POST['gstVatNumber'];
        $officePhoneNumber = $_POST['officePhoneNumber'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $postalCode = $_POST['postalCode'];
        $comanyaddress = $_POST['comanyaddress'];
        $shippingaddress = $_POST['shippingaddress'];

        $sql = "INSERT INTO client_details (Salutation,ClientName,Email,
                Password,Country,Mobile,Company_Name,Official_Website,Tax_Name,GST_VAT_Number,OfficePhone_Number,
                City,State,Postal_Code,Company_Address,Shipping_Address)" . 
                "VALUES ( '$salutation', '$clientName', '$email', '$password', '$country', '$mobile', '$companyName', '$website',
                 '$taxName', '$gstVatNumber', '$officePhoneNumber', '$city', '$state', '$postalCode','$comanyaddress', '$shippingaddress')";

        $result = $conn->query($sql);

        if (!$result){
            echo 'Connection Error : '.$conn->connect_error;
        }
        header("location: user-client.php");

    }
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>UNICUSPRO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css”/>
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />
    <link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">  
    

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/newstyles/addClient.css" rel="stylesheet">
    
    
    

    
    
</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Admin</span>
                            <span class="text-muted text-xs block">Details <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                            <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="index.html">Dashboard v.1</a></li>
                        <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                        <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                        <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                        <li><a href="dashboard_5.html">Dashboard v.5 </a></li>
                    </ul>
                </li>
                
                <li class="active">
                    <a href="a"><i class="fa fa-edit"></i> <span class="nav-label">Users</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="active"><a href="user-client.php">Clients</a></li>
                        <li><a href="user-employee.php">Employee</a></li>
                        
                    </ul>
                </li>

                <li>
                    <a href="../projects/contracts.php"><i class="fa fa-edit"></i> <span class="nav-label">Projects</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="../projects/contracts.php">Contracts</a></li>
                        <li><a href="../projects/Projects.php">Projects</a></li>
                        <li><a href="../projects/Tasks.php">Tasks</a></li>
                        <li><a href="../projects/Timesheet.php">Timesheet</a></li>
                        
                    </ul>
                </li>

                <li>
                    <a href="../accountant/prop_index.php"><i class="fa fa-users"></i> <span class="nav-label">Accountant</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="../accountant/prop_index.php">Proposal </a></li>
                        <li><a href="../accountant/estimate.php">Estimates </a></li>
                        <li><a href="../accountant/innovice.php">Invoices </a></li>
                        <li><a href="../accountant/payments.php">Payments </a></li>
                        <li><a href="../accountant/creditNote.php">Credit Note </a></li>
                        <li><a href="../accountant/expenses.php">Expenses </a></li>
                        <li><a href="../accountant/bankAccount.php">Bank Account </a></li>
                    </ul>
                </li>

            </ul>

        </div>  
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class=" navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="nav-my-editz">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" action="search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to UNICUSPRO Admin</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <small class="float-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="float-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/profile.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="float-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html" class="dropdown-item">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="float-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="profile.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="float-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="grid_options.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="float-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html" class="dropdown-item">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="../index.php">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
            </ul>
           </div>      

        </nav>
        </div>

<div class="container 
whiteSPACE">                    <!--FORM-->


    <div class="add-client-main-div">
        <h1 style="color:black; font-weight: bold;">Add Client</h1>

        <form class="clients-form" method="post">     
        <div class="card">
            <div class="card-header" style="background-color: #FFFFFF;">
                <h1>Account Details</h1>
            </div>

            <!--body 1 start-->
            <div class="card-body mb-5 m-0" style="font-size: medium; color:gray; font-weight: 100;"  >       
              <div class="d-flex flex-row justify-content-evenly">
                <div style="width: 75%;" class="mr-5">
                    <div class="input-line-one d-flex flex-row justify-content-between mb-3">
                        <div class="mb-3">
                            <label for="salutation" class="form-label">Salutation</label>
                            <select
                                class="form-select form-select-lg passwordX"
                                name="salutation"
                                id="salutation"
                            >
                                <option selected>---</option>
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Miss">Miss</option>
                                <option value="Dr">Dr</option>
                                <option value="Sir">Sir</option>
                                <option value="Madam">Madam</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="clientName" class="form-label"> Client Name<span class="ml-2" style="color: red;">*</span></label>
                            <input type="text" class="form-control editz-in-sizeA" name="clientName"id="clientName"aria-describedby="helpId" placeholder=" e.g. John Doe" required/>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"> Email<i class="fa fa-question"></i></label>
                            <input type="email" class="form-control editz-in-sizeA" name="email"id="email"aria-describedby="helpId" placeholder=" e.g. Johndoe@example.com" required />
                        </div>  
                    </div>
                    <div class="input-line-two d-flex flex-row justify-content-between mt-3">
                    <div class="mt-2">
                        <label for="password" class="form-label"> Password<i class="fa fa-question"></i></label>
                        <div>
                            <input class="passwordX" type="password"
                                name="password"
                                autocomplete="current-password"
                                required=""
                                id="id_password">
                            
                            <img class="eyeimg" src="https://media.geeksforgeeks.org/wp-content/uploads/20210917145551/eye.png"
                                width="1%"
                                height="1%"
                                style=
                                    "display: inline; 
                                    margin-left: -1.5%; 
                                    vertical-align: middle"
                                id="togglePassword">                      
                        </div>
                    </div>
                    <div class="mt-2 d-flex flex-column" >
                        <label for="country" class="form-label"> Country</label>
                        <select class="selectpicker countrypicker passwordX" data-flag="true" name="country"></select>
                        <script>
                            $('.countrypicker').countrypicker();
                        </script>
                    </div>
                    <div class="d-flex flex-column mt-2">
                        <label style="border-width: 0mm;" for="mobile" class="form-label"> Mobile<span class="spanA">*</span></label>
                        <input id="mobile" type="tel" name="mobile" class="editz-in-sizeA" placeholder="EX: 01234 56789" />
                        <script>
                            const phoneInputField = document.querySelector("#phone");
                            const phoneInput = window.intlTelInput(phoneInputField, {
                                utilsScript:
                                "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                            });
                            </script>
                    </div>

                </div>
                </div>
                    <div>
                        <label for="photo">Profile Picture <span class="spanA">*</span></label>
                        <div for="photo" class=" con-hov d-flex flex-column justify-content-center align-items-center" 
                            style= "border-width: 10px; height: 100%; min-width:25%;">
                            <i for="photo" class="fa fa-cloud-upload" style="font-size:36px"></i> 
                            <input class="ml-5 " style="font-size: small ;" type="file" id="photo" name="photo" accept="image/*">
                        </div>
                    </div>
              </div>
            </div>
            <!--body 1 end-->

            <!--body 2 start-->
            <div class="card-footer text-muted" style="background-color: #FFFFFF;">
                <h1 style="color: black;">Company Details</h1>
                <div class="second-body mt-5">
                    <form >
                        <div class="d-flex flex-row justify-content-between mb-5">
                            <div class="mb-3">
                                <label for="companyName" class="form-label">Company Name <span class="spanA">*</span></label>
                                <input type="text" class="form-control editz-in-size" id="companyName" name="companyName" placeholder="Enter company name">
                            </div>
                            <div class="mb-3">
                                <label for="website" class="form-label">Official Website <span class="spanA">*</span></label>
                                <input type="url" class="form-control editz-in-size " id="website" name="website" placeholder="https://example.com">
                            </div>
                            <div class="mb-3">
                                <label for="taxName" class="form-label">Tax Name <span class="spanA">*</span></label>
                                <input type="text" class="form-control editz-in-size" id="taxName" name="taxName" placeholder="Enter tax name">
                            </div>
                            <div class="mb-3">
                                <label for="gstVatNumber" class="form-label">GST/VAT Number <span>*</span></label>
                                <input type="text" class="form-control editz-in-size" id="gstVatNumber" name="gstVatNumber" placeholder="Enter GST/VAT number">
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between ">
                            <div class="mb-3">
                                <label for="officePhoneNumber" class="form-label">Office Phone Number</label>
                                <input type="tel" class="form-control editz-in-size" id="officePhoneNumber" name="officePhoneNumber" placeholder="Enter office phone number">
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control editz-in-size" id="city" name="city" placeholder="Enter city">
                            </div>
                            <div class="mb-3">
                                <label for="state" class="form-label">State</label>
                                <input type="text" class="form-control editz-in-size" id="state" name="state" placeholder="Enter state" required>
                            </div>
                            <div class="mb-3">
                                <label for="postalCode" class="form-label">Postal Code <span class="spanA">*</span></label>
                                <input type="text" class="form-control editz-in-size" id="postalCode" name="postalCode" placeholder="Enter postal code" required>
                            </div>
                        </div>
                    </form>
                    <div class="d-flex flex-row justify-content-between mt-5">
                        <div class="mb-3" style="width:45%; border-radius: 10px;">
                            <label for="comanyaddress" class="form-label">Company Address <span class="spanA">*</span></label>
                            <textarea style=" height: 100px; border-radius: 10px; font-size: 13px;" class="form-control " id="comanyaddress" name="comanyaddress" rows="4" placeholder="Enter your Comany address here" required></textarea>
                        </div>
                        <div class="mb-3" style="width: 45%; border-radius: 10px;">
                            <label for="shippingaddress" class="form-label">Shipping Address <span class="spanA">*</span></label>
                            <textarea style=" height: 100px ; font-size: 13px; border-radius: 10px;" class="form-control" id="shippingaddress" name="shippingaddress" rows="4" placeholder="Enter your Comany address here" required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!--body 2 end-->
            <div class="card-footer text-muted" style="background-color: #FFFFFF;">
                <input type="submit" class="btn btn-primary" style="background-color: blue;"/>
            </div>
        </div>
        </form>

    </div>


</div>
                                                        
</div>
                         

<script>
        const togglePassword =
              document.querySelector('#togglePassword');
 
        const password = 
              document.querySelector('#id_password');
 
        togglePassword.
        addEventListener('click', function (e) {
 
            // Toggle the type attribute 
            const type = password.getAttribute(
                'type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
 
            // Toggle the eye slash icon 
            if (togglePassword.src.match(
                    "https://media.geeksforgeeks.org/wp-content/uploads/20210917150049/eyeslash.png")) {
                togglePassword.src ="https://media.geeksforgeeks.org/wp-content/uploads/20210917145551/eye.png";
            } else {
                togglePassword.src ="https://media.geeksforgeeks.org/wp-content/uploads/20210917150049/eyeslash.png";
            }
        }); 
    </script>
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>

    <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
    <script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>
