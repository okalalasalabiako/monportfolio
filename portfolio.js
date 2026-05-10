// animation au scroll

const elements = document.querySelectorAll(".card, .skill-card, .split-card");

function reveal() {

    const windowHeight = window.innerHeight;

    elements.forEach(el => {

        const position = el.getBoundingClientRect().top;

        if (position < windowHeight - 100) {

            el.classList.add("visible");

        }

    });

}

window.addEventListener("scroll", reveal);

reveal();



// effet souris dynamique

document.querySelectorAll(".skill-card").forEach(card => {

    card.addEventListener("mousemove", e => {

        const x = e.offsetX;
        const y = e.offsetY;

        card.style.background = `
radial-gradient(circle at ${x}px ${y}px,
rgba(124,58,237,0.8),
#020617)`;

    });

    card.addEventListener("mouseleave", () => {

        card.style.background = "#020617";

    });

});





