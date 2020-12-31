<?php
if(isset($_POST["ed"])){
   header("Location:ed.php");
}
if(isset($_POST["key"])){
  header("Location:MyKeyLog.py");
}
?>
<html>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.card {
  display: inline-block;
  position: relative;
  overflow: hidden;
  min-height: 600px;
  height: 100%;
}
.card:hover {
  box-shadow: 10px 14px 35px 0px #ffbb33;
  background-color:orange;
}

.card-body {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 30%;
  background-color:#212121;
  transition: 1.5s ease;
}
.card-content {
  left: 0;
  right: 0;
  overflow: hidden;
  width: 50%;
  height: auto;
  transition: 1.5s ease;
}

</style>
<body>
<form action="" method="POST">
<div class="row">
    <div class="card-wrapper card-image-title-description col-4">
      <div class="card">
          <img class="card-img-top" src="hacker.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" style="color:white;text-align:center;font-size:32px">ENCRYPT & DECRYPT</h5>
          <p class="card-text" style="color:white;text-align:center;font-size:17">Converts plain text to cypher text and vice versa.</p>
          <div style="text-align:center">
          <input type="submit" name="ed" class="btn btn-info" value="Try Now">
          </div>
        </div>
      </div>
    </div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>