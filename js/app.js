const header = document.querySelector("header");
const sectionOne = document.querySelector(".hero__container");

const sectionOneOptions = {
  rootMargin: "-50%"
};

const sectionOneObserver = new IntersectionObserver(function(
  entries,
  sectionOneObserver
) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      header.classList.add("nav-scrolled");
    } else {
      header.classList.remove("nav-scrolled");
    }
  });
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);




const burgerMenu = document.querySelector('.burger-menu');
const navLinks = document.querySelector('.top-bar');

burgerMenu.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

document.addEventListener("DOMContentLoaded", function () {
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');

    // Hide all tab contents except for the first one
    for (let i = 1; i < tabContents.length; i++) {
        tabContents[i].style.display = 'none';
    }

    tabLinks.forEach((tabLink, index) => {
        tabLink.addEventListener('click', () => {
            // Remove the is-active class from all tab links
            tabLinks.forEach((link) => {
                link.classList.remove('is-active');
            });

            // Add the is-active class to the clicked tab link
            tabLink.classList.add('is-active');

            // Hide all tab contents
            tabContents.forEach((content) => {
                content.style.display = 'none';
            });

            // Display the corresponding tab content
            tabContents[index].style.display = 'block';
        });
    });
});
