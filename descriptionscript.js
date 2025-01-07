// JavaScript code (script.js)

// Object holding book titles and descriptions
const bookDescriptions = {
    "The Great Adventure": "A thrilling tale of courage and discovery.",
    "Mystery of the Unknown": "An intriguing story of secrets and revelations.",
    "Journey to the Stars": "A captivating exploration of the cosmos.",
    "Echoes of the Past": "A historical drama filled with emotional twists.",
    "Whispers in the Dark": "A suspenseful mystery that will keep you guessing.",
    "Dreams of Tomorrow": "An inspiring story of ambition and hope.",
    "Shadows of the Night": "A gripping thriller with unexpected turns.",
    "Legends of the Ancient": "A mythical journey through time and space.",
    "Tales of the Forgotten": "A collection of poignant stories from the past."
};

// Function to show book details
function showBookDetails(title) {
    // Convert title to lowercase for case-insensitive comparison
    const normalizedTitle = title.toLowerCase();

    // Find the matching book description
    const matchingKey = Object.keys(bookDescriptions).find(
        (key) => key.toLowerCase() === normalizedTitle
    );

    if (matchingKey) {
        // Display the book description
        alert(`Title: ${matchingKey}\nDescription: ${bookDescriptions[matchingKey]}`);
    } else {
        alert("Details for this book are not available.");
    }
}
