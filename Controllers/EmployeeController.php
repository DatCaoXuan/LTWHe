<?php

require_once('Models/Employee.php');

class EmployeeController
{
    public function __construct()
    {
        $this->Employee = new Employee();
    }
    public function index()
    {
        $employee = new Employee();
        $employees = $employee->all();
        require_once('Views/employee/index.php');
    }

    public function create()
    {
        $errors = [];
        require_once('Views/employee/create.php');
    }

    public function store()
    {
       

        $employee = new Employee();
        
            $result = $employee->create($_POST);

            if ($result) {
                header('location: index.php?controller=employee&action=index');
            }
        
        require_once('Views/employee/create.php');
    }

    public function edit()
    {
        $id = $_GET['id'];
        $employee = new Employee();
        $employee = $employee->find($id);
        require_once('Views/employee/edit.php');
    }
    public function view()
    {
        $id = $_GET['id'];
        $employee = new Employee();
        $employee = $employee->find($id);
        require_once('Views/employee/view.php');
    }

    public function update()
    {
        $errors = [];
        $id = $_GET['id'];
        $employee = new Employee();
        
       
            $isCreated = $employee->update($_POST, $id);
            if ($isCreated) {
                header('location: index.php?controller=employee&action=index');
            }
        

        require('Views/employee/edit.php');
    }
    public function delete()
    {
        $id = $_GET['id'];
        $result = $this->Employee->delete($id);
        if ($result) {
            header('location: index.php?controller=employee&action=index');
        }
    }
    
}

?>