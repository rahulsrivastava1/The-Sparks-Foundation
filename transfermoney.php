<!DOCTYPE html>
<?php
include 'connection.php';
$select1="SELECT * from Users ";
$select2="SELECT * from Users ";
$query1=$connection->query($select1);
$query2=$connection->query($select2);
?>
<html lang="en">
  <head>
    <title>Transfermoney</title>
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
    <div class="contain Transaction">
      <div class="title">Fund Transfer</div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
            <form class="form text-white" action="transact.php" method="POST">
               
              <br /><br />
              <div class="form-group">
                <label for="exampleFormControlSelect1"><b>Sender Name :</b></label>
                <select
                  class="form-control"
                  id="exampleFormControlSelect1"
                  name="sender"
                  required
                >
                   
                     <?php
                  while($result=mysqli_fetch_array($query1))
                  {
                 ?>
                  <option value="<?php echo $result['Name']?>"><?php echo $result['Name']?></option>
                   <?php
              }
              ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1"><b>Reciever Name :</b></label>
                <select
                  class="form-control"
                  id="exampleFormControlSelect1"
                  name="receiver"
                  required
                >
                  <?php
                  while($res=mysqli_fetch_array($query2))
                  {
                 ?>
                  <option value="<?php echo $res['Name']?>"><?php echo $res['Name']?></option>
                   <?php
              }
              ?>
                </select>
              </div>
             
              <div class="form-group">
                <label for="exampleInputPassword1"><b>Amount :</b></label>
                <input
                  type="number"
                  class="form-control"
                  id="exampleInputPassword1"
                  name="amount"
                  placeholder="Amount"
                  required
                />
              </div>

              <button>Transact</button>
            </form>
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
