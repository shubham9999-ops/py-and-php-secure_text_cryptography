<!DOCTYPE html>
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.body{
     color:yellow;
}
</style>
<body>
<center>
    <form method="POST" action="MyCrypto.py" enctype="multipart/form-data">
            <div class="form-group col-4">
               <p><br><br><br><br><br><br><br></p>
               <label><b>Plain or Cypher Text</b></label>
               <input type="text" class="form-control" name="t" placeholder="Message here" required>
            </div>
            <div class="form-group col-4">
               <label><b>Enter E(Encode) or D(Decode)</b></label>
               <input type="text" class="form-control" name="c" placeholder="Enter your choice" required maxlength="1">
            </div>
            <div><p></p></div>
            <input type="submit" class="btn btn-info" name="sub" value="GO">
    </form>
</center>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>