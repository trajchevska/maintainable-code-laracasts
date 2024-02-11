<?php

namespace App\Services\PaymentOptions;
use App\Contracts\PaymentOption;
use App\Contracts\WiseRepositoryInterface;

class Wise implements PaymentOption
{
    public function __construct(WiseRepositoryInterface $wiseRepository)
    {
        $this->wiseRepository = $wiseRepository;
    }

    public function getFields()
    {
        return $this->wiseRepository->getFields();
    }

    public function getValues(int $userId)
    {
        return $this->wiseRepository->getValues($userId);
    }

    public function store(int $userId, array $data)
    {
        try {
            $fields = $this->getFields();
            $payoneerDetails = [];
            foreach ($fields as $field) {
                if (isset($data[$field->name])) {
                    $payoneerDetails[$field->name] = $data[$field->name];
                } else {
                    throw new \Exception("Missing field: {$field->name}");
                }
            }
            return $this->wiseRepository->store($userId, $payoneerDetails);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete(int $userId)
    {
        // Delete the data
    }

    public function makePrimary(int $userId)
    {
        // Make this the primary payment option
    }
}