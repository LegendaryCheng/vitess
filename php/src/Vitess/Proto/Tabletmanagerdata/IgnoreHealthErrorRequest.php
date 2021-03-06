<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: tabletmanagerdata.proto

namespace Vitess\Proto\Tabletmanagerdata {

  class IgnoreHealthErrorRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $pattern = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'tabletmanagerdata.IgnoreHealthErrorRequest');

      // OPTIONAL STRING pattern = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <pattern> has a value
     *
     * @return boolean
     */
    public function hasPattern(){
      return $this->_has(1);
    }
    
    /**
     * Clear <pattern> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\IgnoreHealthErrorRequest
     */
    public function clearPattern(){
      return $this->_clear(1);
    }
    
    /**
     * Get <pattern> value
     *
     * @return string
     */
    public function getPattern(){
      return $this->_get(1);
    }
    
    /**
     * Set <pattern> value
     *
     * @param string $value
     * @return \Vitess\Proto\Tabletmanagerdata\IgnoreHealthErrorRequest
     */
    public function setPattern( $value){
      return $this->_set(1, $value);
    }
  }
}

