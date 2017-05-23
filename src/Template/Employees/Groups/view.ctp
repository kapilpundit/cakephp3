<?php
/**
  * @var \App\View\AppView $this
  */
?>

				<div class="row">
                    <div class="col-lg-12">
						
						<ul class="actions-menu">
                            <li class="heading"><?= __('Actions') ?></li>
							<li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
							<li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
							<li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
							<li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
                        </ul>
						
						
					</div>
				</div>

				<div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Property</th>
										<th scope="col">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
										<th scope="row"><?= __('Group Name') ?></th>
										<td><?= h($group->group_name) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Description') ?></th>
										<td><?= h($group->description) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Id') ?></th>
										<td><?= $this->Number->format($group->id) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Created Date') ?></th>
										<td><?= h($group->created_date) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Updated Date') ?></th>
										<td><?= h($group->updated_date) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Status') ?></th>
										<td><?= $group->status ? __('Active') : __('Inactive'); ?></td>
									</tr>                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                                        
                </div>
                <!-- /.row -->
