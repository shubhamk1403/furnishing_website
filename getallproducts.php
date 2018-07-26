<?php 
    include('DBConnect.php');

    $num=0;
    $query="SELECT * FROM `products`";
          $rs = mysqli_query($conn, $query);
          if (!$rs) {
             $last_error = mysqli_error($conn);
             return false;
          }
          else {
               while($row = mysqli_fetch_assoc($rs))
               {
                  echo "<section class='col-md-3' style='margin-top: 20px'>
                  <figure>
                      <label>".$row['specification']."</label>
                      <img src='".$row['image']."' class='img-responsive' />
                      <figcaption>
                          <h3>".$row['name']."</h3>
                          <a href='deleteitems.php?poll=".$row['product_id']."' style='padding-top:30px;'><input type='submit' class='btn btn-danger' value='Delete'></a>
                      </figcaption>
                  </figure>
                  </section>";
               }
         mysqli_free_result($rs);
      }
 ?>