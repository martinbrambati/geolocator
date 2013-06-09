<div class="mobpositions form">
<?php echo $this->Form->create('Mobposition');?>
	<fieldset>
 		<legend><?php __('Edit Mobposition'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mobile_id');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');
		echo $this->Form->input('height');
		echo $this->Form->input('insertion_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Mobposition.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Mobposition.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mobpositions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Mobiles', true), array('controller' => 'mobiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile', true), array('controller' => 'mobiles', 'action' => 'add')); ?> </li>
	</ul>
</div>