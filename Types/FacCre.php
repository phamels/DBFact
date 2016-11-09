<?php

namespace Phamels\DBFact\Types;

/**
 * DBFact FacCre class
 *
 * @author Jonas De Keukelaere <jonas@sumocoders.be>
 */
class FacCre extends BaseObject
{
    /**
     * @var string
     */
    public $Document;

    /**
     * @var string
     */
    public $Relatie;

    /**
     * @var string
     */
    public $Adres1;

    /**
     * @var string
     */
    public $Adres2;

    /**
     * @var string
     */
    public $PostCode;

    /**
     * @var string
     */
    public $Plaats;

    /**
     * @var string
     */
    public $Land;

    /**
     * @var \DateTime
     */
    public $DocumentDatum;

    /**
     * @var \DateTime
     */
    public $Vervaldatum;

    /**
     * @var string
     */
    public $Referentie;

    /**
     * @var float
     */
    public $TotaalExcl;

    /**
     * @var float
     */
    public $TotaalBtw;

    /**
     * @var float
     */
    public $TotaalIncl;

    /**
     * @var string
     */
    public $Afgepunt;

    /**
     * @var array
     */
    public $Regel;

    protected $typeMap = [
        'DateTime' => [
            'DocumentDatum', 'VervalDatum',
        ],
        'float' => [
            'TotaalExcl', 'TotaalBtw', 'TotaalIncl',
        ],
        'Collection' => [
            'Regel',
        ],
    ];
}
