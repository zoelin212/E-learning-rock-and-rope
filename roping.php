<?php include 'header.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); ?>
<main id="roping_main">
    <h2>Top Roping</h2>

    <!-- intro video -->
    <video width="800" height="" poster="./videos/roping-poster.jpg" controls>
        <source src="./videos/roping_intro.mp4" type="video/mp4">
    </video>
    <hr>
    <div class="flexbox row center" id="warmupContainer">
        <div class="imgBox"><a href="pre.php/?name=warm-up"><img src="images/warm_up.png" alt="warm up" id="warm_icon"></a></div>

        <div class="imgBox"><a href="pre.php/?name=cool-down"><img src="images/cool_down.png" alt="cool down" id="cool_icon"></a></div>
    </div>

    <section id="levelSection" class="flexbox row center">
        <?php
        $levellist = ['5.8', '5.9', '5.10'];
        // if roping levellock cookie is set to 'true' -> place the unlocked link
        // if not -> place a static image without link (and set image grey)
        if (isset($_COOKIE['roping'])) {
            $levelLock = explode(",", $_COOKIE['roping']);
            for ($i = 0; $i < count($levellist); $i++) {
                $img = "images/$levellist[$i].png";
                $data = getimagesize("$img");
                $width = $data[0];
                $height = $data[1];
                if ($i == 0) {
                    $img = "images/$levellist[$i].png";
                    echo '<a href="./lessons/' . str_replace(".", "-", $levellist[$i]) . '.php" class="imgBox">';
                    echo '<img src="' . $img . '" alt="Top roping level ' . $levellist[$i] . '" width="' . $width . '" height="' . $height . '">';
                    echo '</a>';
                }
                if ($levelLock[$i] == 'true') {
                    if ($i == count($levellist) - 1) {
                        break;
                    } else {
                        $img = 'images/' . $levellist[$i + 1] . '.png';
                        echo '<a href="./lessons/' . str_replace(".", "-", $levellist[$i + 1]) . '.php" class="imgBox">';
                        echo '<img src="' . $img . '" alt="Top roping level ' . $levellist[$i + 1] . '" width="' . $width . '" height="' . $height . '">';
                        echo '</a>';
                    }
                } else {
                    if ($i == count($levellist) - 1) {
                        break;
                    } else {
                        $img = 'images/' . $levellist[$i + 1] . '.png';
                        echo '<div class="imgBox locked">';
                        echo '<img src="' . $img . '" alt="Top roping level ' . $levellist[$i] . '" width="' . $width . '" height="' . $height . '">';
                        echo '</div>';
                    }
                }
            }
        }
        ?>
    </section>

</main>


<?php include 'footer.php'; ?>