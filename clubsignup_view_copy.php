<?php
session_start();
$errorlist="";
$datafield="";
if(isset($_SESSION['errorlist']))
{
    $errorlist=$_SESSION['errorlist'];
}
if(isset($_SESSION['datafield']))
{
    $datafield=$_SESSION['datafield'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tunng.co ::Business Registration </title>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    </head>
<style type="text/css">
@media(max-width: 576px){
  .top-content{
    background-image:url('images/slider3.jpg');
    /*background-size: 100%;*/
    background-position:center;
    background-repeat: no-repeat;
    background-attachment: fixed;}
}
@media(min-width: 576px){
  .top-content{
    background-image:url('images/slider3.jpg');
    /*background-size: 100%;*/
    background-position:center;
    background-repeat: no-repeat;
    background-attachment: fixed;}
}
@media(min-width: 768px){
  .top-content{
    background-image:url('images/slider3.jpg');
    background-size: 100%;
    background-position:center;
    background-repeat: no-repeat;
    background-attachment: fixed;}
}
</style>
<script type="text/javascript" src="assets/js/validation.js"></script>
    <body style="opacity:0.7;">
        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <span><strong style="font-family:Century Gothic;font-size:55px;"><b style="color:#4286F1">T</b><b style="color:#FF2A2C">u</b><b style="color:#EBBE1D">n</b><b style="color:#4286F3">n</b><b style="color:#31A854">g</b></strong></span>
                            <div class="description">
                                <h3 style="color:#800080;">
                                    <strong>Empowering Business</strong>
                                </h3>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">                    
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top" style="background-color:#800080; color:yellow; opacity:0.8">
                                <div class="form-top-left">
                                    <h3><strong style="color:#ffffff;font-weight: 900;">Signup</strong></h3>  
                                </div>                                
                                <div class="form-top-right">
                                    <image src="images/tree.png">
                                </div>
                            </div>
                            <div class="form-bottom" style="background-color:#800080; color:yellow; opacity:0.9">
                                <?php
                                if(isset($_SESSION['register_email']) && $_SESSION['register_email']!='')
                                {
                                    print "<div class='alert alert-danger'>";
                                    echo $_SESSION['register_email'];
                                    unset($_SESSION['register_email']);
                                    print "</div>";
                                }
                                ?>
                                <?php
                                if(isset($_SESSION['register_username']) && $_SESSION['register_username']!='')
                                {
                                    print "<div class='alert alert-danger'>";
                                    echo $_SESSION['register_username'];
                                    unset($_SESSION['register_username']);
                                    print "</div>";
                                }
                                ?>
                                <form role="form" action="controller/club-registration.php"  class="login-form" method="POST" onsubmit="return clubsignupValidation();" > 
                                  
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Business Name:</label>
                                        <input type="text" name="clubname" placeholder="Enter Business Name" class="form-username form-control" id="clubname" value="<?php if(isset($datafield['clubname'])) echo $datafield['clubname'];?>">
                                    </div>
                                    <?php
                                        $stylenm="";
                                              if(isset($errorlist['clubname_null']) || isset($errorlist['clubname_char']))
                                              {
                                                  $stylenm="display:block";
                                              }
                                              else
                                              {
                                                  $stylenm="display:none";
                                              }
                                        ?>
                                    <div class='alert alert-danger' id="f_namejv" name="f_namejv" style="<?php echo $stylenm;?>">
                                    <?php
                                            if(isset($errorlist['clubname_null']))
                                            {
                                                echo $errorlist['clubname_null'];
                                            }

                                            if(isset($errorlist['clubname_char']))
                                            {
                                                echo $errorlist['clubname_char'];
                                            }
                                           
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Email:</label>
                                        <input type="text" name="email" placeholder="Enter Your Email-Id" class="form-username form-control" id="email" value="<?php if(isset($datafield['email'])) echo $datafield['email'];?>">
                                    </div>
                                    <?php
                                        $stylenm="";
                                              if(isset($errorlist['email_vali_null']) || isset($errorlist['email_vali']))
                                              {
                                                  $stylenm="display:block";
                                              }
                                              else
                                              {
                                                  $stylenm="display:none";
                                              }
                                        ?>
                                    <div class='alert alert-danger' id="emailjv" name="emailjv" style="<?php echo $stylenm;?>">
                                         <?php
                                            if(isset($errorlist['email_vali_null']))
                                            {
                                                echo $errorlist['email_vali_null'];
                                            }

                                            if(isset($errorlist['email_vali']))
                                            {
                                                echo $errorlist['email_vali'];
                                            }
                                           
                                        ?>
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only">User Name:</label>
                                        <input type="text" name="club_username" placeholder="Enter User Name" class="form-username form-control" id="club_username" value="<?php if(isset($datafield['club_username'])) echo $datafield['club_username'];?>">
                                    </div>
                                    <?php
                                        $stylenm="";
                                              if(isset($errorlist['clubusername_null']) || isset($errorlist['clubusername_char']))
                                              {
                                                  $stylenm="display:block";
                                              }
                                              else
                                              {
                                                  $stylenm="display:none";
                                              }
                                        ?>
                                    <div class='alert alert-danger' id="club_usernamejv" name="club_usernamejv" style="<?php echo $stylenm;?>">
                                         <?php
                                            if(isset($errorlist['clubusername_null']))
                                            {
                                                echo $errorlist['clubusername_null'];
                                            }

                                            if(isset($errorlist['clubusername_char']))
                                            {
                                                echo $errorlist['clubusername_char'];
                                            }
                                           
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password:</label>
                                        <input type="password" name="password" placeholder="Enter Password" class="form-password form-control" id="password" >
                                    </div>
                                    <?php
                                        $stylenm="";
                                              if(isset($errorlist['password_null']) || isset($errorlist['password_char']) || isset($errorlist['password_length']))
                                              {
                                                  $stylenm="display:block";
                                              }
                                              else
                                              {
                                                  $stylenm="display:none";
                                              }
                                        ?>
                                    <div class='alert alert-danger' id="passwordjv" name="passwordjv" style="<?php echo $stylenm;?>">
                                    <?php
                                            if(isset($errorlist['password_null']))
                                            {
                                                echo $errorlist['password_null'];
                                            }

                                            if(isset($errorlist['password_char']))
                                            {
                                                echo $errorlist['password_char'];
                                            }
                                            if(isset($errorlist['password_length']))
                                            {
                                                echo $errorlist['password_length'];
                                            }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Re-enter Password:</label>
                                        <input type="password" name="reenterpassword" placeholder="Re-enter Password" class="form-reenterpassword form-control" id="reenterpassword">
                                    </div>
                                    <?php
                                        $stylenm="";
                                              if(isset($errorlist['reenterpass_null']) || isset($errorlist['pass_repass_match']))
                                              {
                                                  $stylenm="display:block";
                                              }
                                              else
                                              {
                                                  $stylenm="display:none";
                                              }
                                        ?>
                                    <div class='alert alert-danger' id="repasswordjv" name="repasswordjv" style="<?php echo $stylenm;?>">
                                         <?php
                                            if(isset($errorlist['reenterpass_null']))
                                            {
                                                echo $errorlist['reenterpass_null'];
                                            }

                                            if(isset($errorlist['pass_repass_match']))
                                            {
                                                echo $errorlist['pass_repass_match'];
                                            }
                                           
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Business Address:</label>
                                        <textarea name="club_address" placeholder="Enter  Address" class="form-city form-control" id="club_address" ><?php if(isset($datafield['club_address'])) echo $datafield['club_address'];?></textarea>
                                    </div>
                                    <?php
                                        $stylenm="";
                                              if(isset($errorlist['club_address_null']))
                                              {
                                                  $stylenm="display:block";
                                              }
                                              else
                                              {
                                                  $stylenm="display:none";
                                              }
                                        ?>
                                    <div class='alert alert-danger' id="addjv" name="addjv" style="<?php echo $stylenm;?>">
                                         <?php
                                            if(isset($errorlist['club_address_null']))
                                            {
                                                echo $errorlist['club_address_null'];
                                            }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">City:</label>
                                        <input type="text"  maxlength="10" name="city_name" placeholder="Enter City Name" class="form-city form-control" id="city_name" value="<?php if(isset($datafield['city_name'])) echo $datafield['city_name'];?>">
                                    </div>
                                    <?php
                                        $stylenm="";
                                              if(isset($errorlist['city_name_null']))
                                              {
                                                  $stylenm="display:block";
                                              }
                                              else
                                              {
                                                  $stylenm="display:none";
                                              }
                                        ?>
                                    <div class='alert alert-danger' id="cityjv" name="cityjv" style="<?php echo $stylenm;?>">
                                         <?php
                                            if(isset($errorlist['city_name_null']))
                                            {
                                                echo $errorlist['city_name_null'];
                                            }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Country:</label>
                                        <select id="ddlcountry" name="ddlcountry" class="form-country form-control">
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antartica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo">Congo, the Democratic Republic of the</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                            <option value="Croatia">Croatia (Hrvatska)</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="France Metropolitan">France, Metropolitan</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                            <option value="Holy See">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran (Islamic Republic of)</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                            <option value="Korea">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon" selected>Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia, Federated States of</option>
                                            <option value="Moldova">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                            <option value="Saint LUCIA">Saint LUCIA</option>
                                            <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                            <option value="Span">Spain</option>
                                            <option value="SriLanka">Sri Lanka</option>
                                            <option value="St. Helena">St. Helena</option>
                                            <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syrian Arab Republic</option>
                                            <option value="Taiwan">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Viet Nam</option>
                                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                            <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                            <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Yugoslavia">Yugoslavia</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <?php
                                        $stylenm="";
                                              if(isset($errorlist['ddlcountry_null']) )
                                              {
                                                  $stylenm="display:block";
                                              }
                                              else
                                              {
                                                  $stylenm="display:none";
                                              }
                                        ?>
                                    <div class='alert alert-danger' id="countryjv" name="countryjv" style="<?php echo $stylenm;?>">
                                         <?php
                                            if(isset($errorlist['ddlcountry_null']))
                                            {
                                                echo $errorlist['ddlcountry_null'];
                                            }
                                        ?>
                                    </div>
                                    <button type="submit" name="btn_signup" class="btn btn-default" style="background:#800080;color:#ffffff" onmouseover="this.style.background='#800080'" onmouseleave="this.style.background='#960196'">Sign up!</button>
                                </form>
                                <p><a href="index.php" style="color:silver;font-weight: 900">Login to site...</a></p>
                            </div>
                        </div>                      
                    </div>                    
                </div>
            </div>
            
        </div>
 <?php
unset($_SESSION['errorlist']);
    unset($_SESSION['datafield']);
?>

        <!-- Javascript -->
        <script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js');?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.backstretch.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/scripts.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.ajaxfileupload.js');?>"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
       