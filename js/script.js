$(document).ready(function(){
    $(".song-carousel").owlCarousel({
      items: 1,
      autoplay:true,
      smartSpeed: 700,
      loop: true,
      autoplayHoverPause: true,
      responsive: {
          0:{
              items: 1,
              autoplayHoverPause: false,
          },
          480:{
              items:1,
          },
          768:{
          items: 1,
      },
      },
  });
   var flag_hover = false;
    $(".sidebar-queue").mouseover(function(){
        if(flag_hover == false)
        {
            $(".queue-song-singer").css("display","block");
            flag_hover = true;
        }
    });
    if(flag_hover == true)
        alert("ttt");
        $(".sidebar-queue").mouseleave(function(){
            $(".queue-song-singer").css("display","none");
            flag_hover=false;
        });

        $(".like").click(function(){

        var likeObject = $(this);
//        likeObject.removeClass("fa fa-heart-o");
        var song_id = $(this).attr("id");
        $.ajax({
               url:"like.php",
               method:"post",
               data:{song_id: song_id },
               dataType : "json",
               success:function(data){
//                   likeObject.removeClass("fa fa-heart-o");
                if(data.status=="liked"){ 
                    likeObject.removeClass("fa fa-heart-o");
                    likeObject.addClass("fa fa-heart");
                    }
                else if(data.status=="unliked"){
                    likeObject.removeClass("fa fa-heart");
                    likeObject.addClass("fa fa-heart-o");
                }
                
                   
            }
    });
});
    $('.play-music').click(function(){
        var Songid = $(this).attr('id').split('-');
        var Songid = Songid[2];
        $.ajax({
            type:'POST',            
            url:'AjaxPhp/fetch.php',
            data:{song:Songid},
            success: function(data){
                play(data)
            }
        });
    });
    
    $('.music-div').click(function(){
        var Songid = $(this).attr('id');
        $.ajax({
            type:'POST',            
            url:'AjaxPhp/fetch.php',
            data:{song:Songid},
            success: function(data){
                play(data)
            }
        });
    });
    $('.add-to-que').click(function(){
        var buttonId =$(this).attr('id');
        var songId = buttonId.split('-');
       $.ajax({
            type:'POST',            
            url:'AjaxPhp/fetch.php',
            data:{song:songId[3]},
            success: function(data){
                addToQue(data);
            }
        });
    });

    
});

function playQue(song_id){
        var Songid = song_id.split('-');
        console.log(Songid);
        var Songid = Songid[2];  
        console.log(Songid);
        $.ajax({
            type:'POST',            
            url:'AjaxPhp/fetch.php',
            data:{song:Songid},
            success: function(data){
                play(data)
            }
        });
}

function play(data){
    console.log(data);
    var name = JSON.parse(data);
    var name = name['song_name'];
    //console.log(name);
    $("#audio-tag-id").attr('src',"upload/"+name);
    $("#audio-tag-id").attr('autoPlay',true);
    $('#song-p-tag').html(name);
    
}
function addToQue(data){
    var temp = JSON.parse(data);
    var name = temp['song_name'];
    var img = temp['cover_img']; 
    var song_id = temp['song_id'];
    $('.queue-song-list').append("<li class='play-que' onCLICK='playQue(this.id)' id='play-que-"+song_id+"'><div class='row queue-row'><div class='col-md-4'><div class='queue-img'><img src='image/"+img+"'></div><!--.queue-img--></div><!--.col-md-4--><div class='col-md-4'><div class='queue-song-singer'><p>"+name+"</p></div><!--.queue-song-singer--></div><!--.col-md-4--></div><!--.row--></li>");

}

//$(document).ready(function(){
//});