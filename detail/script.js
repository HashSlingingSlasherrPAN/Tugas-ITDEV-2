document.addEventListener('DOMContentLoaded', function(){
    var id = getParameter('id');
    renderProduct(id);
})

function getParameter(name){
    var urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}

function renderProduct(id){
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://dummyjson.com/products/'+id);
    xhr.onload = () => {
        if(xhr.status === 200){
            var result = JSON.parse(xhr.responseText);

            document.getElementById('judul').innerHTML = result.title;
            document.getElementById('deskripsi').innerHTML = result.description;
            document.getElementById('harga').innerHTML = result.price;
            document.getElementById('stok').innerHTML = result.stock;
            document.getElementById('berat').innerHTML = result.weight;
            document.getElementById('merk').innerHTML = result.brand;
            document.getElementById('kat').innerHTML = result.category;
            document.getElementById('tag').innerHTML = result.tags;
            document.getElementById('gambar').src = result.thumbnail;
            
        }else{
            console.error('Request Failed. Returned status of' + xhr.status);
        }
    };
    xhr.send();
}
