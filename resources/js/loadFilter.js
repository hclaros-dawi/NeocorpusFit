document.getElementById('searchInput').addEventListener('input', function() {
    const searchTerm = this.value.trim();  

    if (searchTerm === "") {
         const currentUrl = window.location.href;
        const newUrl = currentUrl.split('?')[0];  
        window.history.replaceState({}, '', newUrl);  

        location.reload();
    }
});