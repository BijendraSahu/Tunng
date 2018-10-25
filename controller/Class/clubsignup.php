<?php


Class Clubsignup
{
	private $username;
	private $password;
	private $email;


	public function getusername()
    {
        return $this->username;
    }

    /**
     * @param
     */
    public function setusername($username)
    {
        $this->username = $username;
    }


    public function getpassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $email
     */
    public function setpassword($password)
    {
        $this->password = $password;
    }
	
	public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function addnewclub()
    {
        $dsn="mysql:dbname=cl21-tunng"; //the database we need to connect
$username="cl21-tunng"; 
$password="7up7up7up";

        try
        {
            $conn= new PDO($dsn,$username,$password);  //creating a PHP object named PDO and here we have passed 3 parameter values
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  //set attributes to handle if any error occurs
            $query="INSERT INTO `club`(`clubname`, `email`,`password`) VALUES (:cname,:email,:pword)";

            $st=$conn->prepare($query); //set the variable to table's field name . Prepare our query
           // assigning the values for parameters. accessing the id property from  object person. Parameter type is integer
            
            $st->bindValue(":cname",$this->username,PDO::PARAM_STR);
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
	
}


?>