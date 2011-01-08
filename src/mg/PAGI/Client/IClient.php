<?php
/**
 * AGI Client interface.
 *
 * PHP Version 5
 *
 * @category Pagi
 * @package  Exception
 * @author   Marcelo Gornstein <marcelog@gmail.com>
 * @license  http://www.noneyet.ar/ Apache License 2.0
 * @version  SVN: $Id$
 * @link     http://www.noneyet.ar/
 */
namespace PAGI\Client;

/**
 * AGI Client interface.
 *
 * PHP Version 5
 *
 * @category Pagi
 * @package  Exception
 * @author   Marcelo Gornstein <marcelog@gmail.com>
 * @license  http://www.noneyet.ar/ Apache License 2.0
 * @link     http://www.noneyet.ar/
 */
interface IClient
{
    /**
     * Returns an instance of ClientVariables to access agi variables.
     *
     * @return ClientVariables
     */
    public function getClientVariables();
}