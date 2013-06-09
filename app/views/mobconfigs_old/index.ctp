<div class="mobconfigs index">
	<h2><?php __('Mobconfigs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('activation_url');?></th>
			<th><?php echo $this->Paginator->sort('max_coords_per_post');?></th>
			<th><?php echo $this->Paginator->sort('max_coords_from_gps');?></th>
			<th><?php echo $this->Paginator->sort('post_url');?></th>
			<th><?php echo $this->Paginator->sort('return_height');?></th>
			<th><?php echo $this->Paginator->sort('update_position_time');?></th>
			<th><?php echo $this->Paginator->sort('update_config_time');?></th>
			<th><?php echo $this->Paginator->sort('update_post_time');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($mobconfigs as $mobconfig):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $mobconfig['Mobconfig']['id']; ?>&nbsp;</td>
		<td><?php echo $mobconfig['Mobconfig']['name']; ?>&nbsp;</td>
		<td><?php echo $mobconfig['Mobconfig']['activation_url']; ?>&nbsp;</td>
		<td><?php echo $mobconfig['Mobconfig']['max_coords_per_post']; ?>&nbsp;</td>
		<td><?php echo $mobconfig['Mobconfig']['max_coords_from_gps']; ?>&nbsp;</td>
		<td><?php echo $mobconfig['Mobconfig']['post_url']; ?>&nbsp;</td>
		<td><?php echo $mobconfig['Mobconfig']['return_height']; ?>&nbsp;</td>
		<td><?php echo $mobconfig['Mobconfig']['update_position_time']; ?>&nbsp;</td>
		<td><?php echo $mobconfig['Mobconfig']['update_config_time']; ?>&nbsp;</td>
		<td><?php echo $mobconfig['Mobconfig']['update_post_time']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $mobconfig['Mobconfig']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $mobconfig['Mobconfig']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $mobconfig['Mobconfig']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mobconfig['Mobconfig']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mobconfig', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mobiles', true), array('controller' => 'mobiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile', true), array('controller' => 'mobiles', 'action' => 'add')); ?> </li>
	</ul>
</div>