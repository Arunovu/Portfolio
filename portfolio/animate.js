document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Tambahkan animasi ketika masuk viewport
        if (entry.target.classList.contains("animate-on-scroll")) {
          entry.target.classList.add("visible");
        }

        // Jika punya anak-anak .stagger-item, beri animasi satu per satu
        const staggerItems = entry.target.querySelectorAll(".stagger-item");
        if (staggerItems.length > 0) {
          staggerItems.forEach((item, index) => {
            setTimeout(() => {
              item.classList.add("show");
            }, index * 300);
          });
        }
      } else {
        // Hapus class animasi saat keluar viewport
        if (entry.target.classList.contains("animate-on-scroll")) {
          entry.target.classList.remove("visible");
        }

        const staggerItems = entry.target.querySelectorAll(".stagger-item");
        staggerItems.forEach((item) => {
          item.classList.remove("show");
        });
      }
    });
  }, { threshold: 0.3 });

  const targets = document.querySelectorAll(".animate-on-scroll, .projects-grid");
  targets.forEach((el) => observer.observe(el));
});
