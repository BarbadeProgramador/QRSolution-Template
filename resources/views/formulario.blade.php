<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f8f8f8;
    font-family: Arial, sans-serif;
}

form {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    /* justify-content: center; */
    text-align: center;
    /* align-items: center; */
}

form label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

form input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    border: 1px solid #ddd;
}

form input[type="file"] {
    margin-bottom: 10px;
}

form input[type="submit"] {
    background-color: #3097D1;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color: #266086;
}

</style>
<body>

<!-- <h2>Formulario de envío</h2> -->

<form action="{{URL::to('/formulario')}}" method="post" enctype="multipart/form-data" >
    @csrf
<h1>QR PDF</h1>

  <label for="">Titulo del documento</label>
  <input type="text" name="textDocument" id="textDocument">

  <label for="texto">Nombre del QR</label><br>
  <input type="text" id="code" name="code"><br>

  <hr>
  
  <label for="qr">Seleccione Imagen QR</label><br>
  <input type="file" id="qr" name="qr"><br>
    <br>
    <br>
  <input type="submit" value="Enviar">

</form>

    
</body>
</html>
