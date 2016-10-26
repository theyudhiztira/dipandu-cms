<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<div class="row" style="padding: 0px 25px 0px 25px;">
  <div class="col s12 m12 l12">
    <h4>News</h4>
  </div>

  <div class="col s12 m12 l12 content-container">
    <div class="col s12 m12 l12 content-box" style="padding: 0px !important;">
      <div class="content-title" style="padding: 8px;">
        <b style="font-size: 18px; font-weight: bold;"><i class="fa fa-plus-circle"></i> Create New News</b>
        <i title="Click here to show / hide" id="acdn_new_news" class="fa fa-arrows-alt expand-icon" style="line-height: 2;"></i>
      </div>
      <div id="ctn_new_news" class="content-main" style="padding: 8px; height: 65px;">
        <div class="col s12 m12 l12 input-field" style="margin-bottom: 25px;">
          <h6>Title</h6>
          <input type="text" name="title" class="default-browser" placeholder="News Title"/>
          <h6>Tags</h6>
          <i style="color: #B0BEC5;">Seperate between tags using comma (",").</i>
          <input type="text" name="tags" class="default-browser" placeholder="News Tags"/>
          <h6>Content</h6>
          <textarea name="news_editor"></textarea>
          <script type="text/javascript">
            CKEDITOR.replace( 'news_editor' );
          </script>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="row" style="padding: 0px 25px 0px 25px;">
  <div class="col s12 m12 l12 content-container">
    <div class="col s12 m12 l12 content-box" style="padding: 0px !important;">
      <div class="content-title" style="padding: 8px;">
        <b style="font-size: 18px; font-weight: bold;"><i class="fa fa-files-o"></i> News List</b>
        <i title="Click here to show / hide" id="acdn_news_list" class="fa fa-arrows-alt expand-icon" style="line-height: 2;"></i>
      </div>
      <div id="ctn_news_list" class="content-main" style="padding: 8px;">
        <?php
          foreach ($allNews as $news) {
            echo $news['post_date']."<br />";
          }
        ?>
      </div>
    </div>
  </div>
</div>
