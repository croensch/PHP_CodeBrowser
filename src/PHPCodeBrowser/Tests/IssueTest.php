<?php

/**
 * Test case
 *
 * Copyright (c) 2007-2010, Mayflower GmbH
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Mayflower GmbH nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category PHP_CodeBrowser
 *
 * @author Simon Kohlmeyer <simon.kohlmeyer@mayflower.de
 *
 * @copyright 2007-2010 Mayflower GmbH
 *
 * @license http://www.opensource.org/licenses/bsd-license.php  BSD License
 *
 * @version SVN: $Id$
 *
 * @link http://www.phpunit.de/
 *
 * @since File available since  0.1.0
 */

namespace PHPCodeBrowser\Tests;

use PHPCodeBrowser\Issue;

/**
 * IssueTest
 *
 * @category PHP_CodeBrowser
 *
 * @author Simon Kohlmeyer <simon.kohlmeyer@mayflower.de>
 *
 * @copyright 2007-2010 Mayflower GmbH
 *
 * @license http://www.opensource.org/licenses/bsd-license.php  BSD License
 *
 * @version Release: @package_version@
 *
 * @link http://www.phpunit.de/
 *
 * @since Class available since  0.1.0
 */
class IssueTest extends AbstractTestCase
{
    /**
     * Issue object to test
     *
     * @var Issue
     */
    protected $issue;

    /**
     * (non-PHPDoc)
     *
     * @see tests/cbAbstractTests#setUp()
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->issue = new Issue(
            'testFileName',
            23,
            27,
            'testFinder',
            'testDescription',
            'notice'
        );
    }

    /**
     * (non-PHPDoc)
     *
     * @see tests/cbAbstractTests#tearDown()
     */
    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * Test constructor if variables are stored properly
     *
     * @return void
     */
    public function testInstantiation(): void
    {
        static::assertSame('testFileName', $this->issue->getFileName());
        static::assertSame(23, $this->issue->getLineStart());
        static::assertSame(27, $this->issue->getLineEnd());
        static::assertSame('testFinder', $this->issue->getFoundBy());
        static::assertSame('testDescription', $this->issue->getDescription());
        static::assertSame('notice', $this->issue->getSeverity());
    }
}
