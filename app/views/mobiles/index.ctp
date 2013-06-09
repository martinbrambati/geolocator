<div class="mobiles index">
	<h2><?php __('Mobiles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('mobconfig_id');?></th>
			<th><?php echo $this->Paginator->sort('phone_number');?></th>
			<th><?php echo $this->Paginator->sort('contact_id');?></th>
			<th><?php echo $this->Paginator->sort('insertion_date');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($mobiles as $mobile):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $mobile['Mobile']['id']; ?>&nbsp;</td>
		<td><?php echo $mobile['Mobile']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mobile['Mobconfig']['name'], array('controller' => 'mobconfigs', 'action' => 'view', $mobile['Mobconfig']['id'])); ?>
		</td>
		<td><?php echo $mobile['Mobile']['phone_number']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mobile['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $mobile['Contact']['id'])); ?>
		</td>
		<td><?php echo $mobile['Mobile']['insertion_date']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $mobile['Mobile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $mobile['Mobile']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $mobile['Mobile']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mobile['Mobile']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Mobile', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mobconfigs', true), array('controller' => 'mobconfigs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobconfig', true), array('controller' => 'mobconfigs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobpositions', true), array('controller' => 'mobpositions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobposition', true), array('controller' => 'mobpositions', 'action' => 'add')); ?> </li>
	</ul>
</div>