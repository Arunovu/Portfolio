  const scrollBtn = document.getElementById("scrollUpBtn");
  const contactSection = document.querySelector(".contact-section");

  window.addEventListener("scroll", () => {
    const contactTop = contactSection.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (contactTop < windowHeight / 2) {
      scrollBtn.classList.add("show");
    } else {
      scrollBtn.classList.remove("show");
    }
  });

  scrollBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
