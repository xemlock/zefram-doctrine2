<?php

/**
 * Zend Application Resource Doctrine class
 *
 * @author xemlock <xemlock@gmail.com>
 */
class Zefram_Doctrine2_Application_Resource_Doctrine extends Zend_Application_Resource_ResourceAbstract
{
    /**
     * @var Zefram_Doctrine2_Container
     */
    protected $_container;
    
    /**
     * Initializes Doctrine Container
     *
     * @return Zefram_Doctrine2_Container
     */
    public function init()
    {
        $config = $this->getOptions();

        $this->_container = new DoctrineContainer($config);
        Zend_Registry::set('doctrine', $this->_container);

        return $this->_container;
    }
    
    /**
     * Retrieve the Doctrine Container.
     *
     * @return Zefram_Doctrine2_Container
     */
    public function getContainer()
    {
        return $this->_container;
    }
}