<div class="mobpositions view">
<h2><?php  __('Mobposition');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobposition['Mobposition']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mobile'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($mobposition['Mobile']['name'], array('controller' => 'mobiles', 'action' => 'view', $mobposition['Mobile']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Latitude'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobposition['Mobposition']['latitude']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Longitude'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobposition['Mobposition']['longitude']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Height'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobposition['Mobposition']['height']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Insertion Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mobposition['Mobposition']['insertion_date']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mobposition', true), array('action' => 'edit', $mobposition['Mobposition']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Mobposition', true), array('action' => 'delete', $mobposition['Mobposition']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mobposition['Mobposition']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobpositions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobposition', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobiles', true), array('controller' => 'mobiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile', true), array('controller' => 'mobiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
