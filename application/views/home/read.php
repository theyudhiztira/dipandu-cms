<div class="row">
    <div class="col s12 l12 m12">

<?php
 foreach($news as $news_item)
 {
 ?>

 <div class="col s12 m12 l8 home-content-container">
   <div class="col s12 m12 l12 read-content-box">
     <a href="#"><img src="<?php echo base_url('assets/img/'.$news_item['img']); ?>" alt="DiPandu CMS" class="mini-thumbnail" /></a>
     <div class="post-time"><?php echo $news_item['post_date']; ?></div>
     <div class="detail-icon"><i class="fa fa-eye" title="Views"></i> <?php echo $news_item['views']; ?></div>
     <h3 class="home-content-title"><b><a href="<?php echo $news_item['slug']; ?>"><?php echo $news_item['title']; ?></a></b></h3>
     <p class="home-content">
       <?php echo $news_item['text']; ?>
     </p>
     <div class="col s12 m12 l12">
       <a class="btn-large" href="javascript:window.history.go(-1);" style="color :#FFF;">Back</a>
     </div>
     <div class="fb-comments" style="margin-top: 15px;" data-href="<?php echo base_url("news/").$news_item['slug']; ?>" data-numposts="3"></div>
     <div id="fb-root"></div>
     <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8&appId=355505961507333";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
   </div>
 </div>
 <?php
 }
 ?>
 <div class="col s12 m12 l4 home-content-container">
    <div class="col s12 m12 l12 top-articles-box">
     <h5><b>Top Articles</b></h5>
     <div class="top-container">
        <ul class="top-articles">
          <?php foreach ($top as $ta) { ?>
            <li><a href="<?php echo $ta['slug']; ?>" title="<?php echo $ta['title']; ?>"><?php echo $ta['title']; ?></a><br><b>Views : <?php echo $ta['views']; ?></b></li>
            <hr>
          <?php } ?>
        </ul>
     </div>
    </div>
 </div>



  </div>
