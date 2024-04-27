const slider = document.querySelector('.slider');
const sliderWrapper = slider.querySelector('.slider-wrapper');
const slides = sliderWrapper.querySelectorAll('.slide');
const prevArrow = slider.querySelector('.prev-arrow');
const nextArrow = slider.querySelector('.next-arrow');
let currentSlide = 0;
const slideContentElements = document.querySelectorAll('.slide-content');
let isSlideTransitioning = false;

const slidesData = [
  {
    image: "images/dune2.jpg",
    videoID: "kF1WyiTZFTk",
    title: "Dune 2",
    description: "Paul rejoint les Fremen et cherche à se venger des conspirateurs qui ont détruit sa famille",
  },
  {
    image: "images/MWEB_FB_Header.jpg",
    videoID: "oq8bOs8Jimg",
    title: "Madame Web",
    description: "Madame Web raconte l'histoire de l'une des héroïnes les plus énigmatiques de l'éditeur Marvel.",
  },
  // ... more slides
];

// Function to show the active slide
function showSlide(slideIndex) {
  slides.forEach(slide => slide.classList.remove('active'));
  slides[slideIndex].classList.add('active');

  // Update title and description elements (optional)
  const currentSlideData = slidesData[slideIndex];
  if (currentSlideData) {
    const titleElement = slideContentElements[slideIndex].querySelector('h1');
    const descriptionElement = slideContentElements[slideIndex].querySelector('p');
    if (titleElement && descriptionElement) {
      titleElement.textContent = currentSlideData.title;
      descriptionElement.textContent = currentSlideData.description;
    }
  }
}

// Function to go to the next slide
function nextSlide() {
  if (!isSlideTransitioning) {
    isSlideTransitioning = true;
    const nextSlideIndex = (currentSlide + 1) % slides.length;
    showSlide(nextSlideIndex);
    currentSlide = nextSlideIndex;
    setTimeout(() => {
      isSlideTransitioning = false;
    }, 500);
  }
}

// Function to go to the previous slide
function prevSlide() {
  if (!isSlideTransitioning) {
    isSlideTransitioning = true;
    const prevSlideIndex = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(prevSlideIndex);
    currentSlide = prevSlideIndex;
    setTimeout(() => {
      isSlideTransitioning = false;
    }, 500);
  }
}

// Add event listeners to the arrow icons
prevArrow.addEventListener('click', prevSlide);
nextArrow.addEventListener('click', nextSlide);

// Loop through slide content elements and add click event listeners to play icons
slideContentElements.forEach((slideContent, index) => {
  const playIcon = slideContent.querySelector('.play-icon');
  if (playIcon) {
    playIcon.addEventListener('click', () => {
      const videoID = slidesData[index].videoID;
      const youtubeURL = `https://www.youtube.com/watch?v=${videoID}`;

      // Optionally display title and description before redirecting (e.g., in an alert)
      const titleElement = slideContent.querySelector('h1');
      const descriptionElement = slideContent.querySelector('p');
      if (titleElement && descriptionElement) {
        alert(`Playing: ${titleElement.textContent}\n${descriptionElement.textContent}`);
      }

      window.location.href = youtubeURL;
    });
  } else {
    console.warn(`Play icon not found in slide content element at index ${index}`);
  }
});

// Option for automatic slide transition (comment out if not desired)
let intervalId = setInterval(nextSlide, 5000);

// Function to stop automatic slide transition on hover
slider.addEventListener('mouseover', () => clearInterval(intervalId));

// Function to restart automatic slide transition on leave
slider.addEventListener('mouseout', () => {
  intervalId = setInterval(nextSlide, 5000);
});

// Initialization:
showSlide(currentSlide); // Call showSlide initially to display the first slide








