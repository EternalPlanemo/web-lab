<?php

declare(strict_types = 1);

require_once __FILE__ . '/../vendor/autoload.php';

require_once __FILE__ . '/../config/app.php';

require_once __FILE__ . '/../routes/web.php';

$router->dispatch($request);