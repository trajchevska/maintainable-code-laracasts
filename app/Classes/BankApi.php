<?php

namespace App\Classes;

class BankApi
{
    protected $swiftCode;
    protected $accountNumber;
    protected $accountName;

    /**
     * Checks if the provided SWIFT code corresponds to a valid bank.
     *
     * @param string $swiftCode
     * @return bool
     */
    public function isBank($swiftCode)
    {
        // Simulate checking the SWIFT code against a list of valid banks
        return in_array($swiftCode, ['VALID1', 'VALID2', 'SWIFTB11']);
    }

    /**
     * Validates the bank account details.
     *
     * @param string $accountNumber
     * @param string $accountName
     * @return bool
     */
    public function validate($accountNumber, $accountName)
    {
        // Simulate account validation logic
        return !empty($accountNumber) && strlen($accountNumber) == 9 && !empty($accountName);
    }

    /**
     * Sets the SWIFT code for the transaction.
     *
     * @param string $swiftCode
     */
    public function setSwiftCode($swiftCode)
    {
        $this->swiftCode = $swiftCode;
    }

    /**
     * Sets the account number for the transaction.
     *
     * @param string $accountNumber
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Sets the account name for the transaction.
     *
     * @param string $accountName
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    /**
     * Sends the amount to the specified account.
     *
     * @param float $amount
     * @return string
     */
    public function send($amount)
    {
        // Simulate sending money to the account
        if ($this->validate($this->accountNumber, $this->accountName)) {
            return "Transaction successful for amount: " . $amount;
        }
        return "Transaction failed";
    }
}
