<?php

/**
 * (c) Bonggar Situmorang <bonggarsitumorang@gmail.com>
 *
 *
 */

namespace bonggar\PHPValidationStrategy;

class Validator {
	public static function validate($request) {
		$errors = [];

		foreach ($request as $field) {
			$rules = explode('|', $field['rules']);

			foreach ($rules as $rule) {
				$error = '';

				$class = 'bonggar\PHPValidationStrategy\\' . ucwords($rule);

				$error = (new ValidationStrategy(new $class($field['value'], $field['name'])))->validate();

				if ($error) {
					$errors[$field['name']]['errors'][] = $error;
				}

			}
		}

		return $errors;
	}
}