<?php include "include/admin_header.php"; ?>

<body>

    <div id="wrapper">

    <?php include "include/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>
                                <div class="col-xs-6">
<?php insert_cat(); ?>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="cat-title">Add Category</label>
                            
                               
                               
                               
                                            <input type="text" name="cat_title" class="form-control">
                                    </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                                </div>
</form>

                              <?php 
                              
                              if(isset($_GET['edit'])){
                                  $cat_id = $_GET['edit'];
                                  include "include/edit_category.php";
                              }
                              
                              
                              
                               ?>
                            
                            </div>
                              
                                <div class="col-xs-6">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                               
                                <tbody>

                                <?php //Find all categories
                               findAllCategories();
                ?>
                <?php //delete a categoty
                    deleteCategories();
                ?>
                                    
                                </tbody>
                             </table>
                                </div>

                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

            <?php include "include/admin_foother.php"; ?>