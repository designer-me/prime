               <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th> 
                        <th>Editor</th>   
                        <th>Title</th>   
                        <th>Category</th>   
                        <th>Status</th>
                        <th>Image</th>  
                        <th>Tags</th>
                        <th>Comments</th>  
                        <th>Date</th>
                    </tr> 
                   </thead>
                    <tbody>
                        
                        <?php
                            $query = "SELECT * FROM news";
            $select_news = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($select_news)){
                  
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
            
               echo "<tr>";
                 echo "<td>{$news_id}</td>"; 
                echo "<td>{$news_editor}</td>"; 
                echo "<td>{$news_title}</td>"; 
                echo "<td>{$news_category_id}</td>";     
                echo "<td>{$news_status}</td>"; 
                echo "<td><img src='../images/$news_image' alt='image' width='100'></td>"; 
                echo "<td>{$news_tag}</td>";   
                echo "<td>{$news_comment_count}</td>"; 
                echo "<td>{$news_date}</td>";  
                echo "<td><a href='news.php?source=edit_news&n_id={$news_id}'>Edit</a></td>";
                echo "<td><a href='news.php?delete={$news_id}'>Delete</a></td>";   
               
                
           echo "</tr>";
                        
            }?>
                
                    </tbody>
                    </table>
<?php
if(isset($_GET['delete'])){
    $the_news_id = $_GET['delete'];
    $query ="DELETE FROM news WHERE news_id = {$the_news_id} ";
    $delete_query = mysqli_query($connection, $query);
}

?>