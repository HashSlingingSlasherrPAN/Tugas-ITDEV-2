document.addEventListener("DOMContentLoaded", function() {
    console.log("Halaman sudah di load")
    getProduct()
})

function getProduct(){
    fetch('https://fakestoreapi.com/products')
        .then(respone => {
            console.log(respone.json())

        })
        .then(data => {
            data = array.forEach(element => {'beforeend',
                `<div class="product-container">
                    <div class="card border-radius">
                        <div class="card-img">
                            <img src="$entity(title)" alt="blackarch">
                        </div>
                        <section>
                            <header>
                                <p class="fw-bold">Black Archlinux</p>
                            </header>
                                <p>Lopem Ipsum Dolor</p>
                                <button class="bg-blue border-radius shadow pad-2">Detail Product</button>
                        </section>
                    </div>`
            });
        })
}