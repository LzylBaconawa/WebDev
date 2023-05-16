<?php

class crud{
    //private databse object
    private $db;

    //contructor to initialize private variable to the database connection
    function _construct($conn){
        $this->db = $conn;
    }
    public function insert($fname,$lname,$dateofbirth,$email,$contact,$specialty){
        try{
            $sql = "INSERT INTO attendee VALUES (:fname, :lname, :dateofbirth, :email, :contact, :specialty";
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dateofbirth',$dateofbirth);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contact',$contact);
            $stmt->bindparam(':specialty',$specialty);
            $stmt->bindparam(':specialty',$avatar_path);

            $stmt->execute();
            return true;

        }catch (PDOExeption $e){
            echo $e->getMessage;
            return false;
        }
    }
    public function editAttendance($id, $fname,$lname,$dateofbirth,$email,$contact,$specialty){
        try{
            $sql = "UPDATE 'attendee' SET 'firstname'=:fname,'lastname'=:lname,'dateofbirth'=:dateofbirth, 'emailaddress'=:email,'contantnumber'=:contact,'secialty_id'=:specialty WHERE attendee_id =:id";
            $stmt = $this->db->prepare($sql);
            //bind all placeholders to the actual values

            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dateofbirth',$dateofbirth);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contact',$contact);
            $stmt->bindparam(':specialty',$specialty);
           
            //execute statement
            $stmt->execute();
            return true;

        }catch (PDOExeption $e){
            echo $e->getMessage;
            return false;
}
    }
    public function getAttendees($id){
    try{
        $sql = "SELECT *FROM 'attendee' a inner join specialties s on a.specialty_id =s.specialty_id";
        $result = $this->db->query($sql);
        return $result;
    }catch (PDOExeption $e){
        echo $e->getMessage;
        return false; 
    }
}
public function getAttedanceDetails($id){
    try{
    $sql = "select * from attende a inner join speciaties s on a.specialty_id =s.specialty_id
    where attendee_id =:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindparam(':id' , $id);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}catch (PDOExeption $e){
    echo $e->getMessage;
    return false; 
}
}
public function deleteattendee($id){
    try{
    $sql = "delete from attendee where attendee_id =:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindparam(':id' , $id);
    $stmt->execute();
    return $true;
}catch (PDOExeption $e){
    echo $e->getMessage;
    return false; 
}
}
public function getSpecialties($id){
    try{
    $sql = "SELECT* FROM 'specialties' where specialty_id =:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindparam(':id' , $id);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}catch (PDOExeption $e){
    echo $e->getMessage;
    return false; 
}
}
}
?>