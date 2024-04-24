const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

ScrollReveal().reveal(".header__image img", {
  ...scrollRevealOption,
  origin: "right",
});
ScrollReveal().reveal(".header__content h2", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".header__content h1", {
  ...scrollRevealOption,
  delay: 1000,
});

ScrollReveal().reveal(".order__card", {
  ...scrollRevealOption,
  interval: 500,
});

ScrollReveal().reveal(".event__content", {
  duration: 1000,
});


// contact page
const form = document.getElementById('form');
const result = document.getElementById('result');

form.addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(form);
    formData.append('access_key', '85496ef0-1987-4256-8875-8b186d7afd1f');

    fetch('https://api.web3forms.com/submit', {
        method: 'POST',
        body: formData
    })
    .then(async (response) => {
        const json = await response.json();
        if (response.ok) {
            Swal.fire({
                title: "Good job!",
                text: "Form submitted successfully!",
                icon: "success",
                button: "OK"
            });

            


        } else {
            console.error('Error:', response);
            result.innerHTML = "Something went wrong!";
        }
    })
    .catch(error => {
        console.error('Error:', error);
        result.innerHTML = "Something went wrong!";
    })
    .finally(() => {
        form.reset();
        setTimeout(() => {
            result.innerHTML = '';
        }, 3000);
    });
});