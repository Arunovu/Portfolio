
    const text = "Halo, saya Helmi";
    const typingElement = document.getElementById("typingText");
    let isTyping = false;

    function typeText() {
        if (isTyping) return;
        isTyping = true;
        typingElement.innerHTML = "";
        let i = 0;

        const typingInterval = setInterval(() => {
            if (i < text.length) {
                typingElement.innerHTML += text.charAt(i);
                i++;
            } else {
                clearInterval(typingInterval);
                isTyping = false;
            }
        }, 100);
    }

    function isInView(element) {
        const rect = element.getBoundingClientRect();
        return rect.top < window.innerHeight && rect.bottom > 0;
    }

    window.addEventListener("scroll", () => {
        if (isInView(document.getElementById("home"))) {
            typeText();
        }
    });

    document.addEventListener("DOMContentLoaded", () => {
        typeText();
    });
