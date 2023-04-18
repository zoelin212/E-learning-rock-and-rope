<?php include '../header.php'; ?>
<?php
ob_start();
// fill in content here
$type = "roping";
// echo $_COOKIE[$type];
$level = '5.9';
$levellist = ['5.8', '5.9', '5.10'];
// echo array_search($level, $levellist);
$question = [
    ["Which of the following statements is true about route planning?", "Route planning is easiest after you’ve climbed up the first few holds and are looking up to the top.", "Route planning is easiest when looking down at your partner for advice.", "Route planning helps to visualize the most obvious large rocks so that you won’t miss them when you’re climbing.", "Route planning helps to visualize how you might use holds that will be difficult to see once you are on the wall."],
    ["Stamina is an important asset when it comes to top-roping because the walls can be very tall.", "True", "False"],
    [" Which of the following top-rope gradings would rate the most difficult climb?", "5.10+", "5.13-", "5.7", "5.9"],
    ["Which of the following statements would a belayer avoid saying to their climber mid-climb?
    ", "I’m prepared if you want to try that dyno!", "I know you’re scared of heights, don’t look down!", "That was a great move, nicely done!", "There is a small foothold to the right of your left knee!"],
    ["In best practice, after placing both hands on the top rock of a climb you tell your climber, “take!” and immediately let-go of the wall to be lowered.", "True", "False"]
];
$ans = [4, 1, 2, 2, 2];

// check answer 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<div class="popup relative">';
    echo '<button class="btn closeBtn" id="closeBtn">x</button>';
    for ($j = 0; $j < count($question); $j++) {
        $qname = 'q' . $j;
        if ($_POST[$qname] != $ans[$j]) {
            $msg =  '<h4>Uh oh!</h4><p>Check your answers and try again.</p>';
            $btn = '<button class="btn primary" id="retry">Retry!</button>';
            break;
        } else {
            $msg = '<img src="../images/' . $level . '.png" alt="top-roping ' . $level . ' badge" class="colorFill" width="100" height="100"><h4>Great Job!</h4><p>You have unlocked a new level</p>';
            $btn = '<a href="../' . $type . '.php" class="btn primary">Okay!</a>';
            $arr = explode(",", $_COOKIE[$type]);
            $key = array_search($level, $levellist);
            $arr[$key] = "true";
            $newVal = implode(",", $arr);

            if (isset($_COOKIE['roping'])) {
                setcookie($type, $newVal, time() + (86400 * 360), '/');
            }
        }
    }
    echo $msg;
    echo $btn;
    echo '</div>';
}
?>
<main>
    <div id="coverup"></div>
    <header id="testHeader">
        <h2>Top-roping Test</h2>
        <img src="../images/<?php echo $level; ?>.png" alt="top-roping <?php echo $level; ?> badge">
    </header>
    <form id="testContainer" action="" method="post">

        <ol>
            <?php

            for ($i = 0; $i < count($question); $i++) {
                // take the question
                echo '<li>' . $question[$i][0] . '</li>';
                // echo "ans=" . $ans[$i];
                for ($k = 1; $k < count($question[$i]); $k++) {
                    // print the answers
                    echo '<div class="row">';

                    echo '<input type="radio" name="q' . $i . '" id="q' . $i . 'a' . $k . '" value="' . $k . '" required>';
                    // if retake the test, show the answer
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                        if ($k == $ans[$i]) {
                            echo  '<label for="q' . $i . 'a' . $k . '" class="correct">' . $question[$i][$k] . '</label>';
                        } else {
                            echo  '<label for="q' . $i . 'a' . $k . '">' . $question[$i][$k] . '</label>';
                        }
                    } else {
                        echo  '<label for="q' . $i . 'a' . $k . '">' . $question[$i][$k] . '</label>';
                    }
                    echo '</div>';
                }
            }
            ?>
        </ol>
        <input type="submit" value="Submit" class="primary btn">
    </form>
</main>

<?php include '../footer.php';
ob_end_flush(); ?>