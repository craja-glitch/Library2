async function fetchEvents() {
  const output = document.getElementById('events-output');
  output.textContent = "Loading events...";
  try {
    const response = await fetch('/events');
    if (!response.ok) throw new Error("Network response was not ok");
    const data = await response.json();
    output.textContent = JSON.stringify(data, null, 2);
  } catch (error) {
    output.textContent = "Error fetching events: " + error;
  }
}

async function fetchPopularBooks() {
  const output = document.getElementById('books-output');
  output.textContent = "Loading popular books...";
  try {
    const response = await fetch('/api/popular-books');
    if (!response.ok) throw new Error("Network response was not ok");
    const data = await response.json();
    output.textContent = JSON.stringify(data, null, 2);
  } catch (error) {
    output.textContent = "Error fetching popular books: " + error;
  }
}

async function fetchAllBooks() {
  const output = document.getElementById('all-books-output');
  output.textContent = "Loading all books...";
  try {
    const response = await fetch('/api/books');
    if (!response.ok) throw new Error("Network response was not ok");
    const data = await response.json();
    output.textContent = JSON.stringify(data, null, 2);
  } catch (error) {
    output.textContent = "Error fetching all books: " + error;
  }
}
