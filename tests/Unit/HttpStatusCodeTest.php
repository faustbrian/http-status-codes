<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit;

use BaseCodeOy\HttpStatusCodes\HttpStatusCode;

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
})->throws(\InvalidArgumentException::class, 'Invalid case name: INVALID_CASE_NAME');
