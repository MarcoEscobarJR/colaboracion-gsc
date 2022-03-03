let price = document.querySelectorAll(".article-price");
let priceBox = document.querySelectorAll(".card-precio");
let category = document.querySelectorAll(".descripcion-categoria");
let productoCard = document.querySelectorAll(".producto-card");

for (let index = 0; index < priceBox.length; index++) {
    const element = priceBox[index];
            

    element.textContent = price[index].textContent;
    productoCard[index].setAttribute('data-category', category[index].textContent);
}