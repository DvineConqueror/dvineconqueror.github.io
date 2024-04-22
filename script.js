function searchFunction() {
  var input, filter, ul, li, a, i, j;
  input = document.getElementById("search-input");
  filter = input.value.toUpperCase();
  
  // Select all lists with class "cards" outside of .about-container
  ul = document.querySelectorAll(".cards:not(.about-container .cards)");

  for (j = 0; j < ul.length; j++) { // Loop through each list
    li = ul[j].getElementsByClassName("cards_item"); // Get list items for the current list

    for (i = 0; i < li.length; i++) { // Loop through each list item
      a = li[i].getElementsByClassName("card_title")[0]; // Get the card title

      if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = ""; // Show the card if it matches the search criteria
        li[i].classList.add("card-match"); // Add a class for animation
      } else {
        li[i].style.display = "none"; // Hide the card if it does not match the search criteria
        li[i].classList.remove("card-match"); // Remove the animation class
      }
    }
  }
}
