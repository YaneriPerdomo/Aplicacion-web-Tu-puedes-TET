<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu puedes | Perfil</title>
    <link rel="icon" type="image/x-icon" href="../../../../img/icono/icono.ico">
    <link rel="stylesheet" href="../../../../css/includeHTML/header_admin.css">
    <link rel="stylesheet" href="../../../../css/admin/admin.css">
    <link rel="stylesheet" href="../../../../css/efectos_siempre/scrollbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <style>
      
      .logo figure img{
          max-width: 100px;
      }

      header{
          height:  78.8px  ;
          background: #ff7d3f;
          width: 100%;
        
      }
      .d-flex_rapido {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
      }
     </style>
</head>
<body  style="background: rgb(255,239,232) ;">
    <div data-include="../../../includeHTMLsinPhp/admin/header_admin_user.php"></div>
    <br>
    <main>
        <div class="contianerAdmin" >
            <h1>Mi perfil</h1>
            <hr>
            <p>Aquí <span style="color: #fc7c45; font-size: 18px;">puedes editar tu perfil de usuario.</span> Sólo te pido los datos mínimos, pero si puedes completar tu perfil conalgo más de información me será de gran ayuda.</p>
            <form action="" class="container__main--perfil">
                <legend style="text-align: center;">Datos del usuario</legend>
                <label for="">Usuario</label>
                <input type="text" placeholder="Ingrese tu usuario"><br>
                <label for="">Nombre</label>
                <input type="text" placeholder="Ingrese tu nombre"><br>
                <label for="">Apellido</label>
                <input type="text" placeholder="Ingrese tu apellido"><br>
                <label for="">Correo Electronico</label>
                <input type="text" placeholder="Ingrese tu correo electronico"><br>
                <div class="cargos  ">
                    <label for="">Cargo Profesional</label><br>
                    <select name="Cargo" id=""><br>
                      <option value="Docente">Docente</option>
                      <option value="Terapeuta">Terapeuta</option>
                    </select><br>
                </div>
                <label for="">Pais</label>
                <select name="pais" id="">
                    <option name="" id="" >Seleccionar tu pais</option>
                    <option name="Argentina" id="">Argentina</option>
                    <option name="Bolivia" id="">Bolivia</option>
                    <option name="" id="Brasil">Brasil</option>
                    <option name="" id="Chile">Chile</option>
                    <option name="" id="Colombia">Colombia</option>
                    <option name="" id="Costa Rica">Costa Rica</option>
                    <option name="" id="Cuba">Cuba</option>
                    <option name="" id="Ecuador">Ecuador</option>
                    <option name="" id="El Salvador">El Salvador</option>
                    <option name="" id="Guatemala">Guatemala</option>
                    <option name="" id="Haití">Haití</option>
                    <option name="" id="Honduras">Honduras</option>
                    <option name="" id="México">México</option>
                    <option name="" id="">Nicaragua</option>
                    <option name="" id="Nicaragua">Panamá</option>
                    <option name="" id="Paraguay">Paraguay</option>
                    <option name="" id="Venezuela" selected>Venezuela</option>
                </select>
                <div class="container__lugar_trabajo  ">
                    <label for="nombre_centro_escolar" class="nombre_centro_escolar">Nombre del Centro escolar o profesional</label><br data-delete>
                    <input type="text" class="nombre_centro_escolar" name="nombre_centro_escolar" placeholder="Nombre del Centro escolar o profesional" ><br data-br-delete> 
                </div>
                <label for="">Tipo de cuenta Tu Puedes</label>
                <input type="text" value="Profesional"  readonly class="tipo--cuenta">
                <div class="change__clave" style="text-align: center; text-decoration:none">
                    <button type="button" style="color: #309cb7 ; background: none; border: 0; font-weight: 500;" data-bs-toggle="modal" data-bs-target="#exampleModal"> Cambia tu contraseña </button>
                    <br>
                    <small>Cambia tu contraseña en cualquier momento.</small>
                </div>
                <hr>
                <div class="perfil--vistazo" style="display: flex; align-items: center; justify-content: center; flex-wrap:wrap; gap:1rem">
                    <a href="../dashboard.php" class="btn__volver"  style="     border-radius: 0.5rem;   text-align: center; display: block; color: rgb(220, 55, 55);   color: #fc7c45; text-decoration: none; padding: 0.6rem; border: solid 2px #fc7c45;">VOLVER</a>
                    <button type="button" class="btn__delete" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style=" border-radius: 0.5rem; text-align: center; display: block; color: rgb(220, 55, 55);  margin-left: 0.5rem; background: #b67bf9; color: white; text-decoration: none; padding: 0.6rem 0.6rem; cursor: pointer; border:0">ELIMINAR </button>
                    <div class="form-btn-keep">
                        <input type="submit" value="GUARDAR CAMBIOS" class="form__btn--detalles" style="    border-radius: 0.5rem; width: 100%;"><br>
                    </div>
                </div>
            </form>
        </div>
    </main>      
      <!-- Modal Change -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Cambia tu contraseña </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <input type="password" autofocus class="modal__password" placeholder="Contraseña actual">
                <input type="password" class="modal__password" placeholder="Nueva contraseña">
                <input type="password" class="modal__password" placeholder="Confirmar contraseña">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class=" form__btn--detalles" sytle="font-weight: 500" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary ">Guardar cambios</button>
            </div>
          </div>
        </div>
      </div>

      <!--Modal delete-->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="    flex-direction: column;    background: #ff4040; ">
                  <span style="    display: block; width: 1%;     margin-right: 3rem;" class="animation__icon-delete">❌</span>
                  <h1 class="modal-title fs-5 w-100 " id="staticBackdropLabel" style="color: white;text-align: center; ">¿Estás seguro?</h1>
                </div>
                <div class="modal-body">
                <p style="text-align: center;">Mediante esta opción puedes eliminar completamente tu cuenta de <span>Profesional</span> en Tu puedes. <br>

                    Al eliminar tu cuenta, dejarás de tener acceso a Tu puedes tanto a través de la web como de las aplicaciones móviles. Todos los
                    usuarios que hayas dado de alta también serán eliminados por lo que tampoco podrán acceder a la plataforma.
                    <br><br>
                    Para confirmar la eliminación de la cuenta, escribe en el siguiente recuadro ELIMINAR</p>
                    <input type="text" class="write-delete">
                </div>
                <div class="modal-footer d-flex  justify-content-center ">
                    <button type="button" class="btn btn-primary btn__confirmar filter-sepia" style="border: solid 0.2rem #ff1717; background: white; color: #ff1717; border-radius: 0;" disabled >CONFIRMAR</button>
                    <button type="button" class="btn btn-secondary "  style="    background: #ff4040; border: 0; border-radius: 0; padding: 0.7em;" data-bs-dismiss="modal">CANCELAR</button>
                </div>
            </div>
            </div>
      </div>
    <br><br>
    <div data-include="../../../includeHTMLsinPhp/admin/footer_admin.php"></div>
    <script src="../../../../js/admin/profile.js"></script>
    <script src="../../../../js/ajax/include-html.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous">
    </script>
</body>
</html>