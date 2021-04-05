// Asynchronous Callback
function getDataMahasiswa(url, success, error){
    // Buat objek xmlhttrequest
    let xhr = new XMLHttpRequest(); 

    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            success( xhr.responseText );
        } else if (xhr.status === 404) {
            error();
        }
    }
    
    xhr.open("GET", url);
    xhr.send();

    // Memanggil otomatis
    // load_ajax('data.json', success, error);
    getDataMahasiswa("data.json", results => {
        console.log(results)
    }, () => {

    });

}