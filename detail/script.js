document.addEventListener('DOMContentLoaded', function(){
    var id = getParameter('id');
    renderProduct(id);
})

function getParameter(name){
    var urlParams = new URLSearchParams(window.location.search)
    return urlParams.get(name)
}

function renderProduct(id){
    const xmlHttpReq = XMLHttpRequest();
    xmlHttpReq.open('GET', 'https://dummyjson.com/products/' + id);
    xmlHttpReq.onload = () => {
        if(xmlHttpReq.status === 200){
            var result = JSON.parse(xmlHttpReq.responseText);

            document.getElementById('title').innerHTML = result.title;
            document.getElementById('description').innerHTML = result.description;
            document.getElementById('thumbnail').src = result.thumbnail;
            
        }else{
            console.error('Request Failed. Returned status of' + xmlHttpReq.status);
        }
    };
    xmlHttpReq.send();
}