<?php include 'header.php';
ob_start();
// get user name from index form, set cookie to remember user name
if (isset($_POST['username'])) {
    setcookie("username", $_POST['username']);
    $username = $_POST['username'];
};
?>
<main>
    <h2 class="ml4">
        <span class="letters letters-1">Ready</span>
        <span class="letters letters-2">Set</span>
        <span class="letters letters-3">Go!</span>
    </h2>
    <h3>Choose Your Module</h3>
    <p>To get started, you can choose between our bouldering and top-roping modules.</p>
    <p>Each module has three levels which end in a unit test. Once you successfully pass the unit test, the next level will be unlocked. Good luck!</p>

    <div class="imgBox" id="startGoat">
        <img src="./images/mountain-goat.png" alt="mountain goat" width="1085" height="1656">
    </div>

    <div id="choose_box" class="flexbox row center goat">

        <div class="imgBox">
            <a href="bouldering.php">
                <img src="images/Bouldering.png" alt="bouldering icon" width="300" height="300">
            </a>
            <p>Bouldering</p>
        </div>

        <div class="imgBox">
            <a href="roping.php">
                <img src="images/Top-roping.png" alt="roping icon" width="300" height="300">
            </a>
            <p>Top-roping</p>
        </div>

    </div>
</main>
<script>
    <?php include '../js/start.js'; ?>
</script>
<?php

include 'footer.php';
ob_end_flush();
?>