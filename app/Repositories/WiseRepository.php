<?php

namespace App\Repositories;
use App\Models\PaymentPayoneer;
use App\Contracts\WiseRepositoryInterface;

class WiseRepository implements WiseRepositoryInterface
{
    public function getFields()
    {
        return [
            (object)[
                'name' => 'first_name',
                'type' => 'text',
                'label' => 'First Name',
                'required' => true,
                'style' => 'col-xl-6',
            ],
            (object)[
                'name' => 'last_name',
                'type' => 'text',
                'label' => 'Last Name',
                'required' => true,
                'style' => 'col-xl-6',
            ],
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