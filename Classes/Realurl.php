<?php

namespace Infabo\KeSearchUrlForwarder;

class Realurl
{
    public function addAutoConfig(array $params, $pObj)
    {
        $params['config']['postVarSets']['_DEFAULT']['term'] = array(
            array(
                'GETvar' => 'tx_kesearch_pi1[sword]',
            ),
        );

        $params['config']['postVarSets']['_DEFAULT']['page'] = array(
            array(
                'GETvar' => 'tx_kesearch_pi1[page]',
            ),
        );

        $params['config']['postVarSets']['_DEFAULT']['sorting'] = array(
            array(
                'GETvar' => 'tx_kesearch_pi1[sortByDir]',
            ),
        );

        $params['config']['postVarSets']['_DEFAULT']['sortBy'] = array(
            array(
                'GETvar' => 'tx_kesearch_pi1[sortByField]',
            ),
        );

        $params['config']['postVarSets']['_DEFAULT']['o'] = array(
            array(
                'GETvar' => 'tx_kesearch_pi1[resetFilters]',
                'valueMap' => array(
                    'reset-filters' => 1
                )
            ),
        );

        return $params['config'];
    }
}