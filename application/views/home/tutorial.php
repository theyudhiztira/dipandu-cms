<div class="row">
  <div class="container">
    <div class="col s12 l12 m12">

      <h4 class="main-title"><b>Tutorials</b></h4>

<?php
 foreach($tutorial as $tutorial_item)
 {
 ?>

 <div class="col s12 m12 l4 home-content-container">
   <div class="col s12 m12 l12 home-content-box">
     <a title="<?php echo $tutorial_item['title']; ?>" href="<?php echo $tutorial_item['slug']; ?>"><img src="<?php echo base_url('assets/img/ico.png'); ?>" alt="DiPandu CMS" class="mini-thumbnail" /></a>
     <div class="post-time"><?php echo $tutorial_item['post_date']; ?></div>
     <h5 class="home-content-title"><b><a href="<?php echo $tutorial_item['slug']; ?>" title="<?php echo $tutorial_item['title']; ?>"><?php echo $tutorial_item['title']; ?></a></b></h5>
     <p class="home-content">
       <?php echo substr($tutorial_item['text'], 0, 100); ?>
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
