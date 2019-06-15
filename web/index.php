<?php

function fibo($n)
{
    return (($n < 2) ? 1 : fibo($n - 2) + fibo($n - 1));
}


fibo(28);

echo json_encode([
        '_embedded' => [
            'items' => [
                [
                    '_embedded' => [
                        'prices' => [
                            [
                                'currency' =>
                                    [
                                        'code' => 'PLN',
                                    ],
                                'basePrice' => '999 PLN',
                                'finalPrice' => '349 PLN',
                                'bonusWalletFunds' => '0 PLN',
                            ],
                        ],
                        'product' => [
                            'id' => 6,
                        ],
                    ],
                ],
                [
                    '_embedded' => [
                        'prices' => [
                            [
                                'currency' =>
                                    [
                                        'code' => 'PLN',
                                    ],
                                'basePrice' => '3499 PLN',
                                'finalPrice' => '1199 PLN',
                                'bonusWalletFunds' => '0 PLN',
                            ],
                        ],
                        'product' => [
                            'id' => 7,
                        ],
                    ],
                ],
                [
                    '_embedded' => [
                        'prices' => [
                            [
                                'currency' =>
                                    [
                                        'code' => 'PLN',
                                    ],
                                'basePrice' => '3499 PLN',
                                'finalPrice' => '1199 PLN',
                                'bonusWalletFunds' => '0 PLN',
                            ],
                        ],
                        'product' => [
                            'id' => 8,
                        ],
                    ],
                ],
                [
                    '_embedded' => [
                        'prices' => [
                            [
                                'currency' =>
                                    [
                                        'code' => 'PLN',
                                    ],
                                'basePrice' => '3499 PLN',
                                'finalPrice' => '1199 PLN',
                                'bonusWalletFunds' => '0 PLN',
                            ],
                        ],
                        'product' => [
                            'id' => 9,
                        ],
                    ],
                ],
                [
                    '_embedded' => [
                        'prices' => [
                            [
                                'currency' =>
                                    [
                                        'code' => 'PLN',
                                    ],
                                'basePrice' => '3499 PLN',
                                'finalPrice' => '1199 PLN',
                                'bonusWalletFunds' => '0 PLN',
                            ],
                        ],
                        'product' => [
                            'id' => 10,
                        ],
                    ],
                ],
            ],
        ],
    ]
);
