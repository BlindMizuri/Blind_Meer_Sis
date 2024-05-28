<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SisLaravelMain\vendor\phpunit\phpunit\src\TextUI\Configuration\Xml\Migration\Migrations;

use DOMDocument;
use DOMElement;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RemoveListeners implements Migration
{
    public function migrate(DOMDocument $document): void
    {
        $node = $document->getElementsByTagName('listeners')->item(0);

        if (!$node instanceof DOMElement || $node->parentNode === null) {
            return;
        }

        $node->parentNode->removeChild($node);
    }
}