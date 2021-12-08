<?php

namespace Drupal\alphabet_route\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Provide a block called "exmple heroblock".
 * 
 * @Block(
 * id = "alphabet_route_route",
 * admin_label = @Translation("Deepanshu Custom block")
 * )
 */

class AlphabetBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        $query = \Drupal::database();
        $results = $query->select('contactform1','e')
                    -> fields('e',['name','email','age','address','hobbies'])
                    ->execute()->fetchAll(\PDO::FETCH_OBJ);
        $data = [];

        foreach($results as $row){
            $data[] = [
                'name' => $row->name,
                'email' => $row->email,
                'age' => $row->age,
                'address' => $row->address,
                'hobbies' => $row->hobbies
            ];
        }

        $header = array('Name','Email','Age','Address','Hobbies');

        $build['table'] = [
            '#type' => 'table',
            '#header' => $header,
            '#rows' => $data
        ];

        return [
            $build,
            '#title' => 'Contact Form List'
        ];
    }
}