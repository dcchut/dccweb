<?php

class Application_Model_Post {

    protected $_dbTable;

    public function __construct(array $options = null) {
        $this->_dbTable = new Application_Model_DbTable_Posts();

        if (is_array($options)) {
            $this->setOptions($options);
        }
    }

    protected function getDbTable() {
        return $this->_dbTable;
    }

    public function fetchAll() {
        return $this->getDbTable()->fetchAll();
    }

}