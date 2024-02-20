<?php

    $db = mysqli_connect("localhost","root","","pb");

    // begin getProHome function //

    function getProHome(){

        global $db;

        $get_products = "select * from thumbnail where t_cat_id='1' order by 1 DESC LIMIT 0,1";

        $run_products = mysqli_query($db,$get_products);

        while($row_products = mysqli_fetch_array($run_products)){

            $t_id = $row_products['t_id'];
            
            $t_title = $row_products['t_title'];
            
            $t_img = $row_products['t_img'];
            

            echo "
              
                

          
            <div class='col-xl-4 col-md-6 portfolio-item filter-books'>
            <div class='portfolio-wrap'>
              <a href='admin_area/product_images/$t_img' data-gallery='portfolio-gallery-app' class='glightbox'>
              <img src='admin_area/product_images/$t_img' class='img-fluid' alt=''></a>
              <div class='portfolio-info'>
                <p style = 'font-size: 13pt; color: black; text-align:center; padding-left: 30px; padding-bottom: 10px;'>
                $t_title</p>
                
              </div>
            </div>
          </div><!-- End Portfolio Item -->

       


            
            ";
            


        }
        global $db;

        $get_products = "select * from thumbnail where t_cat_id='2' order by 1 DESC LIMIT 0,1";

        $run_products = mysqli_query($db,$get_products);

        while($row_products = mysqli_fetch_array($run_products)){

            $t_id = $row_products['t_id'];
            
            $t_title = $row_products['t_title'];
            
            $t_img = $row_products['t_img'];
            

            echo "
              
                

          
            <div class='col-xl-4 col-md-6 portfolio-item filter-books'>
            <div class='portfolio-wrap'>
              <a href='admin_area/product_images/$t_img' data-gallery='portfolio-gallery-app' class='glightbox'>
              <img src='admin_area/product_images/$t_img' class='img-fluid' alt=''></a>
              <div class='portfolio-info'>
                <p style = 'font-size: 13pt; color: black; text-align:center; padding-left: 30px; padding-bottom: 10px;'>
                $t_title</p>
                
              </div>
            </div>
          </div><!-- End Portfolio Item -->

       


            
            ";
            


        }
        global $db;

        $get_products = "select * from thumbnail where t_cat_id='3' order by 1 DESC LIMIT 0,1";

        $run_products = mysqli_query($db,$get_products);

        while($row_products = mysqli_fetch_array($run_products)){

            $t_id = $row_products['t_id'];
            
            $t_title = $row_products['t_title'];
            
            $t_img = $row_products['t_img'];
            

            echo "
              
                

          
            <div class='col-xl-4 col-md-6 portfolio-item filter-books'>
            <div class='portfolio-wrap'>
              <a href='admin_area/product_images/$t_img' data-gallery='portfolio-gallery-app' class='glightbox'>
              <img src='admin_area/product_images/$t_img' class='img-fluid' alt=''></a>
              <div class='portfolio-info'>
                <p style = 'font-size: 13pt; color: black; text-align:center; padding-left: 30px; padding-bottom: 10px;'>
                $t_title</p>
                
              </div>
            </div>
          </div><!-- End Portfolio Item -->

       


            
            ";
            


        }
        global $db;

        $get_products = "select * from thumbnail where t_cat_id='4' order by 1 DESC LIMIT 0,1";

        $run_products = mysqli_query($db,$get_products);

        while($row_products = mysqli_fetch_array($run_products)){

            $t_id = $row_products['t_id'];
            
            $t_title = $row_products['t_title'];
            
            $t_img = $row_products['t_img'];
            

            echo "
              
                

          
            <div class='col-xl-4 col-md-6 portfolio-item filter-books'>
            <div class='portfolio-wrap'>
              <a href='admin_area/product_images/$t_img' data-gallery='portfolio-gallery-app' class='glightbox'>
              <img src='admin_area/product_images/$t_img' class='img-fluid' alt=''></a>
              <div class='portfolio-info'>
                <p style = 'font-size: 13pt; color: black; text-align:center; padding-left: 30px; padding-bottom: 10px;'>
                $t_title</p>
                
              </div>
            </div>
          </div><!-- End Portfolio Item -->

       


            
            ";
            


        }
        global $db;

        $get_products = "select * from thumbnail where t_cat_id='5' order by 1 DESC LIMIT 0,1";

        $run_products = mysqli_query($db,$get_products);

        while($row_products = mysqli_fetch_array($run_products)){

            $t_id = $row_products['t_id'];
            
            $t_title = $row_products['t_title'];
            
            $t_img = $row_products['t_img'];
            

            echo "
              
                

          
            <div class='col-xl-4 col-md-6 portfolio-item filter-books'>
            <div class='portfolio-wrap'>
              <a href='admin_area/product_images/$t_img' data-gallery='portfolio-gallery-app' class='glightbox'>
              <img src='admin_area/product_images/$t_img' class='img-fluid' alt=''></a>
              <div class='portfolio-info'>
                <p style = 'font-size: 13pt; color: black; text-align:center; padding-left: 30px; padding-bottom: 10px;'>
                $t_title</p>
                
              </div>
            </div>
          </div><!-- End Portfolio Item -->

       


            
            ";
            


        }


        
        global $db;

        $get_products = "select * from thumbnail where t_cat_id='6' order by 1 DESC LIMIT 0,1";

        $run_products = mysqli_query($db,$get_products);

        while($row_products = mysqli_fetch_array($run_products)){

            $t_id = $row_products['t_id'];
            
            $t_title = $row_products['t_title'];
            
            $t_img = $row_products['t_img'];
            

            echo "
              
                

          
            <div class='col-xl-4 col-md-6 portfolio-item filter-books'>
            <div class='portfolio-wrap'>
              <a href='admin_area/product_images/$t_img' data-gallery='portfolio-gallery-app' class='glightbox'>
              <img src='admin_area/product_images/$t_img' class='img-fluid' alt=''></a>
              <div class='portfolio-info'>
                <p style = 'font-size: 13pt; color: black; text-align:center; padding-left: 30px; padding-bottom: 10px;'>
                $t_title</p>
                
              </div>
            </div>
          </div><!-- End Portfolio Item -->

       


            
            ";
            


        }
        

    }
    // finish getProHome function //


