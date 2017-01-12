<?php

/* This file is generated by the Parm Generator. github.com/cassell/Parm */

    namespace app\models;

class MPostDaoFactory extends \Parm\DataAccessObjectFactory  implements MPostTable
{
    use MPostTableFunctions;

	final function addStatusTrueBinding() { $this->addBinding(new \Parm\Binding\TrueBooleanBinding('m_post.status')); }
	final function addStatusFalseBinding() { $this->addBinding(new \Parm\Binding\FalseBooleanBinding('m_post.status')); }
	final function addStatusNotTrueBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('m_post.status',1)); }
	final function addStatusNotFalseBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('m_post.status',0));  }


}
