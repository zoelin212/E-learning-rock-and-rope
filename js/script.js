// close nav on scroll
let toggleCheck = document.querySelector("#menuToggle input[type=checkbox]");
window.addEventListener("scroll", () => {
    if (toggleCheck.checked) {
        toggleCheck.checked = false;
    }

})
// redirect // path: ../profile.php
function goLink(link) {
    window.location.href = link;
    window.location.replace(link);
}
// unlock effect
let unlockBtn = document.getElementById("unlockBtn");
if (unlockBtn) {
    unlockBtn.addEventListener("click", () => {
        // event.preventDefualt();
        console.log("click");
        let effect = document.querySelector(".Fav");
        effect.style.display = "block";
        document.getElementById("fav-checkbox").checked = true;
        setTimeout(goLink, 2000, "../profile.php")
    })
}