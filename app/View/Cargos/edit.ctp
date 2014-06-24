<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Cargo'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Cargo', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabcargos' data-toggle='tab'>cargos</a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabcargos'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>'id',
					));

					echo $this->Form->input('nome', array(
						'label'=>'Nome',
					));

					echo $this->Form->input('habilidade', array(
						'label'=>'Habilidade',
					));

					echo $this->Form->input('salario', array(
						'label'=>'Salário',
					));

					echo $this->Form->input('diasalario', array(
						'label'=>'Dia salário',
					));

					echo $this->Form->input('pontos', array(
						'label'=>'Pontos',
					));

					echo $this->Form->input('descricao', array(
						'label'=>'Descrição',
					));

					echo $this->Form->input('Pessoa', array(
						'label'=>'Pessoas',
					));
				?>
		</div>
	</div>
</div>
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
	
					<?php echo $this->Link->icon('Pessoas', 
						null,
						array('controller' => 'pessoas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>