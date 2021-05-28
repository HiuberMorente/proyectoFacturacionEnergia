 <div class="login-page">
   <div class="login-box">

     <div class="card">
       <div class="card-body login-card-body">
         <div class="login-logo">
           <img
           	src="/Views/img/plantilla/bomb.png"
           	alt="logo login"
           	class="img-fluid" style="padding: 0 100px 0
           100px">
         </div>
         <p class="login-box-msg text-gray">
           <strong>Ingresar al sistema</strong>
         </p>

         <form method="post">

           <div class="input-group mb-3">
             <label for="ingUsuario"></label>
             <input
               type="text"
               class="form-control"
               placeholder="Usuario"
               id="ingUsuario"
               name="ingUsuario" required>

             <div class="input-group-append">
               <div class="input-group-text">
                 <span class="fas fa-user"></span>
               </div>
             </div>
           </div>

           <div class="input-group mb-3">
             <label for="ingPassword"></label>
             <input
               type="password"
               class="form-control"
               placeholder="Contraseña"
               name="ingPassword"
               id="ingPassword">

             <div class="input-group-append">
               <div class="input-group-text">
                 <span class="fas fa-lock"></span>
               </div>
             </div>
           </div>


           <div class="col-4">
             <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
           </div>

           <?php

            $login = new ReflectionMethod('UsuariosControllers', 'controllerUsuarioIngreso');
             try {
               $login->invoke(new UsuariosControllers());
             } catch (ReflectionException $e) {

             }

           ?>

         </form>


       </div>


     </div>

   </div>
 </div>