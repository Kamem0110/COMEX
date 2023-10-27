<?php

namespace Pedro\Github\COMEX\src\Interfaces;

interface MeioDePagamento{
    public function processoPagamento(): bool;
}
