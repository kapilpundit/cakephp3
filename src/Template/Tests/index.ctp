<?php
/**
  * @var \App\View\AppView $this
  */
  
?>

				<div class="row">
                    <div class="col-lg-12">
						<?= $this->Html->link(__('Edit All Tests'), ['action' => 'editAllTests']) ?>
					</div>
				</div>


				<div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
										<th scope="col"><?= $this->Paginator->sort('name') ?></th>
										<th scope="col"><?= $this->Paginator->sort('email') ?></th>
										<th scope="col"><?= $this->Paginator->sort('age') ?></th>
										<th scope="col" class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tests as $test): ?>
									<tr>
										<td><?= $this->Number->format($test->id) ?></td>
										<td><?= h($test->name) ?></td>
										<td><?= h($test->email) ?></td>
										
										<td><?= h($test->age) ?></td>
										<td>
											<?= $this->Html->link(__('View'), ['action' => 'view', $test->id]) ?>
											<?= $this->Html->link(__('Edit'), ['action' => 'edit', $test->id]) ?>
										</td>
									</tr>
									<?php endforeach; ?>                                   
                                </tbody>
                            </table>
                        </div>
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
