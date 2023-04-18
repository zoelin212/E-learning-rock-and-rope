<?php
ob_start();
include 'header.php';
// cookietest
?>
<div id="landing" class="flexbox column center noma">
    <img src="./images/logo-horizontal.svg" alt="Rock & Rope horizontal logo">
    <span id="loader"></span>
</div>
<main id="body_main" class="flexbox column">
    <h2 id="indexH2"><span>Learn</span><span id="carousell"><span class="carousellElem">Confidence</span><span class="carousellElem">Strength</span><span class="carousellElem">Balance</span><span class="carousellElem">Rock-Climbing</span></span></h2>
    <!-- a welcome section only for new user -->
    <?php
    if (!isset($_COOKIE['username'])) {
        // a form that prompt user input their name
        echo '<form action="./start.php" method="post" class="flexbox column">
        <label for="username">
            <input type="text" name="username" id="username" placeholder="Name your mountain goat..." required>
        </label>
        <div class="imgBox">
            <img src="./images/mountain-goat.png" alt="Rock and Rope climbing course mascot" id="mascot">
        </div>
            <input type="submit" value="Start!" id="nameSubmit" class="btn maCenter">
        </form>';
    } else {
        echo '<h3>Welcome back, ' . $_COOKIE['username'] . '! <br> Are you ready for your next climbing?</h3>';
        echo '<div class="imgBox">
        <img src="./images/mountain-goat.png" alt="Rock and Rope climbing course mascot" id="mascot">
        <a href="./start.php" class="btn maCenter">Continue</a>
        </div>';
    }

    ?>
    <!-- instagram photoboard -->
    <?php //include 'insta-hashtag.php';
    ?>

</main>

<?php
include 'footer.php';
ob_end_flush();
?>