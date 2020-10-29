<?php
include '../teamplate1/head.php';
?>
<?php
include '../teamplate1/header.php';
require('../../../lib/mysqli_connect.php');
?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
  
    $id_update = $_GET['id'];
    $status = $_POST['status'];
        $query = 'UPDATE transaction SET  status=? WHERE id=?';
        $stmt = $conn->stmt_init();
        $stmt->prepare($query);
        // bind valus to SQL Statement
        $stmt->bind_param('ii',  $status, $id_update);
        // execute query
        $stmt->execute();
        if ($stmt->affected_rows == 1) { // update ok
            header('Location: list_order.php');
        } else {
            echo $stmt->error;
        }

}
?>

<div class="page-container">
  <div class="main-content">
    <div class="section__content section__content--p30">
      <div class="container-fluid">
        <div class="right_col" role="main">
          <h4>Cập nhật trạng thái</h4>

          <?php
                    if (isset($_GET['id']))
                        $id_capnhat = $_GET['id'];
                    $sql_capnhat = mysqli_query($conn, "SELECT status FROM transaction WHERE id='$id_capnhat'");
                    $row_capnhat = mysqli_fetch_array($sql_capnhat);
                    ?>

          <div class="col-md-12 card ">


            <form class="form" action="" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label>Trạng thái</label>
                <input type="id" class="form-control" name="status" placeholder="Nhập trạng thái"
                  value="<?php echo $row_capnhat['status'] ?>" required="">
              </div>
              <input type="submit" name="updateNews" value="CẬP NHẬT" class="btn btn-default">
              <input type="submit" name="huycapnhat" value="HỦY" class="btn btn-default">

            </form>
          </div>



        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
</div>
<?php

include '../teamplate1/script.php';
?>