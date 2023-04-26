<?php

declare(strict_types=1);

namespace Tests\Unit;

use InvalidArgumentException;
use BombenProdukt\HttpStatusCodes\HttpStatusCode;

it('can get a value by name', function (): void {
    expect(HttpStatusCode::OK())->toBe(200);
});

it('can list all options', function (): void {
    $options = HttpStatusCode::options();

    expect($options)->toBeArray();
    expect($options)->toHaveLength(102);
    expect($options['OK'])->toBe(200);
});

it('can list all names', function (): void {
    $names = HttpStatusCode::names();

    expect($names)->toBeArray();
    expect($names)->toContain('OK');
});

it('can list all values', function (): void {
    $values = HttpStatusCode::values();

    expect($values)->toBeArray();
    expect($values)->toContain(200);
});

it('throws an exception for an invalid case name', function (): void {
    HttpStatusCode::INVALID_CASE_NAME();
})->throws(InvalidArgumentException::class, 'Invalid case name: INVALID_CASE_NAME');
