<?php

trait SQLCrud{

    public function create(SQLQuery $query){
        //* do sth for create
        echo "create SQLCRud";
    }
    public function update(SQLQuery $query){
        //* do sth for update
    }
    public function delete(SQLQuery $query){
        //* do sth for delete
    }
    public function get(SQLQuery $query){
        //* do sth to get
    }
    public function first(SQLQuery $query){
        //* do sth for first
    }
}