<?php
if(!isset($_SESSION['role']))
  header("Location: index.php");
  include 'nav.php';
?>

 <!-- ========================  Header content ======================== -->

 <section class="header-content">

<div class="owl-slider">

    <!-- === slide item === -->

    <div class="item" style="background-image:url(assets/images/gallery-1.jpg)">
        <div class="box">
            <div class="container">
                <h2 class="title animated h1" data-animation="fadeInDown">Meubilar - Furniture Company</h2>
                <div class="animated" data-animation="fadeInUp">
                    We deal in all kinds of furniture and furnished products <br /> Quality is what we bileive in.
                </div>
                <div class="animated" data-animation="fadeInUp">
                    <a href="contact.php" target="_blank" class="btn btn-main" ><i class="icon icon-cart"></i>Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- === slide item === -->

    <div class="item" style="background-image:url(assets/images/gallery-2.jpg)">
        <div class="box">
            <div class="container">
                <h2 class="title animated h1" data-animation="fadeInDown">Welcome ADMIN</h2>
                <div class="animated" data-animation="fadeInUp">Here, you can add categories of products as well the products itself.</div>
                <div class="animated" data-animation="fadeInUp"></div>
                <div class="animated" data-animation="fadeInUp">
                    <a href="#" class="btn btn-clean">Get insipred</a>
                </div>
            </div>
        </div>
    </div>

    <!-- === slide item === -->

    <div class="item" style="background-image:url(assets/images/gallery-3.jpg)">
        <div class="box">
            <div class="container">
                <h2 class="title animated h1" data-animation="fadeInDown">
                   Branches in INDIA and VIETNAM
                </h2>
                <div class="desc animated" data-animation="fadeInUp">
                    With Trusted Customers from all over the World.
                </div>
                <div class="desc animated" data-animation="fadeInUp">
                    A Brand In The Furniture World
                </div>
                <div class="animated" data-animation="fadeInUp">
                    <a href="#" target="_blank" class="btn btn-clean">Shop Us</a>
                </div>
            </div>
        </div>
    </div>

</div> <!--/owl-slider-->
</section>




<div style="padding-top: 40px;" class="container" id="addExpenses">
<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
require_once "connectDB.php";
require_once 'SimpleXLSX.php';
// echo '<h1>XLSX to HTML</h1>';

if (isset($_POST['addCategoryNameSubmit']))
{
 $sql="INSERT INTO prodcategory(pCatName) VALUES (:addCategoryName) ";
//echo ("<pre>\n".$sql."\n</pre>\n");
  $stmt = $pdo->prepare($sql);
  $stmt-> execute(array(    
    ':addCategoryName' => $_POST['addCategoryName']
  ));

echo'<script> alert("New Category added"); </script>';

 //header("Location: ViewAllExpenses.php");
}

if (isset($_FILES['file'])) {
  
  if ( $xlsx = SimpleXLSX::parse( $_FILES['file']['tmp_name'] ) ) 
  {
    $dim = $xlsx->dimension();
    $cols = $dim[0];

    foreach ( $xlsx->rows() as $k => $r ) 
    {
      if ($k == 0)
      	continue; // skip first row
      $st='';
      
      for ( $i = 0; $i <= $cols-1; $i ++ )
      {
        $st.="'".$r[$i]."', ";
      }
      $st1=substr($st,0,-2);

      $sql = "INSERT INTO prodcategory (pCatName) VALUES (".$st1.")";
      $stmt = $pdo->prepare($sql);
      $stmt-> execute(array());
      if($stmt)
      {
//       echo "done";
      //header("Location: ViewAllExpenses.php");
      }

      else{
       echo("Error in inserting");
      }
  
    }
   } else {
    echo SimpleXLSX::parseError();
  }
}

?>

  <div style="border: 1px solid black">
  <h1>Product Category</h1>
  <ul class="my-3" style="height: 220px; width: 300px; overflow: scroll;">
  
 
  <?php
        $select_catergory = "select pCatName from prodcategory";
        $stmt_select =  $pdo->prepare($select_catergory);
        $stmt_select -> execute(array());
        while( $row_select = $stmt_select->fetch(PDO::FETCH_ASSOC)) 
        {
          echo "<li>".$row_select['pCatName'] ."</li>";
          echo "<hr style='border: 1px solid black'>";
        }
      ?>
      </ul>	    


  <!-- <button type="submit" class="btn btn-primary" name="addExpense">Add new product Category</button> -->

  <!-- <h1>Add a new Product Category : </h1> -->


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
 Add New Product Category
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add a New Product Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post">
          <div class="form-group">
            <label for="category">Product Category Name</label>
            <input type="text" name="addCategoryName" class="form-control" id="category">
            <input type="submit" class="btn btn-primary my-3" name="addCategoryNameSubmit">
          </div>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>

      </div> -->
    </div>
  </div>
</div>

   

  
<?php 
echo '<h2>Upload Categories from ExcelSheet</h2>

<form method="post" enctype="multipart/form-data">

XLSX type files only <input type="file" name="file" class="btn btn-primary" />
<input type="submit" value="submit" name="file" class="btn btn-success mt-2"/>
</form>';

?>
   </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>

<?php //} 
include 'footer.php' ?>

</body>
</html>