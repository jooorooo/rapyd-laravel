<?php namespace Simexis\Rapyd\Facades;

use Illuminate\Support\Facades\Facade;

class DataGrid extends Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'Simexis\Rapyd\DataGrid\DataGrid'; }

}
