<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TwigExtensions extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('timeAgo', [$this, 'timeAgo']),
        ];
    }

    public function timeAgo($date)
    {
        $timestamp = $date->getTimestamp();

        $strTime = array("seconde", "minute", "heure", "jour", "mois", "années");
        $length = array("60","60","24","30","12","10");

        $currentTime = time();
        if($currentTime >= $timestamp) {
            $diff     = time()- $timestamp;
            for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
                $diff = $diff / $length[$i];
            }

            $diff = round($diff);
            return 'Il y a ' . $diff . " " . $strTime[$i] . "(s)";
        }
        else {
            return 'Maintenant';
        }
    }
}