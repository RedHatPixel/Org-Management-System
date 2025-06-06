<?php
include_once __DIR__ . '/../config/helpers.php';
include_once __DIR__ . '/../tools/tokenProvider.php';

deleteAllSession();
createCookie('remember_token', '', -1);
redirect('../../index.php');
