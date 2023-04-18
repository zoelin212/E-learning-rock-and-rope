<?php include '../header.php'; ?>
<?php
ob_start();
// fill in content here
$type = "roping";
$level = '5.8';
$levellist = ['5.8', '5.9', '5.10'];
$question = [
    ["Which of the following statements is false about belaying:", "Indoor climbing gyms generally require that you pass a belay test before you may belay at that gym", "While belaying you shouldn’t talk  to your climber unless they speak to you first.
    ", "You must perform a series of safety tests before your climber can start climbing.", "Your belay device should be locked into a carabiner that is attached to one of your harness loops"],
    ["What does PBUS stand for?", "Position, brake, under and slide", "Pull, balance, under and slide", "Pull, brake, under, and slide
    ", "Position, balance, under, and slow"],
    ["Which of the climbing words below is matched with the incorrect meaning?", "Take! = The climber is going to take in all of their slack", "Slack! = The rope is too tight and the belayer needs to feed rope to the climber", "Lower? = The climber is telling the belayer that they are ready to be lowered
    ", "Climb on! = The belayer is paying attention and the climber can now begin their climb
    "],
    ["The belayer must keep one hand on the top rope at all times with no exceptions.
    ", "True", "False"],
    ["If a climber is too much lighter than a belayer, the belayer is at risk of being pulled off of the ground in the case of an abrupt fall.", "True", "False"]
];
$ans = [2, 2, 1, 2, 2];

// check answer 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<div class="popup relative" id="close">';
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