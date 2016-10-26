<script type="text/javascript">
function closeElement(elementName){
  document.getElementById(elementName).style.display='none';
}
</script>
<div class="row">
  <div class="col s12 m12 l12 center center-block">
    <h4>DiPandu</h4>
  </div>
  <div class="col s12 m6 offset-m3 l4 offset-l4 center">
    <div class="login-box">
      <form class="" action="<?php echo base_url('dp-admin/login'); ?>" method="post">



        <?php
        if(isset($status)){
          if($status == 0){
            echo "<div class='login-alert' id=alert onclick=\"closeElement('alert')\" title='Click to close'>
              Login failed! Check your login data!
            </div>";
          }
        }
        ?>

        <div class="input-field">
          <label for="user_login">Username</label>
          <input type="text" id="user_login" name="username" required>
        </div>
        <div class="input-field">
          <label for="user_password">Password</label>
          <input type="password" id="user_password" name="password" required>
        </div>
        <input class="btn-large btn-login" type="submit" name="submit" value="Log In">
      </form>
      <a href="#">Lost your password ?</a>
    </div>
  </div>

  <div class="col s12 m6 offset-m3 l4 offset-l4" style="margin-top: 50px;">
    <a href="<?php echo base_url(); ?>" style="color: #90A4AE;"><i class="fa fa-long-arrow-left"></i> Back to dipandu.net</a>
  </div>

</div>
