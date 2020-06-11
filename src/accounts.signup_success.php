<?php require 'inc.core.php' ?>

<!doctype html>
<html lang="en">
<head>
<!--HEAD-->
    <?php require 'inc.head.php' ?>
</head>
<body>
<!--HEADER/NAVBAR-->
    <?php require 'inc.header.php' ?>

<?php
    //////////////// S T A R T /////////////////////
?>

<!--/////////// DISPLAY CONTENT ////////////// -->
<div class="container">
    <div class="columns">
        
        <div class="column is-4-desktop is-offset-4-desktop is-10-mobile is-offset-1-mobile is-10-touch is-offset-1-touch">

            <div class="notification is-success">
                Registration successful.<br>
                Please <a href="accounts.signin.php">sign in</a> to continue.
            </div>

        </div><!-- end column-->

    </div><!--- end columns-->
</div><!--end container-->


<?php
    /////////////////// E N D ////////////////////////
?>

<!--FOOTER-->
    <?php require 'inc.footer.php' ?>
</body>
</html>
