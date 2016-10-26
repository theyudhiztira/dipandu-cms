$(document).ready(function(){
   $("#ctn_new_news").hide();
});


$("#acdn_activity").click(function(){
     if(true === $("#ctn_activity").is(':visible')){
       $("#ctn_activity").slideUp(200);
     }else{
       $("#ctn_activity").slideDown(200);
     }
});

$("#acdn_topPosts").click(function(){
     if(true === $("#ctn_topPosts").is(':visible')){
       $("#ctn_topPosts").slideUp(200);
     }else{
       $("#ctn_topPosts").slideDown(200);
     }
});

$("#acdn_userDetail").click(function(){
     if(true === $("#ctn_userDetail").is(':visible')){
       $("#ctn_userDetail").slideUp(200);
     }else{
       $("#ctn_userDetail").slideDown(200);
     }
});

$("#acdn_new_news").click(function(){
     if(true === $("#ctn_new_news").is(':visible')){
       $("#ctn_new_news").slideUp(200);
     }else{
       $("#ctn_new_news").slideDown(200);
     }
});

$("#acdn_news_list").click(function(){
     if(true === $("#ctn_news_list").is(':visible')){
       $("#ctn_news_list").slideUp(200);
     }else{
       $("#ctn_news_list").slideDown(200);
     }
});
