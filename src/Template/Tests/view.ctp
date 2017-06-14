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
                        
                        <?php
                        if(!is_null($test)){
                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                
                                <tbody>
									<tr>
										<th>Id</th>
										<td><?= $test->id; ?></td>
									</tr>                                
									<tr>
										<th>Name</th>
										<td><?= $test->name; ?></td>
									</tr>                                
									<tr>
										<th>Email</th>
										<td><?= $test->email; ?></td>
									</tr>                                
									<tr>
										<th>Age</th>
										<td><?= $test->age; ?></td>
									</tr>                                
                                </tbody>
                            </table>
                        </div>
						<?php
						}
						?>
						
                    </div>
                    
                    
                </div>
                <!-- /.row -->
