<?php

namespace MyBB\Core\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostNotFoundException extends NotFoundHttpException
{
	/**
	 * @var string
	 */
	protected $message = 'errors.post_not_found';

	/**
	 * @param null       $message
	 * @param \Exception $previous
	 * @param int        $code
	 */
	public function __construct($message = null, \Exception $previous = null, $code = 0)
	{
		if ($message === null) {
			$message = trans($this->message);
		}

		parent::__construct($message, $previous, $code);
	}
}
