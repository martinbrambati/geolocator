<div class="mobpositions index">
	<h2><?php __('Mobpositions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('mobile_id');?></th>
			<th><?php echo $this->Paginator->sort('latitude');?></th>
			<th><?php echo $this->Paginator->sort('longitude');?></th>
			<th><?php echo $this->Paginator->sort('height');?></th>
			<th><?php echo $this->Paginator->sort('insertion_date');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($mobpositions as $mobposition):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $mobposition['Mobposition']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mobposition['Mobile']['name'], array('controller' => 'mobiles', 'action' => 'view', $mobposition['Mobile']['id'])); ?>
		</td>
		<td><?php echo $mobposition['Mobposition']['latitude']; ?>&nbsp;</td>
		<td><?php echo $mobposition['Mobposition']['longitude']; ?>&nbsp;</td>
		<td><?php echo $mobposition['Mobposition']['height']; ?>&nbsp;</td>
		<td><?php echo $mobposition['Mobposition']['insertion_date']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $mobposition['Mobposition']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $mobposition['Mobposition']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $mobposition['Mobposition']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mobposition['Mobposition']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mobposition', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mobiles', true), array('controller' => 'mobiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile', true), array('controller' => 'mobiles', 'action' => 'add')); ?> </li>
	</ul>
</div>