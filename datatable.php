<html>
    <head>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="datatable/datatables/datatables.min.css">
<!--      <link rel="stylesheet" href="header.css">-->
    </head>
    <body>


<!-- Use any element to open the sidenav -->
<a href="dashboard/blank.php" type="submit" class="btn btn-primary" style="margin-left:1000px;">Back to dashboard</a>
<br>
<br>
<span onclick="openNav()"></span>
   <div class="container">
    <table class="table table-striped table-hover table-bordered" id="table_id">
       <thead>
           <tr>
               <th>Image</th>
               <th>Name</th>
               <th>Release year</th>
               <th>Composer</th>
               <th>Artist</th>
               <th>Genre</th>
               <th>EDIT</th>
               <th>DELETE</th>
           </tr>
       </thead>
    </table>
       </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Song!</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">

                <div class="row">
                    <form action="http://<?php echo "localhost";?>/edit_song.php" method="POST">
                        <div class="form-body">
                           <div class="form-group clearfix">
                                
                                <div class="col-md-9">
                                    <input type="hidden" id="edit_song_id" name="song_id" class="form-control" placeholder="Song ID" /> </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3">Song Name

</label>
                                <div class="col-md-9">
                                    <input type="text" id="song_name" name="song_name" class="form-control" placeholder="Song Name" readonly /> </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3">Release Date
<span class="required"> * </span>
</label>
                                <div class="col-md-9">
                                    <input type="text" id="release_year" name="release_year" class="form-control" placeholder="Relase Date" /> </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="control-label col-md-3">Composer Name
<span class="required"> * </span>
</label>
                                <div class="col-md-9">
                                    <input type="text" id="composer_name" name="composer_name" class="form-control" placeholder="Composer Name"/> </div>
                            </div>
                            
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3">Artist Name
<span class="required"> * </span>
</label>
                                <div class="col-md-9">
                                    <input type="text" id="artist_name" name="artist_name" class="form-control" placeholder="Artist Name"/> </div>
                            </div>
                            
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3">Genre
<span class="required"> * </span>
</label>
                                <div class="col-md-9">
                                    <input type="text" id="genre" name="genre" class="form-control" placeholder="Enter Genre"/> </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button id="edit_save" name="edit_category" type="submit" class="btn btn-primary">Save changes</button>
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

    </body>
    
    <script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction()kjuio {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}      

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    <script src="datatable/datatables/datatables.min.js"></script>
    <script src="data.js"></script>
    <script src="scripts/edit-song.js"></script>
    
</html>