<?php

use function Pest\Laravel\get;

get('/')->assertOk()->assertSee('Laravel');
get('/forgot-password')->assertOk();
