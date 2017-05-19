<?php
/**
  * @var \App\View\AppView $this
  */
?>
				
				<div class="row">
                    <div class="col-lg-12">
						
						<ul class="actions-menu">
                            <li class="heading"><?= __('Actions') ?></li>
							<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
							<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
							<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
							<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
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
										<th scope="row"><?= __('Group') ?></th>
										<td><?= h($user->group->group_name) ?></td>
									</tr>
                                    <tr>
										<th scope="row"><?= __('Username') ?></th>
										<td><?= h($user->username) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Email') ?></th>
										<td><?= h($user->email) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Fname') ?></th>
										<td><?= h($user->fname) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Lname') ?></th>
										<td><?= h($user->lname) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Status') ?></th>
										<td><?= $user->status ? __('Active') : __('Inactive'); ?></td>
									</tr>                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                                        
                </div>
                <!-- /.row -->

