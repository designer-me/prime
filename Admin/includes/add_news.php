<?php
if(isset($_POST['create_post'])){


    $news_title = $_POST['title'];

    $news_editor = $_POST['editor'];

    $news_category_id = $_POST['news_category_id'];

    $news_status = $_POST['news_status'];
//    $news_image = $_POST['image'];

    $news_image = $_FILES['image']['name'];

    $image_temp = $_FILES["image"]["tmp_name"];

    $news_tag = $_POST['news_tags'];

    $news_content =$_POST['news_content'];

    $news_date = date('d-m-y');

    $news_comment_count = 4;   

     

    move_uploaded_file($image_temp, "../images/$news_image");
     
$query = "INSERT INTO news(news_category_id,news_title,news_editor,news_date,news_image,news_content,news_tag,news_comment_count,news_status) ";
$query .= "VALUES({$news_category_id},'{$news_title}','{$news_editor}',now(),'{$news_image}','{$news_content}','{$news_tag}','{$news_comment_count}','{$news_status}' ) ";
    $create_post_query = mysqli_query($connection,$query);
   confirm($create_post_query);

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
  <input type="text" class="form-control" name="title">
</div>
 
<div class="form-group">
 <label for="post_category_id">Post Category Id </label>
  <input type="text" class="form-control" name="news_category_id">
</div>
 
<div class="form-group">
 <label for="title">Post Author </label>
  <input type="text" class="form-control" name="editor">
</div>
 
 
<div class="form-group">
 <label for="Post_Status">Post Status </label>
  <input type="text" class="form-control" name="news_status">
</div>
 
<div class="form-group">
 <label for="Post_Image ">Post Image </label>
 <input type="file" name="image">
</div>
 
<div class="form-group">
 <label for="Post_tags">Post_tags</label>
  <input type="text" class="form-control" name="news_tags">
</div>
 
<div class="form-group">
 <label for="post_content">Post content</label>
  <textarea class="form-control" name="news_content" id="" cols="30" rows="10">
  </textarea>
</div>
 
<div class="form-group">
  <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
</div>
</form>
              </div>
            </section>