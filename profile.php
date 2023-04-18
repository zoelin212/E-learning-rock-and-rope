<?php include 'header.php'; ?>
<?php //echo$_COOKIE['bouldering'];
// Generate coupon
function generateRandomString($length = 6)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
<main>
    <h2><?php if (isset($_COOKIE['username'])) {
            echo $_COOKIE['username'] . "'s";
        } else {
            echo 'Your';
        }; ?> Profile</h2>
    <div class="flexbox row center goat">
        <div class="imgBox">
            <img src="./images/mountain-goat.png" alt="mountain goat" width="1085" height="1656">
        </div>
        <p></p>
    </div>

    <section>
        <h3>Bouldering</h3>
        <p>Successfully complete all 3 levels to unlock a prize!</p>

        <div class="flexbox row center goat">
            <?php
            $levellist = ['c1', 'c2', 'c3'];

            if (isset($_COOKIE['bouldering'])) {
                $levelLock = explode(",", $_COOKIE['bouldering']);
                $trophy = "images/trophy-green.png";
                $trophyData = getimagesize("$trophy");
                $trophyWidth = $trophyData[0];
                $trophyHeight = $trophyData[1];
                $boulderCount = 0;
                for ($i = 0; $i < count($levellist); $i++) {
                    $img = "images/$levellist[$i].png";
                    $data = getimagesize("$img");
                    $width = $data[0];
                    $height = $data[1];
                    if ($levelLock[$i] == 'true') {
                        echo '<div class="imgBox">';
                        echo '<img src="' . $img . '" alt="Bouldering level ' . $levellist[$i] . '" width="' . $width . '" height="' . $height . '">';
                        echo '</div>';
                        $boulderCount++;
                    } else {
                        echo '<div class="imgBox locked">';
                        echo '<img src="' . $img . '" alt="Bouldering level ' . $levellist[$i] . '" width="' . $width . '" height="' . $height . '">';
                        echo '</div>';
                    }
                }
                if ($boulderCount == 3) {
                    echo '<div class="imgBox">';
                    echo '<img src="' . $trophy . '" alt="A trophy" width="' . $trophyWidth . '" height="' . $trophyHeight . '">';
                    echo '</div>';
                } else {
                    echo '<div class="imgBox locked">';
                    echo '<img src="' . $trophy . '" alt="A trophy" width="' . $trophyWidth . '" height="' . $trophyHeight . '">';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </section>
    <?php
    if ($boulderCount == 3) {
        echo '<section class="relative" id="promoBox">';
        echo '<h3 class="revealCode">Your Magic Climbing Code</h3><span id="promoCode">';
        if (isset($_COOKIE['coupon1'])) {
            echo $_COOKIE['coupon1'];
        } else {
            $promocode = generateRandomString();
            echo $promocode;
            setcookie("coupon1", $promocode, strtotime("+ 1 year"));
        }
        echo '</span><p>Redeem code for 50% off everything at Sporty.ca</p>';
        echo '</section>';
    };
    ?>


    <section>
        <h3>Top-roping</h3>
        <p>Successfully complete all 3 levels to unlock a prize!</p>

        <div class="flexbox row center goat">
            <?php
            $levellist = ['5.8', '5.9', '5.10'];

            if (isset($_COOKIE['roping'])) {
                $levelLock = explode(",", $_COOKIE['roping']);
                $trophy = "images/trophy-purple.png";
                $trophyData = getimagesize("$trophy");
                $trophyWidth = $trophyData[0];
                $trophyHeight = $trophyData[1];
                $ropingCount = 0;
                for ($i = 0; $i < count($levellist); $i++) {
                    $img = "images/$levellist[$i].png";
                    $data = getimagesize("$img");
                    $width = $data[0];
                    $height = $data[1];
                    if ($levelLock[$i] == 'true') {
                        echo '<div class="imgBox">';
                        echo '<img src="' . $img . '" alt="Top roping level ' . $levellist[$i] . '" width="' . $width . '" height="' . $height . '">';
                        echo '</div>';
                        $ropingCount++;
                    } else {
                        echo '<div class="imgBox locked">';
                        echo '<img src="' . $img . '" alt="Top roping level ' . $levellist[$i] . '" width="' . $width . '" height="' . $height . '">';
                        echo '</div>';
                    }
                }
                if ($ropingCount == 3) {
                    echo '<div class="imgBox">';
                    echo '<img src="' . $trophy . '" alt="A trophy" width="' . $trophyWidth . '" height="' . $trophyHeight . '">';
                    echo '</div>';
                } else {
                    echo '<div class="imgBox locked">';
                    echo '<img src="' . $trophy . '" alt="A trophy" width="' . $trophyWidth . '" height="' . $trophyHeight . '">';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </section>
    <?php
    if ($ropingCount == 3) {
        echo '<section class="relative" id="promoBox">';
        echo '<h3 class="revealCode">Your Magic Climbing Code</h3><span id="promoCode">';
        if (isset($_COOKIE['coupon2'])) {
            echo $_COOKIE['coupon2'];
        } else {
            $promocode2 = generateRandomString();
            echo $promocode2;
            setcookie("coupon2", $promocode2, strtotime("+ 1 year"));
        }
        echo '</span><p>Redeem code for 50% off everything at Sporty.ca</p>';
        echo '</section>';
        // echo '<script>';
        // echo 'revealCode.addEventListener("click", () => {
        //     revealCode.style.display = "none";
        // });';
        // echo '</script>';
    };
    ?>
</main>

<?php include 'footer.php'; ?>