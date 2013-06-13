<div class="myFiles form">
<?php echo $this->Form->create('MyFile'); ?>
	<fieldset>
		<legend><?php echo __('Edit My File'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('type');
		echo $this->Form->input('size');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MyFile.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MyFile.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List My Files'), array('action' => 'index')); ?></li>
	</ul>
</div>
