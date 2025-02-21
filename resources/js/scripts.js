const UNSPLASH_ACCESS_KEY = "Iund8q_mysjWrksWT5wqNuVKVzpTxOJ-BL7K3gVxljQ"; // Replace with your Unsplash Access Key

async function fetchRandomImage() {
    try {
        const response = await fetch(`https://api.unsplash.com/photos/random?client_id=${UNSPLASH_ACCESS_KEY}`);
        const data = await response.json();
        
        // Get the image URL from the response
        const imageUrl = data.urls.regular;
        
        // Set the image in the HTML
        document.getElementById("randomImage").src = imageUrl;
    } catch (error) {
        console.error("Error fetching image:", error);
    }
}

// Call the function when the page loads
window.onload = fetchRandomImage;
