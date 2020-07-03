
<?php 
 global $connection;
 
 if(isset($_GET['p_id'])){
     $the_get_id = $_GET['p_id'];
 }
 $query = "SELECT * FROM post ";
 $select_posts_by_id = mysqli_query($connection, $query);
 
 while($row = mysqli_fetch_assoc($select_posts_by_id)){
 $post_id = $row['post_id'];
 $post_author =$row['post_author'];
 $post_title =$row['post_title'];
 $post_category_id =$row['post_category_id'];
 $post_status =$row['post_status'];
 $post_image =$row['post_image'];
 $post_tags =$row['post_tags'];
 $post_content =$row['post_content'];
 $post_comment_count =$row['post_comment_count'];
 $post_date =$row['post_date'];
 }

 if(isset($_POST['edit_post'])){
   
 $post_author =$_POST['post_author'];
 $post_title =$_POST['post_title'];


 
 $post_tags =$_POST['post_tags'];
 $post_content =$_POST['post_content'];
 }
 ?>





<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="title">Post Title</label>
    <input value="<?php echo $post_title; ?>" type="text" class="form-control" name="post_title">
</div>

<div class="form-group">
    <select name="post_category" id="">
    <?php
     global $connection;
$query = "SELECT * FROM categories";
$select_cat = mysqli_query($connection, $query);
confirm($select_cat);
while($row = mysqli_fetch_assoc($select_cat)){
$cat_id = $row['cat_id'];
$cat_title =$row['cat_title'];
    echo "<option value='{$cat_title}'>{$cat_title}</option>";

}
?>
    </select>
    </div>

<div class="form-group">
    <label for="title">Post Author</label>
    <input value="<?php echo $post_author; ?>" type="text" class="form-control" name="post_author">
</div>

<div class="form-group">
    <label for="title">Post Status</label>
    <input value="<?php echo $post_status; ?>" type="text" class="form-control" name="post_status">
</div>

<div class="form-group">
    
    <img width=100 src="../images/<?php echo $post_image; ?>" alt="">
</div>

<div class="form-group">
    <label for="title">Post Tags</label>
    <input value="<?php echo $post_tags; ?>" type="text" class="form-control" name="post_tags">
</div>

<div class="form-group">
    <label for="title">Post Content</label>
    <input value="<?php echo $post_content; ?>" type="text" class="form-control" name="post_content">
</div>

<div class="form-group">
<label for="title">Edit Post</label>
<input type="submit" class="form-control" name="edit_post">
</div>




</form>