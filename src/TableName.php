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
 * TableName class.
 *
 * This `TableName` class represents a table name in the Omgea CMS package.
 * This class encapsulates the name of a database table.
 *
 * @category    Omega
 * @package     Omega\Model
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2022 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class TableName
{
    /**
     * TableName class constructor.
     *
     * @param  string $name Holds the name of the database table.
     * @return void
     */
    public function __construct(
		  public string $name
	) {}
}
