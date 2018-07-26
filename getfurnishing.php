<?php 
    include('DBConnect.php');

    $query="SELECT * FROM `products` WHERE type='furnishing'";
          $rs = mysqli_query($conn, $query);
          if (!$rs) {
             $last_error = mysqli_error($conn);
             return false;
          }
          else {
               while($row = mysqli_fetch_assoc($rs))
               {
                  echo "
                  <section class='col-md-3' style='margin-top: 20px'>
                  <figure>
                      <label>".$row['specification']."</label>
                      <img src='".$row['image']."' class='img-responsive' />
                      <figcaption>
                          <h3>".$row['name']."</h3>
                          <button class='btn-success'>Buy Now</button>
                      </figcaption>
                  </figure>
                  </section>";
               }
         mysqli_free_result($rs);
      }
 ?>