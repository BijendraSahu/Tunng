<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errorlist = array();
    $datafield = array();

    $loginid = $_POST['emailadd'];
    $categories = $_POST['categories'];
    $datafield['datacategor'] = $categories;
    $subcategories = $_POST['subcategories'];
    $datafield['datasubcategor'] = $subcategories;

    $title = trim($_POST['titles']);
    $datafield['datatitle'] = $title;

    $price = $_POST['price'];
    $datafield['dataprice'] = $price;

    $country = $_POST['country'];
    $datafield['datacountry'] = $country;
    $state = $_POST['state'];
    $datafield['datastate'] = $state;
    $city = $_POST['city'];
    $datafield['datacity'] = $city;
//     echo  $banknm = $_POST['banknm']; 
//    $datafield['databanknm']=$banknm;
//   echo  $ifsccode = $_POST['ifsccode']; 
//    $datafield['dataifsccode']=$ifsccode;
//   echo  $accountno = $_POST['accountno']; 
//    $datafield['dataaccountno']=$accountno;
    $description = trim($_POST['description']);
    $datafield['datadescription'] = $description;


    // UPLOAD PHOTO
    function uploadImages($photo1)
    {
        if (trim($photo1['tmp_name'] != '')) {
            $imgextension = substr(strrchr($photo1['name'], "."), 1);
            if ($imgextension == 'jpg' || $imgextension == 'JPG' || $imgextension == 'JPEG' || $imgextension == 'jpeg' || $imgextension == 'PNG' || $imgextension == 'png') {
                $imgname = $photo1['name'];
                $imgfname = md5(time());
                $new_imgnm = $imgfname . $imgname;
                $imgpath = "../images/businessimg/";
                $img_path1 = $imgpath . $imgfname . $imgname;
                $result = move_uploaded_file($photo1['tmp_name'], $img_path1);
                return $new_imgnm;
            } else {
                return "";
            }

        }
    }

    //EXTERIOR IMAGES

    $Image_One = $_FILES['firstfile'];
    $Image1 = uploadImages($Image_One);
    $Image_Two = $_FILES['secondtfile'];
    $Image2 = uploadImages($Image_Two);
    $Image_Three = $_FILES['thirdtfile'];
    $Image3 = uploadImages($Image_Three);
    $Image_Four = $_FILES['fourthtfile'];
    $Image4 = uploadImages($Image_Four);
    $Image_Five = $_FILES['fifthtfile'];
    $Image5 = uploadImages($Image_Five);
    if ($categories == "") {
        $errorlist['categories_null'] = "Categories is required.";
    } elseif ($subcategories == "") {
        $errorlist['subcategories_null'] = "SubCategories is required.";
    } elseif ($title == "") {
        $errorlist['title_null'] = "Title is required.";
    } elseif ($price == "") {
        $errorlist['price_null'] = "Price is required.";
    } elseif ($country == "") {
        $errorlist1['country_null'] = "Country is required.";
    } elseif ($state == "") {
        $errorlist['state_null'] = "State is required.";
    } elseif ($city == "") {
        $errorlist['city_null'] = "City is required.";
    }
//         elseif($banknm=="")
//        {
//           $errorlist['banknm_null']="bank name is required.";
//        }
//        elseif($ifsccode=="")
//        {
//           $errorlist['ifsccode_null']="IFSC Code is required.";
//        }
//        elseif($accountno=="")
//        {
//           $errorlist['accountno_null']="Account no is required.";
//        }
    elseif ($Image1 == "") {
        $errorlist['Image_One_null'] = "Pls upload 5 pictures is required.";
    } elseif ($Image2 == "") {
        $errorlist['Image_Two_null'] = "Pls upload 5 pictures is required.";
    } elseif ($Image3 == "") {
        $errorlist['Image_Three_null'] = "Pls upload 5 pictures is required.";
    } elseif ($Image4 == "") {
        $errorlist['Image_Four_null'] = "Pls upload 5 pictures is required.";
    } elseif ($Image5 == "") {
        $errorlist['Image_Five_null'] = "Pls upload 5 pictures is required.";
    } elseif ($description == "") {
        $errorlist['description_null'] = "Description is required.";
    }

    if (empty($errorlist)) {
        include 'connection.php';
        $iq = mysql_query("INSERT INTO add_product_business(emailid,category,subcategory,title,price,countries,states,cities,detaildiscription,product_imgone,product_imgtwo,product_imgthree,product_imgfour,product_imgfive)"
            . " VALUES ('$loginid','$categories','$subcategories','$title','$price','$country','$state','$city','$description','$Image1','$Image2','$Image3','$Image4','$Image5')");

        $noti_title = "Business member added a new product : $title";
        $noti = mysql_query("INSERT INTO tbl_noti(notification)"." VALUES ('$noti_title')");
        mysql_error();
        mysql_close();
        // echo "ifif";
        $_SESSION['successmsg'] = "Successfully Done!";
        header("location:../addproduct.php");
    } else {
        $_SESSION['datafield'] = $datafield;
        $_SESSION['errorlist'] = $errorlist;
        //echo "else";
        header("location:../addproduct.php");
    }
}
?>

