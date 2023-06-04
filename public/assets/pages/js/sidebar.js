document.addEventListener("DOMContentLoaded", () => {
    const dropdownClass = document.querySelector(".sidebar_container-dropdown");
    const contentClass = document.querySelector(".sidebar_container-content");
    const closeClass = document.querySelector(".fa-circle-xmark");

    setInterval(function () {
        if (window.innerWidth < 900) {
            dropdownClass.setAttribute("id", "dropdown");
            contentClass.setAttribute("id", "content");
            closeClass.setAttribute("id", "close");

            dropdownId = document.getElementById("dropdown");
            contentId = document.getElementById("content");
            closeId = document.getElementById("close");

            dropdownId.addEventListener("click", () => {
                contentId.style.display = "block";
            });

            closeId.addEventListener("click", () => {
                contentId.style.display = "none";
            });
        } else if (window.innerWidth >= 900) {
            contentId.style.display = "block";

            dropdownClass.removeAttribute("id");
            contentClass.removeAttribute("id");
        }
    }, 100);
});
