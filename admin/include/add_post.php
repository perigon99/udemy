
<?php if(isset($_POST['create_post'])){
global $connection;
$post_title = $_POST['post_title'];
$post_category_id = $_POST['post_category_id'];
$post_author = $_POST['post_author'];
$post_status = $_POST['post_status'];

$image = $_FILES['image']['name'];
$post_image_temp = $_FILES['image']['tmp_name'];

$post_tags = $_POST['post_tags'];
$post_content = $_POST['post_content'];
$post_date = date('d-m-y');
$post_comment_count = 4;

move_uploaded_file($post_image_temp, "../images/$image");
$query = "INSERT INTO post(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status)";
$query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$image}','{$post_content}','{$post_tags}','{$post_comment_count}', '{$post_status}')";
$create_post_query = mysqli_query($connection, $query);
confirm($create_post_query);
}
?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="post_title">
    </div>

    <div class="form-group">
        <label for="title">Post Category</label>
        <input type="text" class="form-control" name="post_category_id">
    </div>

    <div class="form-group">
        <label for="title">Post Author</label>
        <input type="text" class="form-control" name="post_author">
    </div>

    <div class="form-group">
        <label for="title">Post Status</label>
        <input type="text" class="form-control" name="post_status">
    </div>

    <div class="form-group">
        <label for="title">Post Image</label>
        <input type="file" class="form-control" name="image">
    </div>

    <div class="form-group">
        <label for="title">Post Tags</label>
        <input type="text" class="form-control" name="post_tags">
    </div>

    <div class="form-group">
        <label for="title">Post Content</label>
        <input type="text" class="form-control" name="post_content">
    </div>

    <div class="form-group">
    <label for="title">Create Postt</label>
    <input type="submit" class="form-control" name="create_post">
</div>




</form>