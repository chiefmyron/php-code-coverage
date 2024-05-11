<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Html;

/**
 * @immutable
 */
final class Colors
{
    private readonly string $successLow;
    private readonly string $successMedium;
    private readonly string $successHigh;
    private readonly string $warning;
    private readonly string $danger;

    public static function default(): self
    {
        return new self(
            'rgb(from var(--bs-success) r g b / 0.1)',
            'rgb(from var(--bs-success) r g b / 0.33)',
            'rgb(from var(--bs-success) r g b / 0.67)',
            'rgb(from var(--bs-warning) r g b / 0.1)',
            'rgb(from var(--bs-danger) r g b / 0.1)',
        );
    }

    public static function from(string $successLow, string $successMedium, string $successHigh, string $warning, string $danger): self
    {
        return new self($successLow, $successMedium, $successHigh, $warning, $danger);
    }

    private function __construct(string $successLow, string $successMedium, string $successHigh, string $warning, string $danger)
    {
        $this->successLow    = $successLow;
        $this->successMedium = $successMedium;
        $this->successHigh   = $successHigh;
        $this->warning       = $warning;
        $this->danger        = $danger;
    }

    public function successLow(): string
    {
        return $this->successLow;
    }

    public function successMedium(): string
    {
        return $this->successMedium;
    }

    public function successHigh(): string
    {
        return $this->successHigh;
    }

    public function warning(): string
    {
        return $this->warning;
    }

    public function danger(): string
    {
        return $this->danger;
    }
}
