<?php

namespace Infabo\KeSearchUrlForwarder\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class UrlForwarderController extends ActionController
{
    /**
     * @ignorevalidation
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     */
    public function forwardAction()
    {
        $pageUid = $GLOBALS['TSFE']->id;

        $gp = GeneralUtility::_GP('tx_kesearch_pi1');

        $forwardableParameters = array();

        foreach ($gp as $parameterName => $parameterValue) {
            if ($parameterName === 'sword') {
                $parameterValue = str_replace('/', '+', $parameterValue);
            }
            $forwardableParameters[$parameterName] = $parameterValue;
        }

        $uri = $this->uriBuilder
            ->reset()
            ->setTargetPageUid($pageUid)
            ->setTargetPageType(0)
            ->setArguments(array(
                'tx_kesearch_pi1' => $forwardableParameters
            ))
            ->build();

        $this->redirectToUri($uri);
    }
}
