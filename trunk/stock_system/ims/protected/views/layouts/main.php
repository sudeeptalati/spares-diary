<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	
	<table><tr>
		<td style="margin:20px; vertical-align:middle;" ><div id="logo" ><?php echo CHtml::encode(Yii::app()->name); ?><br><small>Stock System</small></div></td>
		<td style="margin:20px; text-align:right;" >
	<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/company_logo.png","ballpop",array("width"=>"200", "height"=>"75")); ?>
	</td>
	<tr>
	</table>
	
	
	<div id="header">
		</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				//array('label'=>'Home', 'url'=>array('/site/index')),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Items', 'url'=>array('/items/freeSearch/')),
				array('label'=>'Inbound', 'url'=>array('/items/inboundSearch')),
				array('label'=>'Outbound', 'url'=>array('/items/outboundSearch')),
				array('label'=>'Suppliers', 'url'=>array('/suppliers/admin')),
				array('label'=>'Purchase Order', 'url'=>array('/purchaseOrder/admin')),
				array('label'=>'Items on Order', 'url'=>array('/itemOnOrder/admin')),

				//array('label'=>'My Account', 'url'=>array('/userGroups/admin')),
				//array('label'=>'Login', 'url'=>array('/userGroups'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'My Account', 'url'=>array('/user/'.Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Back Up', 'url'=>array('/site/backup'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),

					
			),
				
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
	
	<table><tr><td>
	<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/rapport_stock_logo.png","ballpop", array("width"=>"170", "height"=>"56.6")); ?>
	</td>
	<td style="text-align:right;">
		Copyright &copy; <?php echo date('Y'); ?> by UK Whitegoods Ltd.<br/>
		All Rights Reserved.<br/>
		System Designed by 
			<a href="mailto:sudeep.talati@gmail.com">Sudeep Talati</a>, 
		  	<a href="mailto:kruthika.bethur@gmail.com">Kruthika Bethur</a>
		  	&amp; Team

			
	</td></tr></table>
</div><!-- footer -->
</div><!-- page -->

</body>
</html>