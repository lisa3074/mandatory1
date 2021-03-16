<section>
    <article class="flex">
        <form action="/5_semester_webdev/mandatory1/signup"
            method="POST"
            class="signup">

            <label for="firstname">
                <input type="text"
                    id="firstname"
                    name="user_firstname"
                    placeholder=" ">
                <span>First name</span>
            </label>
            <label for="lastname">
                <input type="text"
                    id="lastname"
                    name="user_lastname"
                    placeholder=" ">
                <span>Last name</span>
            </label>
            <label for="age">
                <input type="number"
                    id="age"
                    name="age"
                    placeholder=" ">
                <span>Age</span>
            </label>
            <label for="email">
                <input type="text"
                    id="email"
                    name="user_email"
                    placeholder=" " />
                <span>Email</span>
            </label>
            <label for="phone">
                <input type="number"
                    id="phone"
                    name="user_phone"
                    placeholder=" ">
                <span>Phone</span>
            </label>
            <label for="password">
                <input type="password"
                    id="password"
                    name="user_password"
                    placeholder=" " />
                <span>Password</span>
            </label>
            <label for="confirm">
                <input type="password"
                    id="confirm"
                    name="confirm_user_password"
                    placeholder=" ">
                <span>Confirm password</span>
            </label>
            <button>Sign up</button>
            <div class="error">
                <?php
     
  if( isset($display_error_signup) ){
  ?>
                <?= urldecode($display_error_signup) ?>
                <?php
  }
  ?>
            </div>

        </form>
    </article>
</section>