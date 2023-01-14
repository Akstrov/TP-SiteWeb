<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('header.php'); ?>
    <div class="container">
        <?php include('leftUser.php'); ?>
        <div class="main">
            <label for="recherche">Recherche <input type="text" name="recherche" id="recherche"></label>
            <div class="table-container"></div>
        </div>
    </div>
    <script>
        document.getElementById('recherche').addEventListener('input', function() {
            // $.ajax({
            //     url: 'search.php?n=' + document.getElementById('recherche').value,
            //     type: "GET",
            //     dataType: "JSON",
            //     success: function(data){
            //         var table = '<table class="my-table">';
            //         for(var i = 0; i < data.length; i++){
            //             table += '<tr><td><img width="200px" height="200px" src = "'+data[i].photo+'" ></td><td>'+data[i].nom+ ' '+data[i].prenom +'</td><td><a href = "sendInvite.php?id='+data[i].idUser+'">Ajouter</a></td></tr>';
            //         }
            //         table += '</table>';
            //         $('.table-container').html(table);
            //     }
            // })
            var input = document.getElementById('recherche');
            input.addEventListener('input', function() {
                if (input.value != '') {
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', 'search.php?n=' + input.value, true);
                    xhr.responseType = 'json';
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            var data = xhr.response;
                            var table = '<table class="my-table">';
                            for (var i = 0; i < data.length; i++) {
                                table += '<tr><td><img width="200px" height="200px" src = "' + data[i].photo + '" ></td><td>' + data[i].nom + ' ' + data[i].prenom + '</td><td><a href = "sendInvite.php?id=' + data[i].idUser + '">Ajouter</a></td></tr>';
                            }
                            table += '</table>';
                            document.querySelector('.table-container').innerHTML = table;
                        }
                    };
                    xhr.send();
                } else {
                    document.querySelector('.table-container').innerHTML = '';
                }
            });

        })
    </script>
</body>

</html>