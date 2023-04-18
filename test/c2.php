<?php include '../header.php'; ?>
<?php
ob_start();
// fill in content here
$type = "bouldering";
//echo $_COOKIE[$type];
$level = 'c2';
$levellist = ['c1', 'c2', 'c3'];
// echo array_search($level, $levellist);
$question = [
    ["Which of the following is false?
    ", "Straighten your arms to save energy", "Shorts are more suitable for climbing than pants"],
    ["Which of the following is false?", "As the wall tilts outward at an increasing angle, the arms, core muscles and legs play an important role in resisting gravity.", "Beautifully executed footwork is important to avoid straining only the upper-body muscles.", "Rock climbing is an upper-body workout, footwork is only an aid for balance."],
    ["When one hand is too far away from the next hold, the matching technique can be used to give a climber the stability required to reach the next hold more easily.", "True", "False"],
    ["When the foot-hold is too small, a climber might need to switch their feet. Which of the following is correct about switching feet?", "When switching feet for beginners, try not to use the jumping method to avoid slipping off.", "Once the front foot is firmly placed on the hold, use the ankle to rotate outward, leaving only the side of the foot on the rock.", "Wait for the rear foot to approach the front foot before turning the ankle, do not turn the ankle first to avoid slipping off.", "All of the above"],
    ["Which of the following is true?", "Before you start climbing, scan the rocks on the wall to see which ones are better to grab or step on.", "Try to straighten your arms as you climb, resting weight on bent arms will cause tension and exhaustion over time.", "Keeping your hips close to the wall where possible increases efficiency when faced with a technical climb.", "All of the above"]
];
$ans = [2, 3, 1, 4, 4];

// check answer 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<div class="popup relative" id="close">';
    echo '<button class="btn closeBtn" id="closeBtn">x</button>';
    for ($j = 0; $j < count($question); $j++) {
        $qname = 'q' . $j;
        if ($_POST[$qname] != $ans[$j]) {
            $msg =  '<h4>Uh oh!</h4><p>Check your answers and try again.</p>';
            //$btn = '<a href="../test/' . str_replace(".", "-", $level) . '.php" class="btn" >Retry!</a>';
            $btn = '<button class="btn primary" id="retry">Retry!</button>';
            break;
        } else {
            $msg = '<img src="../images/' . $level . '.png" alt="bouldering ' . $level . ' badge" class="colorFill" width="100" height="100"><h4>Great Job!</h4><p>You have unlocked a new level</p>';
            $btn = '<a href="../' . $type . '.php" class="btn primary">Okay!</a>';
            $arr = explode(",", $_COOKIE[$type]);
            $key = array_search($level, $levellist);
            $arr[$key] = "true";
            $newVal = implode(",", $arr);

            if (isset($_COOKIE['bouldering'])) {
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
        <h2>Bouldering Test</h2>
        <img src="../images/<?php echo $level; ?>.png" alt="Bouldering <?php echo $level; ?> badge">
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
                    echo '<input type="radio" 
                                name="q' . $i . '" 
                                id="q' . $i . 'a' . $k . '" 
                                value="' . $k . '" 
                                required>';
                    // if retake the test, show the answer
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $k == $ans[$i]) {

                        echo  '<label for="q' . $i . 'a' . $k . '" class="correct">' . $question[$i][$k] . '</label>';
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

<script>
    <?php include '../js/script.js'; ?>
</script>

<?php include '../footer.php';
ob_end_flush(); ?>