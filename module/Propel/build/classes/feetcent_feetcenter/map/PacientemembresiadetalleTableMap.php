<?php



/**
 * This class defines the structure of the 'pacientemembresiadetalle' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.feetcent_feetcenter.map
 */
class PacientemembresiadetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'feetcent_feetcenter.map.PacientemembresiadetalleTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('pacientemembresiadetalle');
        $this->setPhpName('Pacientemembresiadetalle');
        $this->setClassname('Pacientemembresiadetalle');
        $this->setPackage('feetcent_feetcenter');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpacientemembresiadetalle', 'Idpacientemembresiadetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idpacientemembresia', 'Idpacientemembresia', 'INTEGER', 'pacientemembresia', 'idpacientemembresia', true, null, null);
        $this->addColumn('pacientemembresiadetalle_fecha', 'PacientemembresiadetalleFecha', 'DATE', true, null, null);
        $this->addForeignKey('idvisitadetalle', 'Idvisitadetalle', 'INTEGER', 'visitadetalle', 'idvisitadetalle', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Pacientemembresia', 'Pacientemembresia', RelationMap::MANY_TO_ONE, array('idpacientemembresia' => 'idpacientemembresia', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Visitadetalle', 'Visitadetalle', RelationMap::MANY_TO_ONE, array('idvisitadetalle' => 'idvisitadetalle', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // PacientemembresiadetalleTableMap
