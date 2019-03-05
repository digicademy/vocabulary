<?php
namespace Digicademy\Vocabulary\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2019 Torsten Schrade <Torsten.Schrade@adwmainz.de>, Academy of Sciences and Literature | Mainz
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

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class SubjectsController extends ActionController
{

    /**
     * subjectsRepository
     *
     * @var \Digicademy\Vocabulary\Domain\Repository\SubjectsRepository
     * @inject
     */
    protected $subjectsRepository = null;


    /**
     * Displays a list of subjects
     *
     * @return void
     */
    public function listAction()
    {

// @TODO: offset & count

// @TODO: recursive storage pids

// @TODO: implement content negotiation switch (set format and type)

        $subjects = $this->subjectsRepository->findAll();
        $this->view->assign('subjects', $subjects);

        $this->view->assign('arguments', $this->request->getArguments());

        $this->view->assign('settings', $this->settings);
    }

    /**
     * Shows metadata about a resource
     *
     * @param \Digicademy\Vocabulary\Domain\Model\Subjects $subject
     *
     * @return void
     */
    public function aboutAction(
        \Digicademy\Vocabulary\Domain\Model\Subjects $subject
    ) {

// @TODO: implement content negotiation switch (set format and type or redirect to representation)

\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($subject, NULL, 5, FALSE, TRUE, FALSE, array(), array());
die();

// @TODO: $statements = $this->statementRepository->findBySubject($subject);

        $this->view->assign('subject', $subject);

        $this->view->assign('arguments', $this->request->getArguments());

        $this->view->assign('settings', $this->settings);
    }

}
