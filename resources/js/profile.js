/* ==========================================
   PROFILE PAGE
========================================== */

/* COUNTER ANIMATION */

const counters = document.querySelectorAll(".counter");

let counterPlayed = false;

function startCounter() {

    counters.forEach(counter => {

        const target = Number(counter.dataset.target);

        const speed = 80;

        function updateCounter() {

            const current = Number(counter.innerText);

            const increment = Math.ceil(target / speed);

            if(current < target){

                counter.innerText = current + increment;

                requestAnimationFrame(updateCounter);

            }else{

                counter.innerText = target.toLocaleString("id-ID");

            }

        }

        updateCounter();

    });

}

/* Trigger Counter */

window.addEventListener("scroll", () => {

    const section = document.querySelector("#demografi");

    if(!section) return;

    const trigger = section.getBoundingClientRect().top;

    if(trigger < window.innerHeight - 100 && !counterPlayed){

        counterPlayed = true;

        startCounter();

    }

});

/* ==========================================
CARD ANIMATION
========================================== */

const cards = document.querySelectorAll(

    ".profile-card, .structure-card, .stat-card"

);

const observer = new IntersectionObserver((entries)=>{

    entries.forEach(entry=>{

        if(entry.isIntersecting){

            entry.target.classList.add("show-card");

        }

    });

},{
    threshold:.2
});

cards.forEach(card=>{

    observer.observe(card);

});
