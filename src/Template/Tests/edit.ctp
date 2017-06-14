<?php
/**
  * @var \App\View\AppView $this
  */
  //echo get_current_user();
?>

				<div class="row">
                    <div class="col-lg-12">
						<?= $this->Html->link(__('Back'), ['action' => 'index']) ?>
					</div>
				</div>


				<div class="row">
                    <div class="col-lg-12">
                        
                        <?php
                        if(!is_null($test)){
                        ?>
                        
                        <?= $this->Form->create($test, ['type' => 'file']) ?>
							<div class="table-responsive">
								<table class="table table-bordered table-hover">
									
									<tbody>
										<tr>
											<th>Id</th>
											<td><?= $test->id; ?></td>
										</tr>                                
										<tr>
											<th>Name</th>
											<td><?= $this->Form->control('name', ['class' => 'form-control', 'label' =>false]); ?></td>
										</tr>                                
										<tr>
											<th>Email</th>
											<td><?= $this->Form->control('email', ['class' => 'form-control', 'label' =>false]); ?></td>
										</tr>                                
										<tr>
											<th>Age</th>
											<td><?= $this->Form->control('age', ['class' => 'form-control', 'label' =>false, 'min' => 5]); ?></td>
										</tr>                                
										<tr>
											<th>Image</th>
											<td>
												<?= $this->Html->image('uploads/tests/'.$test->image, ['alt' => 'No Image']); ?>
												<?php echo $this->Form->control('file', ['type' => 'file', 'label'=>false]); ?>
												<?php echo $this->Form->control('remove_image', ['type' => 'checkbox', 'label'=>'Remove Image']); ?>
											</td>
										</tr>                                
									</tbody>
								</table>
							</div>
							
							<?= $this->Form->button(__('Submit')) ?>
							
                        <?= $this->Form->end() ?>
                        
						<?php
						}
						?>
						
                    </div>
                    
                    
                </div>
                <!-- /.row -->
