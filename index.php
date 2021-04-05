<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar AJAX</title>
</head>
<body>
    
    <script type="text/javascript">
    
        function load_ajax(url, success){
            // Buat objek xmlhttrequest
            var xhr = new XMLHttpRequest(); 
            xhr.onreadystatechange = function(){
                if(xhr.readyState === 4 && xhr.status === 200){
                    success( xhr.responseText );
                }
            }
            
            xhr.open("GET", url, true);
            xhr.send();
        }

        // Memanggil otomatis
        // load_ajax("data.json", function(){
        //     console.log('berhasil')
        // });

        load_ajax("data.json", function(data){
            console.log(data)
        });

    
    </script>

</body>
</html>