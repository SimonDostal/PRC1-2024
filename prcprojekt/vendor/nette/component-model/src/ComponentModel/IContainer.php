<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\ComponentModel;

use Nette;


/**
 * Defines functionality for objects that can contain other components.
 */
interface IContainer extends IComponent
{
	/**
	 * Adds the component to the container.
	 * @return static
	 */
	function addComponent(IComponent $component, ?string $name);

	/**
	 * Removes the component from the container.
	 */
	function removeComponent(IComponent $component): void;

	/**
	 * Returns component specified by name or path.
	 * @throws Nette\InvalidArgumentException  if component doesn't exist
	 */
	function getComponent(string $name): ?IComponent;

	/**
	 * Returns immediate child components.
	 * @return array<int|string,IComponent>
	 */
	function getComponents(): iterable;
}
