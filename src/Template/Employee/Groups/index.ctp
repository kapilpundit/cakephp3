<?php
/**
  * @var \App\View\AppView $this
  */
  
?>

				<div class="row">
                    <div class="col-lg-12">
						<ul class="actions-menu">
							<li class="heading"><?= __('Actions') ?></li>
							<li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?></li>
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
										<th scope="col"><?= $this->Paginator->sort('group_name') ?></th>
										<th scope="col"><?= $this->Paginator->sort('description') ?></th>
										<th scope="col"><?= $this->Paginator->sort('created_date') ?></th>
										<th scope="col"><?= $this->Paginator->sort('updated_date') ?></th>
										<th scope="col"><?= $this->Paginator->sort('status') ?></th>
										<th scope="col" class="actions"><?= __('Actions') ?></th>
									</tr>
                                </thead>
                                <tbody>
									<?php foreach ($groups as $group): ?>
									<tr>
										<td><?= $this->Number->format($group->id) ?></td>
										<td><?= h($group->group_name) ?></td>
										<td><?= h($group->description) ?></td>
										<td><?= h($group->created_date) ?></td>
										<td><?= h($group->updated_date) ?></td>
										<td><?= h($group->status)? __('Active') : __('Inactive') ?></td>
										<td class="actions">
											<?= $this->Html->link(__('View'), ['action' => 'view', $group->id]) ?>
											<?= $this->Html->link(__('Edit'), ['action' => 'edit', $group->id]) ?>
											<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?>
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