// begin getProCoffee function //

function getProCoffee(){

  global $db;


  $get_products = "select p_cat_id, product_id, product_title,product_img1 from products where p_cat_id='1' order by 1 DESC";
 

  $run_products = mysqli_query($db,$get_products);

  while($row_products = mysqli_fetch_array($run_products)){

      $pro_id = $row_products['product_id'];
      
      $pro_title = $row_products['product_title'];
      
      $pro_img1 = $row_products['product_img1'];
      

      echo "
        
          

    
      <div class='col-xl-4 col-md-6 portfolio-item filter-books'>
      <div class='portfolio-wrap'>
        <a href='admin_area/product_images/$pro_img1' data-gallery='portfolio-gallery-app' class='glightbox'>
        <img src='admin_area/product_images/$pro_img1' class='img-fluid' alt=''></a>
        <div class='portfolio-info'>
          <p style = 'font-size: 13pt; color: black; text-align:center; padding-left: 30px; padding-bottom: 10px;'>
          $pro_title</p>
          <h4><a href='details?pro_id=$pro_id' class='btn w-100' title='More Details'>View Details</a></h4>
          
        </div>
      </div>
    </div><!-- End Portfolio Item -->

 


      
      ";


  }

}
// finish getProCoffee function //



// begin getProAgro_Process function //

function getProAgro_Process(){

  global $db;

  $get_products = "select p_cat_id, product_id, product_title,product_img1 from products where p_cat_id='5' order by 1 DESC";

  $run_products = mysqli_query($db,$get_products);

  while($row_products = mysqli_fetch_array($run_products)){

      $pro_id = $row_products['product_id'];
      
      $pro_title = $row_products['product_title'];
      
      $pro_img1 = $row_products['product_img1'];
      

      echo "
        
          

    
      <div class='col-xl-4 col-md-6 portfolio-item filter-books'>
      <div class='portfolio-wrap'>
        <a href='admin_area/product_images/$pro_img1' data-gallery='portfolio-gallery-app' class='glightbox'>
        <img src='admin_area/product_images/$pro_img1' class='img-fluid' alt=''></a>
        <div class='portfolio-info'>
          <p style = 'font-size: 13pt; color: black; text-align:center; padding-left: 30px; padding-bottom: 10px;'>
          $pro_title</p>
          <h4><a href='details?pro_id=$pro_id' class='btn w-100' title='More Details'>View Details</a></h4>
          
        </div>
      </div>
    </div><!-- End Portfolio Item -->

 


      
      ";


  }

}
// finish getProAgro_Process function //



// begin getProFruits_And_Egetable function //

function getProFruits_And_Vegetable(){

  global $db;

  $get_products = "select p_cat_id, product_id, product_title,product_img1 from products where p_cat_id='4' order by 1 DESC";

  $run_products = mysqli_query($db,$get_products);

  while($row_products = mysqli_fetch_array($run_products)){

      $pro_id = $row_products['product_id'];
      
      $pro_title = $row_products['product_title'];
      
      $pro_img1 = $row_products['product_img1'];
      

      echo "
        
          

    
      <div class='col-xl-4 col-md-6 portfolio-item filter-books'>
      <div class='portfolio-wrap'>
        <a href='admin_area/product_images/$pro_img1' data-gallery='portfolio-gallery-app' class='glightbox'>
        <img src='admin_area/product_images/$pro_img1' class='img-fluid' alt=''></a>
        <div class='portfolio-info'>
          <p style = 'font-size: 13pt; color: black; text-align:center; padding-left: 30px; padding-bottom: 10px;'>
          $pro_title</p>
          <h4><a href='details?pro_id=$pro_id' class='btn w-100' title='More Details'>View Details</a></h4>
          
        </div>
      </div>
    </div><!-- End Portfolio Item -->

 


      
      ";


  }

}
// finish getProFruits_And_Egetable function //




