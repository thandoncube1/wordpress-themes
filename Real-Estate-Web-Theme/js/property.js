// Get property slug
function getPropertySlugFromUrl() {
    const params = new URLSearchParams(window.location.search);
    return params.get('slug');
}

// Fetch property from slug using REST API
async function getPropertyBySlug(slug) {
    const response = await fetch(`https://electric-quest.localsite.io/wp-json/wp/v2/properties?slug=${slug}&_embed`);
    console.log(response);
    const data = await response.json();
    return data.length > 0 ? data[0] : null;
}

// Load Property Details and Display on Page
async function loadSingleProperty() {
    const container = document.getElementById("property");
    const slug = getPropertySlugFromUrl();
    if (!slug) {
        container.innerHTML = "<p>Property not found</p>";
        return;
    }

    const property = await getPropertyBySlug(slug);
    if (!property) {
        container.innerHTML = "<p>Property not found</p>";
        return;
    }

    const { title, content, acf, link } = property;

    const locations = property._embedded?.['wp:term']?.[0]?.[0]?.name || "N/A";
    const imageUrl = property._embedded?.['wp:featuredmedia']?.[0]?.source_url || "https://placehold.co/600x400?text=No+Image";
    console.log("Image Url: ", imageUrl);


    container.innerHTML = `
        <h1>${title.rendered}</h1>
        <div class="property-details">
            <div class="property-image">
                <img src="${imageUrl}" alt="${title.rendered}">
            </div>
            <div class="property-info">
                <p>${content.rendered}</p>
                <p>Price: $${acf.price}</p>
                <p>Location: ${locations}</p>
                <p>Bedrooms: ${acf.bedrooms}</p>
                <p>Bathrooms: ${acf.bathrooms}</p>
                <p>Area: ${acf.area_sq_m}</p>
                <a href="${link}" target="_blank">View on Website</a>
            </div>
        </div>
    `;

    return container;
}
