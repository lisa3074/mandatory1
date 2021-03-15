<form action="/5_semester_webdev/mandatory1/signup"
    method="POST"
    class="signup">
    <div class="error">
        <?php
  if( isset($display_error_signup) ){
  ?>
        <?= urldecode($display_error_signup) ?>
        <?php
  }
  ?>
    </div>
    <label for="firstname">
        <p>First name</p>
        <input type="text"
            id="firstname"
            name="user_firstname">
    </label>
    <label for="lastname">
        <p>Last name</p>
        <input type="text"
            id="lastname"
            name="user_lastname">
    </label>
    <label for="age">
        <p>Age</p>
        <input type="text"
            id="age"
            name="age">
    </label>
    <label for="email">
        <p>Email</p>
        <input type="text"
            id="email"
            name="user_email" />
    </label>
    <label for="phone">
        <p>Phone</p>
        <input type="number"
            id="phone"
            name="user_phone">
    </label>
    <label for="password">
        <p>Password</p>
        <input type="password"
            id="password"
            name="user_password" />
    </label>
    <label for="confirm">
        <p>Confirm password</p>
        <input type="password"
            id="confirm"
            name="confirm_user_password">
    </label>
    <button>Sign up</button>
</form>