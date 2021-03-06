<?php

namespace example;

use MABI\Model;
use MABI\RESTModelController;


/**
 * @docs show-model
 */
class ExampleController extends RESTModelController {

  /**
   * This is a standard get for an entire collection.
   */
  public function _restGetCollection()
  {
    echo 'This would get an the entire collection by default';
  }

  /**
   * This is a standard get request for a single resource.
   *
   * @param $id
   */
  public function _restGetResource($id)
  {
    echo 'This would get a single resource by default';
  }


}