let stat = document.querySelector(".popup h4").innerHTML;
console.log(stat);
if (stat === 'Uh oh!') {
    coverup.style.display = "block";
    coverup.style.opacity = "0.3";
    document.body.style.height = "100vh";
    document.body.style.overflow = "hidden";
}
function close(e) {
    e.target.parentNode.style.display = "none";
    coverup.style.display = "none";
    coverup.style.opacity = "0";
    document.body.style.overflow = "unset";
    document.body.style.height = "unset";
}
let retry = document.getElementById("retry");
closeBtn.addEventListener("click", (e) => close(e));
if (retry) {
    retry.addEventListener("click", (e) => close(e));
}
