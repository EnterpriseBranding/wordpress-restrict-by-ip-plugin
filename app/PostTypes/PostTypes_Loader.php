<?php
namespace CloudVerve\RestrictByIP\PostTypes;
use CloudVerve\RestrictByIP\Plugin;

class PostTypes_Loader extends Plugin {

  /**
   * @var array Shortcode class name to register
   * @since 0.4.0
   */
  protected $posttypes;

  public function __construct() {

    $this->posttypes = array(
      Clients::class
    );

    foreach( $this->posttypes as $posttypesClass ) {

      $posttype = new $posttypesClass();
      if( $posttype instanceof PostTypeInterface ) {
        new $posttype();
      }

    }

  }

}
