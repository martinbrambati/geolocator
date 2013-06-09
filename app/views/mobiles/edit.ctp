<div class="mobiles form">
<?php echo $this->Form->create('Mobile');?>
	<fieldset>
 		<legend><?php __('Edit Mobile'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('mobconfig_id');
		echo $this->Form->input('phone_number');
		echo $this->Form->input('contact_id');
		echo $this->Form->input('insertion_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Mobile.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Mobile.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mobiles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Mobconfigs', true), array('controller' => 'mobconfigs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobconfig', true), array('controller' => 'mobconfigs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobpositions', true), array('controller' => 'mobpositions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobposition', true), array('controller' => 'mobpositions', 'action' => 'add')); ?> </li>
	</ul>
</div>