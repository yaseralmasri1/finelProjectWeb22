<?php
class DbHelper{


    private $conn;
    function createDbConnection(){
try{
    $this->conn = new mysqli("localhost","root","","iugphp");
}catch (Exception $error){
    echo $error->getMessage();

}
    }
    function insertNewEmployee($name,$email){
      try{
          $sql = "INSERT INTO students (name,email)VALUES ('$name','$email')";
          $result =  $this->conn->query($sql);
          if($result==true){
              echo json_encode(array("success"=>true,
                  "message"=>"new Employee has been addedd"
              )) ;
          }else{
              echo json_encode(array("success"=>false,
                  "message"=>"new v has not been addedd"
              )) ;
          }

      }catch (Exception $error){
          echo $error->getMessage();

      }
    }
    function getAllEmployee(){}
    function getEmployeeById($id){}
    function deleteEmployee($id){}
    function updateEmployee($id,$name,$email){}
}
?>