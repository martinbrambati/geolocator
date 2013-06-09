<div class="mobiles view">
<h2><?php  __('Mobile');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobile['Mobile']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobile['Mobile']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mobconfig'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($mobile['Mobconfig']['name'], array('controller' => 'mobconfigs', 'action' => 'view', $mobile['Mobconfig']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobile['Mobile']['phone_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contact'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($mobile['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $mobile['Contact']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Insertion Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobile['Mobile']['insertion_date']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mobile', true), array('action' => 'edit', $mobile['Mobile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Mobile', true), array('action' => 'delete', $mobile['Mobile']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mobile['Mobile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobiles', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobconfigs', true), array('controller' => 'mobconfigs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobconfig', true), array('controller' => 'mobconfigs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobpositions', true), array('controller' => 'mobpositions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobposition', true), array('controller' => 'mobpositions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Mobpositions');?></h3>
	<?php if (!empty($mobile['Mobposition'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Mobile Id'); ?></th>
		<th><?php __('Latitude'); ?></th>
		<th><?php __('Longitude'); ?></th>
		<th><?php __('Height'); ?></th>
		<th><?php __('Insertion Date'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($mobile['Mobposition'] as $mobposition):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $mobposition['id'];?></td>
			<td><?php echo $mobposition['mobile_id'];?></td>
			<td><?php echo $mobposition['latitude'];?></td>
			<td><?php echo $mobposition['longitude'];?></td>
			<td><?php echo $mobposition['height'];?></td>
			<td><?php echo $mobposition['insertion_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'mobpositions', 'action' => 'view', $mobposition['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'mobpositions', 'action' => 'edit', $mobposition['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'mobpositions', 'action' => 'delete', $mobposition['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mobposition['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mobposition', true), array('controller' => 'mobpositions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
