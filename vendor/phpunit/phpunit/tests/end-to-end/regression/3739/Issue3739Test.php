<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Issue3739;

use function unlink;
use PHPUnit\Framework\TestCase;

final class Issue3739Test extends TestCase
{
    public function testWithErrorSuppression(): void
    {
        $this->assertFalse($this->unlinkFileThatDoesNotExistWithErrorSuppression());
    }

    public function testWithoutErrorSuppression(): void
    {
        $this->assertFalse($this->unlinkFileThatDoesNotExistWithoutErrorSuppression());
    }

    private function unlinkFileThatDoesNotExistWithErrorSuppression(): bool
    {
        return @unlink(__DIR__ . '/DOES_NOT_EXIST');
    }

    private function unlinkFileThatDoesNotExistWithoutErrorSuppression(): bool
    {
        return unlink(__DIR__ . '/DOES_NOT_EXIST');
    }
}
