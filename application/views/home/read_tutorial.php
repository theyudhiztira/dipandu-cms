<div class="row">
    <div class="col s12 l12 m12">

<?php
 foreach($tutorial as $tutorial_item)
 {
 ?>

 <div class="col s12 m12 l8 home-content-container">
   <div class="col s12 m12 l12 read-content-box">
     <a href="#"><img src="<?php echo base_url('assets/img/'.$tutorial_item['img']); ?>" alt="DiPandu CMS" class="mini-thumbnail" /></a>
     <div class="post-time"><?php echo $tutorial_item['post_date']; ?></div>
     <div class="detail-icon"><i class="fa fa-eye" title="Views"></i> <?php echo $tutorial_item['views']; ?> <i class="fa fa-comment" title="Comments"></i> 5</div>
     <h3 class="home-content-title"><b><a href="<?php echo $tutorial_item['slug']; ?>"><?php echo $tutorial_item['title']; ?></a></b></h3>
     <p class="home-content">
       <?php echo $tutorial_item['text']; ?>
     </p>
     <div class="col s12 m12 l12">
       <a class="btn-large" href="javascript:window.history.go(-1);" style="color :#FFF;">Back</a>
     </div>
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
