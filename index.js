/**
 * Ramandeep Singh - Portfolio Interaction Logic
 * 1. Scroll Progress Tracking
 * 2. Intersection Observer for Reveal Animations
 * 3. Navigation Active Link Tracking
 * 4. Project Card Modern Toggle
 * 5. Mouse Spotlight Movement
 * 6. Terminal Typing Effect
 * 7. Hacker Text Scramble Effect
 * 8. 3D Parallax Tilt Effect
 */

document.addEventListener('DOMContentLoaded', () => {
    initScrollProgress();
    initRevealAnimations();
    initNavigationTracking();
    initMouseSpotlight();
    initTypingEffect();
    initScrambleEffect();
    init3DParallax();
});

// 1. Scroll Progress Bar Update
function initScrollProgress() {
    const progressBar = document.getElementById("scroll-progress");
    if (!progressBar) return;

    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        progressBar.style.width = scrolled + "%";
    });
}

// 2. Reveal Animations on Scroll
function initRevealAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-reveal').forEach(el => revealObserver.observe(el));
}

// 3. Navigation Tracking
function initNavigationTracking() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.menu-link');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - 250) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current)) {
                link.classList.add('active');
            }
        });
    });
}

// 4. Projects Toggle
function toggleProjects() {
    const moreProjects = document.getElementById("more-projects");
    const btn = document.getElementById("view-projects");
    
    if (moreProjects.style.display === "none" || moreProjects.style.display === "") {
        moreProjects.style.display = "grid";
        btn.textContent = "View Less";
        moreProjects.querySelectorAll('.animate-reveal').forEach(el => el.classList.add('active'));
    } else {
        moreProjects.style.display = "none";
        btn.textContent = "View More Projects";
    }
}

// 5. Mouse Spotlight Logic
function initMouseSpotlight() {
    const spotlight = document.getElementById('mouse-spotlight');
    if (!spotlight) return;

    window.addEventListener('mousemove', (e) => {
        spotlight.style.left = e.clientX + 'px';
        spotlight.style.top = e.clientY + 'px';
    });
}

// 6. Terminal Typing Effect
function initTypingEffect() {
    const textElement = document.getElementById('typing-text');
    if (!textElement) return;

    const text = "Data Science Engineer / Machine Learning Specialist";
    let index = 0;

    function type() {
        if (index < text.length) {
            textElement.textContent += text.charAt(index);
            index++;
            setTimeout(type, Math.random() * 100 + 50);
        }
    }

    type();
}

// 7. Hacker Text Scramble Effect
function initScrambleEffect() {
    const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const title = document.getElementById("scramble-name");
    if (!title) return;

    let interval = null;
    
    const startScramble = () => {
        let iteration = 0;
        clearInterval(interval);
        
        interval = setInterval(() => {
            title.innerText = title.innerText
                .split("")
                .map((letter, index) => {
                    if(index < iteration) {
                        return title.dataset.value[index];
                    }
                    return letters[Math.floor(Math.random() * 26)]
                })
                .join("");
            
            if(iteration >= title.dataset.value.length) {
                clearInterval(interval);
            }
            
            iteration += 1 / 3;
        }, 30);
    };

    startScramble();
    title.onmouseover = startScramble;
}

// 8. 3D Parallax Tilt Effect
function init3DParallax() {
    const card = document.querySelector(".portfolio-container.glass-card");
    if (!card) return;

    window.addEventListener("mousemove", (e) => {
        const x = (window.innerWidth / 2 - e.clientX) / 75;
        const y = (window.innerHeight / 2 - e.clientY) / 75;
        
        card.style.transform = `rotateY(${x}deg) rotateX(${y}deg)`;
    });
}
