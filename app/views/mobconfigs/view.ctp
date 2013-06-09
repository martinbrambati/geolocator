<div class="mobconfigs view">
<h2><?php  __('Mobconfig');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobconfig['Mobconfig']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobconfig['Mobconfig']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Activation Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobconfig['Mobconfig']['activation_url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Max Coords Per Post'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobconfig['Mobconfig']['max_coords_per_post']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Max Coords From Gps'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobconfig['Mobconfig']['max_coords_from_gps']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobconfig['Mobconfig']['post_url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Return Height'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobconfig['Mobconfig']['return_height']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Update Position Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobconfig['Mobconfig']['update_position_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Update Config Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobconfig['Mobconfig']['update_config_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Update Post Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobconfig['Mobconfig']['update_post_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Enable Logging'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobconfig['Mobconfig']['enable_logging']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mobconfig', true), array('action' => 'edit', $mobconfig['Mobconfig']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Mobconfig', true), array('action' => 'delete', $mobconfig['Mobconfig']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mobconfig['Mobconfig']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobconfigs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobconfig', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobiles', true), array('controller' => 'mobiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile', true), array('controller' => 'mobiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Mobiles');?></h3>
	<?php if (!empty($mobconfig['Mobile'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Mobconfig Id'); ?></th>
		<th><?php __('Phone Number'); ?></th>
		<th><?php __('Contact Id'); ?></th>
		<th><?php __('Insertion Date'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($mobconfig['Mobile'] as $mobile):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $mobile['id'];?></td>
			<td><?php echo $mobile['name'];?></td>
			<td><?php echo $mobile['mobconfig_id'];?></td>
			<td><?php echo $mobile['phone_number'];?></td>
			<td><?php echo $mobile['contact_id'];?></td>
			<td><?php echo $mobile['insertion_date'];?></td>
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
