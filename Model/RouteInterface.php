<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Routing\Model;

use Symfony\Cmf\Component\Routing\RouteObjectInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/1/14 11:00 PM
 */
interface RouteInterface extends RouteObjectInterface
{
    /**
     * Get id.
     *
     * @return int
     */
    public function getId();

    /**
     * Gets a default value.
     *
     * @param string $name
     *
     * @return mixed
     */
    public function getDefault(string $name);

    /**
     * Sets a default value.
     *
     * @param string $name
     * @param mixed $default
     *
     * @return RouteInterface
     */
    public function setDefault(string $name, string $default);

    /**
     * Returns the defaults.
     *
     * @return array
     */
    public function getDefaults();

    /**
     * Add locale prefix.
     *
     * @param string $defaultLocale
     * @param array $requirements
     */
    public function addLocale(string $defaultLocale, array $requirements);

    /**
     * Get name.
     *
     * @param string $name
     *
     * @return RouteInterface
     */
    public function setName(string $name);

    /**
     * Get name.
     *
     * @return string
     */
    public function getName();

    /**
     * Returns the requirements.
     *
     * @return array
     */
    public function getRequirements();

    /**
     * Sets the requirements.
     *
     * @param array $requirements
     *
     * @return RouteInterface
     */
    public function setRequirements(array $requirements);

    /**
     * Adds requirements.
     *
     * @param array $requirements
     *
     * @return RouteInterface
     */
    public function addRequirements(array $requirements);

    /**
     * Returns the requirement for the given key.
     *
     * @param string $key
     *
     * @return string|null
     */
    public function getRequirement(string $key);

    /**
     * Checks if a requirement is set for the given key.
     *
     * @param string $key
     *
     * @return bool
     */
    public function hasRequirement(string $key);

    /**
     * Sets a requirement for the given key.
     *
     * @param string $key
     * @param string $regex
     *
     * @return RouteInterface
     */
    public function setRequirement(string $key, string $regex);

    /**
     * Set routePattern.
     *
     * @param string $routePattern
     *
     * @return RouteInterface
     */
    public function setRoutePattern(string $routePattern);

    /**
     * Get routePattern.
     *
     * @return string
     */
    public function getRoutePattern();

    /**
     * Returns the pattern for the path.
     *
     * @return string
     */
    public function getPath();

    /**
     * Sets the pattern for the path.
     *
     * @param string $pattern
     *
     * @return RouteInterface
     */
    public function setPath(string $pattern);

    /**
     * Set prefix.
     *
     * @param string $prefix
     *
     * @return RouteInterface
     */
    public function setPrefix(string $prefix);

    /**
     * Get prefix.
     *
     * @return string
     */
    public function getPrefix();

    /**
     * Set visible.
     *
     * @param bool $visible
     *
     * @return RouteInterface
     */
    public function setVisible(bool $visible);

    /**
     * Check if is visible.
     *
     * @return bool
     */
    public function isVisible();
}
