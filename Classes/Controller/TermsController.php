<?php
namespace Digicademy\Vocabulary\Controller;

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

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * TermsController
 */
class TermsController extends ActionController
{

    /**
     * termsRepository
     *
     * @var \Digicademy\Vocabulary\Domain\Repository\TermsRepository
     * @inject
     */
    protected $termsRepository = null;


    /**
     * lists selected terms
     *
     * @return void
     */
    public function listSelectedTermsAction()
    {
        if ($selectedTerms = $this->settings['general']['selectedTerms']) {
            $selectedTermsList = GeneralUtility::intExplode(',', $selectedTerms);
            $selectedTermsResult = array();
            foreach ($selectedTermsList as $selectedTerm) {
                $selectedTermsResult[] = $this->termsRepository->findByUid($selectedTerm);
            }
            $this->view->assign('selectedTerms', $selectedTermsResult);
        }
        $this->view->assign('arguments', $this->request->getArguments());
    }

}
