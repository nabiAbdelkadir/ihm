$(function(){
  const search =$("#search");
  const result_search =$(".child-search-ajax");

  $(".btn-outline-success").on("click",function(){
    $("body").append("<div class='wrapper-body'></div>");
    //$(".navbar").removeClass("fixed-top");
    $(".sing-up").animate({top: '50%'}, "slow",function(){
    });
  })//End onclick
  $(".close-sing-up").on("click",function(){
    $(".sing-up").animate({top: '-10000px'}, "slow",function(){
    });
    $(".wrapper-body").remove();
})//End block sing-up

/***********Start block description image */
$(".choice .row div img").hover(function(){
  var id =$(this).attr("id");
    $(".des").filter("#"+id).show("400");
    $(".des").filter("#"+id).css({
      "display":"flex",
      "justify-content":"center",
      "align-items":"flex-end",
    });//End css
  }
);
$(".des").mouseleave(function(){
  $(".des").hide("400");
})
/***********End  block description image */
$(".more").hover(function(){
    $(".child").show("400");

  }, function(){
    $(".child").hide("400");
});

search.keyup(function(e) {
  e = e || window.event;
  e = e.target || e.srcElement;
  var x = event.which || event.keyCode;
  console.log("code :: " +event.which);
  if (x==8) {
    if (search.val()=="") {
      result_search.text("");

    }
  }
 if (x!=8) {
   $.get("search_ajax.php",{name :search.val()},
     function (data, Status) {
          result_search.html(data);
     });
 }
   if (x==13) // 27=esc 13 =Enter
   {
     $.get("search_ajax.php",{name :search.val()},
       function (data, Status) {
          result_search.html(data);
       });
   }
});// XXX: End keyup
})//End

function bleep (){
  var bleep =new Audio();
  bleep.src ="puth audio";
  bleep.play();
}
