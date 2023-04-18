<?php include '../header.php'; ?>
<?php
ob_start();
// fill in content here
$type = "bouldering";
//echo $_COOKIE[$type];
$level = 'c3';
$levellist = ['c1', 'c2', 'c3'];
// echo array_search($level, $levellist);
$question = [
    ["Which statement is false about dynamic movement?", "Dynamic movement is the use of the body's oscillating force to help you move forward to the next hold point.", "Before doing so, spread your feet out in a frog-like position and bend your knees to achieve maximum thrust.", "Push your hips towards the wall and straighten your arms to reach for the next hold.", "Dynamic movement depends on arm strength only, with no jumping or swaying involved."],
    ["What is an overhang in climbing?", "Overhanged walls generally make for easier climbs.", "Overhanged walls are only rated above the C4 level.", "When climbing an overhanged wall, the efficiency of your climbing technique is less important."],
    ["Smearing is a technique where the features of the wall’s surface are used to support the feet when there is little or no footing.", "True", "False"],
    ["Flagging is a technique used when one hand and one foot on the same side of the body are locked to the wall, while the other hand and foot are released from the wall.", "True", "False"],
    ["Flagging is usually used to maintain balance when only one foot can step on a foot-hold and the other foot can not.", "True", "False"]
];
$ans = [4, 1, 1, 2, 1];

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
            $msg = '<img src="../images/' . $level . '.png" alt="bouldering ' . $level . ' badge" class="colorFill" width="100" height="100"><h4>Great Job!</h4><p>You completed the bouldering lessons!</p>';
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