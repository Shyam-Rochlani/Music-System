<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="signup.css">
        <style>
           .hidden{
              display:none;
           }
       </style>
    </head>
    <body>
       <form action="insert.php" method="POST">
        <div class="card-container col-md-6" id="form">
          
           <h1>Sign Up</h1>
           <hr class="rule">
                <label>NAME</label>
                <input type="text" id="name" name="user_name" class="form-control test" placeholder="Name of the candidate">
                <label>PASSWORD</label>
                <input type="password" id="password" name="password" class="form-control test" placeholder="Enter Your Password">
                  
                <label>EMAIL</label>
                <input type="email" id="email" class="form-control test" placeholder="Enter your email" name="email">
               <label for="">PHONE NUMBER</label>
               <input type="number" id="phone_number" class="form-control" placeholder="Enter Your Mobile Number" name="phone_number">
                <br>
                <div class="form-control" style="background:#37ABED;cursor:pointer;" id="submit">GENERATE OTP</div>
                
    </div>
          <div class="card-container col-md-6 hidden" id="otp">
             <h1>CHECK OTP</h1>
             <hr class="rule">
             <label for="">ENTER OTP</label>
               <input type="number" name="otp_number" class="form-control">
                <input type="number" id="random_number" hidden name="random_number">
                <br><br>
                <input type="submit" class="form-control">
                 </div>
                 
               </form>
           <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
            <script>
               $(document).ready(function(){
                   $('#submit').click(function(){
                       //window.alert("Cliciked");
                       var email = $("#email").val();
                       var phone_number = $("#phone_number").val();
                        $.ajax({
                        type:"POST",
                        url:"AjaxPhp/mail.php",
                        data:{
                           email:email,
                           phone_number:phone_number,
                        },
                        success:function(data){
                            var otp = JSON.parse(data);
                            var otp = otp['otp'];
                            window.alert(data);
                            window.alert(otp);
                           $("#form").addClass("hidden");
                           $("#otp").removeClass("hidden");
                          $("#random_number").val(otp);       
                        }
                     });
                   });
               });
       </script>
            
	
    </body>
</html>