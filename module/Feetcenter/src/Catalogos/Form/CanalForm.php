<?php

namespace Catalogos\Form;

use Zend\Form\Form;

class CanalForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('insumosForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'canalcomunicacion_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'canalcomunicacion_descripcion',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));

 
    }
}