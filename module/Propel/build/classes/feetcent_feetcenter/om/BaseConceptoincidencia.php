<?php


/**
 * Base class that represents a row from the 'conceptoincidencia' table.
 *
 *
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseConceptoincidencia extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ConceptoincidenciaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ConceptoincidenciaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idconceptoincidencia field.
     * @var        int
     */
    protected $idconceptoincidencia;

    /**
     * The value for the conceptoincidencia_nombre field.
     * @var        string
     */
    protected $conceptoincidencia_nombre;

    /**
     * The value for the conceptoincidencia_descripcion field.
     * @var        string
     */
    protected $conceptoincidencia_descripcion;

    /**
     * @var        PropelObjectCollection|Empleadoreporte[] Collection to store aggregation of Empleadoreporte objects.
     */
    protected $collEmpleadoreportes;
    protected $collEmpleadoreportesPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $empleadoreportesScheduledForDeletion = null;

    /**
     * Get the [idconceptoincidencia] column value.
     *
     * @return int
     */
    public function getIdconceptoincidencia()
    {

        return $this->idconceptoincidencia;
    }

    /**
     * Get the [conceptoincidencia_nombre] column value.
     *
     * @return string
     */
    public function getConceptoincidenciaNombre()
    {

        return $this->conceptoincidencia_nombre;
    }

    /**
     * Get the [conceptoincidencia_descripcion] column value.
     *
     * @return string
     */
    public function getConceptoincidenciaDescripcion()
    {

        return $this->conceptoincidencia_descripcion;
    }

    /**
     * Set the value of [idconceptoincidencia] column.
     *
     * @param  int $v new value
     * @return Conceptoincidencia The current object (for fluent API support)
     */
    public function setIdconceptoincidencia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idconceptoincidencia !== $v) {
            $this->idconceptoincidencia = $v;
            $this->modifiedColumns[] = ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA;
        }


        return $this;
    } // setIdconceptoincidencia()

    /**
     * Set the value of [conceptoincidencia_nombre] column.
     *
     * @param  string $v new value
     * @return Conceptoincidencia The current object (for fluent API support)
     */
    public function setConceptoincidenciaNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->conceptoincidencia_nombre !== $v) {
            $this->conceptoincidencia_nombre = $v;
            $this->modifiedColumns[] = ConceptoincidenciaPeer::CONCEPTOINCIDENCIA_NOMBRE;
        }


        return $this;
    } // setConceptoincidenciaNombre()

    /**
     * Set the value of [conceptoincidencia_descripcion] column.
     *
     * @param  string $v new value
     * @return Conceptoincidencia The current object (for fluent API support)
     */
    public function setConceptoincidenciaDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->conceptoincidencia_descripcion !== $v) {
            $this->conceptoincidencia_descripcion = $v;
            $this->modifiedColumns[] = ConceptoincidenciaPeer::CONCEPTOINCIDENCIA_DESCRIPCION;
        }


        return $this;
    } // setConceptoincidenciaDescripcion()

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

            $this->idconceptoincidencia = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->conceptoincidencia_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->conceptoincidencia_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = ConceptoincidenciaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Conceptoincidencia object", $e);
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
            $con = Propel::getConnection(ConceptoincidenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ConceptoincidenciaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collEmpleadoreportes = null;

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
            $con = Propel::getConnection(ConceptoincidenciaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ConceptoincidenciaQuery::create()
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
            $con = Propel::getConnection(ConceptoincidenciaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ConceptoincidenciaPeer::addInstanceToPool($this);
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

            if ($this->empleadoreportesScheduledForDeletion !== null) {
                if (!$this->empleadoreportesScheduledForDeletion->isEmpty()) {
                    EmpleadoreporteQuery::create()
                        ->filterByPrimaryKeys($this->empleadoreportesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->empleadoreportesScheduledForDeletion = null;
                }
            }

            if ($this->collEmpleadoreportes !== null) {
                foreach ($this->collEmpleadoreportes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA;
        if (null !== $this->idconceptoincidencia) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`idconceptoincidencia`';
        }
        if ($this->isColumnModified(ConceptoincidenciaPeer::CONCEPTOINCIDENCIA_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`conceptoincidencia_nombre`';
        }
        if ($this->isColumnModified(ConceptoincidenciaPeer::CONCEPTOINCIDENCIA_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`conceptoincidencia_descripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `conceptoincidencia` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idconceptoincidencia`':
                        $stmt->bindValue($identifier, $this->idconceptoincidencia, PDO::PARAM_INT);
                        break;
                    case '`conceptoincidencia_nombre`':
                        $stmt->bindValue($identifier, $this->conceptoincidencia_nombre, PDO::PARAM_STR);
                        break;
                    case '`conceptoincidencia_descripcion`':
                        $stmt->bindValue($identifier, $this->conceptoincidencia_descripcion, PDO::PARAM_STR);
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
        $this->setIdconceptoincidencia($pk);

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


            if (($retval = ConceptoincidenciaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collEmpleadoreportes !== null) {
                    foreach ($this->collEmpleadoreportes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = ConceptoincidenciaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdconceptoincidencia();
                break;
            case 1:
                return $this->getConceptoincidenciaNombre();
                break;
            case 2:
                return $this->getConceptoincidenciaDescripcion();
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
        if (isset($alreadyDumpedObjects['Conceptoincidencia'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Conceptoincidencia'][$this->getPrimaryKey()] = true;
        $keys = ConceptoincidenciaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdconceptoincidencia(),
            $keys[1] => $this->getConceptoincidenciaNombre(),
            $keys[2] => $this->getConceptoincidenciaDescripcion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collEmpleadoreportes) {
                $result['Empleadoreportes'] = $this->collEmpleadoreportes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ConceptoincidenciaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdconceptoincidencia($value);
                break;
            case 1:
                $this->setConceptoincidenciaNombre($value);
                break;
            case 2:
                $this->setConceptoincidenciaDescripcion($value);
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
        $keys = ConceptoincidenciaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdconceptoincidencia($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setConceptoincidenciaNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConceptoincidenciaDescripcion($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ConceptoincidenciaPeer::DATABASE_NAME);

        if ($this->isColumnModified(ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA)) $criteria->add(ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA, $this->idconceptoincidencia);
        if ($this->isColumnModified(ConceptoincidenciaPeer::CONCEPTOINCIDENCIA_NOMBRE)) $criteria->add(ConceptoincidenciaPeer::CONCEPTOINCIDENCIA_NOMBRE, $this->conceptoincidencia_nombre);
        if ($this->isColumnModified(ConceptoincidenciaPeer::CONCEPTOINCIDENCIA_DESCRIPCION)) $criteria->add(ConceptoincidenciaPeer::CONCEPTOINCIDENCIA_DESCRIPCION, $this->conceptoincidencia_descripcion);

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
        $criteria = new Criteria(ConceptoincidenciaPeer::DATABASE_NAME);
        $criteria->add(ConceptoincidenciaPeer::IDCONCEPTOINCIDENCIA, $this->idconceptoincidencia);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdconceptoincidencia();
    }

    /**
     * Generic method to set the primary key (idconceptoincidencia column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdconceptoincidencia($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdconceptoincidencia();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Conceptoincidencia (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setConceptoincidenciaNombre($this->getConceptoincidenciaNombre());
        $copyObj->setConceptoincidenciaDescripcion($this->getConceptoincidenciaDescripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getEmpleadoreportes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmpleadoreporte($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdconceptoincidencia(NULL); // this is a auto-increment column, so set to default value
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
     * @return Conceptoincidencia Clone of current object.
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
     * @return ConceptoincidenciaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ConceptoincidenciaPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Empleadoreporte' == $relationName) {
            $this->initEmpleadoreportes();
        }
    }

    /**
     * Clears out the collEmpleadoreportes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Conceptoincidencia The current object (for fluent API support)
     * @see        addEmpleadoreportes()
     */
    public function clearEmpleadoreportes()
    {
        $this->collEmpleadoreportes = null; // important to set this to null since that means it is uninitialized
        $this->collEmpleadoreportesPartial = null;

        return $this;
    }

    /**
     * reset is the collEmpleadoreportes collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmpleadoreportes($v = true)
    {
        $this->collEmpleadoreportesPartial = $v;
    }

    /**
     * Initializes the collEmpleadoreportes collection.
     *
     * By default this just sets the collEmpleadoreportes collection to an empty array (like clearcollEmpleadoreportes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmpleadoreportes($overrideExisting = true)
    {
        if (null !== $this->collEmpleadoreportes && !$overrideExisting) {
            return;
        }
        $this->collEmpleadoreportes = new PropelObjectCollection();
        $this->collEmpleadoreportes->setModel('Empleadoreporte');
    }

    /**
     * Gets an array of Empleadoreporte objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Conceptoincidencia is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     * @throws PropelException
     */
    public function getEmpleadoreportes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadoreportesPartial && !$this->isNew();
        if (null === $this->collEmpleadoreportes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmpleadoreportes) {
                // return empty collection
                $this->initEmpleadoreportes();
            } else {
                $collEmpleadoreportes = EmpleadoreporteQuery::create(null, $criteria)
                    ->filterByConceptoincidencia($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmpleadoreportesPartial && count($collEmpleadoreportes)) {
                      $this->initEmpleadoreportes(false);

                      foreach ($collEmpleadoreportes as $obj) {
                        if (false == $this->collEmpleadoreportes->contains($obj)) {
                          $this->collEmpleadoreportes->append($obj);
                        }
                      }

                      $this->collEmpleadoreportesPartial = true;
                    }

                    $collEmpleadoreportes->getInternalIterator()->rewind();

                    return $collEmpleadoreportes;
                }

                if ($partial && $this->collEmpleadoreportes) {
                    foreach ($this->collEmpleadoreportes as $obj) {
                        if ($obj->isNew()) {
                            $collEmpleadoreportes[] = $obj;
                        }
                    }
                }

                $this->collEmpleadoreportes = $collEmpleadoreportes;
                $this->collEmpleadoreportesPartial = false;
            }
        }

        return $this->collEmpleadoreportes;
    }

    /**
     * Sets a collection of Empleadoreporte objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $empleadoreportes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Conceptoincidencia The current object (for fluent API support)
     */
    public function setEmpleadoreportes(PropelCollection $empleadoreportes, PropelPDO $con = null)
    {
        $empleadoreportesToDelete = $this->getEmpleadoreportes(new Criteria(), $con)->diff($empleadoreportes);


        $this->empleadoreportesScheduledForDeletion = $empleadoreportesToDelete;

        foreach ($empleadoreportesToDelete as $empleadoreporteRemoved) {
            $empleadoreporteRemoved->setConceptoincidencia(null);
        }

        $this->collEmpleadoreportes = null;
        foreach ($empleadoreportes as $empleadoreporte) {
            $this->addEmpleadoreporte($empleadoreporte);
        }

        $this->collEmpleadoreportes = $empleadoreportes;
        $this->collEmpleadoreportesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Empleadoreporte objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Empleadoreporte objects.
     * @throws PropelException
     */
    public function countEmpleadoreportes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadoreportesPartial && !$this->isNew();
        if (null === $this->collEmpleadoreportes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmpleadoreportes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEmpleadoreportes());
            }
            $query = EmpleadoreporteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByConceptoincidencia($this)
                ->count($con);
        }

        return count($this->collEmpleadoreportes);
    }

    /**
     * Method called to associate a Empleadoreporte object to this object
     * through the Empleadoreporte foreign key attribute.
     *
     * @param    Empleadoreporte $l Empleadoreporte
     * @return Conceptoincidencia The current object (for fluent API support)
     */
    public function addEmpleadoreporte(Empleadoreporte $l)
    {
        if ($this->collEmpleadoreportes === null) {
            $this->initEmpleadoreportes();
            $this->collEmpleadoreportesPartial = true;
        }

        if (!in_array($l, $this->collEmpleadoreportes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEmpleadoreporte($l);

            if ($this->empleadoreportesScheduledForDeletion and $this->empleadoreportesScheduledForDeletion->contains($l)) {
                $this->empleadoreportesScheduledForDeletion->remove($this->empleadoreportesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Empleadoreporte $empleadoreporte The empleadoreporte object to add.
     */
    protected function doAddEmpleadoreporte($empleadoreporte)
    {
        $this->collEmpleadoreportes[]= $empleadoreporte;
        $empleadoreporte->setConceptoincidencia($this);
    }

    /**
     * @param	Empleadoreporte $empleadoreporte The empleadoreporte object to remove.
     * @return Conceptoincidencia The current object (for fluent API support)
     */
    public function removeEmpleadoreporte($empleadoreporte)
    {
        if ($this->getEmpleadoreportes()->contains($empleadoreporte)) {
            $this->collEmpleadoreportes->remove($this->collEmpleadoreportes->search($empleadoreporte));
            if (null === $this->empleadoreportesScheduledForDeletion) {
                $this->empleadoreportesScheduledForDeletion = clone $this->collEmpleadoreportes;
                $this->empleadoreportesScheduledForDeletion->clear();
            }
            $this->empleadoreportesScheduledForDeletion[]= clone $empleadoreporte;
            $empleadoreporte->setConceptoincidencia(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Conceptoincidencia is new, it will return
     * an empty collection; or if this Conceptoincidencia has previously
     * been saved, it will retrieve related Empleadoreportes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Conceptoincidencia.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     */
    public function getEmpleadoreportesJoinClinica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadoreporteQuery::create(null, $criteria);
        $query->joinWith('Clinica', $join_behavior);

        return $this->getEmpleadoreportes($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Conceptoincidencia is new, it will return
     * an empty collection; or if this Conceptoincidencia has previously
     * been saved, it will retrieve related Empleadoreportes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Conceptoincidencia.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     */
    public function getEmpleadoreportesJoinEmpleadoRelatedByIdempleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadoreporteQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleado', $join_behavior);

        return $this->getEmpleadoreportes($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Conceptoincidencia is new, it will return
     * an empty collection; or if this Conceptoincidencia has previously
     * been saved, it will retrieve related Empleadoreportes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Conceptoincidencia.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Empleadoreporte[] List of Empleadoreporte objects
     */
    public function getEmpleadoreportesJoinEmpleadoRelatedByIdempleadoreportado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmpleadoreporteQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleadoreportado', $join_behavior);

        return $this->getEmpleadoreportes($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idconceptoincidencia = null;
        $this->conceptoincidencia_nombre = null;
        $this->conceptoincidencia_descripcion = null;
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
            if ($this->collEmpleadoreportes) {
                foreach ($this->collEmpleadoreportes as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collEmpleadoreportes instanceof PropelCollection) {
            $this->collEmpleadoreportes->clearIterator();
        }
        $this->collEmpleadoreportes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ConceptoincidenciaPeer::DEFAULT_STRING_FORMAT);
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
