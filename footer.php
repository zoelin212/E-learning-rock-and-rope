<footer>
    <h4>Follow us</h4>
    <ul class="kilimanjaro_social_links">
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> YouTube</a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
    </ul>

    <h4>Important Links</h4>
    <ul class="kilimanjaro_links">
        <li><a href="Privacy_Policy.pdf" download><i class="fa fa-angle-right" aria-hidden="true"></i>Terms & Conditions</a></li>
        <li><a href="Terms_and_Conditions.pdf" download><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy Policy</a></li>
    </ul>
    <h4>Email</h4>
    <ul class="kilimanjaro_links">
        <li><a href="mailto:info@rockandrope.ca">info@rockandrope.ca</a></li>
    </ul>
    <p id="lastLine">Rock and Rope LLC © 2022 - All Rights Reserved.</p>
</footer>
<?php
$cur_dir = explode('\\', getcwd());
$pathArr = explode("/", $cur_dir[count($cur_dir) - 1]);
// print_r(explode(".", basename($_SERVER['PHP_SELF'])));
if ($filename[0] == 'index') {
    echo '<script src="' . $index . '/js/index.js"></script>';
}
if ($filename[0] === 'profile') {
    echo '<script>';
    echo 'document.querySelectorAll(".revealCode").forEach(e=>{e.addEventListener("click", () => {
        e.style.display = "none";
    });})';
    echo '</script>';
}
if ($pathArr[count($pathArr) - 1] == 'test' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<script src="' . $index . 'js/test.js"></script>';
}

?>

<script src="<?php echo $index; ?>js/script.js"></script>
</body>

</html>