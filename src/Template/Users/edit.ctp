<?php
/**
  * @var \App\View\AppView $this
  */
?>				
				
				<div class="row">
                    <div class="col-lg-12">
						
						<ul class="actions-menu">
                            <li class="heading"><?= __('Actions') ?></li>
							<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
                        </ul>
						
						
					</div>
				</div>
				
<div class="row">
	<div class="col-lg-12">
		<?= $this->Form->create($user) ?>
		
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
						<td>							
							<?= $this->Form->control('group_id', ['type'=> 'select', 'options'=>$groups,'empty' => 'Select Group']); ?>
						</td>
					</tr>
					
					<tr>
						<th scope="row"><?= __('Username') ?></th>
						<td><?= $this->Form->control('username', ['class' => 'form-control']); ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Email') ?></th>
						<td><?= $this->Form->control('email', ['class' => 'form-control']); ?></td>
					</tr>
					
					<tr>
						<th scope="row"><?= __('Fname') ?></th>
						<td><?= $this->Form->control('fname', ['class' => 'form-control']); ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Lname') ?></th>
						<td><?= $this->Form->control('lname', ['class' => 'form-control']); ?></td>
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
