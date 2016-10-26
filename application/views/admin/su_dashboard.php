
<div class="row" style="padding: 0px 25px 0px 25px;">
  <div class="col s12 m12 l12">
    <h4>Dashboard</h4>
    <h6>Welcome <?php echo $fName." ".$lName; ?></h6>
  </div>

  <div class="col s12 m12 l6 content-container">
    <div class="col s12 m12 l12 content-box" style="padding: 0px !important;">
      <div class="content-title" style="padding: 8px;">
        <b style="font-size: 18px; font-weight: bold;"><i class="fa fa-clock-o"></i> Activity</b>
        <i id="acdn_activity" class="fa fa-arrows-alt expand-icon" style="line-height: 2;"></i>
      </div>
      <div id="ctn_activity" class="content-main" style="padding: 8px; height: 65px;">
        <div class="col s6 m6 l6">
          <i class="fa fa-files-o"></i> <a href="#"><?php echo $allowedNews; ?> News</a>
        </div>
        <div class="col s6 m6 l6" style="margin-bottom: 10px;">
        <i class="fa fa-cog"></i> <a href="#"><?php echo $allowedTutorial; ?> Tutorials</a>
        </div>
        <div class="col s12 m12 l12" style="margin-bottom: 10px;">
        <i style="color: #CFD8DC;">
          You can see all your post from here.
        </i>
        </div>
      </div>
    </div>
  </div>

  <div class="col s12 m12 l6 content-container">
    <div class="col s12 m12 l12 content-box" style="padding: 0px !important;">
      <div class="content-title" style="padding: 8px;">
        <b style="font-size: 18px; font-weight: bold;"><i class="fa fa-bell"></i> Notification</b>
        <i id="acdn_topPosts" class="fa fa-arrows-alt expand-icon" style="line-height: 2;"></i>
      </div>
      <div id="ctn_topPosts" class="content-main" style="padding: 8px; height: 65px;">
        <div class="col s12 m12 l12">
          <div class="col s6 m6 l6" style="margin-bottom: 10px;">
            <i class="fa fa-upload"></i> <a href="#"><?php echo $pendingNews; ?> Pending News</a>
          </div>
          <div class="col s6 m6 l6" style="margin-bottom: 10px;">
            <i class="fa fa-upload"></i> <a href="#"><?php echo $pendingTutorial; ?> Pending Tutorials</a>
          </div>
          <div class="col s6 m6 l6" style="margin-bottom: 10px;">
            <i class="fa fa-times-circle"></i> <a href="#"><?php echo $rejectedNews; ?> Rejected News</a>
          </div>
          <div class="col s6 m6 l6" style="margin-bottom: 10px;">
            <i class="fa fa-times-circle"></i> <a href="#"><?php echo $rejectedTutorial; ?> Rejected Tutorials</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row" style="padding: 0px 25px 0px 25px;">
  <div class="col s12 m12 l12 content-container">
    <div class="col s12 m12 l12 content-box" style="padding: 0px !important;">
      <div class="content-title" style="padding: 8px;">
        <b style="font-size: 18px; font-weight: bold;"><i class="fa fa-user"></i> User Details</b>
        <i id="acdn_userDetail" class="fa fa-arrows-alt expand-icon" style="line-height: 2;"></i>
      </div>
      <div id="ctn_userDetail" class="content-main" style="padding: 8px;">
        <div class="col s6 m6 l6">
          <table>
            <tr>
              <td>
                Name
              </td>
              <td>
                <?php echo $fName." ".$lName; ?>
              </td>
            </tr>
            <tr>
              <td>
                Email
              </td>
              <td>
                <a href="mailto:<?php echo $email; ?>" target="_top"><?php echo $email; ?></a>
              </td>
            </tr>
            <tr>
              <td>
                Username
              </td>
              <td>
                <?php echo $username; ?>
              </td>
            </tr>
          </table>
        </div>
        <div class="col s6 m6 l6">
          <table>
            <tr>
              <td>
                Level
              </td>
              <td>
                <?php
                if($level == 1){
                  $level_display = "Superuser";
                }elseif ($level == 2) {
                  $level_display = "Administrator";
                }elseif ($level == 3) {
                  $level_display = "Moderator";
                }else{
                  $level_display = "Content Writer";
                }

                echo $level_display;
                ?>
              </td>
            </tr>
            <tr>
              <td>
                Last Login
              </td>
              <td>
                <?php echo $lastLogin; ?>
              </td>
            </tr>
            <tr>
              <td>
                Your IP
              </td>
              <td>
                <?php echo $userIP; ?>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
