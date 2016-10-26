<div class="row">
  <div class="container">
    <div class="col s12 l12 m12">

      <h4 class="main-title"><b>Latest News</b></h4>
      <?php foreach ($news as $news_item){ ?>
        <div class="col s12 m12 l4 home-content-container">
          <div class="col s12 m12 l12 home-content-box">
            <a title="<?php echo $news_item['title']; ?>" href="<?php echo site_url("news/".$news_item['slug']); ?>"><img src="<?php echo base_url('assets/img/'.$news_item['img']); ?>" alt="DiPandu CMS" class="mini-thumbnail" /></a>
            <div class="post-time"><?php echo $news_item['post_date']; ?></div>
            <h5 class="home-content-title"><b><a href="<?php echo site_url("news/".$news_item['slug']); ?>" title="<?php echo $news_item['title']; ?>"><?php echo $news_item['title']; ?></a></b></h5>
            <p class="home-content">
              <?php echo substr($news_item['text'], 0, 100); ?>
            </p>
          </div>
        </div>
      <?php } ?>
    <div class="col s12 m12 l12 right-align">
      <h6><b><a href="news/" class="btn-large">More news ></a></b></h6>
    </div>
  </div>
</div>

<div class="row">
  <div class="container">
    <div class="col s12 l12 m12">
      <h4 class="main-title"><b>Latest Tutorial</b></h4>
      <?php foreach ($tutorial as $tuts) { ?>
        <div class="col s12 m12 l3 home-content-container">
          <div class="col s12 m12 l12 home-content-box">
            <a href="<?php echo "tutorial/".$tuts['slug']; ?>"><img src="<?php echo base_url('assets/img/ico.png'); ?>" alt="DiPandu CMS" class="mini-thumbnail" /></a>
            <div class="post-time">Oct 14, 2016</div>
            <h5 class="home-content-title-tutorial"><b><a href="<?php echo "tutorial/".$tuts['slug']; ?>"><?php echo $tuts['title']; ?></a></b></h5>
          </div>
        </div>

      <?php } ?>

    <div class="col s12 m12 l12 right-align">
      <h6><b><a href="tutorial/" class="btn-large">More Tutorials ></a></b></h6>
    </div>
  </div>
</div>
