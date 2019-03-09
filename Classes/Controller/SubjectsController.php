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
use TYPO3\CMS\Extbase\Object\ObjectManagerInterface;
use Digicademy\Vocabulary\Domain\Repository\SubjectsRepository;
use Digicademy\Vocabulary\Service\ResolverService;

class SubjectsController extends ActionController
{

    /**
     * @var \Digicademy\Vocabulary\Domain\Repository\SubjectsRepository
     */
    protected $subjectsRepository = null;

    /**
     * @var \Digicademy\Vocabulary\Service\ResolverService
     */
    protected $resolverService;

    /**
     * @param \TYPO3\CMS\Extbase\Object\ObjectManagerInterface            $objectManager
     * @param \Digicademy\Vocabulary\Domain\Repository\SubjectsRepository $subjectsRepository
     * @param \Digicademy\Vocabulary\Service\ResolverService              $resolverService
     */
    public function __construct(
        ObjectManagerInterface $objectManager,
        SubjectsRepository $subjectsRepository,
        ResolverService $resolverService
    ) {
        parent::__construct($objectManager);
        $this->subjectsRepository = $subjectsRepository;
        $this->resolverService = $resolverService;
    }

    /**
     * Displays a list of subjects
     *
     * @return void
     */
    public function listAction()
    {

// @TODO: implement content negotiation switch (set format and type)

// @TODO: subjectsRepository: offset & count
// @TODO: subjectsRepository: recursive storage pids

        $subjects = $this->subjectsRepository->findAll();
        $this->view->assign('subjects', $subjects);

        $this->view->assign('arguments', $this->request->getArguments());

        $this->view->assign('settings', $this->settings);
    }

    /**
     * Returns metadata about a resource (or representations of the resource) in different content types
     *
     * @param \Digicademy\Vocabulary\Domain\Model\Subjects $subject
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @return void
     */
    public function aboutAction(
        \Digicademy\Vocabulary\Domain\Model\Subjects $subject
    ) {

        // if accept header is set get a weighted list of accepted formats
        $httpAcceptHeader = getenv('HTTP_ACCEPT');
        if ($httpAcceptHeader) {
            $acceptedMediaTypes = $this->resolverService->processAcceptHeader($httpAcceptHeader);
        } else {
            $acceptedMediaTypes[] = 'text/html';
        }

        // get format of extbase request and set it first if it is not text/html and doesn't exist in header
        $format = $this->request->getFormat();
        if ($format != 'html' && array_key_exists($format, $this->settings['formatToMediaTypeMapping'])) {
            $formatMediaType = $this->settings['formatToMediaTypeMapping'][$format];
            // if this format is not in the accepted mime types insert it is inserted first place
            if (!in_array($formatMediaType, $acceptedMediaTypes)) {
                array_unshift($acceptedMediaTypes, $formatMediaType);
            }
        }

        foreach ($acceptedMediaTypes as $mediaType) {
            // if resource representations are available go through each representation and
            // check if current media type is among representation content types; if yes call resolver
            if ($subject->getRepresentation()) {
                foreach ($subject->getRepresentation() as $key => $representation) {
                    $contentType = $this->resolverService->processContentType($representation->getContentType());
                    if ($contentType['mime'] == $mediaType) {
                        // call representation resolver service
                        $url = $this->resolverService->resolve($representation, $this->settings['resolver']);
                        if (GeneralUtility::isValidUrl($url)) {
                            $this->redirectToUri($url);
                        }
                    }
                }
            }

            // look up if media type is among formatToMediaTypeMapping (= if yes it is a "generated representation")
            if (in_array($mediaType, $this->settings['formatToMediaTypeMapping'])) {
                $format = array_search($mediaType, $this->settings['formatToMediaTypeMapping']);
                $this->request->setFormat($format);
                break;
            }
        }

// finds and assigns statements where this resource is in subject position
// @TODO: $statements = $this->statementRepository->findBySubject($subject);

        $this->view->assign('subject', $subject);

        $this->view->assign('arguments', $this->request->getArguments());

        $this->view->assign('settings', $this->settings);
    }

}
