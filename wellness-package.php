<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Dianova Lab</title>
    <!-- Style css -->
    <?php include('header/head.php'); ?>
</head>

<body class="homepage-1">

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fa fa-angle-up"></i>
    </div>

    <div class="main">
        <!-- ***** Header Start ***** -->
        <?php include('header/header.php'); ?>

        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-left">
                        <div class="bread-head">
                            <h1>Wellness Packages</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ***** Inner Health Package Details Area Start ***** -->
        <section class="inner-package section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row package-inner-box align-items-center">
                            <div class="col-lg-6 p-0">
                                <div class="img">
                                    <img src="assets/img/package-inner/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pg-content">
                                    <h3>Wellness Package For All</h3>
                                    <div class="star">
                                        <img src="assets/img/stras.png" alt="">
                                    </div>
                                    <p>A basic health check designed for all.</p>
                                    <div class="rate">
                                        <p class="org">MRP: 1260/-</p>
                                        <p class="package-price">Package Price - 850/- <span>(Savings 410/-)</span></p> 
                                    </div>
                                    <div class="btn-package">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal0">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** package FAQ Area Start ***** -->
        <section class="package-faq section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="head">
                            <h2>Package Details</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="faq-content">
                            <div class="accordion" id="dianova-accordion">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card my-2">
                                                    <div class="card-header">
                                                        <h2>
                                                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseOne">
                                                            Diabetes
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" data-parent="#dianova-accordion">
                                                        <div class="card-body">
                                                            <p>Blood Sugar</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-12"></div>
                                        </div>
                                    <div class="card my-2">
                                                <div class="card-header">
                                                    <h2>
                                                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo">
                                                            Lipid Profile 
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-parent="#dianova-accordion">
                                                    <div class="card-body">
                                                        <p>Total Cholesterol</p>
                                                        <p>Triglyceride</p>
                                                        <p>HDL </p>
                                                        <p>LDL </p>
                                                        <p>VLDL</p>
                                                        <p>TC/ HDL Ratio</p>
                                                        <p>LDL / HDL Ratio</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card my-2">
                                                <div class="card-header">
                                                    <h2>
                                                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree">
                                                            Liver Function 
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseThree" class="collapse" data-parent="#dianova-accordion">
                                                    <div class="card-body">
                                                        <p>bilirubin total</p>
                                                        <p>bilirubin direct </p>
                                                        <p>bilirubin indirect</p>
                                                        <p>SGOT</p>
                                                        <p>SGPT</p>
                                                        <p>ALP</p>
                                                        <p>Total Protein</p>
                                                        <p>Albumin</p>
                                                        <p>A/G Ratio</p>
                                                    </div>
                                                </div>
                                        </div>   
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card my-2">
                                                <div class="card-header">
                                                    <h2>
                                                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour">
                                                        kidney function 
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseFour" class="collapse" data-parent="#dianova-accordion">
                                                    <div class="card-body"> 
                                                        <p>urea</p>
                                                        <p>creatinine</p>
                                                        <p>uric acid</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                    
                                        <div class="card my-2">
                                                <div class="card-header">
                                                    <h2>
                                                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFive">
                                                        CBC 
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseFive" class="collapse" data-parent="#dianova-accordion">
                                                    <div class="card-body"> 
                                                        <p>HB</p>
                                                        <p>TLC</p>
                                                        <p>DLC</p>
                                                        <p>total neutrophil count</p>
                                                        <p>total lymphocyte count </p>
                                                        <p>total eosinophil count </p>
                                                        <p>PCV</p>
                                                        <p>MCV</p>
                                                        <p>MCH</p>
                                                        <p>MCHC</p>
                                                        <p>total rbc count</p>
                                                        <p>RDW</p>
                                                        <p>PLC</p>
                                                        <p>MPV</p>
                                                        <p>PDW</p>
                                                        <p>PCT</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="more-btn">
                            <a href="test-doc/test-2.pdf" download>Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Contact Banner Area Start ***** -->
        <?php include('footer/contact-footer2.php'); ?>

        <!--====== Footer Area Start ======-->
        <?php include('footer/footer.php'); ?>

    </div>  

    <!-- ***** All jQuery Plugins ***** -->

    <?php include('footer/script.php'); ?>

</body>

</html>