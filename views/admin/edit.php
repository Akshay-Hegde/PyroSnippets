<section class="title">
	<h4><?php echo sprintf(lang('snippets.edit_snippet'), $snippet->name);?></h4>
</section>

<section class="item">

<?php echo form_open_multipart($this->uri->uri_string(), 'class="crud"'); ?>

<div class="form_inputs">

	<ul>
		<li>
			<label for="name"><?php echo lang('snippets.snippet_content');?> <span>*</span></label>
			<?php echo $this->snippets_m->snippets->{$snippet->type}->form_output($snippet->content); ?>
		</li>
	</ul>

</div><!--.form_input-->
		
	<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'save_exit', 'cancel') )); ?>
	
<?php echo form_close(); ?>

</section>