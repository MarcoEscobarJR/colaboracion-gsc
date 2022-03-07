if (document.querySelector(".single-page") !== null) {
    let price = document.querySelector(".article-price");
    price.style.display = "none";
    document.querySelector(".price-single").textContent = price.textContent;
}