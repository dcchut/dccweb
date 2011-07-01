<?php
namespace dccweb\Core;

class NS {
    protected $ns;
    
    public function __construct(array $ns) {
        $this->ns = $ns;
    }

    public function Get(){
        return implode('\\', $this->ns) . '\\';
    }
}