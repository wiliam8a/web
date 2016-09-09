<?php
return array(
    // set your paypal credential
    'client_id' => 'AalgOKjqGlsGHLBOkd4hcKsRGCC2wuLaw9p26xUxsmRluNqLx9E4i0VPmTRYBvcD0QKpSkCB0am2FCdY',
    'secret' => 'EHE0Iw5JefvrhleD_UO1H6TdH_p8hOfoDrxLUK9gpzjqZqbQg_53dMcsfWxkrs1JuzE09F0Rx6Fadah0',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);