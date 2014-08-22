<?php

namespace Unimake\Http\Exceptions;

use Unimake\Http\Resources\ExceptionMessage;

/**
 * @brief   Exception lançada quando uma conexão atinge o tempo limite de espera.
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class ConnectionTimedOutException extends \Exception {
   
   /**
    * @brief   Construtor da exception
    */
   public function __construct() {
      parent::__construct(ExceptionMessage::CONNECTIONTIMEDOUTEXCEPTION);
   }
}