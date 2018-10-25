<?php
Class Comment
{
    private $commentID;
    private $username;
    private $topic;
    private $review;
    private $date;
    private $image1;
    private $image2;
    private $image3;


    public function setCommentID($commentID){
        $this->commentID=$commentID;
    }
    public function getCommentID(){
        return $this->commentID;
    }

    public function setUsername($username){
        $this->username=$username;
    }

    public function getUsername(){
        $this->username;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    
    /**
     * @return mixed
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param mixed $review
     */
    public function setReview($review)
    {
        $this->review = $review;
    }

    /**
     * @return mixed
     */
    public function getTopic()
    {
        return $this->topic;
    }

    public function getImage1()
    {
        return $this->image1;
    }

    public function getImage2()
    {
        return $this->image2;
    }

    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * @param mixed $topic
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
    }

    public function setImage1($image1)
    {
        $this->image1 = $image1;
    }

    public function setImage2($image2)
    {
        $this->image2 = $image2;
    }

    public function setImage3($image3)
    {
        $this->image3 = $image3;
    }

    public function Delete()
    {
  $dsn="mysql:dbname=cl21-tunng"; //the database we need to connect
$username="cl21-tunng"; 
$password="7up7up7up";

    try
    {
    $conn= new PDO($dsn,$username,$password);  //creating a PHP object named PDO and here we have passed 3 parameter values
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  //set attributes to handle if any error occurs
    
    
    
    $query="DELETE FROM `comment` WHERE `commentID`=:id ";
    $st=$conn->prepare($query);
    $st->bindValue(":id",$this->commentID,PDO::PARAM_INT);  
    $st->execute();        
    }   
    
    catch(PDOException $e)
    {
    echo 'Fail to connect';  //If the connection fails this message will occur.
    echo $e->getMessage();
    }
    
    
    }

    public function ADD()
    {
       $dsn="mysql:dbname=cl21-tunng"; //the database we need to connect
$username="cl21-tunng"; 
$password="7up7up7up";
        try
        {
            $conn= new PDO($dsn,$username,$password);  //creating a PHP object named PDO and here we have passed 3 parameter values
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  //set attributes to handle if any error occurs



            $query="INSERT INTO `comment`(`commentID`, `username`, `topic`, `review`, `image1`, `image2`, `image3`) VALUES (:id,:username,:topic,:review,:image1,:image2,:image3)";



            $st=$conn->prepare($query); //set the variable to table's field name . Prepare our query
            $st->bindValue(":id",$this->commentID,PDO::PARAM_INT);// assigning the values for parameters. accessing the id property from  object person. Parameter type is integer
            $st->bindValue(":username",$this->username,PDO::PARAM_STR);
            $st->bindValue(":topic",$this->topic,PDO::PARAM_INT);
            $st->bindValue(":review",$this->review,PDO::PARAM_STR);            
            $st->bindValue(":image1",$this->image1,PDO::PARAM_STR);
            $st->bindValue(":image2",$this->image2,PDO::PARAM_STR);
            $st->bindValue(":image3",$this->image3,PDO::PARAM_STR);
            $st->execute(); //executing the query
            
        }

        catch(PDOException $e)
        {
            echo 'Fail to connect';  //If the connection fails this message will occur.
            echo $e->getMessage();
        }
    }

}

?>