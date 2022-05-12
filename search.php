<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Dianova Lab</title>
    <!-- Style css -->
    <?php include('header/head.php'); ?>
</head>

<body class="homepage-1 search">

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fa fa-angle-up"></i>
    </div>

    <div class="main">
        <!-- ***** Header Start ***** -->
        <?php include('header/header.php'); ?>

        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="search-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="package-form">
                            <h1>Find our packages</h1>
                            <!-- <p>Find our packages</p> -->
                            <div class="banner-search text-center bnr-selct">

                                <form name="form1" method="post" action="search.php">
                                    <input type="search" name="" id="" placeholder="Search Our Packages">

                                    <button type="submit" name="submit" value="submit">Search</button>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </section>








        <!--====== Footer Area Start ======-->
        <?php include('footer/footer.php'); ?>

    </div>

    <!-- ***** All jQuery Plugins ***** -->

    <?php include('footer/script.php'); ?>

</body>

</html>