<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tù puedes | Modifica tu usuario</title>
    <link rel="icon" type="image/x-icon" href="../../../../img/icono/icono.ico">
    <link rel="stylesheet" href="../../../../css/includeHTML/header_admin.css">
    <link rel="stylesheet" href="../../../../css/admin/admin.css">
    <link rel="stylesheet" href="../../../../css/efectos_siempre/scrollbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/presentacion.css">
    <style>
      
      .logo figure img{
          max-width: 100px;
      }

      header{
          height:  78.8px  ;
          background: #ff7d3f;
          width: 100%;
        
      }.d-flex_rapido {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
}
     </style>
</head>
<body   >
    <div data-include="../../../includeHTMLsinPhp/admin/header_admin_alumni.php"></div>
    <br>
    <main>
        <div class="contianerAdmin" style=" max-width: 700px; min-width: 100px;">
            <h1 style="text-align: center;">Modificar usuario</h1>
            <hr>
            <form action="" class="container-main__ada-alumno">
                <div class="wrapper">
                    <input type="radio" name="select" id="option-1" checked>
                    <input type="radio" name="select" id="option-2">
                    <label for="option-1" class="option option-1">
                        <div class="dot"></div>
                        <span>Niño</span>
                        </label>
                    <label for="option-2" class="option option-2">
                        <div class="dot"></div>
                        <span>Niña</span>
                    </label>
                </div>   
                <input type="text" placeholder="Usuario"><br>
                <select name="" id="">
                    <option name="" id="" >Elige su pais</option>
                    <option name="" id="">Argentina</option>
                    <option name="" id="">Bolivia</option>
                    <option name="" id="">Brasil</option>
                    <option name="" id="">Chile</option>
                    <option name="" id="">  Colombia</option>
                    <option name="" id="">Costa Rica</option>
                    <option name="" id="">Cuba</option>
                    <option name="" id="">Ecuador</option>
                    <option name="" id="">El Salvador</option>
                    <option name="" id="">Guatemala</option>
                    <option name="" id="">Haití</option>
                    <option name="" id="">Honduras</option>
                    <option name="" id="">México</option>
                    <option name="" id="">Nicaragua</option>
                    <option name="" id="">Panamá</option>
                    <option name="" id="">Paraguay</option>
                    <option name="" id="">Venezuela</option>
                </select>
                <label for="">Fecha de nacimiento</label>
                <input type="date" placeholder="Fecha de nacimiento">
                <label for="">Valido hasta	</label>
                <input type="date">
                <label for="test" style="text-align: center; margin-right: 0.3rem; ">¿Sabe leer?</label>
                <input type="checkbox" class="test" style="width: auto;"><br>
                <label for="test" style="text-align: center; margin-right: 0.3rem; ">Permisos para que el jugador entre en el aprendizaje.</label>
                <input type="checkbox" class="test" style="width: auto;">
                <input type="password" placeholder="Contraseña">       
                <input type="submit" value="Modificar" class="btn__crear-niños" ><br>
                <a href="../dashboard.php" style="text-align: center; display: block;  color: rgb(220, 55, 55);">Cancelar</a>
            </form>
        </div>
    </main>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div data-include="../../../includeHTMLsinPhp/admin/footer_admin.php"></div>
    <script src="../../../../js/ajax/include-html.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous">
    </script>

</body>
</html>