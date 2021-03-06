<?php

namespace Phamels\DBFact\Types;

/**
 * DBFact ServiceRapport class
 *
 * @author Jonas De Keukelaere <jonas@sumocoders.be>
 */
class ServiceRapport extends BaseObject
{
    /**
     * @var string
     */
    public $ServiceNummer;

    /**
     * @var \DateTime
     */
    public $Datum;

    /**
     * @var string
     */
    public $RelatieNummer;

    /**
     * @var string
     */
    public $RelatieNaam;

    /**
     * @var string
     */
    public $Technieker;

    /**
     * @var array
     */
    public $Statussen;

    protected $typeMap = [
        'DateTime' => [
            'Datum',
        ],
        'Collection' => [
            'Statussen',
        ],
    ];
}
