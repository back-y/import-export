<?php

include("includes/db.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Thumbnail</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="shortcut icon" href="images/icon.png">
</head>
<body>


    <div class="row"><!-- row begin -->

        <div class="col-lg-12"><!-- col-lg-12 begin -->

            <ol class="breadcrumb"><!-- breadcrumb begin -->

                <li class="active"><!-- active begin -->

                    <i class="fa fa-dashboard"></i> Dashboard / Insert Thumbnail

                </li><!-- active finish -->

            </ol><!-- breadcrumb finish -->

        </div><!-- col-lg-12 finish -->

    </div><!-- row finish -->

    <div class="row"><!-- row begin -->

        <div class="col-lg-12"><!-- col-lg-12 begin -->

            <div class="panel panel-default"><!-- panel panel-default begin -->

                <div class="panel-heading"><!-- panel-heading begin -->

                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-money fa-fw"></i> Insert Thumbnail

                    </h3><!-- panel-title finish -->

                </div><!-- panel-heading finish -->
                
                <div class="panel-body"><!-- panel-body begin -->

                    <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal begin -->

                        

                         <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Thumbnail Title </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="t_title" type="text" class="form-control" required>
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->



                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Category </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <select name="t_cat_id"  class="form-control"><!-- form-control begin -->

                                    <option selected disabled> Select a Category Product </option>

                                    <?php

                                        $get_p_cats = "select * from product_categories";
                                        $run_p_cats = mysqli_query($con,$get_p_cats);

                                        while($row_p_cats = mysqli_fetch_array($run_p_cats)){

                                            $p_cat_id = $row_p_cats['p_cat_id'];
                                            $p_cat_title = $row_p_cats['p_cat_title'];

                                            echo "

                                                <option value='$p_cat_id'> $p_cat_title </option>

                                            ";

                                        }

                                    
                                    ?>


                                </select><!-- form-control finish -->
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        

                        

                        
                         

                        

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"> Product Image 1 </label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="t_img" type="file" class="form-control" required>
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                        

                        

                        

                        <div class="form-group"><!-- form-group begin -->

                            <label  class="col-md-3 control-label"></label>

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="submit" value="Insert Thumbnail" type="submit" class="btn btn-primary form-control">
                                
                            </div><!-- col-md-6 finish -->
                            
                        </div><!-- form-group finish -->

                    </form><!-- form-horizontal finish -->

                </div><!-- panel-body finish -->

            </div><!-- panel panel-default finish -->

        </div><!-- col-lg-12 finish -->

    </div><!-- row finish -->


    <script>tinymce.init({ selector:'textarea'});</script>
</head>

</body>
</html>

<?php

    if(isset($_POST['submit'])){

        $t_title = $_POST['t_title'];

        $t_cat_id = $_POST['t_cat_id'];


        $t_img = $_FILES['t_img']['name'];


        $temp_name = $_FILES['t_img']['tmp_name'];

        move_uploaded_file($temp_name,"product_images/$t_img");

        $insert_product = "insert into thumbnail (t_title,t_cat_id,t_img) 
        values ('$t_title','$t_cat_id','$t_img')";

            $run_product = mysqli_query($con,$insert_product);

            if($run_product){

                echo "<script>alert('Thumbnail has been inserted successfully')</script>";

                echo "<script>window.open('insert_thumbnails.php?insert_thumbnails','_self')</script>";

            }
    }

?>
