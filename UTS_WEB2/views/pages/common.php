<?php
function heading() {
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


    <link href="assets/css/demo.css" rel="stylesheet" />


    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body>

    <div class="wrapper">

        <?php
}

        function footer() {
            ?>
        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>
                    document.write(new Date().getFullYear())
                    </script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<script src="../js/script.js"></script>


<script type="text/javascript">
$(document).ready(function() {

    demo.initChartist();

    // $.notify({
    //     icon: 'pe-7s-gift',
    //     message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

    // }, {
    //     type: 'info',
    //     timer: 4000
    // });

});
</script>

</html>

<?php
        }


        function sideBar() {
            ?>
<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                KITAX - XITAK
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="dashboard.php">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="changePw.php">
                    <i class="pe-7s-user"></i>
                    <p>ACCOUNT</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php
}

function navbar() {
    ?>

<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                    session_start();
                    $username = $_SESSION['user'];
                    if($_SESSION['akses'] == 1) {
                        echo "<a class='navbar-brand' href='#'> Admin </a>";
                    } else {
                        echo "<a class='navbar-brand' href='#'>". $username  ."</a>";
                    }
                ?>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="./logout.php">
                            <p>Log out</p>
                        </a>
                    </li>
                    <li class="separator hidden-lg hidden-md"></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
}

function changePw(){
    ?>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Change Password</h4>
                        </div>
                        <div class="content">
                            <form action="../../controllers/updatePw.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">New Password</label>
                                            <input id='password' name="password" type="password" class="form-control"
                                                onkeydown="check();">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="confirmPw">Confirm Password</label>
                                            <input id='confirmPw' name="confirmPw" type="password" class="form-control"
                                                onkeyup="checkMatch();">
                                        </div>

                                        <span id="msg"></span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info btn-fill pull-right" id='btnSubmit'
                                    disabled>Submit</button>
                                <div class="clearfix"></div>
                            </form>

                        </div>

                    </div>
                    <!-- <button type="submit" class="btn btn-delete btn-fill-dt">Delete
                        Account</button> -->
                    <a href="../../controllers/deleteAkun.php" class="btn btn-delete btn-fill-dt">Delete Account</a>
                </div>
            </div>

        </div>
    </div>
</div>


<?php
}
?>