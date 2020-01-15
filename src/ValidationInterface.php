<?php

/**
 * (c) Bonggar Situmorang <bonggarsitumorang@gmail.com>
 * 
 * 
 */

namespace bonggar\PHPValidationStrategy;

interface ValidationInterface
{
  public function __construct(string $value, string $name);

  public function validate(): string;
}