<img src="<?php echo base_url('asset/img/global.png')?>" width="150" heigth="150" style="position: fixed; " />
<center>
    <div class="container" style="position: absolute; top: 25%; left: 5%;">
        <div class="omb_login">
            <h3 class="omb_authTitle">Entrar o <a href="<?php echo site_url('Registrar'); ?>" style="text-decoration: underline; color: blue">Registrarse</a></h3>
           
            <div class="row omb_row-sm-offset-3">
                <div class="col-xs-12 col-sm-6">
                    <form action="<?php echo site_url('logear/auth');?>" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" required class="form-control" id="email" name="email" placeholder="Correo electronico">
                        </div>
                        <span class="help-block"></span>

                        <div class="input-group mt-3">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" required id="password" name="password" placeholder="Contraseña">
                        </div>
                        <span class="help-block"></span>
                        <button class="btn btn-lg btn-success btn-block mt-3" type="submit">Entrar</button>
                    </form>
                    <br>
                   
                </div>
            </div>
        </div>
    </div>
    </center>
    <div class="col-md-12 text-center">
        <?php echo $this->session->flashdata('msg');?>
    </div>