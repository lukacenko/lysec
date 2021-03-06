<?php

/**
 * This file is part of the Nette Framework (http://nette.org)
 * Copyright (c) 2004 David Grudl (http://davidgrudl.com)
 */

namespace Nette\Utils;


/**
 * RecursiveCallbackFilterIterator for PHP < 5.4.
 *
 * @internal
 */
class RecursiveCallbackFilterIterator extends CallbackFilterIterator implements \RecursiveIterator
{

	public function __construct(\RecursiveIterator $iterator, $callback)
	{
		parent::__construct($iterator, $callback);
	}


	public function hasChildren()
	{
		return $this->getInnerIterator()->hasChildren();
	}


	public function getChildren()
	{
		return new static($this->getInnerIterator()->getChildren(), $this->callback);
	}

}
