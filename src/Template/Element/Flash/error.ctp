<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="row">
	<div class="col-lg-12">
		<div class="alert alert-danger alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<i class="fa fa-info-circle"></i>
			<div class="message error"><?= $message ?></div>
			
		</div>
	</div>
</div>
