<?php
include '../teamplate1/head.php';
?>
<?php
include '../teamplate1/header.php';
require('../../../lib/mysqli_connect.php');
?>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    print_r($_POST);
    echo 'dm';
    $id_update = $_POST['id_update'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sale = $_POST['sale'];
    $category_id = $_POST['category_id'];
    $quantity = $_POST['quantity'];
    $avatar = $_FILES['avatar']['name'];
    $avatar_tmp = $_FILES['avatar']['tmp_name'];
    // $path = '../../../upload/product';
    $image = "../../../upload/product/" . $_FILES['avatar']['name'];
    $target = "../../../upload/product/" . basename($image);
    $status = $_POST['status'];
    
    
   
    if ($avatar == '') {
        $query = 'UPDATE product SET name=?, price=?, sale=?, category_id=?, quantity=?, status=? WHERE id=?';
        $stmt = $conn->stmt_init();
        $stmt->prepare($query);
        // bind valus to SQL Statement
        $stmt->bind_param('siiiiii', $name, $price, $sale, $category_id, $quantity, $status, $id_update);
        // execute query
        $stmt->execute();
        if ($stmt->affected_rows == 1) { // update ok
            header('Location: list_of_products.php');
        } else {
            echo $stmt->error;
        }
    } else {
        move_uploaded_file($avatar_tmp, $target);
        $query = 'UPDATE product SET name=?, price=?, sale=?, category_id=?, quantity=?, status=?, avatar=? WHERE id=?';
        $stmt = $conn->stmt_init();
        $stmt->prepare($query);
        // bind valus to SQL Statement
        $stmt->bind_param('siiiiisi', $name, $price, $sale, $category_id, $quantity, $status, $avatar, $id_update);
        // execute query
        $stmt->execute();
        if ($stmt->affected_rows == 1) { // update ok
            header('Location: list_of_products.php');
        } else {
            header('Location: list_of_products.php');
        }
    }
   
    // mysqli_query($conn, $sql_update_image);
    // header('Location: list_of_products.php');
}
?>

<div class="page-container">
  <div class="main-content">
    <div class="section__content section__content--p30">
      <div class="container-fluid">
        <div class="right_col" role="main">
          <h4>Cập nhật sản phẩm</h4>

          <?php
                    if (isset($_GET['id']))
                        $id_capnhat = $_GET['id'];
                    $sql_capnhat = mysqli_query($conn, "SELECT * FROM product WHERE id='$id_capnhat'");
                    $row_capnhat = mysqli_fetch_array($sql_capnhat);
                    ?>

          <div class="col-md-12 card ">


            <form class="form" action="" method="POST" enctype="multipart/form-data">
              <!-- <label>Sủa thông tin sản phẩm</label> -->
              <!-- <h2 class="text-center">Cập nhật sản phẩm</h2> -->
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row_capnhat['name'] ?>"
                  required="">
                <input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['id'] ?>">
              </div>


              <div class="form-group">
                <label>Gía sản phẩm</label>
                <input type="text" class="form-control" name="price" placeholder="Nhập giá sản phẩm"
                  value="<?php echo $row_capnhat['price'] ?>" required="">
              </div>
              <div class="form-group">
                <label>Gía khuyến mãi</label>
                <input type="text" class="form-control" name="sale" placeholder="Nhập giá khuyến mãi"
                  value="<?php echo $row_capnhat['sale'] ?>" required="">
              </div>
              <div class="form-group">
                <label>Thể loại</label>
                <input type="text" class="form-control" name="category_id" placeholder=" thể loại"
                  value="<?php echo $row_capnhat['category_id'] ?>" required="">
              </div>

              <div class="form-group">
                <label>Số lượng</label>
                <input type="text" class="form-control" name="quantity" placeholder="Nhập số lượng"
                  value="<?php echo $row_capnhat['quantity'] ?>" required="">
              </div>

              <div class="form-group">
                <label class="control-label mb-1">Ảnh đại diện: </label>
                <input class="form-control" type="file" name="avatar">
              </div>

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