<?php

namespace App\Service;

class DiscountCalculator
{
    public function calculateDiscount(float $totalAmount, bool $isVipCustomer): float
    {
        $discount = 0;

        if ($totalAmount > 100) {
            $discount = $totalAmount * 0.10;
        }

        if ($isVipCustomer) {
            $discount += $totalAmount * 0.05;
        }

        $maxDiscount = $totalAmount * 0.20;

        return min($discount, $maxDiscount);
    }
}
