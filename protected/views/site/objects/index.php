<ul class="objects">
	<?php foreach($objects as $id => $obj) : ?>
		<li id="object<?php echo $obj->idobjects; ?>">
			<div class="object-image thumbnail">
  			<a class="" href="<?php echo $this->createUrl('/site/objects/view', array('id' => $id)); ?>">
  				<?php /*Картинка объявления*/ $obj->renderExt('fotos', 'main'); ?>
  			</a>
			<div class="up undraw">
  				<p><?php echo $obj->render('country'); ?>
  				<?php echo $obj->render('city'); ?></p>
  				<p class="price"><?php echo $obj->render('price'); ?>
  				<?php echo $obj->render('valuta'); ?></p>
  				<p class="hide"><?php echo $obj->render('desc'); ?></p>
  				<div class="img-up"></div>
				</div>
			</div>
			<div class="clear"></div>
		</li>
	<?php endforeach; ?>
	<div class="clear"></div>
</ul>