// begin getProGrains_Of_Cereals function //

function getProGrains_Of_Cereals(){

  global $db;

  $get_products = "select p_cat_id, product_id, product_title,product_img1 from products where p_cat_id='3' order by 1 DESC";

  $run_products = mysqli_query($db,$get_products);

  while($row_products = mysqli_fetch_array($run_products)){

      $pro_id = $row_products['product_id'];
      
      $pro_title = $row_products['product_title'];
      
      $pro_img1 = $row_products['product_img1'];
      

      echo "
        
          

    
      <div class='col-xl-4 col-md-6 portfolio-item filter-books'>
      <div class='portfolio-wrap'>
        <a href='admin_area/product_images/$pro_img1' data-gallery='portfolio-gallery-app' class='glightbox'>
        <img src='admin_area/product_images/$pro_img1' class='img-fluid' alt=''></a>
        <div class='portfolio-info'>
          <p style = 'font-size: 13pt; color: black; text-align:center; padding-left: 30px; padding-bottom: 10px;'>
          $pro_title</p>
          
          
        </div>
      </div>
    </div><!-- End Portfolio Item -->

 


      
      ";


  }

}
// finish getProGrains_Of_Cereals function //





// begin getProOil_Seed function //

function getProOil_Seed(){

  global $db;

  $get_products = "select p_cat_id, product_id, product_title,product_img1 from products where p_cat_id='2' order by 1 DESC";

  $run_products = mysqli_query($db,$get_products);

  while($row_products = mysqli_fetch_array($run_products)){

      $pro_id = $row_products['product_id'];
      
      $pro_title = $row_products['product_title'];
      
      $pro_img1 = $row_products['product_img1'];
      

      echo "
        
          

    
      <div class='col-xl-4 col-md-6 portfolio-item filter-books'>
      <div class='portfolio-wrap'>
        <a href='admin_area/product_images/$pro_img1' data-gallery='portfolio-gallery-app' class='glightbox'>
        <img src='admin_area/product_images/$pro_img1' class='img-fluid' alt=''></a>
        <div class='portfolio-info'>
          <p style = 'font-size: 13pt; color: black; text-align:center; padding-left: 30px; padding-bottom: 10px;'>
          $pro_title</p>
          
        </div>
      </div>
    </div><!-- End Portfolio Item -->

 


      
      ";


  }

}
// finish getProOil_Seed function //





 // finish getProducts(); function //

 function getOur_Packaging(){

  global $db;

  $get_products = "select p_cat_id, product_id, product_title,product_img1 from products where p_cat_id='6' order by 1 DESC";

  $run_products = mysqli_query($db,$get_products);

  while($row_products = mysqli_fetch_array($run_products)){

      $pro_id = $row_products['product_id'];
      
      $pro_title = $row_products['product_title'];
      
      $pro_img1 = $row_products['product_img1'];
      

      echo "
        
          

    
      <div class='col-xl-4 col-md-6 portfolio-item filter-books'>
      <div class='portfolio-wrap'>
        <a href='admin_area/product_images/$pro_img1' data-gallery='portfolio-gallery-app' class='glightbox'>
        <img src='admin_area/product_images/$pro_img1' class='img-fluid' alt=''></a>
        <div class='portfolio-info'>
          <p style = 'font-size: 13pt; color: black; text-align:center; padding-left: 30px; padding-bottom: 10px;'>
          $pro_title</p>
          <h4><a href='details?pro_id=$pro_id' class='btn w-100' title='More Details'>View Details</a></h4>
          
        </div>
      </div>
    </div><!-- End Portfolio Item -->

 


      
      ";


  }

}

            // begin getPaginator(); function //

            function getPaginator(){

                global $db;

                $per_page = 6;

                $aWhere = array();

                $aPath = '';


            

                $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');

                $query = "select * from products".$sWhere;

                $result = mysqli_query($db,$query);

                $total_records = mysqli_num_rows($result);

                $total_pages = ceil($total_records / $per_page);

                echo "<li class='page-item'> <a class='page-link' href='index.php?page=1";

                if(!empty($aPath)){

                    echo "&".$aPath;

                }

                echo "'>".'First Page'."</a></li>";

                

                for($i=1; $i<=$total_pages; $i++){

                        echo "<li  class='page-item'> 
                        <a class='page-link' href='index.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."'>".$i."</a></li>";

                };

                echo "<li class='page-item'> <a class='page-link' href='index.php?page=$total_pages";

                if(!empty($aPath)){

                    echo "&".$aPath;

                }

                echo "'>".'Last Page'."</a></li>";


        }

        // finish getPaginator(); function //


    

?>