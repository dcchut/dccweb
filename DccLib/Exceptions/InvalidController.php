<?php
namespace DccLib\Exceptions;

class InvalidController extends DefaultMessageException {
  protected $_message = 'Routed class is not a controller.';
}
