<?php
/**
  * @var \App\View\AppView $this
  */
?>

			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
					
                    <li >
                        <span class="menu-header">Admin Panel<span>
                    </li>

                    <li class="active">
                        <?= $this->Html->link('<i class="fa fa-fw fa-dashboard"></i> Dashboard', 
												["controller"=>"users", "action"=>"Dashboard"], 
												["escape"=>false, "class"=>"myClass"]); ?>
                    </li>
                    
                    <li>
						<a href="javascript:;" data-toggle="collapse" data-target="#user_management">
							<i class="fa fa-fw fa-users"></i> User Management 
							<i class="fa fa-fw fa-caret-down"></i>
						</a>
						
						<ul id="user_management" class="collapse">
                            <li>
                                <?= $this->Html->link('<i class="fa fa-fw fa-user"></i> Users', 
												["controller"=>"users", "action"=>"index"], 
												["escape"=>false, "class"=>"myClass"]); ?>
                            </li>
                            <li>
                                <?= $this->Html->link('<i class="fa fa-fw fa-table"></i> Groups', 
												["controller"=>"groups", "action"=>"index"], 
												["escape"=>false, "class"=>"myClass"]); ?>
                            </li>
                        </ul>                
                        
                        
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
