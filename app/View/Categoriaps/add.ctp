<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Categoriap'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Categoriap'); ?>

	<?php 
	$this->Form->inputDefaults(
		array(
			//'label' => false,
			'class' => 'span12',
		));
	$fields = array(
		'categoriaps'=>array(
			'nome'=> array(
				'label'=>'nome'
			),
			'descricao'=> array(
				'label'=>'descricao'
			),
		),
	);
		echo $this->Table->tabinput($fields);
?>
<div class="row-fluid">
	<div class="form-actions">
		<button type="submit" class="btn btn-info">Save</button>
		<?php 
		echo $this->Html->link('Cancel',
			array('action'=>'index'),
			array('class'=>'btn btn-warning')
		);
?>	</div>	
</div>

<?php $this->start('box'); ?>
	
					<?php echo $this->Link->icon('Patrimonios', 
						null,
						array('controller' => 'patrimonios', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>