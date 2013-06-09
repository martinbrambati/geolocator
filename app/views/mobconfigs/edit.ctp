<div class="mobconfigs form">
<?php echo $this->Form->create('Mobconfig');?>
	<fieldset>
 		<legend><?php __('Edit Mobconfig'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('activation_url');
		echo $this->Form->input('max_coords_per_post');
		echo $this->Form->input('max_coords_from_gps');
		echo $this->Form->input('post_url');
		echo $this->Form->input('return_height');
		echo $this->Form->input('update_position_time');
		echo $this->Form->input('update_config_time');
		echo $this->Form->input('update_post_time');
		echo $this->Form->input('enable_logging');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Mobconfig.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Mobconfig.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mobconfigs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Mobiles', true), array('controller' => 'mobiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile', true), array('controller' => 'mobiles', 'action' => 'add')); ?> </li>
	</ul>
</div>