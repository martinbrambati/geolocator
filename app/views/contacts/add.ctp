<div class="contacts form">
<?php echo $this->Form->create('Contact');?>
	<fieldset>
 		<legend><?php __('Add Contact'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('surname');
		echo $this->Form->input('address');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contacts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Mobiles', true), array('controller' => 'mobiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile', true), array('controller' => 'mobiles', 'action' => 'add')); ?> </li>
	</ul>
</div>