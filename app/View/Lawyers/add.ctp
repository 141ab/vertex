<div class="lawyers form">
<?php echo $this->Form->create('Lawyer'); ?>
	<fieldset>
		<legend><?php echo __('Add Lawyer'); ?></legend>
	<?php
		echo $this->Form->input('client_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('qualification');
		echo $this->Form->input('designation');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('country');
		echo $this->Form->input('telephone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lawyers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
