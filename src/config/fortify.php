<?php

use Laravel\Fortify\Features;

return [

    // ... 他の設定 ...

    'features' => [
        Features::registration(),
        Features::resetPasswords(),
        // Features::emailVerification(),  // 一旦コメントアウト
        Features::updateProfileInformation(),
        Features::updatePasswords(),
    ],

];