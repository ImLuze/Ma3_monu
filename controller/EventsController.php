<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'EventDAO.php';

class EventsController extends Controller {

  private $eventDAO;

  function __construct() {
    $this->eventDAO = new EventDAO();
  }

  public function index() {

  }

  public function detail() {
    $id = $_GET['id'];

    $event = $this->eventDAO->selectById($id);
    $this->set('event', $event);
  }

  public function events() {
    $conditions = array();

    if(!empty($_POST['name'])) {
      $conditions[] = array(
        'field' => 'title',
        'comparator' => 'like',
        'value' => $_POST['name']
      );
    }

    if(!empty($_POST['place'])) {
      $conditions[] = array(
        'field' => 'city',
        'comparator' => 'like',
        'value' => $_POST['place']
      );
    }

    if(!empty($_POST['tag'])) {
      $conditions[] = array(
        'field' => 'tag',
        'comparator' => '=',
        'value' => $_POST['tag']
      );
    }

    //example: search on title
     /* $conditions[] = array(
       'field' => 'title',
       'comparator' => 'like',
       'value' => 'vesten'
     ); */

     //example: search on activiteiten
     //  $conditions[] = array(
     //   'field' => 'activiteiten',
     //   'comparator' => 'like',
     //   'value' => 'rondleidingen'
     // );

    //example: search on tag name
     /* $conditions[] = array(
      'field' => 'tag',
       'comparator' => '=',
       'value' => 'gratis'
     ); */

    $events = $this->eventDAO->search($conditions);
    $this->set('events', $events);

    $tags = $this->eventDAO->getTags();
    $this->set('tags', $tags);
  }

}
