
<?php
// Links for logged in user
if (isUserLoggedIn()) { ?>

    <ul>
        <li><a href='myaccount.php'>Account Home</a></li>
        <li><a href='catalogue.php'>Catalogue</a></li>
        <li><a href='custom.php'>Simply You</a></li>
        <li><a href='cart.php'>Your Tray</a></li>
        <li><a href='logout.php'>Logout</a></li>
    </ul>

<?php } else { ?>

    <ul>
        <li><a href='index.php'>Home</a></li>
        <li><a href='login.php'>Login</a></li>
        <li><a href='and.php'>About Us</a></li>
    </ul>
<?php } ?>
