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

/**
 * Statements
 */
class Statements extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var \string
     */
    protected $title = '';

    /**
     * description
     *
     * @var \string
     */
    protected $description = '';

    /**
     * subject
     *
     * @var \Digicademy\Vocabulary\Domain\Model\Subjects
     */
    protected $subject;

    /**
     * predicate
     *
     * @var \Digicademy\Vocabulary\Domain\Model\Predicates
     */
    protected $predicate;

    /**
     * object
     *
     * @var \Digicademy\Vocabulary\Domain\Model\Objects
     */
    protected $object;

    /**
     * term
     *
     * @var \Digicademy\Vocabulary\Domain\Model\Terms
     */
    protected $term;

    /**
     * Returns the title
     *
     * @return \string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param \string $title
     *
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the description
     *
     * @return \string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param \string $description
     *
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the subject
     *
     * @return \Digicademy\Vocabulary\Domain\Model\Subjects $subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets the subject
     *
     * @param \Digicademy\Vocabulary\Domain\Model\Subjects $subject
     *
     * @return void
     */
    public function setSubject(\Digicademy\Vocabulary\Domain\Model\Subjects $subject)
    {
        $this->subject = $subject;
    }

    /**
     * Returns the predicate
     *
     * @return \Digicademy\Vocabulary\Domain\Model\Predicates $predicate
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * Sets the predicate
     *
     * @param \Digicademy\Vocabulary\Domain\Model\Predicates $predicate
     *
     * @return void
     */
    public function setPredicate(\Digicademy\Vocabulary\Domain\Model\Predicates $predicate)
    {
        $this->predicate = $predicate;
    }

    /**
     * Returns the object
     *
     * @return \Digicademy\Vocabulary\Domain\Model\Objects $object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets the object
     *
     * @param \Digicademy\Vocabulary\Domain\Model\Objects $object
     *
     * @return void
     */
    public function setObject(\Digicademy\Vocabulary\Domain\Model\Objects $object)
    {
        $this->object = $object;
    }

    /**
     * Returns the term
     *
     * @return \Digicademy\Vocabulary\Domain\Model\Terms $term
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Sets the term
     *
     * @param \Digicademy\Vocabulary\Domain\Model\Terms $term
     *
     * @return void
     */
    public function setTerm(\Digicademy\Vocabulary\Domain\Model\Terms $term)
    {
        $this->term = $term;
    }

}
