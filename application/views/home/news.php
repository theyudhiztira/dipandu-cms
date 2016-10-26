<div class="row">
  <div class="container">
    <div class="col s12 l12 m12">

      <h4 class="main-title"><b>News</b></h4>

<?php
 foreach($news as $news_item)
 {
 ?>

 <div class="col s12 m12 l4 home-content-container">
   <div class="col s12 m12 l12 home-content-box">
     <a title="<?php echo $news_item['title']; ?>" href="<?php echo $news_item['slug']; ?>"><img src="<?php echo base_url('assets/img/'.$news_item['img']); ?>" alt="DiPandu CMS" class="mini-thumbnail" /></a>
     <div class="post-time"><?php echo $news_item['post_date']; ?></div>
     <h5 class="home-content-title"><b><a href="<?php echo $news_item['slug']; ?>" title="<?php echo $news_item['title']; ?>"><?php echo $news_item['title']; ?></a></b></h5>
     <p class="home-content">
       <?php echo substr($news_item['text'], 0, 100); ?>
     </p>
   </div>
   </div>
 <?php
 }

 ?>


  </div>
</div>
<div class="row">
  <div class="col s12 m12 l12 pagination center">
    <?php
    if(empty($halaman)){
      echo "<strong>1</strong>";
    }else{
      echo $halaman;
    }

    ?>
  </div>
</div>
