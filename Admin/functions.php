
<?php
function confirm($result){
        global $connection;
    if(!$result){
         die("QUERY FAILED". mysqli_error($connection));  
    }

  
}
function insert_category(){
    global $connection;
   $query = "SELECT * FROM category";
                        $select_categories = mysqli_query($connection,$query);
                        if(isset($_POST['submit'])){
                            $cat_title=$_POST['cat_title'];
 
                            if($cat_title=="" || empty($cat_title)){
                                echo 'this cant be empty';
                            } 
                            else{
                                $query="INSERT INTO category(cat_title) VALUES('{$cat_title}') ";
                            
                                $create_category_query =mysqli_query($connection,$query);
                                if(!$create_category_query){
                                    die('failed to add category') . mysqli_error($connection); 
                                }
 
                            }
                        }   
}
function find_category()
{
        global $connection;
    $query = "SELECT * FROM category";
            $select_category = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($select_category)){
                $cat_id = $row['cat_id']; 
                $cat_title = $row['cat_title'];
               echo "<tr>";
                 echo "<td>{$cat_id}</td>"; 
                echo "<td>{$cat_title}</td>";  
                echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";   
                echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
                
           echo "</tr>";
                
            }
                
            }
function deletecategory(){
    global $connection;
                //delete query
                        if(isset($_GET['delete'])) {

    $the_cat_id = $_GET['delete'];

    $query = "DELETE FROM category WHERE cat_id = {$the_cat_id} ";

    $delete_query = mysqli_query($connection, $query);

    header("Location: categories.php");
                             
                         }
}