document.getElementById("afficherBtn").addEventListener("click", function() {
    const maDiv = document.getElementById("maDiv");
    if (maDiv.classList.contains("cacher")) {
        maDiv.classList.remove("cacher");
    } else {
        maDiv.classList.add("cacher");
    }
});