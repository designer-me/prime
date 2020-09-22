<?php

  if(isset($_GET['n_id'])){
    $the_post_id = $_GET['n_id'];
      
  }
           $query = "SELECT * FROM news";
            $select_news_by_id = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($select_news_by_id)){
                  
                         $news_id =$row['news_id'];
                    $news_title =$row['news_title'];
                 $news_editor =$row['news_editor'];  
                $news_category_id =$row['news_category_id'];
                $news_status =$row['news_status']; 
                $news_tag =$row['news_tag'];
                 $news_date =$row['news_date'];
                 $news_image =$row['news_image'];
                 $news_content =$row['news_content'];  
                $news_comment_count =$row['news_comment_count']; 
                $news_image =$row['news_image']; 
            }
?>     

<section class="panel">
              <header class="panel-heading">
             Add News
              </header>
              <div class="panel-body">
        <form action="" method="post" enctype="multipart/form-data">
 
<div class="form-group">
 <label for="title">Post Title</label>
  <input value="<?php echo $news_title; ?>" type="text" class="form-control" name="title">
</div>
 
<div class="form-group">
<!--
 <label for="post_category_id">Post Category Id </label>
  <input value="<?php echo $news_category_id; ?>" type="text" class="form-control" name="news_category_id">
-->
    <select name="news_category_id" id="news_category_id" class="form-control">
    <?php
         $query = "SELECT * FROM category";

                        $select_categories = mysqli_query($connection,$query);
                        
                        confirm($select_categories);

                        while($row = mysqli_fetch_assoc($select_categories)){

                        $cat_id = $row["cat_id"];

                        $cat_title = $row["cat_title"];
                            
                    echo "<option value=' $cat_id'>$cat_title</option>" ;       
                             

                        }
        ?>
    </select>
</div>
 
<div class="form-group">
 <label for="title">Post Author </label>
  <input value="<?php echo $news_editor; ?>" type="text" class="form-control" name="editor">
</div>
 
 
<div class="form-group">
 <label for="Post_Status">Post Status </label>
  <input type="text" value="<?php echo $news_status; ?>" class="form-control" name="news_status">
</div>
 
<div class="form-group">
 <label for="Post_Image ">Post Image </label>
<!-- <input value="<?php echo $news_image; ?>" type="file" name="image">-->
    <img width="100" src="../images/<?php echo $news_image; ?>" alt="news">
</div>
 
<div class="form-group">
 <label for="Post_tags">Post_tags</label>
  <input value="<?php echo $news_tag; ?>" type="text" class="form-control" name="news_tags">
</div>
 
<div class="form-group">
 <label for="post_content">Post content</label>
  <textarea  class="form-control" name="news_content" id="" cols="30" rows="10">
    <?php echo $news_content; ?>
  </textarea>
</div>
 
<div class="form-group">
  <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
</div>
</form>
              </div>
            </section>