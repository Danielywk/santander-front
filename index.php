
<?php
include("first.php");
include("php/header.php");
?>
<div class="text-center">
  <a href="prediccion_bolsa.php" class="btn btn-primary btn-lg" style="font-size: 2em; padding: 20px 40px;">Go to stock Market Malue Prediction</a>
</div>
        <div id="page-wrapper">
            <div id="page-inner">
              <div class="row">
                  <div class="col-md-12">
                      <h1 class="page-subhead-line">Welcome to <strong><?php echo ' '. $siteName ?></strong> Today is:
                      <i class="icon-calendar icon-large" ></i>
                      
                      <?php
                      date_default_timezone_set("Asia/Dhaka");
                      echo  date(" l, F d, Y") . "<br>";

                      ?>
                       </h1>

                  </div>
              </div>
                <!-- /. ROW  -->
                <?php
                include("main.php");
                ?>
                <!-- /. ROW  -->


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="https://mdbootstrap.com/material-design-for-bootstrap/">
            <strong> MDBootstrap.com</strong>
        </a>
        <p align="center">About the <a target="_blank" href="https://www.facebook.com/anupamhayatbd">Developer</a></p>
    </div>
    <!--/.Copyright -->

   <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>



</body>
</html>
