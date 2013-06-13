<div class="myFiles view">
<h2><?php  echo __('My File'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($myFile['MyFile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($myFile['MyFile']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($myFile['MyFile']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($myFile['MyFile']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($myFile['MyFile']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($myFile['MyFile']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($myFile['MyFile']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit My File'), array('action' => 'edit', $myFile['MyFile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete My File'), array('action' => 'delete', $myFile['MyFile']['id']), null, __('Are you sure you want to delete # %s?', $myFile['MyFile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List My Files'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New My File'), array('action' => 'add')); ?> </li>
	</ul>
</div>
