<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Student Registration System</title>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style_login.css">

    <?php
        include './HeaderImports.php';
        ?>
    
    
  </head>

  <body>
        <div class="container col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
            <br />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Login</h1>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user" style="width: auto"></i>
                            </span>
                            <input  id="usname" runat="server" type="text" class="form-control" name="user" placeholder="User Name" required="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-lock" style="width: auto"></i>
                            </span>
                            <input id="password" runat="server" type="password" class="form-control" name="password" placeholder="Password" required="" />
                        </div>
                    </div>
                    <button id="log" runat="server" class="btn btn-default" style="width: 100%">
                        Logging<i class="glyphicon glyphicon-log-in"></i>
                    </button>
                </div>
            </div>
        </div>
<!--    <div class="login">
  
  <fieldset>
    
  	<legend class="legend">Login</legend>
    
    <div class="input">
        <input id="usname" type="text" placeholder="First Name" required />
      <span><i class="fa fa-envelope-o"></i></span>
    </div>
    
    <div class="input">
        <input id="password" type="password" placeholder="Password" required />
      <span><i class="fa fa-lock"></i></span>
    </div>
    
        <button type="button" id="log" class="submit"><i class="fa fa-long-arrow-right"></i></button>
    
  </fieldset>
  
  <div class="feedback">
  	login successful <br />
    redirecting...
  </div>
  
</div>-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

       <!--<script src="js/index.js"></script>-->
        
  <script type="text/javascript">

        $(document).ready(function () {

        });
      $(".form-control").keyup(function (event) {
    if (event.keyCode == 13) {
        textboxes = $("input.form-control");
        currentBoxNumber = textboxes.index(this);
        if (textboxes[currentBoxNumber + 1] != null) {
            nextBox = textboxes[currentBoxNumber + 1];
            nextBox.focus();
            nextBox.select();
        }
        event.preventDefault();
        return false;
    }
});
            
        
   $('#log').click(function () {
                var usname = $("#usname").val();
                var password = $("#password").val();

                $.post('EmpReg.php', {logsystem: 'loging', usname: usname, password: password}, function (loging) {
                    
                    
                   // $.each(loging,function(index,msgData))
                    if (loging.msgType === 3) {
                        alertify.error(loging.msg, 1000);
//alert('error')
                    }
                    else if(loging.msgType === 2) {
                        alertify.error(loging.msg, 1000);
                    }
                       
                    else if(loging.msgType === 1) {
                        alertify.error(loging.msg, 1000);
                    }
                     else if (loging.msgType === 0) {
                        alertify.success(loging.msg, 1000);
                        
                        
                     timelyRedirect('Register.php',1000);
         
//                        timelyRedirect('https://www.google.lk',1000)
//                        setTimeout(function(){
//                        window.location="Register.php";
//                    },1000);
                    }

                }, "json");
               
            });
            
    
  </script>
  </body>
</html>
