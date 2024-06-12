<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>EDITAR INFORMES</h1>

        <form action="{{ route('achiviement.update', $achiviement->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <label>
                <input type="string" name="graphic" placeholder="grafico del informe">
            </label>
            <label>
                <input type="integer" name="qualification" placeholder="calificacion del informe">
            </label>
            <label>
                <input type="string" name="detaillevelmostplayed" placeholder="detalle nivel mas jugado">
            </label>
            <label>
            <input type="string" name="mostplayedlevellist" placeholder="lista de niveles mas jugados">
        </label>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>

<style>

body {
    font-family: Arial, sans-serif;
    text-align: center;
    margin: 0;
    padding: 0;
    background-color: #FFD166;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    max-width: 500px;
    width: 90%;
    padding: 40px;
    background-color: #EF476F;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

h1 {
    color: #333;
}

label {
    display: block;
    margin-bottom: 20px;
}

input[type="text"],
input[type="number"] {
    width: calc(100% - 22px);
    padding: 15px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
}

button[type="submit"] {
    margin-top: 20px;
    background-color: #4caf50;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 15px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #45a049;
}


</style>

</html>
