<?php

namespace Terminus;

/**
 * A Core Upgrader class that leaves packages intact by default.
 *
 * @package terminus
 */
class NonDestructiveCoreUpgrader extends \Core_Upgrader {
  function unpack_package($package, $delete_package = false) {
    return parent::unpack_package( $package, $delete_package );
  }
}

