</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Quản Lý Đơn Hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script>
    // $(document).ready(function(){
    //   	$(".delete").click(function(){
    //     	$(this).closest("tr").remove();
 //  		});
    // });
    </script>
</head>

<style>
    .add{
        float:right;
        margin-bottom: 20px;
    }

</style>
<body>
    <div class="container">
        <div class="container-fluid ">
            <ul class="nav nav-tabs">
                <li class="nav-item" >
                    <a class="nav-link active" href="#quanlydonhang"  data-toggle="tab">Quản lý đơn hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#quanlysanpham"  data-toggle="tab">Quản lý sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#quanlykhachhang" data-toggle="tab">Quản lý khách hàng</a>
                </li>
            </ul>
        </div>
        <div class="add">
            
            <a href=" <?php echo 'index.php?controller=employee&action=create' ?>" class="btn btn-success">Add</a>
        </div>
        <div class="container-fluid tab-content" style="margin-top: 30px;">
		<div  class="tab-pane active" id="quanlydonhang">
			<div class="container">
				<p class="nav justify-content-center" style="font-size: 30px; color: #007bff; margin-top: 10px; text-transform: uppercase; text-decoration: underline;"> Khu vực quản lý đơn hàng</p>
			</div>
            <table class="table table-bordered">
		    <thead class="bg-primary text-white">
			    <tr style="text-align: center;">
			       <th>STT</th>
			       <th>Tên sản phẩm</th>
			       <th>Mã hàng</th>
			       <th>Tên khách hàng</th>
			       <th>Địa chỉ</th>
			       <th>Ngày đặt</th>
			       <th>Tổng tiền</th>
			       <th>Trạng thái đơn hàng</th>
			       <th>Quản lý</th>
			    </tr>
            </thead>
            <!-- id,name,code,name_user,address,date_oder,price,trang_thai -->
            <tbody>
                <?php foreach($employees as $employee): ?>
                <tr style="text-align: center;">
                    <td>
                        <?php echo $employee['id']?>
                    </td>
                    <td>
                        <?php echo $employee['name']?>
                    </td>
                    <td>
                        <?php echo $employee['code']?>
                    </td>

                    <td>
                        <?php echo $employee['name_user']?>
                    </td>
                    <td>
                        <?php echo $employee['address']?>
                    </td>
                    <td>
                        <?php echo $employee['date_oder']?>
                    </td>
                    <td>
                        <?php echo $employee['price']?>
                    </td>
                    <td>
                        <?php echo $employee['trang_thai']?>
                    </td>
                    <td>
                        
                        <a  class="btn btn-primary"  href="<?php echo "index.php?controller=employee&action=edit&id={$employee['id']}" ?>">Sửa
                        </a>
                        
                        <a  class="btn btn-danger" href="<?php echo " index.php?controller=employee&action=delete&id={$employee[ 'id']} " ?>"onclick="return confirm('Are you sure')">xóa
                        
                        </a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>