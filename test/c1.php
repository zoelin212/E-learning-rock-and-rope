<?php include '../header.php'; ?>

<?php
ob_start();
// fill in content here
$type = "bouldering";
//echo $_COOKIE[$type];
$level = 'c1';
$levellist = ['c1', 'c2', 'c3'];
// echo array_search($level, $levellist);
$question = [
    ["For beginners, it is better to choose a tighter and pointier climbing shoe.
    ", "True", "False"],
    ["Powdered chalk can make rocks very slippery. When this happens, you will have to pick up a brush and brush the chalk off.", "True", "False"],
    ["Which of the following is the correct posture for landing safely?", "Bend your legs at the knees into a squatting position", "Falling backward onto your butt", "Weight distributed evenly across both legs with bent knees", "All of the above"],
    ["Which of the following is wrong about starting/finishing a route?", "Hold the rock closest to the “start” marker with both hands.", "Both hands can separately hold each rock marked for a split-start.", "You can start with one hand at the start point according to your needs.", "Both hands need to hold the top rock when reaching the endpoint."],
    ["When climbing up the wall you must use only the same colored rocks for your designated route. Which of the following type of hold does not follow this rule and can be used anytime?", "Jug", "Side-pull", "Volume", "Lowering hold"]
];
$ans = [2, 1, 4, 3, 3];

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
                    echo '<div>';
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