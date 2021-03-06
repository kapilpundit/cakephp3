<?php
/**
  * @var \App\View\AppView $this
  */
?>
				<div class="row">
                    <div class="col-lg-12">
						
						<ul class="actions-menu">
                            <li class="heading"><?= __('Actions') ?></li>
							<li><?= $this->Form->postLink(
									__('Delete'),
									['action' => 'delete', $group->id],
									['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]
								)
							?></li>
							<li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?></li>
                        </ul>
						
						
					</div>
				</div>

				
				<div class="row">
					<div class="col-lg-12">
						<?= $this->Form->create($group) ?>
						
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
										<td><?= $this->Form->control('group_name', ['class' => 'form-control']); ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Prefix') ?></th>
										<td><?= $this->Form->control('prefix', ['class' => 'form-control']); ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Description') ?></th>
										<td><?= $this->Form->control('description', ['class' => 'form-control', 'type'=>'textarea','rows'=>'3']); ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Status') ?></th>
										<td><?= $this->Form->control('status', ['type' => 'checkbox']); ?></td>
									</tr>
								</tbody>
							</table>
						</div>
								
						<?= $this->Form->button(__('Submit')) ?>
						
						<?= $this->Form->end() ?>
					</div>
				</div>				
