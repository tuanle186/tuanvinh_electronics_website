function searchProducts(query) {
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
        let suggestions = JSON.parse(this.responseText);
        displaySuggestions(suggestions);
    }

    let data = 'query=' + encodeURIComponent(query);
    xhttp.open('POST', 'search_processing.php', true);
    xhttp.send(data);
}

function displaySuggestions(suggestions) {
    let suggestionsDiv = document.getElementById('suggestions');
    suggestionsDiv.innerHTML = '';

    if (suggestions.length > 0) {
        suggestions.forEach(suggestion => {
            const suggestionElement = document.createElement('div');
            suggestionElement.classList.add('suggestion');
            suggestionElement.textContent = suggestion;

            suggestionElement.addEventListener('click', function() {
                // goto product page.
            });

            suggestionsDiv.appendChild(suggestionElement);
        })
    }

    suggestionsDiv.style.display = suggestions.length > 0 ? 'block' : 'none';
}