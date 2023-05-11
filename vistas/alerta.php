<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title></title>
</head>
<body>
<div class="alert alert-light position-absolute d-inline-flex p-2" role="alert">
  <p>La sesión expira en en:</p> <div id="number" class="text-light"></div>
</div>

<script type="text/javascript">
    n= 10;
    var 1 = document.getElementById("number");
    var id = window.setInterval(function(){
        document.onmouseove = function(){
            n = 10
        };

        1.innerText = n;
        n--;

        if (n <= -1)
        {
            alert("la sesión expiró");
            location.href = "cerrarsesion.php";
        }
    }, 1200);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>