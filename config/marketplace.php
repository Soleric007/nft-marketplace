<?php

return [
    'funding_wallet_address' => env('FUNDING_WALLET_ADDRESS', '0xC48B92B4B0E7714f0E28368af564575f08e2BeF5'),
    'funding_wallet_qr' => env('FUNDING_WALLET_QR', '/template/assets/images/wallet/qrcodev.jpeg'),
    'support_email' => env('MARKETPLACE_SUPPORT_EMAIL', env('MAIL_FROM_ADDRESS', 'hello@example.com')),
    'enable_chat_widget' => env('MARKETPLACE_ENABLE_CHAT_WIDGET', false),
    'chat_widget_src' => env('MARKETPLACE_CHAT_WIDGET_SRC', 'https://embed.tawk.to/68054f347f5f42190ba77f1b/1ipabqpq8'),
];
