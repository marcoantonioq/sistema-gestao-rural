<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Raca'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabRaca' data-toggle='tab'><?php echo __('Raca'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabRaca'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($raca['Raca']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($raca['Raca']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('origem')); ?></dt>
                <dd>
                    <?php echo h($raca['Raca']['origem']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($raca['Raca']['descricao']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Bovinos', 
			'bended_arrow_left',
			array('controller' => 'bovinos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($raca['Bovino'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Bovinos
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Idvenda' => 'Bovino.idvenda',
						'Idcompra' => 'Bovino.idcompra',
						'Id' => 'Bovino.id',
						'Nbrinco' => 'Bovino.nbrinco',
						'Pai' => 'Bovino.pai',
						'Mae' => 'Bovino.mae',
						'Pasto Id' => 'Bovino.pasto_id',
						'Categoriab Id' => 'Bovino.categoriab_id',
						'Sexobovino Id' => 'Bovino.sexobovino_id',
						'Pelagen Id' => 'Bovino.pelagen_id',
						'Nome' => 'Bovino.nome',
						'Nascimento' => 'Bovino.nascimento',
						'Desaleitamento' => 'Bovino.desaleitamento',
						'Preco' => 'Bovino.preco',
						'Descricao' => 'Bovino.descricao',
						'Status' => 'Bovino.status',
						'Cria' => 'Bovino.cria',
						'Created' => 'Bovino.created',
						'Cascosnormais' => 'Bovino.cascosnormais',
						'Updated' => 'Bovino.updated',
			);
			echo $this->Table->createTable(
						'Bovino',
						$raca['Bovino'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

		</div>
</div>
<?php $this->end(); ?>