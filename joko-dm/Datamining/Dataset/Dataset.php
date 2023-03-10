<?php

declare(strict_types=1);

namespace jokodm\Datamining\Dataset;

interface Dataset
{
    /**
     * @return array
     */
    public function getSamples(): array;

    /**
     * @return array
     */
    public function getTargets(): array;
}
