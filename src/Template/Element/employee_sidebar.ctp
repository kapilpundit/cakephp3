<?php
/**
  * @var \App\View\AppView $this
  */
?>

			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
					
                    <li >
                        <span class="menu-header">Employee Panel<span>
                    </li>

                    <li class="active">
                        <?= $this->Html->link('<i class="fa fa-fw fa-dashboard"></i> Dashboard', 
												["controller"=>"users", "action"=>"Dashboard"], 
												["escape"=>false, "class"=>"myClass"]); ?>
                    </li>
                    
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
