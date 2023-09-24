<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Doctrine\Persistence\ManagerRegistry;

class AppExtension extends AbstractExtension
{

    protected $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }


    public function getFilters()
    {
        return [
            new TwigFilter('dateToAge', [$this, 'dateToAge']),
        ];
    }



    public static function dateToAge($date)
    {

        $dateNaissance = date_format($date,"Y-m-d");
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
        $age = $diff->format('%y'). " ans";

        return $age;
    }
}
