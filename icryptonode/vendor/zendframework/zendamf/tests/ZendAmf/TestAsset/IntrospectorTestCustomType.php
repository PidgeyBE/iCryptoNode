<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Amf
 */

namespace ZendAmfTest\TestAsset;

class IntrospectorTestCustomType
{
    /**
     * @var string
     */
    public $foo;

    public $baz;

    /**
     * DocBlock without an annotation
     */
    public $bat;

    /**
     * @var bool
     */
    protected $_bar;
}