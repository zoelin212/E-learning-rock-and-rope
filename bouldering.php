<?php include 'header.php'; ?>
<main id="boudering_main">
    <h2>Bouldering</h2>
    <!-- <h3>Intro</h3> -->
    <video width="1920" height="1080" poster="./videos/bouldering-poster.jpg" controls>
        <source src="./videos/boudering_intro.mp4" type="video/mp4">
    </video>
    <hr>
    <section class="flexbox row">
        <a href="pre.php/?name=warm-up" class="imgBox">
            <img src="images/warm_up.png" alt="warm up" width="150" height="167" class="warm_icon">
        </a>

        <a href="pre.php/?name=cool-down" class="imgBox">
            <img src="images/cool_down.png" alt="cool down" width="153" height="167" class="warm_icon">
        </a>
    </section>
    <hr>
    <section id="levelSection" class="flexbox row center">
        <?php
        $levellist = ['c1', 'c2', 'c3'];

        if (isset($_COOKIE['bouldering'])) {
            $levelLock = explode(",", $_COOKIE['bouldering']);
            for ($i = 0; $i < count($levellist); $i++) {
                $img = "images/$levellist[$i].png";
                $data = getimagesize("$img");
                $width = $data[0];
                $height = $data[1];
                if ($i == 0) {
                    $img = "images/$levellist[$i].png";
                    echo '<a href="./lessons/' . $levellist[$i] . '.php" class="imgBox">';
                    echo '<img src="' . $img . '" alt="Bouldering level ' . $levellist[$i] . '" width="' . $width . '" height="' . $height . '">';
                    echo '</a>';
                }
                if ($levelLock[$i] == 'true') {
                    if ($i == count($levellist) - 1) {
                        break;
                    } else {
                        $img = 'images/' . $levellist[$i + 1] . '.png';
                        echo '<a href="./lessons/' . $levellist[$i + 1] . '.php" class="imgBox">';
                        echo '<img src="' . $img . '" alt="Bouldering level ' . $levellist[$i + 1] . '" width="' . $width . '" height="' . $height . '">';
                        echo '</a>';
                    }
                } else {
                    if ($i == count($levellist) - 1) {
                        break;
                    } else {

                        $img = 'images/' . $levellist[$i + 1] . '.png';
                        echo '<div class="imgBox locked">';
                        echo '<img src="' . $img . '" alt="Bouldering level ' . $levellist[$i] . '" width="' . $width . '" height="' . $height . '">';
                        echo '</div>';
                    }
                }
            }
        }

        ?>
    </section>
</main>

<?php include 'footer.php'; ?>