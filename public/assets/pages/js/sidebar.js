document.addEventListener("DOMContentLoaded", () => {
    const dropdownClass = document.querySelector(".sidebar_container-dropdown");
    const contentClass = document.querySelector(".sidebar_container-content");

    setInterval(function () {
        if (window.innerWidth < 900) {
            dropdownClass.setAttribute("id", "dropdown");
            contentClass.setAttribute("id", "content");

            dropdownId = document.getElementById("dropdown");
            contentId = document.getElementById("content");
            closeId = document.getElementById("close");

            dropdownId.addEventListener("click", () => {
                if (contentId.style.display !== "block") {
                    contentId.style.display = "block";
                } else {
                    contentId.style.display = "none";
                }
            });
        } else if (window.innerWidth >= 900) {
            contentId.style.display = "block";
            dropdownClass.removeAttribute("id");
            contentClass.removeAttribute("id");
        }
    }, 300);
});
