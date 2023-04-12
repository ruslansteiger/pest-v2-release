<?php

test('noisy', function () {
    expect(true)->toBeTrue();
})->with(range(1, 999));

test('slowpoke', function () {
    sleep(2);

    expect(true)->toBeTrue();
});

test('more noisy', function () {
    expect(true)->toBeTrue();
})->with(range(1, 999));
