<?php
if (!class_exists('OmisePluginHelperCharge')) {
    class OmisePluginHelperCharge
    {
        /**
         * Format an order's amount to be a small-unit that Omise's API accept.
         * Note, no specific format for JPY currency.
         *
         * @param  string  $currency
         * @param  integer $amount
         *
         * @return string
         */
        public static function amount($currency, $amount)
        {
            switch (strtoupper($currency)) {
                case 'AUD':
                case 'CAD':
                case 'CHF':
                case 'CNY':
                case 'DKK':
                case 'EUR':
                case 'GBP':
                case 'HKD':
                case 'MYR':
                case 'USD':
                case 'THB':
                case 'IDR':
                case 'SGD':
                    // Convert to a small unit
                    $amount = $amount * 100;
                    break;
            }

            return $amount;
        }
    }
}
