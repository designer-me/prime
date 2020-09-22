<?php
ini_set('display_errors', 1);
include "includes/db.php";
?>
<?php
include "includes/header.php";
?>
<?php
include "functions.php";
?>
<?php ob_start(); ?>
<body>
  <!-- container section start -->
  <section id="container" class="">
<?php
include "includes/navigation.php";
      ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
          <div class="">
         <div class="row">
<div class="col-md-12">
          
                 <h1 class="page-header">Welcome To Admin<small style="color:black">Author</small></h1>

                    
      <?php 
//////////////// CODE  ////////////////////                            
      if(isset($_GET['source'])) { 
          $source = $_GET['source'];    
      } else {         
        $source = " ";  
      }
       switch($source) {
       case 'add_news';
       include "includes/add_news.php";
             
       break;
                                
       case 'edit_news';
      include "includes/edit_news.php";
       break;
                                
       case '200';
       echo 'HELLO 200';
       break;    
                                
       default:
       include "includes/view_all_news.php";
       break;    
       }                 
    
 
    
?> 
             </div>
              </div>
          </div>
          <div class="text-right"></div>
        </section>
    <!--main content end-->

</section>
  <!-- container section start -->
     <?php
include "includes/footer.php";
?>