<?php 
/**
 * @file
 * Contains \Drupal\request_quote\Plugin\Block.
 */

namespace Drupal\request_quote\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'request_quote' block.
 *
 * @Block(
 *   id = "request_quote",
 *   admin_label = @Translation("Request a free quote block"),
 *   category = @Translation("Request a free quote block")
 * )
 */
class AddRequestQuoteBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {

    $form = \Drupal::formBuilder()->getForm('Drupal\request_quote\Form\AddRequestQuote');

    return $form;

  }
}