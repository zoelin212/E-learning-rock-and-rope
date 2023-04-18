<?php include '../header.php'; ?>
<?php
ob_start();
// fill in content here
$type = "roping";
$level = '5.10';
$levellist = ['5.8', '5.9', '5.10'];
$question = [
    ["Looking graceful on the climbing wall is strictly for appearance and gym etiquette.", "True", "False"],
    ["Which of the following statements is false about conserving energy?", "Keeping your arms in a bent position directly parallel is a technique called T-rexing which is good practice to conserve energy in your legs.", "It is good practice to find places on the wall where you can rest and shake out your tired arms one at a time.", "Avoid performing unnecessary high-steps to save your energy while climbing", "Beginners often get tired faster because they are using inefficient climbing techniques"],
    ["Which of the following statements is true about foot-holds", "Foot-holds are only used to maintain balance on the wall.", "Moving your feet to the next foot-hold is more efficient than dynamically jumping to the next hold.", "Higher level climbs always have a smaller number of foot-holds than other holds", "Foot-holds and hand-holds are not interchangeable"],
    ["It is good practice to communicate to your belayer when you are about to perform a risky dynamic movement.
    ", "True", "False"],
    ["Balance is an essential part of climbing because it uses muscles across your entire body.", "True", "False"]
];
$ans = [2, 1, 2, 1, 1];

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
            $msg = '<img src="../images/' . $level . '.png" alt="top-roping ' . $level . ' badge" class="colorFill" width="100" height="100"><h4>Great Job!</h4><p>You completed the top-roping lessons!</p>';

            $btn = '<div class="Fav">
            <input id="fav-checkbox" class="Fav-checkbox" type="checkbox">
            <label for="fav-checkbox" class="Fav-label"><span class="Fav-label-text">Favourite</span></label>
            <div class="Fav-bloom"></div>
            <div class="Fav-sparkle">
              <div class="Fav-sparkle-line"></div>
              <div class="Fav-sparkle-line"></div>
              <div class="Fav-sparkle-line"></div>
              <div class="Fav-sparkle-line"></div>
              <div class="Fav-sparkle-line"></div>
            </div>
            <svg class="Fav-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
              <title>Star Icon</title>
              <path d="M36.14,3.09l5.42,17.78H59.66a4.39,4.39,0,0,1,2.62,7.87L47.48,40.14,53,58.3a4.34,4.34,0,0,1-6.77,4.78L32,52l-14.26,11A4.34,4.34,0,0,1,11,58.27l5.55-18.13L1.72,28.75a4.39,4.39,0,0,1,2.62-7.87h18.1L27.86,3.09A4.32,4.32,0,0,1,36.14,3.09Z"/>
            </svg>
          </div>' . '<button class="btn primary" id="unlockBtn">Unlock Prize</button>';

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