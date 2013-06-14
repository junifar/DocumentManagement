<div class="myFiles form">
<?php echo $this->Form->create('MyFile',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add My File'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('type');
		echo $this->Form->input('size');
		echo $this->Form->input('data', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List My Files'), array('action' => 'index')); ?></li>
	</ul>
</div>
