<?php
namespace dccweb\Core\Exceptions;

class InvalidController extends DefaultMessageException {
  protected $_message = 'Routed class is not a controller.';
}
