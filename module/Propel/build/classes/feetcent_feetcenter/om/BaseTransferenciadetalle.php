<?php


/**
 * Base class that represents a row from the 'transferenciadetalle' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseTransferenciadetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TransferenciadetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TransferenciadetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idtransferenciadetalle field.
     * @var        int
     */
    protected $idtransferenciadetalle;

    /**
     * The value for the idtransferencia field.
     * @var        int
     */
    protected $idtransferencia;

    /**
     * The value for the idproductoclinica field.
     * @var        int
     */
    protected $idproductoclinica;

    /**
     * The value for the idinsumoclinica field.
     * @var        int
     */
    protected $idinsumoclinica;

    /**
     * The value for the transferenciadetalle_cantidad field.
     * @var        string
     */
    protected $transferenciadetalle_cantidad;

    /**
     * @var        Insumoclinica
     */
    protected $aInsumoclinica;

    /**
     * @var        Productoclinica
     */
    protected $aProductoclinica;

    /**
     * @var        Transferencia
     */
    protected $aTransferencia;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [idtransferenciadetalle] column value.
     *
     * @return int
     */
    public function getIdtransferenciadetalle()
    {

        return $this->idtransferenciadetalle;
    }

    /**
     * Get the [idtransferencia] column value.
     *
     * @return int
     */
    public function getIdtransferencia()
    {

        return $this->idtransferencia;
    }

    /**
     * Get the [idproductoclinica] column value.
     *
     * @return int
     */
    public function getIdproductoclinica()
    {

        return $this->idproductoclinica;
    }

    /**
     * Get the [idinsumoclinica] column value.
     *
     * @return int
     */
    public function getIdinsumoclinica()
    {

        return $this->idinsumoclinica;
    }

    /**
     * Get the [transferenciadetalle_cantidad] column value.
     *
     * @return string
     */
    public function getTransferenciadetalleCantidad()
    {

        return $this->transferenciadetalle_cantidad;
    }

    /**
     * Set the value of [idtransferenciadetalle] column.
     *
     * @param  int $v new value
     * @return Transferenciadetalle The current object (for fluent API support)
     */
    public function setIdtransferenciadetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtransferenciadetalle !== $v) {
            $this->idtransferenciadetalle = $v;
            $this->modifiedColumns[] = TransferenciadetallePeer::IDTRANSFERENCIADETALLE;
        }


        return $this;
    } // setIdtransferenciadetalle()

    /**
     * Set the value of [idtransferencia] column.
     *
     * @param  int $v new value
     * @return Transferenciadetalle The current object (for fluent API support)
     */
    public function setIdtransferencia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtransferencia !== $v) {
            $this->idtransferencia = $v;
            $this->modifiedColumns[] = TransferenciadetallePeer::IDTRANSFERENCIA;
        }

        if ($this->aTransferencia !== null && $this->aTransferencia->getIdtransferencia() !== $v) {
            $this->aTransferencia = null;
        }


        return $this;
    } // setIdtransferencia()

    /**
     * Set the value of [idproductoclinica] column.
     *
     * @param  int $v new value
     * @return Transferenciadetalle The current object (for fluent API support)
     */
    public function setIdproductoclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproductoclinica !== $v) {
            $this->idproductoclinica = $v;
            $this->modifiedColumns[] = TransferenciadetallePeer::IDPRODUCTOCLINICA;
        }

        if ($this->aProductoclinica !== null && $this->aProductoclinica->getIdproductoclinica() !== $v) {
            $this->aProductoclinica = null;
        }


        return $this;
    } // setIdproductoclinica()

    /**
     * Set the value of [idinsumoclinica] column.
     *
     * @param  int $v new value
     * @return Transferenciadetalle The current object (for fluent API support)
     */
    public function setIdinsumoclinica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idinsumoclinica !== $v) {
            $this->idinsumoclinica = $v;
            $this->modifiedColumns[] = TransferenciadetallePeer::IDINSUMOCLINICA;
        }

        if ($this->aInsumoclinica !== null && $this->aInsumoclinica->getIdinsumoclinica() !== $v) {
            $this->aInsumoclinica = null;
        }


        return $this;
    } // setIdinsumoclinica()

    /**
     * Set the value of [transferenciadetalle_cantidad] column.
     *
     * @param  string $v new value
     * @return Transferenciadetalle The current object (for fluent API support)
     */
    public function setTransferenciadetalleCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->transferenciadetalle_cantidad !== $v) {
            $this->transferenciadetalle_cantidad = $v;
            $this->modifiedColumns[] = TransferenciadetallePeer::TRANSFERENCIADETALLE_CANTIDAD;
        }


        return $this;
    } // setTransferenciadetalleCantidad()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->idtransferenciadetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idtransferencia = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idproductoclinica = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idinsumoclinica = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->transferenciadetalle_cantidad = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = TransferenciadetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Transferenciadetalle object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aTransferencia !== null && $this->idtransferencia !== $this->aTransferencia->getIdtransferencia()) {
            $this->aTransferencia = null;
        }
        if ($this->aProductoclinica !== null && $this->idproductoclinica !== $this->aProductoclinica->getIdproductoclinica()) {
            $this->aProductoclinica = null;
        }
        if ($this->aInsumoclinica !== null && $this->idinsumoclinica !== $this->aInsumoclinica->getIdinsumoclinica()) {
            $this->aInsumoclinica = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TransferenciadetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aInsumoclinica = null;
            $this->aProductoclinica = null;
            $this->aTransferencia = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TransferenciadetalleQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TransferenciadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                TransferenciadetallePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aInsumoclinica !== null) {
                if ($this->aInsumoclinica->isModified() || $this->aInsumoclinica->isNew()) {
                    $affectedRows += $this->aInsumoclinica->save($con);
                }
                $this->setInsumoclinica($this->aInsumoclinica);
            }

            if ($this->aProductoclinica !== null) {
                if ($this->aProductoclinica->isModified() || $this->aProductoclinica->isNew()) {
                    $affectedRows += $this->aProductoclinica->save($con);
                }
                $this->setProductoclinica($this->aProductoclinica);
            }

            if ($this->aTransferencia !== null) {
                if ($this->aTransferencia->isModified() || $this->aTransferencia->isNew()) {
                    $affectedRows += $this->aTransferencia->save($con);
                }
                $this->setTransferencia($this->aTransferencia);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = TransferenciadetallePeer::IDTRANSFERENCIADETALLE;
        if (null !== $this->idtransferenciadetalle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TransferenciadetallePeer::IDTRANSFERENCIADETALLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TransferenciadetallePeer::IDTRANSFERENCIADETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idtransferenciadetalle`';
        }
        if ($this->isColumnModified(TransferenciadetallePeer::IDTRANSFERENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`idtransferencia`';
        }
        if ($this->isColumnModified(TransferenciadetallePeer::IDPRODUCTOCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idproductoclinica`';
        }
        if ($this->isColumnModified(TransferenciadetallePeer::IDINSUMOCLINICA)) {
            $modifiedColumns[':p' . $index++]  = '`idinsumoclinica`';
        }
        if ($this->isColumnModified(TransferenciadetallePeer::TRANSFERENCIADETALLE_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`transferenciadetalle_cantidad`';
        }

        $sql = sprintf(
            'INSERT INTO `transferenciadetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idtransferenciadetalle`':
                        $stmt->bindValue($identifier, $this->idtransferenciadetalle, PDO::PARAM_INT);
                        break;
                    case '`idtransferencia`':
                        $stmt->bindValue($identifier, $this->idtransferencia, PDO::PARAM_INT);
                        break;
                    case '`idproductoclinica`':
                        $stmt->bindValue($identifier, $this->idproductoclinica, PDO::PARAM_INT);
                        break;
                    case '`idinsumoclinica`':
                        $stmt->bindValue($identifier, $this->idinsumoclinica, PDO::PARAM_INT);
                        break;
                    case '`transferenciadetalle_cantidad`':
                        $stmt->bindValue($identifier, $this->transferenciadetalle_cantidad, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdtransferenciadetalle($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aInsumoclinica !== null) {
                if (!$this->aInsumoclinica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aInsumoclinica->getValidationFailures());
                }
            }

            if ($this->aProductoclinica !== null) {
                if (!$this->aProductoclinica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProductoclinica->getValidationFailures());
                }
            }

            if ($this->aTransferencia !== null) {
                if (!$this->aTransferencia->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTransferencia->getValidationFailures());
                }
            }


            if (($retval = TransferenciadetallePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = TransferenciadetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdtransferenciadetalle();
                break;
            case 1:
                return $this->getIdtransferencia();
                break;
            case 2:
                return $this->getIdproductoclinica();
                break;
            case 3:
                return $this->getIdinsumoclinica();
                break;
            case 4:
                return $this->getTransferenciadetalleCantidad();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Transferenciadetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Transferenciadetalle'][$this->getPrimaryKey()] = true;
        $keys = TransferenciadetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdtransferenciadetalle(),
            $keys[1] => $this->getIdtransferencia(),
            $keys[2] => $this->getIdproductoclinica(),
            $keys[3] => $this->getIdinsumoclinica(),
            $keys[4] => $this->getTransferenciadetalleCantidad(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aInsumoclinica) {
                $result['Insumoclinica'] = $this->aInsumoclinica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProductoclinica) {
                $result['Productoclinica'] = $this->aProductoclinica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTransferencia) {
                $result['Transferencia'] = $this->aTransferencia->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = TransferenciadetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdtransferenciadetalle($value);
                break;
            case 1:
                $this->setIdtransferencia($value);
                break;
            case 2:
                $this->setIdproductoclinica($value);
                break;
            case 3:
                $this->setIdinsumoclinica($value);
                break;
            case 4:
                $this->setTransferenciadetalleCantidad($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = TransferenciadetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdtransferenciadetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdtransferencia($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdproductoclinica($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdinsumoclinica($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTransferenciadetalleCantidad($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TransferenciadetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(TransferenciadetallePeer::IDTRANSFERENCIADETALLE)) $criteria->add(TransferenciadetallePeer::IDTRANSFERENCIADETALLE, $this->idtransferenciadetalle);
        if ($this->isColumnModified(TransferenciadetallePeer::IDTRANSFERENCIA)) $criteria->add(TransferenciadetallePeer::IDTRANSFERENCIA, $this->idtransferencia);
        if ($this->isColumnModified(TransferenciadetallePeer::IDPRODUCTOCLINICA)) $criteria->add(TransferenciadetallePeer::IDPRODUCTOCLINICA, $this->idproductoclinica);
        if ($this->isColumnModified(TransferenciadetallePeer::IDINSUMOCLINICA)) $criteria->add(TransferenciadetallePeer::IDINSUMOCLINICA, $this->idinsumoclinica);
        if ($this->isColumnModified(TransferenciadetallePeer::TRANSFERENCIADETALLE_CANTIDAD)) $criteria->add(TransferenciadetallePeer::TRANSFERENCIADETALLE_CANTIDAD, $this->transferenciadetalle_cantidad);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(TransferenciadetallePeer::DATABASE_NAME);
        $criteria->add(TransferenciadetallePeer::IDTRANSFERENCIADETALLE, $this->idtransferenciadetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdtransferenciadetalle();
    }

    /**
     * Generic method to set the primary key (idtransferenciadetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdtransferenciadetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdtransferenciadetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Transferenciadetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdtransferencia($this->getIdtransferencia());
        $copyObj->setIdproductoclinica($this->getIdproductoclinica());
        $copyObj->setIdinsumoclinica($this->getIdinsumoclinica());
        $copyObj->setTransferenciadetalleCantidad($this->getTransferenciadetalleCantidad());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdtransferenciadetalle(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Transferenciadetalle Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return TransferenciadetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TransferenciadetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Insumoclinica object.
     *
     * @param                  Insumoclinica $v
     * @return Transferenciadetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInsumoclinica(Insumoclinica $v = null)
    {
        if ($v === null) {
            $this->setIdinsumoclinica(NULL);
        } else {
            $this->setIdinsumoclinica($v->getIdinsumoclinica());
        }

        $this->aInsumoclinica = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Insumoclinica object, it will not be re-added.
        if ($v !== null) {
            $v->addTransferenciadetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Insumoclinica object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Insumoclinica The associated Insumoclinica object.
     * @throws PropelException
     */
    public function getInsumoclinica(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aInsumoclinica === null && ($this->idinsumoclinica !== null) && $doQuery) {
            $this->aInsumoclinica = InsumoclinicaQuery::create()->findPk($this->idinsumoclinica, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInsumoclinica->addTransferenciadetalles($this);
             */
        }

        return $this->aInsumoclinica;
    }

    /**
     * Declares an association between this object and a Productoclinica object.
     *
     * @param                  Productoclinica $v
     * @return Transferenciadetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProductoclinica(Productoclinica $v = null)
    {
        if ($v === null) {
            $this->setIdproductoclinica(NULL);
        } else {
            $this->setIdproductoclinica($v->getIdproductoclinica());
        }

        $this->aProductoclinica = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Productoclinica object, it will not be re-added.
        if ($v !== null) {
            $v->addTransferenciadetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Productoclinica object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Productoclinica The associated Productoclinica object.
     * @throws PropelException
     */
    public function getProductoclinica(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProductoclinica === null && ($this->idproductoclinica !== null) && $doQuery) {
            $this->aProductoclinica = ProductoclinicaQuery::create()->findPk($this->idproductoclinica, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProductoclinica->addTransferenciadetalles($this);
             */
        }

        return $this->aProductoclinica;
    }

    /**
     * Declares an association between this object and a Transferencia object.
     *
     * @param                  Transferencia $v
     * @return Transferenciadetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTransferencia(Transferencia $v = null)
    {
        if ($v === null) {
            $this->setIdtransferencia(NULL);
        } else {
            $this->setIdtransferencia($v->getIdtransferencia());
        }

        $this->aTransferencia = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Transferencia object, it will not be re-added.
        if ($v !== null) {
            $v->addTransferenciadetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Transferencia object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Transferencia The associated Transferencia object.
     * @throws PropelException
     */
    public function getTransferencia(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTransferencia === null && ($this->idtransferencia !== null) && $doQuery) {
            $this->aTransferencia = TransferenciaQuery::create()->findPk($this->idtransferencia, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTransferencia->addTransferenciadetalles($this);
             */
        }

        return $this->aTransferencia;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idtransferenciadetalle = null;
        $this->idtransferencia = null;
        $this->idproductoclinica = null;
        $this->idinsumoclinica = null;
        $this->transferenciadetalle_cantidad = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->aInsumoclinica instanceof Persistent) {
              $this->aInsumoclinica->clearAllReferences($deep);
            }
            if ($this->aProductoclinica instanceof Persistent) {
              $this->aProductoclinica->clearAllReferences($deep);
            }
            if ($this->aTransferencia instanceof Persistent) {
              $this->aTransferencia->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aInsumoclinica = null;
        $this->aProductoclinica = null;
        $this->aTransferencia = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TransferenciadetallePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
