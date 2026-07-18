document.addEventListener("DOMContentLoaded", () => {

    const cards = document.querySelectorAll(
        ".staff-card, .institution-card, .service-item"
    );

    const observer = new IntersectionObserver(entries => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                entry.target.classList.add("show");

            }

        });

    }, {

        threshold: .15

    });

    cards.forEach(card => {

        card.classList.add("hidden");

        observer.observe(card);

    });

});
