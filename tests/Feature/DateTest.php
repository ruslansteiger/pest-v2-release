<?php

test('that two dates are the same', function () {
    $date = today();

//    expect($date)->isSameDay('2023-04-21')
//        ->toBeTrue('Failed assert that two dates are the same.');
//    expect($date)->isSameDay(now())
//        ->toBeTrue('Failed assert that two dates are the same.');
//    expect($date)->toBeDay('2023-04-20');
//    expect($date)->toBeDay(now());
    // Programming by wishful thinking
    expect($date)->toBe('2023-04-20');
    expect($date)->toBe(now());
});
