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


//$(".side-btn").click(function(){
//    $(".queue-song-list").show();
//});
//    $(".queue-row").hover(function(){
//        $(this).after('<p>Pehli Baar</p>');
//        alert("hell");
//    });  
//    $(".sidebar-queue").mouseout(function(){
//        $(this).remove('<p>Pehli Baar</p>');
//    });  
    
//    alert("sd");
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
    
    


});

//var x = document.getElementById("play-song");
//window.alert(x);
//function playAudio(){
//    x.play();
//}
//function pauseAudio(){
//    x.pause();
//    }
//var btn = document.getElementById("play").onclick= function(){
//    playAudio();
//}



//audiojs.events.ready(function() {
//    var as = audiojs.createAll();
//  });

$(".song").click(function(){
    var songID = $(this).attr("id");
    $.ajax({
        type: 'POST',
        url: '../AjaxPhp/fetch.php',
        data: {song:songID},
        success: function(data){
            play(data);
        }
    });
});
function play(data){
    var source = "../upload/"
    var song = JSON.parse(data);
    console.log(song);  
    var songSource = source+song;
    var audio = "<audio src='"+songSource+"'></audio>";
    console.log(audio);
    $( "p" ).innerHTML=audio;
}