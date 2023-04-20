<?php

use Carbon\CarbonInterface;
use Carbon\Exceptions\InvalidFormatException;
use Illuminate\Support\Carbon;
use Tests\TestCase;

//uses()->compact();

uses(TestCase::class)->in('Feature');

expect()->extend('toBeDay', function ($value) {
    expect($this->value)
        ->isSameDay($value)
        ->toBeTrue('Failed assert that two dates are the same.');
});

expect()->intercept(
    name: 'toBe',
    filter: function ($value, $expected) {
        if (! $value instanceof CarbonInterface) {
            return false;
        }

        if ($expected instanceof CarbonInterface) {
            return true;
        }

        try {
            Carbon::parse($expected);
        } catch (InvalidFormatException) {
            return false;
        }

        return true;
    },
    handler: function ($value) {
        expect($this->value)
            ->isSameDay($value)
            ->toBeTrue('Failed assert that two dates are the same.');
    },
);
