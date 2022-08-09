<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .container {
        max-width: 600px;
        margin: auto;
    }
</style>

<body>
    <div class="container">
    <form action="index.php?controller=employee&action=view&id=<?php echo $employee['id']?>">
        <div class="form-group">
            <label for="exampleInputPassword1">ID</label>
            <input type="text" class="form-control" name="id" value="<?php echo $employee['id']; ?>" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">title</label>
            <input type="text" class="form-control" name="title" value="<?php echo $employee['title']; ?>" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">short conetnt</label>
            <input type="text" class="form-control" name="short_content" value="<?php echo $employee['short_content']; ?>" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">long conetnt</label>
            <input type="text" class="form-control" name="long_content" value="<?php echo $employee['long_content']; ?>" id="exampleInputEmail1">
        </div>
            <button type="cancel" class="btn btn-primary" name="back" >Back</button>

        </form>
    </div>
</body>

</html>