<div class="projects view">
<h2><?php  echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Client']['id'], array('controller' => 'clients', 'action' => 'view', $project['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tittle'); ?></dt>
		<dd>
			<?php echo h($project['Project']['tittle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($project['Project']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo h($project['Project']['rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($project['Project']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($project['Project']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Timesheets'), array('controller' => 'timesheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timesheet'), array('controller' => 'timesheets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Invoices'); ?></h3>
	<?php if (!empty($project['Invoice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Invoice Number'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Timesheet Id'); ?></th>
		<th><?php echo __('Total Amount'); ?></th>
		<th><?php echo __('Total Hour'); ?></th>
		<th><?php echo __('Rate'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Invoice'] as $invoice): ?>
		<tr>
			<td><?php echo $invoice['id']; ?></td>
			<td><?php echo $invoice['invoice_number']; ?></td>
			<td><?php echo $invoice['client_id']; ?></td>
			<td><?php echo $invoice['project_id']; ?></td>
			<td><?php echo $invoice['timesheet_id']; ?></td>
			<td><?php echo $invoice['total_amount']; ?></td>
			<td><?php echo $invoice['total_hour']; ?></td>
			<td><?php echo $invoice['rate']; ?></td>
			<td><?php echo $invoice['comment']; ?></td>
			<td><?php echo $invoice['created']; ?></td>
			<td><?php echo $invoice['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'invoices', 'action' => 'view', $invoice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'invoices', 'action' => 'edit', $invoice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'invoices', 'action' => 'delete', $invoice['id']), null, __('Are you sure you want to delete # %s?', $invoice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Timesheets'); ?></h3>
	<?php if (!empty($project['Timesheet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Invoice Number'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('Working Hour'); ?></th>
		<th><?php echo __('Is Invoiced'); ?></th>
		<th><?php echo __('Invoice Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Timesheet'] as $timesheet): ?>
		<tr>
			<td><?php echo $timesheet['id']; ?></td>
			<td><?php echo $timesheet['project_id']; ?></td>
			<td><?php echo $timesheet['invoice_number']; ?></td>
			<td><?php echo $timesheet['start_time']; ?></td>
			<td><?php echo $timesheet['end_time']; ?></td>
			<td><?php echo $timesheet['working_hour']; ?></td>
			<td><?php echo $timesheet['is_invoiced']; ?></td>
			<td><?php echo $timesheet['invoice_date']; ?></td>
			<td><?php echo $timesheet['created']; ?></td>
			<td><?php echo $timesheet['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'timesheets', 'action' => 'view', $timesheet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'timesheets', 'action' => 'edit', $timesheet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'timesheets', 'action' => 'delete', $timesheet['id']), null, __('Are you sure you want to delete # %s?', $timesheet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Timesheet'), array('controller' => 'timesheets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
