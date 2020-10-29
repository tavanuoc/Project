<?php
try {
  if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) { // form user_list_p.php
    $id = htmlspecialchars($_GET['id'], ENT_QUOTES);
  } elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) { // form submitsion
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
  } else { // no valid ID the script
    echo '<p class = "text-center"> This page has been accessed in error. </p>';
    exit();
  }
  require('mysqli_connect.php');
  // has from been submitted?


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
     $sale = $_POST['sale'];
    $content = $_POST['content'];
    $quantity = $_POST['quantity'];
    $hot = $_POST['hot'];
    $status = $_POST['status'];

    $avatar = $_FILES['avatar'];
    $file_name = $_FILES['avatar']['name'];
    $avatar_tmp = $_FILES['avatar']['tmp_name'];
    $path = '../../../lib/images/';
    $status = $_POST['status'];
 
    $query = 'UPDATE product SET name=?, price=?, category_id=?, sale=?, content=?, quantity=?, hot=?, status=?, avatar=?';
    $query .= ' WHERE id=? LIMIT 1';
    $stmt = $conn->stmt_init();
    $stmt->prepare($query);
    // bind valus to SQL Statement
    $stmt->bind_param('sssi', $name, $price, $category_id, $sale, $content, $quantity, $hot, $status,$file_name);
    // execute query
    $stmt->execute();
  
    if ($stmt->affected_rows == 1) { // update ok
      // echo a message if the edit was satisfactory
      echo '<h3 class = " text-center">The user has  been edited. </h3>';
      header("location: user_list_p.php");
      exit();
    } else {
      echo '<p class = "text-center"> The record could not de delete</p>';
    }
  }

  $s_stmt = $conn->stmt_init();
  $s_query = "SELECT first_name , last_name , email FROM users WHERE user_id=?";
  $s_stmt->prepare($s_query);
  //  bind $id SQL Statement
  $s_stmt->bind_param('i', $id);
  $s_stmt->execute();
  $result = $s_stmt->get_result();
  $row1 = $result->fetch_array(MYSQLI_ASSOC);
  if ($result->num_rows == 1) { // valid user ID , display the form.
    $first_name2 = htmlspecialchars($row1['first_name'], ENT_QUOTES);
    $last_name2 = htmlspecialchars($row1['last_name'], ENT_QUOTES);
    $email2 = htmlspecialchars($row1['email'], ENT_QUOTES);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <title>Register Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS File -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
      integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script language = "JavaScript" type="text/javascript">
	function checkedUpdate() {
		return confirm('Are you sure to delete this user?');
	}
	</script>
    </head>
    <body>
      <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
          require('edit_user.php');
        } // end of the main Submit conditional
        ?>
        <h2 class="h2 text-center">Edit User</h2>
        <form action="edit_user.php" method="post"  name="edit_user" id="edit_user" onsubmit="return checkedUpdate();" >
          <div class="form-group row">
            <label for="first_name" class="col-sm-4 col-form-label">First Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name" maxlength="30" required value="<?php if ((isset($row1['first_name'])))echo $first_name2;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="last_name" class="col-sm-4 col-form-label">Last Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last name" maxlength="40" required value="<?php if ((isset($row1['first_name']))) echo $last_name2;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="email" name="email" placeholder="Your email" maxlength="60" required value="<?php if ((isset($row1['first_name'])))echo $email2;?>">
            </div>
          </div>
      </div>
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <div class="form-group row">
        <div class="col-sm-12">
          <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Register">
        </div>
      </div>
      </div>
      </form>
      </div>
      </div>
    </body>

    </html>


<?php
    $stmt->free->reslut();
    $s_stmt->free_result();
    $conn->close();
  } else {
    echo '<h2> No user selected</h2>';
  }
} catch (Exception $e) {
  print "An Exception occurred. Message: " . $e->getMessage();
}

?>