<!DOCTYPE html>
<?php
include 'connection.php';
$select="SELECT * from Users ";
$query=$connection->query($select);
$nums=mysqli_num_rows($query);
?>
<html lang="en">
  <head>
    <title>All User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <div class="contain users">
      <div class="title">All Users</div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">S no:</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Balance(Rs:)</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody><?php
                  while($res=mysqli_fetch_array($query))
                  {
                 ?>
                <tr>
                  <th scope="row"><?php echo $res['id']?></th>
                  <td><?php echo $res['Name']?></td>
                  <td><?php echo $res['Email']?></td>
                  <td><?php echo $res['Balance']?></td>
                  <td><a classname="anchor-tag" href="transfermoney.php"><button class="btn">Transact</button></a></td>
                </tr>
                <?php
                  }
                  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
