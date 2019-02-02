<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Novo Usuário</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Card -->
            <div class="col-xl-12">
              <div class="card border-left-primary shadow mb-4">
                <div class="card-body">
                <?= $this->Form->create($user) ?>
                  <form method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="username">Usuário <span class="text-danger">*</span></label>
                        <input type="text" name="username" class="form-control" id="username">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="email">E-mail <span class="text-danger">*</span></label>
                        <input type="text" name="email" class="form-control" id="email">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="password">Senha <span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control" id="password">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="types_id">Permissão <span class="text-danger">*</span></label>
                        <select name="types_id" class="form-control" id="types_id">
                            <option value="1">Professor</option>
                            <option value="1">Administrador</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group mb-0 text-right">
                      <a href="<?php echo $base_url; ?>users" class="btn btn-primary">Voltar</a>
                      <button type="submit" class="btn btn-danger">Adicionar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>