document.addEventListener("DOMContentLoaded", function () {
  const tabLinks = document.querySelectorAll(".tab-link");
  const tabContents = document.querySelectorAll(".tab-content");

  // Hide all tab contents except for the first one
  for (let i = 1; i < tabContents.length; i++) {
    tabContents[i].style.display = "none";
  }

  tabLinks.forEach((tabLink, index) => {
    tabLink.addEventListener("click", () => {
      // Remove the is-active class from all tab links
      tabLinks.forEach((link) => {
        link.classList.remove("is-active");
      });

      // Add the is-active class to the clicked tab link
      tabLink.classList.add("is-active");

      // Hide all tab contents
      tabContents.forEach((content) => {
        content.style.display = "none";
      });

      // Display the corresponding tab content
      tabContents[index].style.display = "block";
    });
  });
});
function extractH2AndCreateList() {
  // Get the summaryContainer element
  const summaryContainer = document.getElementById("summaryContainer");

  // Check if the summaryContainer element exists
  if (!summaryContainer) {
    console.error('Element with id "summaryContainer" not found.');
    return;
  }

  // Get the content div
  const contentDiv = document.querySelector(".container");

  // Check if the content div exists
  if (!contentDiv) {
    console.error("Content div not found.");
    return;
  }

  // Get all the h2 elements within the content div
  const h2Elements = contentDiv.querySelectorAll("h2");

  // Create a new ul element
  const ulElement = document.createElement("ul");

  // Iterate through h2 elements and create li elements with anchor links
  h2Elements.forEach((h2) => {
    // Create a li element
    const liElement = document.createElement("li");

    // Create an anchor element
    const anchorElement = document.createElement("a");

    // Set the anchor's href to the ID of the h2 element
    anchorElement.href = `#${h2.id}`;

    // Set the anchor's text to the content of the h2 element
    anchorElement.textContent = h2.textContent;

    // Append the anchor to the li element
    liElement.appendChild(anchorElement);

    // Append the li element to the ul element
    ulElement.appendChild(liElement);
  });

  // Append the ul element to the summaryContainer
  summaryContainer.appendChild(ulElement);
}

document.addEventListener("DOMContentLoaded", extractH2AndCreateList());
