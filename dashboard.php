<?php
$db = mysqli_connect("localhost", "root", "", "dbo2banquet");
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="admin dashboard for making changes">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
<!-- Left Panel -->

<aside id="left-panel" class="left-panel" >
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><i class="fa fa-shield"></i></a>
            <a class="navbar-brand hidden" href="./"><i class="fa fa-shield"></i></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.html"> <i class="menu-icon fa fa-cogs"></i> Dashboard </a>
                </li>
                <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                <li class="">
                    <a href="#corousel" aria-expanded="false"> <i class="menu-icon fa fa-file-image-o"></i>Corousel</a>
                </li>
                <li class="">
                    <a href="#gallary" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-clone"></i>Gallary</a>
                </li>

                <h3 class="menu-title">Packages</h3><!-- /.menu-title -->

                <li class="">
                    <a href="#package"  aria-expanded="false"> <i class="menu-icon fa fa-balance-scale"></i>Package</a>
                </li>
                <h3 class="menu-title">Core</h3><!-- /.menu-title -->
                <li class="">
                    <a href="#availability" aria-expanded="false"> <i class="menu-icon fa fa-free-code-camp"></i>Availability</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            </div>
            <!--for user logo-->
            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>
                </div>
            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3" id="corousel">
        <?php
        //
        if (isset($_POST['upload1'])) {
            // Get image name
            $image = $_FILES['image1']['name'];
            // image file directory
            $target = "images/".basename($image);
            $sql = "INSERT INTO tblcourosel (path) VALUES ('$image')";
            $sql ="Update tblcourosel set path='$image' WHERE id = 1";
            // execute query
            mysqli_query($db, $sql);
            if (move_uploaded_file($_FILES['image1']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        if (isset($_POST['upload2'])) {
            // Get image name
            $image = $_FILES['image2']['name'];
            // image file directory
            $target = "images/".basename($image);
            $sql = "INSERT INTO tblcourosel (path) VALUES ('$image')";
            $sql ="Update tblcourosel set path='$image' WHERE id = 2";
            // execute query
            mysqli_query($db, $sql);
            if (move_uploaded_file($_FILES['image2']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        if (isset($_POST['upload3'])) {
            // Get image name
            $image = $_FILES['image3']['name'];
            // image file directory
            $target = "images/".basename($image);
            $sql = "INSERT INTO tblcourosel (path) VALUES ('$image')";
            $sql ="Update tblcourosel set path='$image' WHERE id = 3";
            // execute query
            mysqli_query($db, $sql);
            if (move_uploaded_file($_FILES['image3']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        if (isset($_POST['upload4'])) {
            // Get image name
            $image = $_FILES['image4']['name'];
            // image file directory
            $target = "images/".basename($image);
            $sql = "INSERT INTO tblcourosel (path) VALUES ('$image')";
            $sql ="Update tblcourosel set path='$image' WHERE id = 4";
            // execute query
            mysqli_query($db, $sql);
            if (move_uploaded_file($_FILES['image4']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        if (isset($_POST['upload5'])) {
            // Get image name
            $image = $_FILES['image5']['name'];
            // image file directory
            $target = "images/".basename($image);
            $sql = "INSERT INTO tblcourosel (path) VALUES ('$image')";
            $sql ="Update tblcourosel set path='$image' WHERE id = 5";
            // execute query
            mysqli_query($db, $sql);
            if (move_uploaded_file($_FILES['image5']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        ?>
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Corousel</span> You can upload your <strong>Corousel</strong> image from <here></here>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="col-sm-6 col-lg-3 align-items-center" style="padding: 3em;">
                <input type="file" name="image1"><br>
                <button type="submit" name="upload1"><i class="fa fa-cloud-upload"></i> POST 1</button>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3 align-items-center" style="padding: 3em;">
                <input type="file" name="image2">
                <button type="submit" name="upload2"><i class="fa fa-cloud-upload"></i> POST 2</button>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3 align-items-center" style="padding: 3em;">
                <input type="file" name="image3">
                <button type="submit" name="upload3"><i class="fa fa-cloud-upload"></i> POST 3</button>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3 align-items-center" style="padding: 3em;">
                <input type="file" name="image4">
                <button type="submit" name="upload4"><i class="fa fa-cloud-upload"></i> POST 4</button>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3 align-items-center" style="padding: 3em;">
                <input type="file" name="image5">
                <button type="submit" name="upload5"><i class="fa fa-cloud-upload"></i> POST 5</button>
            </div>
            <!--/.col-->
        </form>
    </div>

    <div class="content mt-3" id="gallary">
        <?php
        if (isset($_POST['gallaryupload1'])) {
            // Get image name
            $image = $_FILES['img1']['name'];
            // image file directory
            $target = "images/gimg/".basename($image);
            $sql = "INSERT INTO tblgallary (imgpath) VALUES ('$image')";
            $sql ="Update tblgallary set imgpath='$image' WHERE id = 1";
            // execute query
            mysqli_query($db, $sql);
            if (move_uploaded_file($_FILES['img1']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        if (isset($_POST['gallaryupload2'])) {
            // Get image name
            $image = $_FILES['img2']['name'];
            // image file directory
            $target = "images/gimg/".basename($image);
            $sql = "INSERT INTO tblgallary (imgpath) VALUES ('$image')";
            $sql ="Update tblgallary set imgpath='$image' WHERE id = 2";
            // execute query
            mysqli_query($db, $sql);
            if (move_uploaded_file($_FILES['img2']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        if (isset($_POST['gallaryupload3'])) {
            // Get image name
            $image = $_FILES['img3']['name'];
            // image file directory
            $target = "images/gimg/".basename($image);
            $sql = "INSERT INTO tblgallary (imgpath) VALUES ('$image')";
            $sql ="Update tblgallary set imgpath='$image' WHERE id = 3";
            // execute query
            mysqli_query($db, $sql);
            if (move_uploaded_file($_FILES['img3']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        if (isset($_POST['gallaryupload4'])) {
            // Get image name
            $image = $_FILES['img4']['name'];
            // image file directory
            $target = "images/gimg/".basename($image);
            $sql = "INSERT INTO tblgallary (imgpath) VALUES ('$image')";
            $sql ="Update tblgallary set imgpath='$image' WHERE id = 4";
            // execute query
            mysqli_query($db, $sql);
            if (move_uploaded_file($_FILES['img4']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        if (isset($_POST['gallaryupload5'])) {
            // Get image name
            $image = $_FILES['img5']['name'];
            // image file directory
            $target = "images/gimg/".basename($image);
            $sql = "INSERT INTO tblgallary (imgpath) VALUES ('$image')";
            $sql ="Update tblgallary set imgpath='$image' WHERE id = 5";
            // execute query
            mysqli_query($db, $sql);
            if (move_uploaded_file($_FILES['img5']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        if (isset($_POST['gallaryupload6'])) {
            // Get image name
            $image = $_FILES['img6']['name'];
            // image file directory
            $target = "images/gimg/".basename($image);
            $sql = "INSERT INTO tblgallary (imgpath) VALUES ('$image')";
            $sql ="Update tblgallary set imgpath='$image' WHERE id = 6";
            // execute query
            mysqli_query($db, $sql);
            if (move_uploaded_file($_FILES['img6']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        if (isset($_POST['gallaryupload7'])) {
            // Get image name
            $image = $_FILES['img7']['name'];
            // image file directory
            $target = "images/gimg/".basename($image);
            $sql = "INSERT INTO tblgallary (imgpath) VALUES ('$image')";
            $sql ="Update tblgallary set imgpath='$image' WHERE id = 7";
            // execute query
            mysqli_query($db, $sql);
            if (move_uploaded_file($_FILES['img7']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        if (isset($_POST['gallaryupload8'])) {
            // Get image name
            $image = $_FILES['img8']['name'];
            // image file directory
            $target = "images/gimg/".basename($image);
            $sql = "INSERT INTO tblgallary (imgpath) VALUES ('$image')";
            $sql ="Update tblgallary set imgpath='$image' WHERE id = 8";
            // execute query
            mysqli_query($db, $sql);
            if (move_uploaded_file($_FILES['img8']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        ?>
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Gallery</span> You can upload your <strong>Gallery</strong> image from <here></here>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="col-xl-6 col-lg-8">
                <section class="card">
                    <div class="twt-feed blue-bg">

                        <div class="fa fa-angle-double-up wtt-mark "></div>

                        <div class="media">
                            <input type="file" name="img1">
                            <button type="submit" name="gallaryupload1"><i class="fa fa-cloud-upload"></i> POST 1</button>
                            <div class="media-body">

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-6 col-lg-8">
                <section class="card">
                    <div class="twt-feed blue-bg">

                        <div class="fa fa-angle-double-up wtt-mark "></div>

                        <div class="media">
                            <input type="file" name="img2">
                            <button type="submit" name="gallaryupload2"><i class="fa fa-cloud-upload"></i> POST 2</button>
                            <div class="media-body">

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-6 col-lg-8">
                <section class="card">
                    <div class="twt-feed blue-bg">

                        <div class="fa fa-angle-double-up wtt-mark "></div>

                        <div class="media">
                            <input type="file" name="img3">
                            <button type="submit" name="gallaryupload3"><i class="fa fa-cloud-upload"></i> POST 3</button>
                            <div class="media-body">

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-6 col-lg-8">
                <section class="card">
                    <div class="twt-feed blue-bg">

                        <div class="fa fa-angle-double-up wtt-mark "></div>

                        <div class="media">
                            <input type="file" name="img4">
                            <button type="submit" name="gallaryupload4"><i class="fa fa-cloud-upload"></i> POST 4</button>
                            <div class="media-body">

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-6 col-lg-8">
                <section class="card">
                    <div class="twt-feed blue-bg">

                        <div class="fa fa-angle-double-up wtt-mark "></div>

                        <div class="media">
                            <input type="file" name="img5">
                            <button type="submit" name="gallaryupload5"><i class="fa fa-cloud-upload"></i> POST 5</button>
                            <div class="media-body">

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-6 col-lg-8">
                <section class="card">
                    <div class="twt-feed blue-bg">

                        <div class="fa fa-angle-double-up wtt-mark "></div>

                        <div class="media">
                            <input type="file" name="img6">
                            <button type="submit" name="gallaryupload6"><i class="fa fa-cloud-upload"></i> POST 6</button>
                            <div class="media-body">

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-6 col-lg-8">
                <section class="card">
                    <div class="twt-feed blue-bg">

                        <div class="fa fa-angle-double-up wtt-mark "></div>

                        <div class="media">
                            <input type="file" name="img7">
                            <button type="submit" name="gallaryupload7"><i class="fa fa-cloud-upload"></i> POST 7</button>
                            <div class="media-body">

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-6 col-lg-8">
                <section class="card">
                    <div class="twt-feed blue-bg">

                        <div class="fa fa-angle-double-up wtt-mark "></div>

                        <div class="media">
                            <input type="file" name="img8">
                            <button type="submit" name="gallaryupload8"><i class="fa fa-cloud-upload"></i> POST 8</button>
                            <div class="media-body">

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </form>
    </div>
    <div class="content mt-3" id="package">
        <?php
        //
        if (isset($_POST['pckupload1'])) {
            $packagename=$_POST['pckname1'];
            $packagedesc=$_POST['pckdesc1'];
            $cost=$_POST['cost1'];
            $sql = "INSERT INTO tblpackage (packagename,packagedesc,cost) VALUES ('$packagename','$packagedesc','$cost')";
            $sql ="Update tblpackage set packagename='$packagename', packagedesc='$packagedesc', cost='$cost' WHERE id = 1";
            // execute query
            mysqli_query($db, $sql);

        }
        if (isset($_POST['pckupload2'])) {
            $packagename=$_POST['pckname2'];
            $packagedesc=$_POST['pckdesc2'];
            $cost=$_POST['cost2'];
            $sql = "INSERT INTO tblpackage (packagename,packagedesc,cost) VALUES ('$packagename','$packagedesc','$cost')";
            $sql ="Update tblpackage set packagename='$packagename', packagedesc='$packagedesc', cost='$cost' WHERE id = 2";
            // execute query
            mysqli_query($db, $sql);
        }
        if (isset($_POST['pckupload3'])) {
            $packagename=$_POST['pckname3'];
            $packagedesc=$_POST['pckdesc3'];
            $cost=$_POST['cost3'];
            $sql = "INSERT INTO tblpackage (packagename,packagedesc,cost) VALUES ('$packagename','$packagedesc','$cost')";
            $sql ="Update tblpackage set packagename='$packagename', packagedesc='$packagedesc', cost='$cost' WHERE id = 3";
            // execute query
            mysqli_query($db, $sql);
        }
        ?>
        <form action="" method="post">
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Packages</span> You set up your packages from here. <here></here>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib "><i class="ti-crown text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-digit"><i class="fa fa-pencil-square-o"></i> <input type="text" name="pckname1" placeholder="Enter Package Name" size="73"></div>
                                <div class="stat-digit"><i class="fa fa-pencil-square-o"></i> <input type="text" name="pckdesc1" placeholder="Enter Package Description" size="73"></div>
                                <div class="stat-digit"><i class="fa fa-pencil-square-o"></i> <input type="number" name="cost1" placeholder="Enter Cost" ></div>
                                <button type="submit" class="btn btn-success btn-lg" name="pckupload1">
                                    <i class="fa fa-chain"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-cup text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-digit"><i class="fa fa-pencil-square-o"></i> <input type="text" name="pckname2" placeholder="Enter Package Name" size="73"></div>
                                <div class="stat-digit"><i class="fa fa-pencil-square-o"></i> <input type="text" name="pckdesc2" placeholder="Enter Package Description" size="73"></div>
                                <div class="stat-digit"><i class="fa fa-pencil-square-o"></i> <input type="number" name="cost2" placeholder="Enter Cost" ></div>
                                <button type="submit" class="btn btn-success btn-lg" name="pckupload2">
                                    <i class="fa fa-chain"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-flag text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-digit"><i class="fa fa-pencil-square-o"></i> <input type="text" name="pckname3" placeholder="Enter Package Name" size="73"></div>
                                <div class="stat-digit"><i class="fa fa-pencil-square-o"></i> <input type="text" name="pckdesc3" placeholder="Enter Package Description" size="73"></div>
                                <div class="stat-digit"><i class="fa fa-pencil-square-o"></i> <input type="number" name="cost3" placeholder="Enter Cost" ></div>
                                <button type="submit" class="btn btn-success btn-lg" name="pckupload3">
                                    <i class="fa fa-chain"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div> <!-- .content -->
    <div class="content mt-3" id="availability">
        <?php
        if(isset($_POST['submitavailability'])){
            $date=$_POST['date'];
            $timefrom=$_POST['timefrom'];
            $timeto=$_POST['timeto'];
            $status=$_POST['status'];

            //insert query
            $sql="INSERT INTO tblavailability (date,timefrom,timeto,status) VALUES ('$date','$timefrom','$timeto','$status')";
            //$sql="UPDATE tblavailability";
            //it executes query
            mysqli_query($db,$sql);
        }
        ?>
        <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    Book <strong>Slot</strong>
                </div>
                <div class="card-body card-block">
                    <form action="" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-sm-6">Date: <input type="date" name="date" placeholder="Date" class="form-control"></div>
                        </div>
                        <br>
                        <div class="row form-group">
                            <div class="col col-sm-3">Time From: <select name="timefrom" required>
                                    <option value="09:00:00">9am</option>
                                    <option value="10:00:00">10am</option>
                                    <option value="11:00:00">11am</option>
                                    <option value="12:00:00">12pm</option>
                                    <option value="13:00:00">1pm</option>
                                    <option value="14:00:00">2pm</option>
                                    <option value="15:00:00">3pm</option>
                                    <option value="16:00:00">4pm</option>
                                    <option value="17:00:00">5pm</option>
                                    <option value="18:00:00">6pm</option>
                                    <option value="19:00:00">7pm</option>
                                    <option value="20:00:00">8pm</option>
                                    <option value="21:00:00">9pm</option>
                                    <option value="22:00:00">10pm</option>
                                    <option value="23:00:00">11pm</option>
                                    <option value="24:00:00">12pm</option>
                                </select></div>
                            <div class="col col-sm-3">Time To: <select name="timeto" required>
                                    <option value="09:00:00">9am</option>
                                    <option value="10:00:00">10am</option>
                                    <option value="11:00:00">11am</option>
                                    <option value="12:00:00">12pm</option>
                                    <option value="13:00:00">1pm</option>
                                    <option value="14:00:00">2pm</option>
                                    <option value="15:00:00">3pm</option>
                                    <option value="16:00:00">4pm</option>
                                    <option value="17:00:00">5pm</option>
                                    <option value="18:00:00">6pm</option>
                                    <option value="19:00:00">7pm</option>
                                    <option value="20:00:00">8pm</option>
                                    <option value="21:00:00">9pm</option>
                                    <option value="22:00:00">10pm</option>
                                    <option value="23:00:00">11pm</option>
                                    <option value="24:00:00">12pm</option>
                                </select></div>
                            <div class="col col-sm-3"><select name="status" required>
                                    <option>book</option>
                                    <option>available</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row"></div>
                        <div class="card-actions">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-chain-broken"></i> Book
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </form>
    </div>
</div><!-- /#right-panel -->


<!-- Right Panel -->

<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


<script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script>
    ( function ( $ ) {
        "use strict";

        jQuery( '#vmap' ).vectorMap( {
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [ '#1de9b6', '#03a9f5' ],
            normalizeFunction: 'polynomial'
        } );
    } )( jQuery );
</script>

</body>
</html>
