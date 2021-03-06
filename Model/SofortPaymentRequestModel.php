<?php
/**
 * Created by PhpStorm.
 * User: rodger
 * Date: 16.04.14
 * Time: 11:17
 */

namespace Sofort\Model;

use Symfony\Component\Validator\Constraints as Assert;

class SofortPaymentRequestModel
{
    /**
     * @var float
     * @Assert\NotNull
     * @Assert\Range(min=0.1)
     */
    protected $amount;

    /**
     * @var string
     * @Assert\NotBlank
     */
    protected $currency = 'EUR';

    /**
     * @var string
     */
    protected $accountNumber;

    /**
     * @var string
     */
    protected $bankCode;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     * @Assert\Country
     */
    protected $country;

    /**
     * @var string
     * @Assert\NotBlank
     */
    protected $reason;

    /**
     * @var string
     * @Assert\Email
     */
    protected $email;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $bic;

    /**
     * @var string
     * @Assert\Iban
     */
    protected $iban;

    /**
     * @var bool
     */
    protected $protection = true;

    /**
     * Sets AccountNumber
     *
     * @param string $accountNumber
     *
     * @return SofortPaymentRequestModel
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Gets AccountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets Amount
     *
     * @param float $amount
     *
     * @return SofortPaymentRequestModel
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets Amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets BankCode
     *
     * @param string $bankCode
     *
     * @return SofortPaymentRequestModel
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;

        return $this;
    }

    /**
     * Gets BankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets Bic
     *
     * @param string $bic
     *
     * @return SofortPaymentRequestModel
     */
    public function setBic($bic)
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * Gets Bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Sets Country
     *
     * @param string $country
     *
     * @return SofortPaymentRequestModel
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Gets Country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets Currency
     *
     * @param string $currency
     *
     * @return SofortPaymentRequestModel
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Gets Currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets Email
     *
     * @param string $email
     *
     * @return SofortPaymentRequestModel
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets Email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets Iban
     *
     * @param string $iban
     *
     * @return SofortPaymentRequestModel
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Gets Iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Sets Name
     *
     * @param string $name
     *
     * @return SofortPaymentRequestModel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets Phone
     *
     * @param string $phone
     *
     * @return SofortPaymentRequestModel
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Gets Phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets Protection
     *
     * @param boolean $protection
     *
     * @return SofortPaymentRequestModel
     */
    public function setProtection($protection)
    {
        $this->protection = $protection;

        return $this;
    }

    /**
     * Gets Protection
     *
     * @return boolean
     */
    public function isProtection()
    {
        return $this->protection;
    }

    /**
     * Sets Reason
     *
     * @param string $reason
     *
     * @return SofortPaymentRequestModel
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Gets Reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

}
