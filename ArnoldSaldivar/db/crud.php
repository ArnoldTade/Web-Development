<?php

    class crud{
        private $db;

        function __construct($conn){
            $this->db = $conn;

        } 

        public function insertAttendees($fname, $lname, $dob, $email,  $contact, $specialty, $avatar_path){

            try{
                $sql = "INSERT INTO attendee (firstname, lastname, dateofbirth, emailaddress, contactnumber, specialty_id avatar_path) VALUES(:fname, :lname, :dob, :email, :contact, :specialty , :avatar_path)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':fname', $fname);
                $stmt->bindparam(':lname', $lname);
                $stmt->bindparam(':dob', $dob);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':contact', $contact);
                $stmt->bindparam(':specialty', $specialty);
                $stmt->bindparam(':avatar_path', $avatar_path);

                $stmt->execute();
                return true;

            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty){
            try{
                $sql = "UPDATE 'attendee' SET 'firstname'= :fname, 'lastname' = :lname, 'dateofbirth'=:dob, 'emailaddress'= :email, 'contactnumber'=:contact, 'specialty_id'=:specialty WHERE attendee_id = :id ";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':id', $id);               
                $stmt->bindparam(':fname', $fname);
                $stmt->bindparam(':lname', $lname);
                $stmt->bindparam(':dob', $dob);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':contact', $contact);
                $stmt->bindparam(':specialty', $specialty);

                $stmt->execute();
                return true;

            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function getAttendees(){
        try{
                $sql = "SELECT * FROM 'attendee' a inner join specialties s on a.specialty_id = s.specialty_id";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }

        }

        public function getAttendeeDetails($id){
            try{
                    $sql = "SELECT * FROM attendee a inner join specialties s on a.specialty_id = s.specialty_id WHERE attendee_id = :id";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindparam(':id', $id);
                    $stmt->execute();
                    $result = $stmt->fetch();
                    return $result;

                }catch (PDOException $e){
                    echo $e->getMessage();
                    return false;
                }
            }

         public function deleteAttendee($id){
        try{
            $sql = "DELETE FROM attendee  WHERE attendee_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
    
            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function getSpecialties(){
            try{
                $sql = "SELECT * FROM 'specialties' ";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function getSpecialtyById($id){
            try{
                $sql = "SELECT * FROM 'specialties' WHERE specialty_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }


    }
    

    ?>