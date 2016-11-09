<?php

namespace Phamels\DBFact\Types;

/**
 * DBFact Rule class
 *
 * @author Pieter Hamels <pieter@webxtend.eu>
 */

class Rule extends BaseObject
{

    /**
     * @var int
     */
    public $Id;

    /**
     * @var int
     */
    public $Groep;

    /**
     * @var int
     */
    public $BaseGroep;

    /**
     * @var int
     */
    public $ArtCode;

    /**
     * @var int
     */
    public $RelNum;

    /**
     * @var float
     */
    public $NettoExclBtw;

    /**
     * @var float
     */
    public $NettoInclBtw;

    /**
     * @var float
     */
    public $BrutoExclBtw;

    /**
     * @var float
     */
    public $BrutoInclBtw;

    /**
     * @var float
     */
    public $Korting;

    /**
     * @var float
     */
    public $ExtraKorting;

    /**
     * @var float
     */
    public $KortingExclBtw;

    /**
     * @var float
     */
    public $KortingInclBtw;

    /**
     * @var int
     */
    public $ValutaCode;

    /**
     * @var string
     */
    public $ValutaOmschr;

    /**
     * @var float
     */
    public $ValutaBedrag;

    /**
     * @var float
     */
    public $Aantal;

    /**
     * @var float
     */
    public $ExtraGratisAantal;

    /**
     * @var float
     */
    public $NettoExclBtwGemiddeld;

    /**
     * @var int
     */
    public $VerpakId;

    /**
     * @var string
     */
    public $VerpakOmschr1;

    /**
     * @var string
     */
    public $VerpakOmschr2;

    /**
     * @var string
     */
    public $VerpakOmschr3;

    /**
     * @var string
     */
    public $StaffelOmschr1;

    /**
     * @var string
     */
    public $StaffelOmschr2;

    /**
     * @var string
     */
    public $StaffelOmschr3;

    /**
     * @var string
     */
    public $StaffelOmschr4;

    protected $typeMap = [

        'int' => [
            'Id', 'Groep', 'BaseGroep', 'ArtCode', 'RelNum', 'ValutaCode', 'VerpakId'
        ],

        'float' => [
            'NettoExclBtw', 'NettoInclBtw', 'BrutoExclBtw', 'BrutoInclBtw', 'Korting', 'ExtraKorting', 'KortingExclBtw',
            'KortingInclBtw', 'ValutaBedrag', 'Aantal', 'ExtraGratisAantal', 'NettoExclBtwGemiddeld'
        ],



    ];

}