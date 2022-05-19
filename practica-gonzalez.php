<?php
/**
  *  @author José Luis González Ruiz
  *  @version 1.0
  *  @internal Este documento parte de una base suministrada por el profesor
*/

  /**
    * Función suma de dos números
    * @param int $num1
    * @param int $num2
    * @return float
  */

  function suma ($num1, $num2) {
      $resultadosuma = $num1 + $num2;
      return $resultadosuma;

  }

  /**
    * Función resta de dos números
    * @param int $num1 operando sobre el que se restará el segundo operando
    * @param int $num2 operando que será restado al primer operando
    * @return float
  */

  function resta ($num1, $num2) {
      $resultadoResta = $num1 - $num2;
      return $resultadoResta;
  }

  $suma = suma (24,42);
  $resta = resta (42,24);
  echo $suma;
  echo $resta;
  
?>
  
