function userSearch() {
    const searchBar = document.getElementById('searchbar').value.toLowerCase();
    const toolCards = document.querySelectorAll('.tools-card');

    toolCards.forEach(function (card) {
        const name = card.querySelector('h3').innerHTML.toLowerCase();

        if (name.includes(searchBar)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

document.getElementById('searchbar').addEventListener('input', userSearch);
