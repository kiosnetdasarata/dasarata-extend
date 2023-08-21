const tombol = document.getElementById("test"),
    sidebar = document.getElementById("sidebar"),
    text = document.getElementById("text"),
    content = document.getElementById("content");

// function resizeOnWidth(){
//     if(window.innerWidth <= 640) {
//         sidebar.classList.remove("close");
//         sidebar.classList.remove("close");
//     }
// }

// window.addEventListener("resize", resizeOnWidth);
window.addEventListener("DOMContentLoaded", function () {
    if (window.innerWidth <= 640) {
        sidebar.classList.remove("close");
        content.classList.remove("close");
    }
});
window.addEventListener("resize", function () {
    if (window.innerWidth <= 640) {
        sidebar.classList.remove("close");
        content.classList.remove("close");
    }
});

tombol.addEventListener("click", function () {
    sidebar.classList.toggle("close");
    content.classList.toggle("close");
});