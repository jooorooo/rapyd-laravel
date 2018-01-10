<?php namespace Simexis\Rapyd\Facades;

use Illuminate\Support\Facades\Facade;

class DataSet extends Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'Simexis\Rapyd\DataSet'; }

}
