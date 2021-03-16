<article class="flex">
    <form action="/5_semester_webdev/mandatory1/login"
        method="POST"
        class="login">
        <label for="email">
            <input name="user_email"
                id="email"
                type="text"
                placeholder=" ">
            <span>Email</span>
        </label>
        <label for="password">
            <input name="user_password"
                type="password"
                id="password"
                placeholder=" ">
            <span>Password</span>
        </label>
        <button>Log in</button>
        <div class="error">
            <?php
  if( isset($display_error) ){
      ?>
            <?= urldecode($display_error) ?>
            <?php
  }
  ?>
        </div>
    </form>
</article>