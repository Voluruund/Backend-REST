<?php
include("DBConnection.php");
class Student 
{
  //variables
  private $db;
  public $_id;
  public $_name;
  public $_surname;
  public $_sidiCode;
  public $_taxCode;

  //construct
  public function __construct() 
  {
    $this->db = new DBConnection();
    $this->db = $this->db->returnConnection();
  }
  
  //function to find a certain student
  public function find($id)
  {
    $sql = "SELECT * FROM student WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $data = [
      'id' => $id
    ];
    $stmt->execute($data);
    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    return $result;
  }

  //function to find all
  public function all()
  {
    $sql = "SELECT * FROM student";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
  }

  //function to add a student
  public function post($student)
  {
    $sql = "INSERT INTO student VALUES ($student)";
    $stmt = $this->db->prepare($sql);
    $data = [
      'student' => $student
    ];
    $stmt->execute($data);
    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    return $result;
  }

  //function to delete a student
  public function delete($id)
  {
    $sql = "DELETE FROM student WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $data = [
      'id' => $id
    ];
    $stmt->execute($data);
    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    return $result;
  }
  
  public function put($student)
  {
    $sql = "INSERT INTO student VALUES ($student)";
    $stmt = $this->db->prepare($sql);
    $data = [
      'student' => $student
    ];
    $stmt->execute($data);
    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    return $result;
  }
  
}
?>
