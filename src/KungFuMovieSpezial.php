<?php
/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 13.11.2017
 * Time: 11:41
 */

namespace HTL3R\KungFuMovies;


class KungFuMovieSpezial extends AbstractKungFuMovie
{
    private $hauptdarsteller;

    public function __construct(string $name, int $rating, string $movieURI, string $hauptdarsteller)
    {
        parent::__construct($name, $rating, $movieURI);
        $this->hauptdarsteller = $hauptdarsteller;
    }


}