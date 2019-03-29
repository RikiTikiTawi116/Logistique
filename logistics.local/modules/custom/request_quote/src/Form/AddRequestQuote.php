<?php 

/**
 * @file
 * Contains \Drupal\request_form\Form.
 */


namespace Drupal\request_quote\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class AddRequestQuote extends FormBase {
   /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'request_data';
  }
  /**
   * {@inheritdoc}
   * Form
   */
  public function BuildForm(array $form, FormStateInterface $form_state) {

    $form['first_name'] = [
       '#type' => 'textfield',
       '#placeholder' => $this->t('Your name *'),
       '#required' => TRUE,
     ];

     $form['email'] = [
       '#type' => 'email',
       '#placeholder' => $this->t('E-mail *'),
       '#required' => TRUE,
     ];

     $form['ware_housing'] = [
        '#type' => 'select',
        '#placeholder' => t('Ware Housing'),
        '#options' => array('Ware Housing', 'Ware Housing 1', 'Ware Housing 2', 'Ware Housing 3'),
      ];

      $form['subject'] = [
        '#type' => 'textfield',
        '#placeholder' => $this->t('Subject'),
     ];

     $form['message'] = [
       '#type' => 'textarea',
       '#placeholder' => $this->t('Message...'),
      ];
  
     $form['action']['submit'] = [
       '#type' => 'submit',
       '#value' => $this->t('Send Message'),
       '#button_type'=>'primary',
     ];
    
    return $form;
  }

  /**
   * {@inheritdoc}
   * Submit
   */

public function submitForm(array &$form, FormStateInterface $form_state){


  $first_name = $form_state->getValue('first_name');
  $email = $form_state->getValue('email');
  $ware_housing = $form_state->getValue('ware_housing');
  $subject = $form_state->getValue('subject');
  $message = $form_state->getValue('message');

  $res = mail('innovatelog@ilog.com', $first_name, $email, $ware_housing, $subject, $message);

    if($res){


    drupal_set_message('E-mail is sent!');

    }
}

}