<?php include('./include/db.php'); 
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($db,$query);
if(!$db){
	header("location:error.html");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>AJMail - Mail Sender & Receiver</title>
        <link rel="icon" type="image/x-icon" href="admin/assets/img/favicon.ico"/>
        <link href="admin/assets/css/loader.css" rel="stylesheet" type="text/css"/>
        <script src="admin/assets/js/loader.js"></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link
            href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap"
            rel="stylesheet">
        <link
            href="admin/bootstrap/css/bootstrap.min.css"
            rel="stylesheet"
            type="text/css"/>
        <link href="admin/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN CUSTOM STYLE FILE -->
        <link
            href="admin/assets/css/pages/contact_us.css"
            rel="stylesheet"
            type="text/css"/>
        <link
            rel="stylesheet"
            type="text/css"
            href="admin/assets/css/forms/theme-checkbox-radio.css">
        <!-- END CUSTOM STYLE FILE -->


    </head>
    <body class="sidebar-noneoverflow">

        <!-- BEGIN LOADER -->
        <div id="load_screen">
            <div class="loader">
                <div class="loader-content">
                    <div class="spinner-grow align-self-center"></div>
                </div>
            </div>
        </div>
        <!-- END LOADER -->

        <!-- BEGIN MAIN CONTAINER -->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!-- BEGIN CONTENT AREA -->
            <div id="content" class="main-content">

                <div class="layout-px-spacing">

                    <div class="contact-us">
                        <div class="cu-contact-section">
                            <div class="contact-form">
                                <form class="" method="post">
                                    <!--alert messages start-->
                                    <?php include('include/message.php'); ?>
                                    <!--alert messages end-->
                                    <h4>Send us a Message</h4>
                                    <div class="row mb-4">
                                        <div class="col-sm-12 col-12 input-fields mb-4 mb-sm-0">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewbox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <input
                                                type="text"
                                                name="name"
                                                class="form-control"
                                                placeholder="Name"
                                                required="required"
                                                oninvalid="setCustomValidity('Isi Dulu Bos!')"
                                                onkeyup="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12 col-12 input-fields">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewbox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-at-sign">
                                                <circle cx="12" cy="12" r="4"></circle>
                                                <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                            </svg>
                                            <input
                                                type="email"
                                                name="email"
                                                class="form-control"
                                                placeholder="Email"
                                                required="required"
                                                oninvalid="setCustomValidity('Isi Dulu Bos!')"
                                                onkeyup="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12 col-12 input-fields">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewbox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-align-justify">
                                                <line x1="21" y1="10" x2="3" y2="10"></line>
                                                <line x1="21" y1="6" x2="3" y2="6"></line>
                                                <line x1="21" y1="14" x2="3" y2="14"></line>
                                                <line x1="21" y1="18" x2="3" y2="18"></line>
                                            </svg>
                                            <input
                                                type="text"
                                                name="subject"
                                                class="form-control"
                                                placeholder="Subject"
                                                required="required"
                                                oninvalid="setCustomValidity('Isi Dulu Bos!')"
                                                onkeyup="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12 col-12">
                                            <p class="">Preffered method of communication</p>
                                        </div>
                                        <div class="col-sm-12 col-12 input-fields">
                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-primary"></label>
                                            </div>
                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-primary"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12 col-12 input-fields">
                                            <textarea
                                                name="message"
                                                class="form-control"
                                                id="exampleFormControlTextarea1"
                                                rows="4"
                                                placeholder="Message"
                                                required="required"
                                                oninvalid="setCustomValidity('Isi Dulu Bos!')"
                                                onkeyup="setCustomValidity('')"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-sm-left ">
                                            <input class="btn btn-primary" type="submit" name="submit" value="Send Message">
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="admin/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="admin/bootstrap/js/popper.min.js"></script>
    <script src="admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="admin/assets/js/app.js"></script>

    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
    <script src="admin/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>