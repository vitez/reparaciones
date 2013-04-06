<?php
/*
 * This file is part of NeutronFormBundle
 *
 * (c) Nikolay Georgiev <azazen09@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Neutron\FormBundle\Exception;

class FileHashException extends \InvalidArgumentException implements ExceptionInterface
{
    public function __construct($name)
    {
        parent::__construct(sprintf('File with name "%s" has changed hash', $name));
    }
}