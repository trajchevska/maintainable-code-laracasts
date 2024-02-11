<?php

namespace App\Repositories;
use App\Models\PaymentPayoneer;
use App\Contracts\PayoneerRepositoryInterface;

class PayoneerRepository implements PayoneerRepositoryInterface
{
    public function getFields()
    {
        return [
            (object)[
                'name' => 'email',
                'type' => 'text',
                'label' => 'Email',
                'required' => true,
                'style' => 'col-xl-12',
            ],
        ];
    }

    public function getValues(int $userId)
    {
        return PaymentPayoneer::where('user_id', $userId)->first();
    }

    public function store(int $userId, array $data)
    {
        return PaymentPayoneer::updateOrCreate(
            ['user_id' => $userId],
            $data
        );
    }

    public function delete(int $userId)
    {
        //
    }

    public function makePrimary(int $userId)
    {
        //
    }
}