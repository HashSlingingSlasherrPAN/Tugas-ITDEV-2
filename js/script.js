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
            console.log('data: ', data)
        })
}