<?php
/**
  * @var \App\View\AppView $this
  */
?>
				
				<div class="row">
                    <div class="col-lg-12">
																		
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
										<td><?= h($user['group']['group_name']) ?></td>
									</tr>
									
									<tr>
										<th scope="row"><?= __('Username') ?></th>
										<td><?= h($user['username']) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Email') ?></th>
										<td><?= h($user['email']) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Fname') ?></th>
										<td><?= h($user['fname']) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Lname') ?></th>
										<td><?= h($user['lname']) ?></td>
									</tr>

									<tr>
										<th scope="row"><?= __('Address') ?></th>
										<td><?= h($user['user_detail']['address']) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('City') ?></th>
										<td><?= h($user['user_detail']['city']) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('PIN Code') ?></th>
										<td><?= h($user['user_detail']['pin_code']) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('State') ?></th>
										<td><?= h($user['user_detail']['state']) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Country') ?></th>
										<td><?= h($user['user_detail']['country']) ?></td>
									</tr>
									<tr>
										<th scope="row"><?= __('Contact') ?></th>
										<td><?= h($user['user_detail']['contact']) ?></td>
									</tr>
									             
                                </tbody>
                            </table>
                        </div>
                    </div>
                                        
                </div>
                <!-- /.row -->

