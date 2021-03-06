<?php
namespace Digicademy\Vocabulary\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Torsten Schrade <Torsten.Schrade@adwmainz.de>, Academy of Sciences and Literature | Mainz
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use Digicademy\Vocabulary\Service\ItemMappingService;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Objects
 */
class Objects extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * type
     *
     * @var \int
     */
    protected $type;

    /**
     * namespace
     *
     * @var \Digicademy\Vocabulary\Domain\Model\Namespaces
     */
    protected $namespace;

    /**
     * value
     *
     * @var \string
     */
    protected $value;

    /**
     * record
     *
     * @var \string
     */
    protected $record;

    /**
     * Generic record
     *
     * @var object
     */
    protected $item = null;

    /**
     * lang
     *
     * @var \string
     */
    protected $lang;

    /**
     * datatype
     *
     * @var \string
     */
    protected $datatype;

    /**
     * Returns the type
     *
     * @return \int $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param \int $type
     *
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the namespace
     *
     * @return \Digicademy\Vocabulary\Domain\Model\Namespaces $namespace
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Sets the namespace
     *
     * @param \Digicademy\Vocabulary\Domain\Model\Namespaces $namespace
     *
     * @return void
     */
    public function setNamespace(\Digicademy\Vocabulary\Domain\Model\Namespaces $namespace)
    {
        $this->namespace = $namespace;
    }

    /**
     * Returns the value
     *
     * @return \string $value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value
     *
     * @param \string $value
     *
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Returns the record
     *
     * @return \string $record
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Sets the record
     *
     * @param \string $record
     *
     * @return void
     */
    public function setRecord($record)
    {
        $this->record = $record;
    }

    /**
     * Loads the item
     *
     * @return mixed
     */
    public function getItem()
    {
        $itemMappingService = GeneralUtility::makeInstance(ItemMappingService::class);
        $item = $itemMappingService->loadItem($this->getRecord());
        $this->setItem($item);
        return $item;
    }

    /**
     * Sets the item
     *
     * @param $item
     *
     * @return void
     */
    public function setItem($item)
    {
        $this->item = $item;
    }

    /**
     * Returns the lang
     *
     * @return \string $lang
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Sets the lang
     *
     * @param \string $lang
     *
     * @return void
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * Returns the datatype
     *
     * @return \string $datatype
     */
    public function getDatatype()
    {
        return $this->datatype;
    }

    /**
     * Sets the datatype
     *
     * @param \string $datatype
     *
     * @return void
     */
    public function setDatatype($datatype)
    {
        $this->datatype = $datatype;
    }

}
