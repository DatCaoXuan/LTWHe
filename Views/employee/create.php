<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .container {
        max-width: 600px;
        margin: auto;
    }
</style>

<body>
    <div class="container">
        <form action="index.php?controller=employee&action=store" method="POST">
        
            <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="text" name="id" class="form-control" aria-describedby="emailHelp">
                
            </div>
            <div class="form-group">
                <label for="">tên sản phẩm</label>
                <input type="text" class="form-control" name="name">
               
            </div>
            <div class="form-group">
                <label for="">mã hàng</label>
                <input type="text" class="form-control" name="code">
                
            </div>
            <div class="form-group">
                <label for="">tên khách hàng</label>
                <input type="text" class="form-control" name="name_user">
                

            </div>
            <div class="form-group">
                <label for="">địa chỉ</label>
                <input type="text" class="form-control" name="address">
                

            </div>
            <div class="form-group">
                <label for="">ngày đạt</label>
                <input type="text" class="form-control" name="date_oder">
                

            </div>
            <div class="form-group">
                <label for="">tổng tiền</label>
                <input type="text" class="form-control" name="price">
                

            </div>
            <div class="form-group">
                <label for="">Trạng thái đon hàng</label>
                <input type="text" class="form-control" name="trang_thai">
                

            </div>
            
            <!-- <div >
                <label for="">category</label>
                    <select id="cars" name="category_id">
                        <option value="cate 1">cate 1</option>
                        <option value="cate 2">Saab</option>
                        <option value="cate 3">Opel</option>
                        <option value="cate 4">Audi</option>
                    </select>
                
            </div> -->

            <button type="submit" class="btn btn-primary" name="save">Thêm mới</button>
        </form>
    </div>
</body>

</html>