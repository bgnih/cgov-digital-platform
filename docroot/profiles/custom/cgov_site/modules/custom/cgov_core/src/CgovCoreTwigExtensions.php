<?php

namespace Drupal\cgov_core;

/**
 * Extend Drupal's Twig_Extension class.
 */
class CgovCoreTwigExtensions extends \Twig_Extension {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'cgov_core.CgovCoreTwigExtensions';
  }

  /**
   * {@inheritdoc}
   */
  public function getFunctions() {
    return [
      new \Twig_SimpleFunction('get_enclosure', [$this, 'getEnclosure']),
    ];
  }

  /**
   * Generate <enclosure url='x' length='9' type='mime/type' /> tag from NID.
   *
   * @param int $nid
   *   Node ID to create enclosure tag from.
   *
   * @return string
   *   generated enclosure tag.
   */
  public function getEnclosure($nid) {
    return "<enclosure url='$nid' length='9' type='mime/type' />";
  }

}
