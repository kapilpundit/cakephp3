<?php
/**
  * Layout Template
  */  

$this->assign('title', $title);
$this->assign('sub_title', $sub_title);
$this->assign('breadcrumb', $breadcrumb);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?= $this->element('head'); ?>

</head>

<body>

    <div id="wrapper">
		
		<?= $this->element('header'); ?>
        
        <div id="page-wrapper">

            <div class="container-fluid" style="min-height: 1024px;">
				<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?= $this->fetch('title'); ?> <small> <?= $this->fetch('sub_title'); ?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-building" aria-hidden="true"></i> App
                            </li>
                            <li class="active">
                                <?= $this->fetch('breadcrumb'); ?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="col-lg-12">
                <?= $this->Flash->render(); ?>
                </div>
                <!-- /.row -->
                
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
						<?= $this->fetch('content'); ?>
					</div>
				</div>
                
			</div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?= $this->element('footer'); ?>

</body>

</html>
