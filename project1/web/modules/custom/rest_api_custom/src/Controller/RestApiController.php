<?php
namespace Drupal\rest_api_custom\Controller;

use Drupal\Core\Controller\ControllerBase;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;



class RestApiController extends ControllerBase {



  public function get_api( Request $request ) {


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
    $response['data'] = $data;
    $response['method'] = 'POST';
    return new JsonResponse( $response );
  }



  public function put_api( Request $request ) {
    $response['data'] = 'Api is working';
    $response['method'] = 'PUT';

    return new JsonResponse( $response );
  }




  public function post_api( Request $request ) {


    $response['data'] = 'Api is working';
    $response['method'] = 'POST';
    $return = $request->getContent();

    return new JsonResponse( $return );
  }


  public function delete_api( Request $request ) {

    $response['data'] = 'Api is working';
    $response['method'] = 'DELETE';

    return new JsonResponse( $response );
  }

}