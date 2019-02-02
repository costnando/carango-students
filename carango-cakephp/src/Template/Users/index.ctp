<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Usuários do Sistema</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Card -->
            <div class="col-xl-12">
              <div class="card border-left-primary shadow mb-4">
                <div class="card-body">
                  <a href="<?php echo $base_url; ?>users/add" class="btn btn-danger mb-3"><i class="fas fa-plus-circle"></i> Novo Usuário</a>
                  <div class="table-responsive">
                    <table class="table table-borderless mb-0" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Usuário</th>
                          <th>E-mail</th>
                          <th>Permissões</th>
                          <th>Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                          <td><?php if(h($user->username) == $username) { ?><span class="text-danger">(você)</span><?php } ?> @<?php echo h($user->username); ?></td>
                          <td><?php echo h($user->email); ?></td>
                          <td><span class="badge badge-danger"><?php echo h($user->type->name); ?></span></td>
                          <td>
                            <a href="<?php echo $base_url; ?>users/edit/<?php echo h($user->id); ?>" class="text-info"><i class="fas fa-edit"></i></a>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          
          </div>