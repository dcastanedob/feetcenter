<?php


/**
 * Base class that represents a query for the 'rol' table.
 *
 *
 *
 * @method RolQuery orderByIdrol($order = Criteria::ASC) Order by the idrol column
 * @method RolQuery orderByRolNombre($order = Criteria::ASC) Order by the rol_nombre column
 * @method RolQuery orderByRolDescripcion($order = Criteria::ASC) Order by the rol_descripcion column
 *
 * @method RolQuery groupByIdrol() Group by the idrol column
 * @method RolQuery groupByRolNombre() Group by the rol_nombre column
 * @method RolQuery groupByRolDescripcion() Group by the rol_descripcion column
 *
 * @method RolQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RolQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RolQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RolQuery leftJoinEmpleadoacceso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleadoacceso relation
 * @method RolQuery rightJoinEmpleadoacceso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleadoacceso relation
 * @method RolQuery innerJoinEmpleadoacceso($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleadoacceso relation
 *
 * @method RolQuery leftJoinRolrecurso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Rolrecurso relation
 * @method RolQuery rightJoinRolrecurso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Rolrecurso relation
 * @method RolQuery innerJoinRolrecurso($relationAlias = null) Adds a INNER JOIN clause to the query using the Rolrecurso relation
 *
 * @method Rol findOne(PropelPDO $con = null) Return the first Rol matching the query
 * @method Rol findOneOrCreate(PropelPDO $con = null) Return the first Rol matching the query, or a new Rol object populated from the query conditions when no match is found
 *
 * @method Rol findOneByRolNombre(string $rol_nombre) Return the first Rol filtered by the rol_nombre column
 * @method Rol findOneByRolDescripcion(string $rol_descripcion) Return the first Rol filtered by the rol_descripcion column
 *
 * @method array findByIdrol(int $idrol) Return Rol objects filtered by the idrol column
 * @method array findByRolNombre(string $rol_nombre) Return Rol objects filtered by the rol_nombre column
 * @method array findByRolDescripcion(string $rol_descripcion) Return Rol objects filtered by the rol_descripcion column
 *
 * @package    propel.generator.feetcent_feetcenter.om
 */
abstract class BaseRolQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRolQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'feetcent_feetcenter';
        }
        if (null === $modelName) {
            $modelName = 'Rol';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RolQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RolQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RolQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RolQuery) {
            return $criteria;
        }
        $query = new RolQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Rol|Rol[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RolPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Rol A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdrol($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Rol A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idrol`, `rol_nombre`, `rol_descripcion` FROM `rol` WHERE `idrol` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Rol();
            $obj->hydrate($row);
            RolPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Rol|Rol[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Rol[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return RolQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RolPeer::IDROL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RolQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RolPeer::IDROL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idrol column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrol(1234); // WHERE idrol = 1234
     * $query->filterByIdrol(array(12, 34)); // WHERE idrol IN (12, 34)
     * $query->filterByIdrol(array('min' => 12)); // WHERE idrol >= 12
     * $query->filterByIdrol(array('max' => 12)); // WHERE idrol <= 12
     * </code>
     *
     * @param     mixed $idrol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RolQuery The current query, for fluid interface
     */
    public function filterByIdrol($idrol = null, $comparison = null)
    {
        if (is_array($idrol)) {
            $useMinMax = false;
            if (isset($idrol['min'])) {
                $this->addUsingAlias(RolPeer::IDROL, $idrol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrol['max'])) {
                $this->addUsingAlias(RolPeer::IDROL, $idrol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RolPeer::IDROL, $idrol, $comparison);
    }

    /**
     * Filter the query on the rol_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByRolNombre('fooValue');   // WHERE rol_nombre = 'fooValue'
     * $query->filterByRolNombre('%fooValue%'); // WHERE rol_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rolNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RolQuery The current query, for fluid interface
     */
    public function filterByRolNombre($rolNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rolNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rolNombre)) {
                $rolNombre = str_replace('*', '%', $rolNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RolPeer::ROL_NOMBRE, $rolNombre, $comparison);
    }

    /**
     * Filter the query on the rol_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByRolDescripcion('fooValue');   // WHERE rol_descripcion = 'fooValue'
     * $query->filterByRolDescripcion('%fooValue%'); // WHERE rol_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rolDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RolQuery The current query, for fluid interface
     */
    public function filterByRolDescripcion($rolDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rolDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rolDescripcion)) {
                $rolDescripcion = str_replace('*', '%', $rolDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RolPeer::ROL_DESCRIPCION, $rolDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Empleadoacceso object
     *
     * @param   Empleadoacceso|PropelObjectCollection $empleadoacceso  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RolQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoacceso($empleadoacceso, $comparison = null)
    {
        if ($empleadoacceso instanceof Empleadoacceso) {
            return $this
                ->addUsingAlias(RolPeer::IDROL, $empleadoacceso->getIdrol(), $comparison);
        } elseif ($empleadoacceso instanceof PropelObjectCollection) {
            return $this
                ->useEmpleadoaccesoQuery()
                ->filterByPrimaryKeys($empleadoacceso->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEmpleadoacceso() only accepts arguments of type Empleadoacceso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empleadoacceso relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RolQuery The current query, for fluid interface
     */
    public function joinEmpleadoacceso($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empleadoacceso');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Empleadoacceso');
        }

        return $this;
    }

    /**
     * Use the Empleadoacceso relation Empleadoacceso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoaccesoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoaccesoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoacceso($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleadoacceso', 'EmpleadoaccesoQuery');
    }

    /**
     * Filter the query by a related Rolrecurso object
     *
     * @param   Rolrecurso|PropelObjectCollection $rolrecurso  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RolQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRolrecurso($rolrecurso, $comparison = null)
    {
        if ($rolrecurso instanceof Rolrecurso) {
            return $this
                ->addUsingAlias(RolPeer::IDROL, $rolrecurso->getIdrol(), $comparison);
        } elseif ($rolrecurso instanceof PropelObjectCollection) {
            return $this
                ->useRolrecursoQuery()
                ->filterByPrimaryKeys($rolrecurso->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRolrecurso() only accepts arguments of type Rolrecurso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Rolrecurso relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RolQuery The current query, for fluid interface
     */
    public function joinRolrecurso($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Rolrecurso');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Rolrecurso');
        }

        return $this;
    }

    /**
     * Use the Rolrecurso relation Rolrecurso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RolrecursoQuery A secondary query class using the current class as primary query
     */
    public function useRolrecursoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRolrecurso($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Rolrecurso', 'RolrecursoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Rol $rol Object to remove from the list of results
     *
     * @return RolQuery The current query, for fluid interface
     */
    public function prune($rol = null)
    {
        if ($rol) {
            $this->addUsingAlias(RolPeer::IDROL, $rol->getIdrol(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
