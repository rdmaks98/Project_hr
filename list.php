<?php
    include './list1.php';
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <?php
        if(!$user == "") { ?>
            <tbody>
        <?php
          foreach ($user as $key=>$value){ ?>
            <tr>
              <th scope="row"><?php echo $key+1 ?></th>
              <td><?php echo $value['name']; ?></td>
              <td><?php echo $value['email']; ?></td>
              <td><button type="button" class="btn btn-danger"><a href="edit1.php/?id=<?php echo $value['id'] ?> ">Update</button></td>
              <td><button type="button" class="btn btn-warning"><a href="./delete.php?id=<?php echo $value['id']?>">Delete</a></button></td>
            </tr>
        <?php  }
        ?>
      </tbody>
      <?php } else{
        echo "not sucess";
      }
      ?> 
    </table>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  </body>
</html>
