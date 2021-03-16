<section>
    <h1>Hi <?= "{$_SESSION['firstname']}";?></h1>
    <p>Welcome back to us!</p>
    <p class="profile_welcome">Press the button if you want to deactivate your account. Be aware, that should you want
        your
        account reactivated, you
        will need to contact an administrator to do so.</p>

    <form action="/5_semester_webdev/mandatory1/deactivate/<?=$id?>"
        method="POST"
        class="deavtivate"> <button>Deactivate account</button></form>
</section>