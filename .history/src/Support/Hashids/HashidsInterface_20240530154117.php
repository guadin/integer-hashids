<?php

/*
 * This file is part of Hashids.
 *
 * (c) Ivan Akimov <ivan@barreleye.com>
 * Adapted by Maru Amallo (amamarul) <ama_marul@hotmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bcelebi\Hashids\Support\Hashids;

/**
 * This is the hashids interface.
 *
 * @author Ivan Akimov <ivan@barreleye.com>
 * @author Vincent Klaiber <hello@vinkla.com>
 */
interface HashidsInterface
{
    /**
     * Encode parameters to generate a hash.
     *
     * @return string
     */
    public function encode();

    /**
     * Decode a hash to the original parameter values.
     *
     * @param string $hash
     *
     * @return array
     */
    public function decode($hash);

    /**
     * Encode hexadecimal values and generate a hash string.
     *
     * @param string $str
     *
     * @return string
     */
    public function encodeHex($str);

    /**
     * Decode a hexadecimal hash.
     *
     * @param string $hash
     *
     * @return string
     */
    public function decodeHex($hash);
}
