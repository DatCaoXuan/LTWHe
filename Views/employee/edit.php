<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- id,name,code,name_user,address,date_oder,price,trang_thai -->
    
    <form action="index.php?controller=employee&action=update&id=<?php echo $employee['id']?>" method="POST">

        <div class="form-group">
            <label for="exampleInputPassword1">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name" value="<?php echo $employee['name']; ?>" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mã hàng</label>
            <input type="text" class="form-control" name="code" value="<?php echo $employee['code']; ?>" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tên khách hàng</label>
            <input type="text" class="form-control" name="name_user" value="<?php echo $employee['name_user']; ?>" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Địa chỉ</label>
            <input type="text" class="form-control" name="address" value="<?php echo $employee['address']; ?>" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">ngày đặt</label>
            <input type="text" class="form-control" name="date_oder" value="<?php echo $employee['date_oder']; ?>" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">tổng tiền</label>
            <input type="text" class="form-control" name="price" value="<?php echo $employee['price']; ?>" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">trạng thái đơn hàng</label>
            <input type="text" class="form-control" name="trang_thai" value="<?php echo $employee['trang_thai']; ?>" id="exampleInputEmail1">
        </div>
        

        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</body>

</html>