<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student[]|\Cake\Collection\CollectionInterface $students
 */
?>
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Alunos Registrados</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Card -->
            <div class="col-xl-12">
              <div class="card border-left-primary shadow mb-4">
                <div class="card-body">
                  <a href="<?php echo $base_url; ?>students/add" class="btn btn-danger mb-3"><i class="fas fa-plus-circle"></i> Novo Aluno</a>
                  <div class="table-responsive">
                    <table class="table table-borderless mb-0" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>E-mail</th>
                          <th>Telefone</th>
                          <th>CPF</th>
                          <th>Sexo</th>
                          <th>Nascimento</th>
                          <th>Endereço</th>
                          <th>Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($students as $student): ?>
                        <tr>
                          <td><?php echo h($student->name); ?></td>
                          <td><?php echo h($student->email); ?></td>
                          <td><?php echo h($student->phone); ?></td>
                          <td><?php echo h($student->cpf); ?></td>
                          <td>
                            <?php if(h($student->sex) == 'm') { ?><i class="fas fa-male" style="font-size:22px;color:#2E9AFE;"></i><?php } ?>
                            <?php if(h($student->sex) == 'f') { ?><i class="fas fa-female" style="font-size:22px;color:#FA5882;"></i><?php } ?>
                          </td>
                          <td><?php echo h($student->birth); ?></td>
                          <td>
                            <button type="button" class="btn btn-danger btn-sm" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo h($student->address).', '.h($student->number).', '.h($student->district).', '.h($student->city).', '.h($student->state).', '.h($student->cep); ?>">Endereço</button>
                          </td>
                          <td>
                            <a href="<?php echo $base_url; ?>students/edit/<?php echo h($student->id); ?>" class="text-info"><i class="fas fa-edit"></i></a>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>