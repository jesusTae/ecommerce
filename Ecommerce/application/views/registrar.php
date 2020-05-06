<img src="<?php echo base_url('asset/img/global.png')?>" width="150" heigth="150" style="position: fixed; " />
<div class="container" style="position: absolute; top: 5%; left: 5%;">
    <div class="omb_login">
        <h3 class="omb_authTitle"><a href="#">Registrarse</h3>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <label>Nombres</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
                </div>
                <span class="help-block"></span>

                <label>Numero de identificacion</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user-check"></i></span>
                    <input type="text" class="form-control" id="nitter" name="nitter" placeholder="Identificacion del usuario">
                </div>
                <span class="help-block"></span>

                <label>Correo electronico</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo electronico">
                </div>
                <span class="help-block"></span>

                <label>Contraseña</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" id="password" min="8" max="16" name="password" placeholder="Contraseña">
                </div>
                <span class="help-block"></span>

                <label>Repetir Contraseña</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" id="passwordR" min="8" max="16" name="password" placeholder="Repetir Contraseña">
                </div>
                <span class="help-block"></span>

                <label>Telefono</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                </div>
                <span class="help-block"></span>

                <label>Direccion</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direcccion">
                </div>
                <span class="help-block"></span>
                <button class="btn btn-lg btn-success btn-block mt-2" type="button">Registrarse</button>
            </div>
        </div>
    </div>
</div>