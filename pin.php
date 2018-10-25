
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset='UTF-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex">



<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<style class="cp-pen-styles">/* Form */
* {
  overflow-x: none !important;overflow-y: none !important;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 300px;
  margin:auto ;
  padding:15px 0 -0px 0px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  text-align: center;
}
.form .thumbnail {
  background: #ffffff;
  width: 120px;
  border:1px solid silver;
  height: 120px;
  margin: auto auto 10px auto;
  padding:25px 15px 15px 10px;
  
  border-top-left-radius: 100%;
  border-top-right-radius: 100%;
  border-bottom-left-radius: 100%;
  border-bottom-right-radius: 100%;
  box-sizing: border-box;
}
.form .thumbnail img {
  display: block;
  width: 110%;
}
.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  outline: 0;
  background: #EF3B3A;
  width: 100%;
  border: 0;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #EF3B3A;
  text-decoration: none;
}
.form .register-form {
  display: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}

/* END Form */
/* Demo Purposes */
body {
  background: #ccc;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
body:before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  display: block;
  background: rgba(255, 255, 255, 0.8);
  width: 100%;
  height: 100%;
}

#video {
  z-index: -99;
  position: fixed;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

.numped {
  background:#800080 !important;
  width:100%;
  height:240px
}

#answer{
color: #800080;
background: url(images/tunngcircles.png) no-repeat;
background-position: center center;


}
.firefox{
    letter-spacing: 1.45em;
font-size: 25px !important;
}
.chrome{
    letter-spacing: 1.2em !important;
    font-size: 33px !important;

}
.width280{
   letter-spacing: 2.6em;
  
}
.width320{
   letter-spacing: 35px !important;
   
    font-size: 33px !important;
    background-size: 270px 60px !important;
       padding: 30px !important;
   
   
}
.width240{
  letter-spacing: 3.4em;  
}


      td {padding:10px;color:#ffffff;width:33%;}
      .num {background:#800080 !important;margin:0px !important;padding:8px !important;border:0px solid white !important;width:100% !important ;color: #ffffff !important;font-size: 17px !important;font-weight: 600;box-shadow: 0 0 2px #bc00bc !important}
      .num:active {background:#bc00bc !important;box-shadow: 0 0 2px #800080 !important}

      .numpin {width:15% !important;height:40px;padding:5px !important;margin:2px !important;margin-bottom: 15px !important;border:1px solid silver !important;border-radius: 100% !important;text-align: center !important;font-size: 20px !important}

</style></head>
<body style="overflow-x: none !important;overflow-y: none !important;background: #ffffff !important">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script type="text/javascript">

          $("input[name*=pin]").keyup(function(e) {
            if($(this).val().length == 1) {
              $(this).attr('type', 'password');
              var input_fields = $(this).closest('form').find('input[name*=pin]');
              input_fields.eq(input_fields.index(this) + 1).focus();
            }
            if (e.keyCode==8 && e.currentTarget.name !== 'pin01') {
              $(this).attr('type', 'text');
              var input_fields = $(this).closest('form').find('input[name*=pin]');
              input_fields.eq( input_fields.index(this) - 1 ).attr('type', 'text').focus(); 
            }
          });
 $(document).ready(function(){
       // Opera 8.0+
    var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

    // Firefox 1.0+
    var isFirefox = typeof InstallTrigger !== 'undefined';

    // Safari 3.0+ "[object HTMLElementConstructor]" 
    var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || safari.pushNotification);

    // Internet Explorer 6-11
    var isIE = /*@cc_on!@*/false || !!document.documentMode;

    // Edge 20+
    var isEdge = !isIE && !!window.StyleMedia;

    // Chrome 1+
    var isChrome = !!window.chrome && !!window.chrome.webstore;

    // Blink engine detection
    var isBlink = (isChrome || isOpera) && !!window.CSS;

         var widthinput=$("#answer").width();
         
      if(widthinput < 230)
      {
            $("#answer").addClass("width240");
      }
       else if((widthinput >230) && (widthinput < 240))
      {
        //   alert(widthinput +"fgftg");
            $("#answer").addClass("width280");
      }
      else if(((widthinput >240) && (widthinput < 272)) && (isFirefox==false))
      {
          // alert(widthinput+"240272");
            $("#answer").addClass("width320");
      }

            if(isOpera== true){
                //alert("isOpera");
            }
            else if(((widthinput >240) && (widthinput < 272)) && (isFirefox==true)){
                // alert("isFirefox");
                  $("#answer").addClass("firefox");
            }
            else if(isSafari==true){
                // alert("isSafari");
            }     
            else if(isChrome==true){
                // alert("isChrome");
                  $("#answer").addClass("chrome");
            }     
        	$(".userIn").click(function() {
                      var inputdata=$('#answer').val();
             var length=((inputdata).length);
                    if(length=='5'){
                           $('.userIn').prop('disabled', true);
                    }
	  var usrIn = $(this).attr('data-number');
	  $("#answer").val(function() {
	    return this.value + usrIn;
	  });
	});
        $("#backspace").click(function() {
	$("#answer").val($("#answer").val().substring(0, $("#answer").val().length - 1));
         $('.userIn').prop('disabled', false);
	});
        
        
         $('form').submit(function(){
        var formData = new FormData($(this)[0]);
            var pin=$('#answer').val();
             var lenghtpin=((pin).length);
             if(lenghtpin =='6')
                 {
                       $.ajax({
                        url:'controller/club-login.php',
                        method:'POST',
                        enctype: 'multipart/form-data',
                        data: formData,
                        async: false,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(results1) 
                        { 
                           var lenghtpini=((results1).length);
                          if(lenghtpini=='6'){
                             window.location.replace("clubdashboard.php");
                          }else{
                                $('#errormsg').css('display','block');
                                $('#errormsg').empty().append(results1);
                          }
                              
                        }
                    });  

                 }else{
                     $('#valid_pin').css('display','block');
                 }
                
           return false;          
        }); 
        
    });
          </script>
    
   <form id="pinform1" action=""  method="POST" style="text-align:left;">
    <div class="container lovekesh" style="overflow-x: none !important;overflow-y: none !important;padding:0px">
     
        <div class="form">
          
          <div class="row">
          <div class="col-md-4"></div>
          <div class="col-xs-12 col-md-4">
          <div class=""><!-- thumbnail -->
            <center>
              <img src="images/pro_advance.png" style="width:45%"/>
            </center>
          </div>
        <div class="login-form">

          <div style="inputstyle">
          <p style="color:#4267B2;font-size:16px;margin:0px">Enter PIN</p>
          
          
          <br>

         
<!--            <input type="text" maxlength="1" name="pin01" class="input-pin numpin" pattern="\d*" autofocus />
            <input type="text" maxlength="1" name="pin02" class="input-pin numpin" pattern="\d*"/>
            <input type="text" maxlength="1" name="pin03" class="input-pin numpin" pattern="\d*"/>
            <input type="text" maxlength="1" name="pin04" class="input-pin numpin" pattern="\d*"/>-->

        

      </div>



    </div>
 
<div class="col-md-12">
              
         <center> <input type="password" name="passcode" maxlength="6"  class="form-control " id="answer">  </center>
          </div>
<div style="display:none;color:red;" id="valid_pin">
    <p>Please Enter Valid Pin</p>
</div>
<div style="display:none;color:red;" id="errormsg">
   
</div>
              
  <div style="padding:0px;margin:auto;margin:0px -15px -10px -15px">
  
    <div class="numped">

      <table style="width:100%;height:100%;">
        <tr>
          <td><input type="button" name="" value="1" class="num userIn" data-number="1"></td>
          <td><input type="button" name="" value="2" class="num userIn" data-number="2"></td>
          <td><input type="button" name="" value="3" class="num userIn" data-number="3"></td>
        </tr>
        <tr>
          <td><input type="button" name="" value="4" class="num userIn" data-number="4"></td>
          <td><input type="button" name="" value="5" class="num userIn" data-number="5"></td>
          <td><input type="button" name="" value="6" class="num userIn" data-number="6"></td>
        </tr>
        <tr>
          <td><input type="button" name="" value="7" class="num userIn" data-number="7"></td>
          <td><input type="button" name="" value="8" class="num userIn" data-number="8"></td>
          <td><input type="button" name="" value="9" class="num userIn" data-number="9"></td>
        </tr>
        <tr>
          <td><button type="button" name="" value="clear" id='backspace' class="num">
                <i class="fa fa-times" aria-hidden="true"></i>
              </button>
          </td>
          <td><input type="button" name="" value="0" data-number="0" class="num userIn"></td>
          <td>
              <button type="submit" name="" class="num">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
              </button>
          </td>
        </tr>
      </table>
    </div>
  </div>
   
</div>
<div class="col-md-4"></div>
</div>
</div>
  </div>
</form>
</body>
</html>