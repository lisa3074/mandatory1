<h1>Hi <?= "{$_SESSION['email']}";?></h1>
<p>Welcome back to us!</p>
<p>Press the button if you want to sign out.</p>

<form action="/5_semester_webdev/mandatory1/deactivate/<?=$id?>"
    method="POST"
    class="deavtivate"> <button>Deactivate account</button></form>