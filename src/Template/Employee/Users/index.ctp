<?php
/**
  * @var \App\View\AppView $this
  */
  
?>

				<div class="row">
                    <div class="col-lg-12">
						<ul class="actions-menu">
							<li class="heading"><?= __('Actions') ?></li>
							<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
						</ul>
					</div>
				</div>


				<div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
										<th scope="col"><?= $this->Paginator->sort('username') ?></th>
										
										<th scope="col"><?= $this->Paginator->sort('group') ?></th>
										
										<th scope="col"><?= $this->Paginator->sort('email') ?></th>
										<th scope="col"><?= $this->Paginator->sort('status') ?></th>
										<th scope="col" class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user): ?>
									<tr>
										<td><?= $this->Number->format($user->id) ?></td>
										<td><?= h($user->username) ?></td>
										
										<td><?= h($user->group->group_name) ?></td>
										
										<td><?= h($user->email) ?></td>
										<td><?= $user->status ? __('Active') : __('Inactive'); ?></td>
										<td class="actions">
											<?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
											<?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
											<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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