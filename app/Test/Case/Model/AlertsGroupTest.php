<?php
App::uses('AlertsGroup', 'Model');

/**
 * AlertsGroup Test Case
 *
 */
class AlertsGroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alerts_group',
		'app.alert',
		'app.group',
		'app.user',
		'app.sexo',
		'app.pessoa',
		'app.fazenda',
		'app.account',
		'app.calendario',
		'app.categoriacalendario',
		'app.medicamento',
		'app.fabricante',
		'app.patrimonio',
		'app.categoriap',
		'app.compra',
		'app.fornecedore',
		'app.fazendas_fornecedore',
		'app.centralcusto',
		'app.centralcustos_compra',
		'app.custo',
		'app.centralcustos_custo',
		'app.venda',
		'app.produto',
		'app.cliente',
		'app.clientes_fazenda',
		'app.centralcustos_venda',
		'app.bovino',
		'app.pasto',
		'app.retiro',
		'app.fornecimento',
		'app.movbovino',
		'app.pesagen',
		'app.categoriab',
		'app.sexobovino',
		'app.pelagen',
		'app.garrote',
		'app.ic',
		'app.semem',
		'app.evento',
		'app.categoriasevento',
		'app.bovinos_evento',
		'app.doenca',
		'app.eventos_doenca',
		'app.leitepesagen',
		'app.ordenha',
		'app.raca',
		'app.bovinos_raca',
		'app.medicamentos_bovino',
		'app.fazendas_pessoa',
		'app.cargo',
		'app.pessoas_cargo',
		'app.atalho',
		'app.alerts_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlertsGroup = ClassRegistry::init('AlertsGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlertsGroup);

		parent::tearDown();
	}

}
