<option value=""><?php echo \Yii::t('fields', 'NOT_SELECT'); ?></option>
<?php foreach($model->getLists() as $id => $value) : ?>
<option value="<?php echo $id; ?>"><?php echo $value; ?></option>
<?php endforeach; ?>