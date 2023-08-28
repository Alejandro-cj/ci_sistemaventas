<div class="card radius-10 border-start border-0 border-3 border-info">
    <form action="<?php echo base_url('usuarios/registrar') ?>" method="POST" autocomplete="off">
        <div class="card-body">
            <h6 class="card-title text-center">Registro de usuario</h6>
            <hr>
            <div class="alert border-0 border-start border-5 border-info alert-dismissible fade show py-2">
                <div class="d-flex align-items-center">
                    <div class="font-35 text-info"><i class='bx bx-info-square'></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-info">Advertencia</h6>
                        <div>Todo los campos con <b class="text-danger">*</b> son obligatorios</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php csrf_field(); ?>
            <div class="row p-5">
                <div class="col-lg-3 col-sm-6 mb-2">
                    <label>Usuario <span class="text-danger fw-bold">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" value="<?= set_value('usuario') ?>">
                    </div>
                    <?php if (isset($validation)) { ?>
                        <span class="text-danger font-weight-bold"><?php echo $validation->getError('usuario'); ?></span>
                    <?php } ?>
                </div>
                
                <div class="col-lg-4 col-sm-6 mb-2">
                    <label>Correo <span class="text-danger fw-bold">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="text" id="correo" name="correo" class="form-control" placeholder="Correo" value="<?= set_value('correo') ?>">
                    </div>
                    <?php if (isset($validation)) { ?>
                        <span class="text-danger font-weight-bold"><?php echo $validation->getError('correo'); ?></span>
                    <?php } ?>
                </div>

                <div class="col-lg-5 col-sm-6 mb-2">
                    <label>Nombre <span class="text-danger fw-bold">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-list"></i></span>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value="<?= set_value('nombre') ?>">
                    </div>
                    <?php if (isset($validation)) { ?>
                        <span class="text-danger font-weight-bold"><?php echo $validation->getError('nombre'); ?></span>
                    <?php } ?>
                </div>

                <div class="col-lg-4 col-sm-6 mb-2">
                    <label>Clave <span class="text-danger fw-bold">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="text" id="clave" name="clave" class="form-control" placeholder="Clave">
                    </div>
                    <?php if (isset($validation)) { ?>
                        <span class="text-danger font-weight-bold"><?php echo $validation->getError('clave'); ?></span>
                    <?php } ?>
                </div>

                <div class="col-lg-4 col-sm-6 mb-2">
                    <label>Confirmar clave <span class="text-danger fw-bold">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="text" id="confirmar" name="confirmar" class="form-control" placeholder="Confirmar clave">
                    </div>
                    <?php if (isset($validation)) { ?>
                        <span class="text-danger font-weight-bold"><?php echo $validation->getError('confirmar'); ?></span>
                    <?php } ?>
                </div>

                <div class="col-md-4">
                    <label for="caja">Caja <span class="text-danger fw-bold">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-box"></i></span>

                        <select id="caja" name="caja" class="form-control">
                            <?php foreach ($cajas as $row) { ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['caja']; ?></option>
                            <?php } ?>
                        </select>

                    </div>
                    <?php if (isset($validation)) { ?>
                        <span class="text-danger font-weight-bold"><?php echo $validation->getError('caja'); ?></span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" value="Registrar" class="btn btn-outline-primary">
                <a href="<?php echo base_url('/usuarios') ?>" class="btn btn-outline-danger">Atras</a>
            </div>
        </div>
    </form>
</div>