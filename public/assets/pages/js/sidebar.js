document.addEventListener("DOMContentLoaded", () => {
    const dropdown = document.getElementById("dropdown");
    const content = document.getElementById("content");

    dropdown.addEventListener("click", () => {
        if (content.style.display !== "none") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
});
