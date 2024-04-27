// Fetch movie schedule data from JSON file
fetch('https://idpdz.com/tmvcinema/movies.json')
  .then(response => response.json())
  .then(data => {
    const moviesData = data;  // Assuming the data contains "days" property

    // Populate calendar tabs
    const calendarTabs = document.querySelector('.calendar-tabs');
    moviesData.days.forEach(day => {  // Assuming "days" exists in data
      const tab = document.createElement('li');
      tab.classList.add('calendar-tab');
      tab.textContent = day.day;
      tab.dataset.day = day.day;
      calendarTabs.appendChild(tab);
    });

    // Set initial active tab and display corresponding movie listings
    const firstTab = calendarTabs.firstElementChild;
    firstTab.classList.add('active');
    displayMovieListings(moviesData.days[0].movies);  // Assuming "days" exists

    // Add click event listener to calendar tabs
    calendarTabs.addEventListener('click', event => {
      const clickedTab = event.target;
      if (clickedTab.classList.contains('calendar-tab')) {
        const activeTab = document.querySelector('.calendar-tab.active');
        activeTab.classList.remove('active');
        clickedTab.classList.add('active');

        const selectedDay = clickedTab.dataset.day;
        const selectedDayMovies = moviesData.days.find(day => day.day === selectedDay).movies;
        displayMovieListings(selectedDayMovies);
      }
    });
  })
  .catch(error => {
    console.error('Error fetching or parsing JSON:', error);
  });

function displayMovieListings(movies) {
  const movieListingsContainer = document.querySelector('.movie-listings');
  movieListingsContainer.innerHTML = ''; // Clear previous listings

  movies.forEach(movie => {
    const movieListing = document.createElement('div');
    movieListing.classList.add('movie-listing');

    const moviePoster = document.createElement('img');
    moviePoster.classList.add('movie-poster');
    moviePoster.src = movie.poster;
    movieListing.appendChild(moviePoster);

    // Add additional elements for movie title and showtimes (if needed)
    const movieTitle = document.createElement('h2');
    movieTitle.textContent = movie.title;
    movieListing.appendChild(movieTitle);

    const movieShowtimes = document.createElement('ul');
    movieShowtimes.classList.add('movie-showtimes');
    movie.showtimes.forEach(showtime => {
      const showtimeItem = document.createElement('li');
      showtimeItem.textContent = showtime;

      // Create anchor tag (link) for "Buy Ticket" button
      const bookTicketLink = document.createElement('a');
      bookTicketLink.textContent = 'Achetez Votre Ticket';
      bookTicketLink.classList.add('book-ticket-button'); // Add a class for styling

      // **Option 1: Link to an external ticket booking page**
      // Replace "https://your-booking-page.com" with your actual booking URL
      bookTicketLink.href = `form.php?movie=${movie.title}&showtime=${showtime}`;

      // **Option 2: Trigger a custom JavaScript function for booking logic**
      // Replace `handleTicketBooking` with your function name
      // bookTicketLink.addEventListener('click', handleTicketBooking);

      showtimeItem.appendChild(bookTicketLink);
      movieShowtimes.appendChild(showtimeItem);
    });
    movieListing.appendChild(movieShowtimes);

    // Append each movie listing to the container
    movieListingsContainer.appendChild(movieListing);
  });
}
