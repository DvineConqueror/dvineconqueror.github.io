document.addEventListener('DOMContentLoaded', function() {
  const mainCardImage = document.querySelector('#mainCard img');
  const thumbnailCards = document.querySelectorAll('.card');

  function changeMainImage(thumbnailCard) {
    const thumbnailImg = thumbnailCard.querySelector('img');
    const thumbnailSrc = thumbnailImg.src;

    // Store the current main card image source and fade out
    const mainCardSrc = mainCardImage.src;
    mainCardImage.style.opacity = 0;

    // Set a timeout to change the main card image source after the fade out
    setTimeout(function() {
      mainCardImage.src = thumbnailSrc;
      mainCardImage.style.opacity = 1;
    }, 300); // Adjust the duration of the fade animation as needed

    // Update the thumbnail card image source with the main card image source and fade in
    thumbnailImg.style.opacity = 0;
    thumbnailImg.src = mainCardSrc;
    setTimeout(function() {
      thumbnailImg.style.opacity = 1;
    }, 300); // Adjust the duration of the fade animation as needed
  }

  thumbnailCards.forEach(card => {
    card.addEventListener('click', () => changeMainImage(card));
  });
});
