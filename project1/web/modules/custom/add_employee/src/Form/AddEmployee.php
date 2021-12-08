<?php

namespace Drupal\add_employee\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerTrait;

class AddEmployee extends FormBase {
    use MessengerTrait;

    public function getFormId() {
        return 'employee_registration_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['candidate_name'] = array(
            '#type' => 'textfield',
            '#title' => ('Candidate Name:'),
            '#required' => TRUE,
        );
        $form['emailId']= array(
            '#type' => 'email',
            '#title' => ("Email ID:"),
            '#required' => TRUE,
        );
        $form['mobile_number'] = array(
            '#type' => 'tel',
            '#title' => ('Mobile no'),
        );
        $form['DOB'] = array(
            '#type' => 'date',
            '#title' => ('DOB'),
            '#required' => TRUE,
        );
        $form['gender'] = array(
            '#type' => 'select',
            '#title' => ('Gender'),
            '#options' => array(
                'Male' => ('Male'),
                'Female' => ('Female'),
            ),
        );
        $form['ageConfirm']= array(
            '#type' => 'radios',
            '#title' => ('Are you above 18 years old?'),
            '#options' => array(
                'yes' => ('Yes'),
                'no' => ('No'), 
            ),
        );
        $form['copy'] = array(
            '#type' => 'checkbox',
            '#title' => ('Send me a copy of the application.'),
        );
        $form['actions']['#type'] = 'actions';
        $form['actions']['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Save'),
            '#button_type' => 'primary',
        );
        return $form;


    }

    public function validateForm(array &$form, FormStateInterface $form_state) {

        if (strlen($form_state->getValue('mobile_number')) != 10) {
          $form_state->setErrorByName('mobile_number', $this->t('Invalid Number'));
        }
  
      }

    public function submitForm(array &$form, FormStateInterface $form_state) {

        // drupal_set_message($this->t('@can_name ,Your application is being submitted!', array('@can_name' => $form_state->getValue('candidate_name'))));
     
        // foreach ($form_state->getValues() as $key => $value) {
        //     \Drupal::messenger()->addStatus($key . ': ' . $value);

        $field = $form_state->getValues();
        $name = $field['candidate_name'];
        $email = $field['emailId'];
        $mobile = $field['mobile_number'];
        $DOB = $field['DOB'];
        $gender = $field['gender'];
        $confirm = $field['ageConfirm'];
        $field_arr = [
            'name' => $name,
            'email'=> $email,
            'mobile' => $mobile,
            'DOB' => $DOB,
            'gender' => $gender,
            'confirm' => $confirm,
    
        ];
        $query = \Drupal::database();
        $query->insert('employee')
                ->fields($field_arr)
                ->execute();
        // drupal_set_message("data successfully saved");
        \Drupal::messenger()->addStatus("data successfully saved");
           
        
     
    }
}