<?php


Class Usersignup
{
	private $username;
    private $clubname;
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

    public function getclubname()
    {
        return $this->clubname;
    }

    /**
     * @param
     */
    public function setclubname($clubname)
    {
        $this->clubname = $clubname;
    }


     public function getphone()
    {
        return $this->phone;
    }

    /**
     * @param
     */
    public function setAdress($Adress)
    {
        $this->Adress = $Adress;
    }
     public function getAdress()
    {
        return $this->Adress;
    }

    /**
     * @param
     */
    public function setphone($phone)
    {
        $this->phone = $phone;
    }




    public function getpassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $SetPasswrd
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


    public function addnewuser()
    {
        $dsn="mysql:dbname=cl21-tunng"; //the database we need to connect
$username="cl21-tunng"; 
$password="7up7up7up";

        try
        {
            $conn= new PDO($dsn,$username,$password);  //creating a PHP object named PDO and here we have passed 3 parameter values
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  //set attributes to handle if any error occurs
            $query="INSERT INTO `user`(`username`, `email`,`password`,`Phone`,`Adress`) VALUES (:uname,:email,:pword,:phone,:adress)";

            $st=$conn->prepare($query); //set the variable to table's field name . Prepare our query
           // assigning the values for parameters. accessing the id property from  object person. Parameter type is integer
            
            $st->bindValue(":uname",$this->username,PDO::PARAM_STR);
            $st->bindValue(":email",$this->email,PDO::PARAM_STR);
            $st->bindValue(":pword",$this->password,PDO::PARAM_STR);
            $st->bindValue(":phone",$this->phone,PDO::PARAM_STR);
            $st->bindValue(":adress",$this->Adress,PDO::PARAM_STR);
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