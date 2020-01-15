<?php

/**
 * (c) Bonggar Situmorang <bonggarsitumorang@gmail.com>
 * 
 * 
 */

namespace bonggar\PHPValidationStrategy;

class ValidationStrategy
{ 
  protected $validation;

  public function __construct(ValidationInterface $validation)
  {
    $this->validation = $validation;  
  }

  public function validate(): string
  {
    return $this->validation->validate();
  }
}