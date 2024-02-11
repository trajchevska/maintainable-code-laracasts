<?php

namespace App\Contracts;

interface PaymentOption
{
    public function getFields();
    public function getValues(int $userId);
    public function store(int $userId, array $data);
    public function delete(int $userId);
    public function makePrimary(int $userId);
}