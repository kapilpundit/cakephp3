<?php
/**
  * @var \App\View\AppView $this
  */
  
?>

				<div class="row">
                    <div class="col-lg-12">
						<?= $this->Html->link(__('Back'), ['action' => 'index']) ?>
					</div>
				</div>


				<div class="row">
                    <div class="col-lg-12">
						<?= $this->Form->create($tests) ?>
							<div class="table-responsive">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th scope="col"><?= $this->Paginator->sort('id') ?></th>
											<th scope="col"><?= $this->Paginator->sort('name') ?></th>
											<th scope="col"><?= $this->Paginator->sort('email') ?></th>
											<th scope="col"><?= $this->Paginator->sort('age') ?></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($tests as $test): ?>
										<tr>
											<td>
												<?= $this->Number->format($test->id) ?>
												<?= $this->Form->control('id[]', ['class' => 'col-md-4', 'label' =>false, 'value'=>$test->id, 'type'=>'hidden']); ?>
											</td>
											<td>
												<?= h($test->name) ?>
												<?= $this->Form->control('name[]', ['class' => 'col-md-4', 'label' =>false, 'value'=>$test->name]); ?>
											</td>
											<td>
												<?= h($test->email) ?>
												<?= $this->Form->control('email[]', ['class' => 'col-md-4', 'label' =>false, 'value'=>$test->email]); ?>
											</td>
											
											<td>
												<?= h($test->age) ?>
												<?= $this->Form->control('age[]', ['class' => 'col-md-4', 'label' =>false, 'value'=>$test->age]); ?>
											</td>
										</tr>
										<?php endforeach; ?>                                   
									</tbody>
								</table>
							</div>
						
						<?= $this->Form->button(__('Save')) ?>
							
                        <?= $this->Form->end() ?>
							
                    </div>
                    
                    
                    <div class="paginator">
						<ul class="pagination">
							<?= $this->Paginator->first('<< ' . __('first')) ?>
							<?= $this->Paginator->prev('< ' . __('previous')) ?>
							<?= $this->Paginator->numbers() ?>
							<?= $this->Paginator->next(__('next') . ' >') ?>
							<?= $this->Paginator->last(__('last') . ' >>') ?>
						</ul>
						<p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
					</div>
                    
                </div>
                <!-- /.row -->
