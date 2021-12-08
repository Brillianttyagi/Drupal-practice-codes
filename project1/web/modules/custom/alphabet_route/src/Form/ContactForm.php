<?php 

namespace Drupal\alphabet_route\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerTrait;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\node\Entity\Node;

class ContactForm extends FormBase {
    use MessengerTrait;
    
    public function getFormId()
    {
        return 'user_contact_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['massage'] = [
            '#type' => 'markup',
            '#markup' => '<div class="result_message"></div>',
          ];
        $form['user_name'] = array(
            '#type' => 'textfield',
            '#title' => ('User Name:'),
            '#required' => TRUE,
        );
        $form['user_email'] = array(
            '#type' => 'email',
            '#title' => ('Email ID:'),
            '#required' => TRUE,
        );
        $form['age'] = array(
            '#type' => 'textfield',
            '#title' => ('Age:'),
            '#required' => TRUE,
        );
        $form['address'] = array(
            '#type' => 'textfield',
            '#title' => ('Address:'),
            '#required' => TRUE,
        );
        $form['contact'] = array(
            '#type' => 'checkbox',
            '#title' => ('Contact'),
        );
        $form['hobbies'] = array(
            '#type' => 'textfield',
            '#title' => ('Hobbies:'),
            '#required' => TRUE,
        );
        // $form['actions'] = [
        //     '#type' => 'button',
        //     '#value' => $this->t('Save'),
        //     '#ajax' => [
        //       'callback' => '::setMessage',
        //     ]
        //   ];
        
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
          ];
        $form['upload'] = [
            '#type'                 => 'managed_file',
            '#upload_location'      => 'public://csv',
            '#multiple'             => TRUE,
            '#description'          => t('Allowed extensions: csv'),
            '#upload_validators'    => [
            'file_validate_extensions'    => array('csv'),
            'file_validate_size'          => array(25600000)
            ],
            '#title'                => t('Upload an csv file to create nodes')
            ];
        return $form;
    }

    //ajax form handle
    public function setMessage(array &$form, FormStateInterface $form_state) {
        $response = new AjaxResponse();
        $field= $form_state->getValues();
        $name = $field['user_name'];
        $email = $field['user_email'];
        $age = $field['age'];
        $address = $field['address'];
        $hobbies = $field['hobbies'];
        $final_array = [
            'name' => $name,
            'email' => $email,
            'age' => $age,
            'address' => $address,
            'hobbies' => $hobbies,
        ];
        $query = \Drupal::database();
        $query->insert('contactform1')
                ->fields($final_array)
                ->execute();
        \Drupal::messenger()->addStatus("Form saved successfully");



        $file = $form_state->getValue('upload');



        // $node = Node::create(['type'=>'custom']);
        //     $node->set('title','Hii this is new');
        //     $node->enforceIsNew();
        //     $node->save();

        
        $response->addCommand(
            new HtmlCommand(
              '.result_message',
              '<div class="my_top_message">' . $this->t('Form saved for  @result', ['@result' => ($file)])
              )
        );
    
        return $response;
    }
    
    public function submitForm(array &$form, FormStateInterface $form_state) {

        //extracting form values
        $field= $form_state->getValues();
        $name = $field['user_name'];
        $email = $field['user_email'];
        $age = $field['age'];
        $address = $field['address'];
        $hobbies = $field['hobbies'];
        $final_array = [
            'name' => $name,
            'email' => $email,
            'age' => $age,
            'address' => $address,
            'hobbies' => $hobbies,
        ];
        
        //Getting uploaded file path
        $fid = reset($form_state->getValue('upload'));
        
        $file = \Drupal\file\Entity\File::load($fid);
        
        //this is to get nam
        // $name = $file->getFilename();


        $url = $file->getFileUri();

        //Importing data from csv
        $row = 1;
        if (($handle = fopen($url, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                var_dump($data[0]);
                $node = Node::create(['type'=>'custom']);
                $node->set('title',$data[0]);
                $node->enforceIsNew();
                $node->save();
                $row++;
            }
            fclose($handle);
        }



        //saving form value in database
        $query = \Drupal::database();
        $query->insert('contactform1')
                ->fields($final_array)
                ->execute();
        \Drupal::messenger()->addStatus("Nodes created from file ".$file->getFileUri());
    }
}
