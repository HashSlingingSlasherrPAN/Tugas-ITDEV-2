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
                                <p>${product.description}</p>
                                <button class="bg-blue border-radius shadow pad-2">Detail Product</button>
                        </section>
                    </div>`
                );
            });
        })
}

