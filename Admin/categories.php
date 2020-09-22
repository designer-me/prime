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
 <div class="col-lg-6">
 
                        <?php //insert
                      insert_category();
            
                        ?>
                   
                        <form action = "" method="post">
                            <div class="form-group">
                                <label for="cat-title">Add Category </label>
                    <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Update Category">
                            </div>
                        </form>    
     
                     <?php
     //update and include
                    if(isset($_GET['edit'])){
                    $cat_id = $_GET['edit'];
                    }
        include "includes/update_categories.php";
                      ?>
                        </div>
        
    
          <div class="col-lg-6">
               <table class="table table-bordered table-hover">
              <thead>
              <tr>
                 <th>Id</th> 
                  <th>Category Title</th>  
                  <th>Delete</th>  
                  <th>Edit</th>
              </tr>
              </thead>
              <tbody>
<!--                find all categories-->
              <?php
                  
         find_category();
            ?>
<!--                  delete category  -->
           <?php
      
     deletecategory();
                      ?>
              </tbody>
              </table>
              
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