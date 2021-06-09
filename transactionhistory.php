<!DOCTYPE html>
<?php
include 'connection.php';
$select="SELECT * from Transactions ORDER BY id DESC ";
$query=$connection->query($select);
$nums=mysqli_num_rows($query);
?>
<html lang="en">
  <head>
    <title>Transaction History</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link rel="stylesheet" href="index.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="contain Transaction">
      <div class="title">Transaction History</div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
            <table class="table text-white">
              <thead>
                <tr>
                  <th scope="col">Transaction no:</th>
                  <th scope="col">Sender</th>
                  <th scope="col">Reciever</th>
                  <th scope="col">Amount</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                  while($res=mysqli_fetch_array($query))
                  {
                 ?>
                 <tr>
                  <th scope="row"><?php echo $res['id']?></th>
                  <td><?php echo $res['Sender']?></td>
                  <td><?php echo $res['Reciever']?></td>
                  <td><?php echo $res['Amount']?></td>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
