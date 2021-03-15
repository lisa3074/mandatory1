<form action="/5_semester_webdev/mandatory1/login"
    method="POST"
    class="login">
    <div class="error">
        <?php
  if( isset($display_error) ){
      ?>
        <?= urldecode($display_error) ?>
        <?php
  }
  ?>
    </div>
    <label for="emal">Email</label>
    <input name="user_email"
        id="email"
        type="text">
    <label for="password">Password</label>
    <input name="user_password"
        type="password"
        id="password">
    <button>Log in</button>
</form>