document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("contact-modal");
    const openBtn = document.getElementById("open-contact");
    const closeBtn = document.querySelector(".modal .close");

    if (openBtn && modal && closeBtn) {
        openBtn.addEventListener("click", () => modal.style.display = "block");
        closeBtn.addEventListener("click", () => modal.style.display = "none");
        window.addEventListener("click", (event) => {
            if (event.target === modal) modal.style.display = "none";
        });
    }
});
