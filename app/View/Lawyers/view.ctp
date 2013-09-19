<div class="lawyers view">
<h2><?php  echo __('Lawyer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lawyer['Lawyer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lawyer['Client']['id'], array('controller' => 'clients', 'action' => 'view', $lawyer['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($lawyer['Lawyer']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($lawyer['Lawyer']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qualification'); ?></dt>
		<dd>
			<?php echo h($lawyer['Lawyer']['qualification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Designation'); ?></dt>
		<dd>
			<?php echo h($lawyer['Lawyer']['designation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($lawyer['Lawyer']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($lawyer['Lawyer']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($lawyer['Lawyer']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($lawyer['Lawyer']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($lawyer['Lawyer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($lawyer['Lawyer']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lawyer'), array('action' => 'edit', $lawyer['Lawyer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lawyer'), array('action' => 'delete', $lawyer['Lawyer']['id']), null, __('Are you sure you want to delete # %s?', $lawyer['Lawyer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lawyers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lawyer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
