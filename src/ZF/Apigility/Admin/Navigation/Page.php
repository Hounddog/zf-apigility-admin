<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2013 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace ZF\Apigility\Admin\Navigation;

use  Zend\Navigation\Page\AbstractPage;


class Page extends AbstractPage
{
    protected $section;

    public function setSection($section)
    {
        $this->section = $section;
    }

    public function getSection()
    {
        return $this->section;
    }

    /**
     * Sets page URI
     *
     * @param  string $uri                page URI, must a string or null
     *
     * @return Uri   fluent interface, returns self
     * @throws Exception\InvalidArgumentException  if $uri is invalid
     */
    public function setUri($uri)
    {
        if (null !== $uri && !is_string($uri)) {
            throw new Exception\InvalidArgumentException(
                'Invalid argument: $uri must be a string or null'
            );
        }

        $this->uri = $uri;
        return $this;
    }

    /**
     * Returns URI
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Returns href for this page
     *
     * Includes the fragment identifier if it is set.
     *
     * @return string
     */
    public function getHref()
    {
        $uri = $this->getUri();

        $fragment = $this->getFragment();
        if (null !== $fragment) {
            if ('#' == substr($uri, -1)) {
                return $uri . $fragment;
            } else {
                return $uri . '#' . $fragment;
            }
        }

        return $uri;
    }
}