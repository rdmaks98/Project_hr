<?php
    include './config.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM `user` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
        $row1 = $row;
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
  </head>
  <body>
    <form method="post" action="../edit.php?id=<?php echo $_GET["id"]; ?>">
    <!-- <input type="hidden" name="id" value="<?php echo $row1['id'] ?>"> -->
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input
          type="text"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          placeholder="Enter name"
          name="name"
          value="<?php echo $row1['name'] ?> "
        />
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input
          type="email"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          placeholder="Enter email"
          name="email"
          value = "<?php echo $row1['email'] ?>"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input
          type="password"
          class="form-control"
          id="exampleInputPassword1"
          placeholder="Password"
          name="password"
          value="<?php echo $row1['password'] ?>"
        />
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
