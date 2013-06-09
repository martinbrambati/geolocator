<div class="contacts view">
<h2><?php  __('Contact');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Surname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['surname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['address']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['email']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact', true), array('action' => 'edit', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Contact', true), array('action' => 'delete', $contact['Contact']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobiles', true), array('controller' => 'mobiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile', true), array('controller' => 'mobiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Mobiles');?></h3>
	<?php if (!empty($contact['Mobile'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Hash'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Mobconfig Id'); ?></th>
		<th><?php __('Phone Number'); ?></th>
		<th><?php __('Contact Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($contact['Mobile'] as $mobile):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $mobile['id'];?></td>
			<td><?php echo $mobile['hash'];?></td>
			<td><?php echo $mobile['name'];?></td>
			<td><?php echo $mobile['mobconfig_id'];?></td>
			<td><?php echo $mobile['phone_number'];?></td>
			<td><?php echo $mobile['contact_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'mobiles', 'action' => 'view', $mobile['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'mobiles', 'action' => 'edit', $mobile['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'mobiles', 'action' => 'delete', $mobile['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mobile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mobile', true), array('controller' => 'mobiles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
