<?php

Class Adduser
{
    private $userID;    
    private $firstname;
    private $lastname;
    private $username;
    private $email;
    private $password;
    private $retype;
    private $clubname;
    private $city;
    private $country;
    private $image;

    /**
     * @return mixed
     */
    public function getemail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setemail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getfirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setfirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getpassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setpassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getlastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setlastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getcity()
    {
        return $this->city;
    }

    /**
     * @param mixed $lastname
     */
    public function setcity($city)
    {
        $this->city = $city;
    }

    public function getcountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $lastname
     */
    public function setcountry($country)
    {
        $this->country = $country;
    }

    public function getimage()
    {
        return $this->image;
    }

    /**
     * @param mixed $lastname
     */
    public function setimage($image)
    {
        $this->image = $image;
    }



    /**
     * @return mixed
     */
    public function getRetype()
    {
        return $this->retype;
    }

    /**
     * @param mixed $retype
     */
    public function setRetype($retype)
    {
        $this->retype = $retype;
    }

    /**
     * @return mixed
     */
    public function getuserID()
    {
        return $this->userID;
    }

    /**
     * @param mixed $userID
     */
    public function setuserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * @return mixed
     */
    public function getusername()
    {
        return $this->username;
    }

    public function getclubname()
    {
        return $this->clubname;
    }

    /**
     * @param mixed $username
     */
    public function setclubname($clubname)
    {
        $this->clubname = $clubname;
    }

    public function setusername($username)
    {
        $this->username = $username;
    }

    

    public function addnewuser()
    {
     $dsn="mysql:dbname=cl21-tunng"; //the database we need to connect
$username="cl21-tunng"; 
$password="7up7up7up";

        try
        {
            $conn= new PDO($dsn,$username,$password);  //creating a PHP object named PDO and here we have passed 3 parameter values
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  //set attributes to handle if any error occurs
            $query="INSERT INTO `user`(`userID`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES (:id,:fname,:lname,:uname,:email,:pword)";

            $st=$conn->prepare($query); //set the variable to table's field name . Prepare our query
            $st->bindValue(":id",$this->userID,PDO::PARAM_INT);// assigning the values for parameters. accessing the id property from  object person. Parameter type is integer
            $st->bindValue(":fname",$this->firstname,PDO::PARAM_STR);
            $st->bindValue(":lname",$this->lastname,PDO::PARAM_INT);
            $st->bindValue(":uname",$this->username,PDO::PARAM_STR);
            $st->bindValue(":email",$this->email,PDO::PARAM_STR);
            $st->bindValue(":pword",$this->password,PDO::PARAM_STR);
           
            $st->execute(); //executing the query
            //echo 'You have been successfully registered as a user!';
        }

        catch(PDOException $e)
        {
            echo 'Fail to connect';  //If the connection fails this message will occur.
            echo $e->getMessage();
        }
    }


    public function bemember()
    {
       $dsn="mysql:dbname=cl21-tunng"; //the database we need to connect
$username="cl21-tunng"; 
$password="7up7up7up";

        try
        {
            $conn= new PDO($dsn,$username,$password);  //creating a PHP object named PDO and here we have passed 3 parameter values
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  //set attributes to handle if any error occurs
            $query="INSERT INTO `member`(`userID`,`username`, `clubname`) VALUES (:id,:uname,:cname)";

            $st=$conn->prepare($query); //set the variable to table's field name . Prepare our query
            $st->bindValue(":id",$this->userID,PDO::PARAM_INT);// assigning the values for parameters. accessing the id property from  object person. Parameter type is integer
            $st->bindValue(":uname",$this->username,PDO::PARAM_STR);           
            $st->bindValue(":cname",$this->clubname,PDO::PARAM_STR);
            $st->execute(); //executing the query
            //echo 'You have been successfully registered as a user!';
        }

        catch(PDOException $e)
        {
            echo 'Fail to connect';  //If the connection fails this message will occur.
            echo $e->getMessage();
        }
    }


    function deleteuser()
    {
        $dsn="mysql:dbname=cl21-tunng"; //the database we need to connect
$username="cl21-tunng"; 
$password="7up7up7up";

    try
    {
    $conn= new PDO($dsn,$username,$password);  //creating a PHP object named PDO and here we have passed 3 parameter values
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  //set attributes to handle if any error occurs
    
    
    
    $queryimage="DELETE FROM `user` WHERE `username`=:id ";
    $st=$conn->prepare($queryimage);     
    $st->bindValue(":id",$this->username,PDO::PARAM_STR);
    $st->execute();
    


    $query="DELETE FROM `comment` WHERE `username`=:id";   
    $st=$conn->prepare($query); //set the variable to table's field name . Prepare our query
    $st->bindValue(":id",$this->username,PDO::PARAM_STR);// assigning the values for parameters. accessing the id property from  object person. Parameter type is integer  
    $st->execute(); //executing the query
    
    }   
    
    catch(PDOException $e)
    {
    echo 'Fail to connect';  //If the connection fails this message will occur.
    echo $e->getMessage();
    }
    }


    public function insertpropic(){
      $dsn="mysql:dbname=cl21-tunng"; //the database we need to connect
$username="cl21-tunng"; 
$password="7up7up7up";
        try
        {
        $conn= new PDO($dsn,$username,$password);  //creating a PHP object named PDO and here we have passed 3 parameter values
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  //set attributes to handle if any error occurs
    
    
        $updatequery="INSERT INTO `files`(`userid`, `pro_pic`, `city`, `country`) VALUES (:id,:pic,:city,:country)";
    
        $st=$conn->prepare($updatequery); //set the variable to table's field name
        $st->bindValue(":id",$this->username,PDO::PARAM_STR);
        $st->bindValue(":pic",$this->image,PDO::PARAM_STR);        
        $st->bindValue(":city",$this->city,PDO::PARAM_STR);
        $st->bindValue(":country",$this->country,PDO::PARAM_STR);
        
        $st->execute(); //executing the query
        echo 'Updated';
        }
        catch(PDOException $e)
        {
            echo 'Fail to connect';  //If the connection fails this message will occur.
            echo $e->getMessage();
        }
}
}
?>