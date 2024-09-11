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
            document.getElementById('gambar').src = result.thumbnail;
            
        }else{
            console.error('Request Failed. Returned status of' + xhr.status);
        }
    };
    xhr.send();
}
