<?php
/**
 * Part of Omega CMS - Model Package
 *
 * @link       https://omegacms.github.io
 * @author     Adriano Giovannini <omegacms@outlook.com>
 * @copyright  Copyright (c) 2022 Adriano Giovannini. (https://omegacms.github.io)
 * @license    https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 */

/**
 * @declare
 */
declare( strict_types = 1 );

/**
 * @namespace
 */
namespace Omega\Model;

/**
 * Relationship class.
 *
 * The `RelationShip` class represents relationship between models. This
 * class facilities relationship between models, providing a way to call
 * method on a ModelCollector instance and act as a callable object or
 * delegate method calls to the underlying ModelCollector.
 *
 * @category    Omega
 * @package     Omega\Model
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2022 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class Relationship
{
    /**
     * ModelCollector object.
     *
     * @var ModelCollector $collector Holds an instance of ModelCollector.
     */
    public ModelCollector $collector;

    /**
     * Method name.
     *
     * @var string $method Holds the method name.
     */
    public string $method;

    /**
     * Relationship class constructor.
     *
     * @param  ModelCollector $collector Holds an instance of ModelCollector.
     * @param  string         $method    Holds the method name.
     * @return void
     */
    public function __construct( ModelCollector $collector, string $method )
    {
        $this->collector = $collector;
        $this->method    = $method;
    }

    /**
     * Call an object as a function.
     *
     * @param  array $parameters Holds an array of parameters.
     * @return mixed
     */
    public function __invoke( array $parameters = [] ) : mixed
    {
        return $this->collector->method( ...$parameters );
    }

    /**
     * Invoking inaccessible methods in an object context.
     *
     * @param  string $method     Holds the method name.
     * @param  array  $parameters Holds an array of parameters.
     * @return mixed
     */
    public function __call( string $method, array $parameters = [] ) : mixed
    {
        return $this->collector->$method( ...$parameters );
    }
}