document.addEventListener("DOMContentLoaded", function() {
    console.log("Halaman sudah di load");
    getProduct();
})

function getProduct(){
    fetch('https://dummyjson.com/products')
        .then(res => res.json())
        .then(data => {
            var container = document.querySelector('#product-container');
            data.products.forEach(product => {
                // product.description = shortText(product.description, 70);
                // product.title = shortText(product.title, 20);
                container.insertAdjacentHTML('beforeend',
                    `<div class="card border-radius">
                        <div class="card-img">
                            <img src="${product.thumbnail}" alt="blackarch">
                        </div>
                        <section>
                            <header>
                                <p class="fw-bold">${product.title}</p>
                            </header>
                                <p>Rp. ${product.price}</p>
                                <p>Stock: ${product.availabilityStatus}</p>
                                <a href="detail/index.html?id=${product.id}">
                                    <button class="bg-blue border-radius shadow pad-2">Detail Produk</button>
                                </a>
                        </section>
                    </div>`
                );
            });
        })
}


// function shortText(text, maxLength) {
//     if (text.length > maxLength) {
//         return text.substring(0, maxLength) + ' ...';
//     } else {
//         return text;
//     }
// }