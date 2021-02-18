<?php

class SQLQuery implements IQuery
{

    use SQLCrud;

    private $table;
    private $bindings;
    private $offset;
    private $limit;
    private $wheres;
    private $action;


    public function setTable(string $table)
    {
        //TODO: do sth for table
        return $this;
    }
    public function addBinding(string $key, string $value)
    {
        //TODO: do sth for binding
        return $this;
    }
    public function removeBinding(string $key)
    {
        //TODO: do sth for remobving binding
        return $this;
    }
    public function setPaginate(int $limit, int $offset)
    {
        //TODO: do sth to set pagination
        return $this;
    }
    public function addWhere(string $column, string $operator, string $value)
    {
        //TODO: do sth for adding
        return $this;
    }
    public function select()
    {
        //select query
        return $this;
    }

    public function compile()
    {
        //TODO: compiling, comes from IQuery
    }


}
