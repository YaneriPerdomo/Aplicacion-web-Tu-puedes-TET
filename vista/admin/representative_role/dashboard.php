<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu puedes | Panel</title>
    <link rel="icon" type="image/x-icon" href="../../../img/icono/icono.ico">
    <link rel="stylesheet" href="../../../css/include-html/header_admin.css">
    <link rel="stylesheet" href="../../../css/admin/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/admin/dashboard.css">
    <link rel="stylesheet" href="../../../css/efectos_siempre/scrollbar.css">
    <link rel="stylesheet" href="../../../css/admin/tabla.css">
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
<body >
    <div data-include="../../includeHTMLsinPhp/admin/header_admin.php"></div>
    <br>
    <main>
        <div class="container-main">
            <h1>Escritorio</h1>
            <hr>
            <div class="dashboard-search-bar" style="display: flex; align-items: center;">
                <div class="dashboard-search-bar--one">
                        <div class="search-box">
                            <button class="btn-search" style="    margin-top: 0.5rem;"><i class="bi bi-search"></i></button>
                            <input type="text" class="input-search" placeholder="...">
                        </div>    
                </div>
                <div class="dashboard-search-bar--two">
                    <div class="btn">
                        <div class="btn--accion">
                            <a href="./alumni/add.php"><span><i class="bi bi-person-fill-add"></i>+Agregar</span></a>
                        </div>
                    </div>
                </div>
            </div><br>
            <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Usuario</th>
                      <th scope="col">Genero</th>
                      <th scope="col">Edad</th>
                      <th scope="col">Valido Hasta</th>
                      <th scope="col">Ultima sesion</th>
                      <th scope="col">Porcentaje del juego</th>
                      <th scope="col">Fecha de creaciòn</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Operaciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                        <td>Paola</td>
                        <td>Femenina</td>
                        <td>10</td>
                        <td>30/05/2024</td>
                        <td>30/04/2021</td>
                        <td>30%</td>
                        <td>05/12/2019</td>
                        <td>Activo</td>
                      
                        <td>
                        <a href="./alumni/modify.php" id="">Modificar</a><button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmar"><i class="bi bi-trash"></i></button>
                        </td>
                      </tr>
                  </tbody>
                </table>
        </div>
    </main>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div data-include="../../includeHTMLsinPhp/admin/footer_admin.php"></div>

    <div class="modal fade" id="confirmar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <div class="text-center w-100">
                <h1 class="modal-title fs-5 fw-bold " id="exampleModalLabel">¿Estás seguro?</h1>
                </div>
              </div>
              <div class="modal-body">
                <p>Usando esta opción puedes eliminar completamente la cuenta del usuario. <span class="text-danger">Al eliminar su cuenta, ya no tendrá acceso al aprendizaje de Tu puedes.</span></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger">Seguro</button>
              </div>
            </div>
          </div>
    </div>
        
  <script src="../../../js/ajax/include-html.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous">
  </script>
</body>
</html>