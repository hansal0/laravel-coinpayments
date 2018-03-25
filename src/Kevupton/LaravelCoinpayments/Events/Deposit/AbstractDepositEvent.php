<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 24/03/2018
 * Time: 8:13 PM
 */

namespace Kevupton\LaravelCoinpayments\Events\Deposit;

use App\Events\Event;
use Kevupton\LaravelCoinpayments\Models\Deposit;

abstract class AbstractDepositEvent extends Event
{
    /**
     * @var Deposit
     */
    private $deposit;

    public function __construct (Deposit $deposit)
    {
        $this->deposit = $deposit;
    }
}