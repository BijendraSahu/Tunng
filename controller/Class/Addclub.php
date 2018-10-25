<?php

Class Addclub
{
    private $clubID;    
    private $clubname;
    private $address;
    private $contact;
    private $city;
    private $country;
    private $email;
    private $password;
    private $retype;
    private $image;

    /**
     * @return mixed
     */
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


    public function getimage()
    {
        return $this->image;
    }

    /**
     * @param mixed $email
     */
    public function setimage($image)
    {
        $this->image = $image;
    }
    /**
     * @return mixed
     */
    public function getclubname()
    {
        return $this->clubname;
    }

    /**
     * @param mixed $firstname
     */
    public function setclubname($clubname)
    {
        $this->clubname = $clubname;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getaddress()
    {
        return $this->address;
    }

    /**
     * @param mixed 
     */
    public function setaddress($address)
    {
        $this->address = $address;
    }

    public function getcity()
    {
        return $this->city;
    }

    /**
     * @param mixed 
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
     * @param mixed 
     */
    public function setcountry($country)
    {
        $this->country = $country;
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
    public function getclubID()
    {
        return $this->clubID;
    }

    /**
     * @param mixed $userID
     */
    public function setclubID($clubID)
    {
        $this->clubID = $clubID;
    }

    /**
     * @return mixed
     */
    public function getcontact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $username
     */
    public function setcontact($contact)
    {
        $this->contact = $contact;
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
            $query="INSERT INTO `club`(`clubID`, `clubname`, `address`, `contact`,`city`,`country`, `email`, `password`,`image`) VALUES (:id,:cname,:address,:contact,:city,:country,:email,:pword,:image)";

            $st=$conn->prepare($query); //set the variable to table's field name . Prepare our query
            $st->bindValue(":id",$this->clubID,PDO::PARAM_INT);// assigning the values for parameters. accessing the id property from  object person. Parameter type is integer
            $st->bindValue(":cname",$this->clubname,PDO::PARAM_STR);
            $st->bindValue(":address",$this->address,PDO::PARAM_INT);
            $st->bindValue(":contact",$this->contact,PDO::PARAM_STR);
            $st->bindValue(":city",$this->city,PDO::PARAM_STR);
            $st->bindValue(":country",$this->country,PDO::PARAM_STR);
            $st->bindValue(":email",$this->email,PDO::PARAM_STR);
            $st->bindValue(":pword",$this->password,PDO::PARAM_STR);
            $st->bindValue(":image",$this->image,PDO::PARAM_STR);
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