<?php

test('noisy', function () {
    expect(true)->toBeTrue();
})->with(range(1, 99));

test('slowpoke', function () {
    expect(true)->toBeTrue();
});

test('more noisy', function () {
    expect(true)->toBeTrue();
})->with(range(1, 99));
