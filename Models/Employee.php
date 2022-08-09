<?php
class Employee 
{
    protected $connection;

    public function __construct()
    {
        $this->connectToDatabase();
    }
    
    public function connectToDatabase()
    {
        try {
            $this->connection = new mysqli("localhost", "root", "", "db_itplus_shopping");

        } catch (Exception $e) {
            print_r($e->getMessage());
        }

    }

    public function all()
    {
        //B1: viet cau sql
        $sql = "SELECT * FROM oder";

        //b2: chay query
        $result = mysqli_query($this->connection, $sql);

        //b3: xu ly ket qua
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($data) {
        // $id=$data['id'];
        // $first_name = $data['first_name'];
        // $last_name = $data['last_name'];
        // $gender = $data['gender'];
        // $birthday = $data['birthday'];

        $sql = sprintf("INSERT INTO oder(id,name,code,name_user,address,date_oder,price,trang_thai	
        ) VALUES ('%d','%s', '%s','%s','%s','%s','%s','%s')", $data['id'],$data['name'],$data['code'],$data['name_user'],$data['address'],$data['date_oder'],$data['price'],$data['trang_thai']);
        $result = mysqli_query($this->connection,$sql);
        return $result;
        
    }

    public function find($id)
    {
        $sql = "SELECT * FROM oder where id = {$id}";
        $result = mysqli_query($this->connection,$sql);
        return $result->fetch_assoc();
    }
    public function view($id){
        $sql = "SELECT * FROM oder where id = {$id}";
        $result = mysqli_query($this->connection,$sql);
        return $result;
    }
    public function update($data,$id){
        
        $sql = sprintf("UPDATE oder SET  name='%s',code='%s',name_user='%s',address='%s',date_oder='%s',price='%s',trang_thai='%s'	
         WHERE id=%d",$data['name'],$data['code'],$data['name_user'],$data['address'],$data['date_oder'],$data['price'],$data['trang_thai'],$id);
        $result = mysqli_query($this->connection,$sql);
        return $result;
    }
    public function delete()
    {
        $sql = sprintf("DELETE FROM oder WHERE id = %d", $_GET['id']);
        $result =  mysqli_query($this->connection,$sql);
        return $result;
    }
}