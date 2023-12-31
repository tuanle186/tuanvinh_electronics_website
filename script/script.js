function validateLoginForm() {
    let x = document.forms["loginForm"]["username"].value;
    let y = document.forms["loginForm"]["pwd"].value

    if (x == "" && y == "") {
        alert("Vui lòng điền thông tin đăng nhập")
        return false;
    } else if (x == "") {
        alert("Vui lòng điền tên đăng nhập");
        return false;
    } else if (y == ""){
        alert("Vui lòng điền mật khẩu");
        return false;
    }
}

function loadTextFile() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("3.3.1").innerHTML = this.responseText;
    }
    xhttp.open("GET", "http://localhost/script/ajax_test.txt");
    xhttp.send();
}

function loadProducts() {
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
        let xmlDoc = this.responseXML;
        let products = xmlDoc.getElementsByTagName("product");

        let output =  '<ul>';
        
        for (let i = 0; i < products.length; i++) {
            let productName = products[i].getElementsByTagName("product_name")[0].childNodes[0].nodeValue;
            let productPrice = products[i].getElementsByTagName("price")[0].childNodes[0].nodeValue;

            output += '<li>' + productName + ' - $' + productPrice + '</li>';
        }

        output += '</ul>';
        document.getElementById("3.3.2").innerHTML = output;
    }

    xhttp.open("GET", "http://localhost/script/loadProducts.php");
    xhttp.send();
}

function searchProducts(query) {
    $.ajax({
        type: 'POST',
        url: 'http://localhost/component/search_processing.php',
        data: { query: query },
        success: function(response) {
            displaySuggestions(response);
        }
    });
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
                window.location.href = 'http://localhost/site_products/products.php?q=' + encodeURIComponent(suggestion);
            });

            suggestionsDiv.appendChild(suggestionElement);
        })
    }

    suggestionsDiv.style.display = suggestions.length > 0 ? 'block' : 'none';
}