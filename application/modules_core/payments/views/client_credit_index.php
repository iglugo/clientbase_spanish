<?php $this->load->view('dashboard/header'); ?>

<?php echo modules::run('payments/payment_widgets/generate_dialog'); ?>

<div class="grid_10" id="content_wrapper">

	<div class="section_wrapper">

		<h3 class="title_black"><?php echo $this->lang->line('account_deposits'); ?>
		<span style="font-size: 60%;">
		<?php $this->load->view('dashboard/btn_add', array('btn_value'=>$this->lang->line('enter_deposit'))); ?>
		</span>
		</h3>

		<?php $this->load->view('dashboard/system_messages'); ?>

		<div class="content toggle no_padding">

			<?php $this->load->view('client_credit_table'); ?>

		</div>

	</div>

</div>

<?php $this->load->view('dashboard/footer'); ?>