<?php include_once("db.php")?>
       <nav class="navbar navbar-light navbar-expand-md navigation-clean navbar-inverse navbar-fixed-top">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="padding:0px;margin-left:0px;height:50px;"> <img class="img-fluid" src="assets/img/expansion.png"></a>
<!--           <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>-->
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto" style="margin-top:13px;">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="http://<?php echo BASE_SERVER;?>/music-player/home.php" uk-scroll="offset:50">HOME </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="http://<?php echo BASE_SERVER;?>/music-player/discover.php" uk-scroll="offset:50">DISCOVER</a></li>
<!--                    <li class="nav-item" role="presentation"><a class="nav-link" href="#empresa" uk-scroll="offset:100">SEARCH</a></li>-->
                    <li class="nav-item" role="presentation"><a class="nav-link" href="subscribe/subscribe.html">GO PRO</a></li>
                    
                   
                </ul>
                <ul class="nav navbar-nav navbar-right my-links">
			  <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">LOGIN</a></li>
			  
                      <li class="nav-item" role="presentation"><a class="nav-link" href="signup.php">SIGN-UP</a></li>
<!--			 <li class="nav-item" role="presentation"><a class="nav-link" href="#diferencial" uk-scroll="offset:50"><button class="btn btn-primary fa fa-moon-o fa-3x moon" type="button"></button></a></li>-->
		</ul>
                </div>
        </div>
    </nav>
    
   
<!--  LOGIN MODAL-->
 
<div class="modal fade" tabindex="-1" role="dialog" id="loginModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Login</h4>
            </div>

            <div class="modal-body">

                <div class="row">
                    <form action="" method="POST">
                        <div class="form-body">
                        
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3">User Email
<span class="required"> * </span>
</label>
                                <div class="col-md-9">
                                    <input type="text" id="email" name="email" class="form-control" placeholder="User Email" /> </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="control-label ">Password
<span class="required"> * </span>
</label>
                                <div class="col-md-9">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Paassword" /> </div>
                            </div>

                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal"> Login</button>
                                
                            </div>

                        </div>
                    </form>
                </div>


            </div>

        </div>

        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>