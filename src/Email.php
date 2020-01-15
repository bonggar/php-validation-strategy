<?php

/**
 * (c) Bonggar Situmorang <bonggarsitumorang@gmail.com>
 *
 *
 */

namespace bonggar\PHPValidationStrategy;

class Email implements ValidationInterface {
	protected $value, $name;

	public function __construct(string $value, string $name) {
		$this->value = $value;
		$this->name = $name;
	}

	public function validate(): string {
		if (!filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
			return "$this->name field is not a valid email.";
		}

		return '';
	}
}