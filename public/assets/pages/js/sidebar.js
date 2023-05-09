document.addEventListener("DOMContentLoaded", () => {
    
    const dropdown = document.getElementById("dropdown");
    const content = document.getElementById("content");
    const close = document.getElementById("close");

    dropdown.addEventListener("click", () => {
        if (content.style.display !== "block") {
            content.style.display = "block";
        } else {
            content.style.display = "none";
        }
    });

    close.addEventListener("click", () => {
        content.style.display = "none";
    });
});
