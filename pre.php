<?php include 'header.php';?>

<main>
    <?php
        $warmup = array("wrist.gif","shoulder.gif","shoulder2.gif","ankle.gif","jump.gif",);
        $cooldown = array("elbow.gif","warmup.gif","toe.gif");

            if($_GET['name'] == "warm-up"){

                echo'<h2>Let’s Warm Up</h2>';
                echo'<p>- Repeat each set for 15 seconds -</p>';
                echo'<div>';
                for($i=0; $i < count($warmup); $i++)
                    {
                    echo'<div class="imgBox c-subscribe-box__wrappe">';
                        echo'<img src="'.$index.'images/warmup-cool/'.$warmup[$i].'">';
                    echo'</div>';
                    
                    }
                echo'</div>';
            }else{
                echo'<h2>Let’s Cool Down</h2>';
                echo'<p>Repeat each set for 30 secs.</p>';
                echo'<div>';
                for($i=0; $i < count($cooldown); $i++)
                    {
                    echo'<div class="imgBox c-subscribe-box__wrappe">';
                        echo'<img src="'.$index.'images/warmup-cool/'.$cooldown[$i].'">';
                    echo'</div>';
                    
                    }
                echo'</div>';
            }
    ?>
</main>

<?php include 'footer.php';?>