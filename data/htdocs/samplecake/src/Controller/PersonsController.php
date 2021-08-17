<?php
namespace App\Controller;

use App\Application;
use App\Controller\AppController;

class PersonsController extends AppController
{

    public function initialize()
    {
        Parent::initialize();
        $this->loadComponent("Paginator");
    }

    public $paginate = [
        "limit" => 5,
        "order" => [
            "Persons.name" => "desc"
        ],
        "fields" => ["Persons.name"],
    ];

    public $helpers = [
        'Paginator' => ['templates' =>
            'paginator-templates']
    ];

    public function add()
    {
        $person = $this->Persons->newEntity();
        $this->set("person", $person);
        if ($this->request->is("post")) {
            $person = $this->Persons->patchEntity($person, $this->request->getData());
            if ($this->Persons->save($person)) {
                return $this->redirect("/persons/index");
            }
            if ($person->errors()) {
                $this->Flash->error("登録できませんでした");
            }
        }
    }

    public function index()
    {
        // $this->set("persons", $this->Persons->find("all"));
        $this->set("persons", $this->paginate());
    }

    public function edit($id = null)
    {
        // URLのIDからデータを取得する
        $person = $this->Persons->get($id);

        if ($this->request->is(["post", "patch", "put"])) {
            // post patch put 通信の場合
            $person = $this->Persons->patchEntity($person, $this->request->getData());
            if ($this->Persons->save($person)) {
                return $this->redirect("/persons/index");
            }
        } else {
            // get通信の場合
            $this->set("person", $person);
        }
    }

    public function delete($id = null)
    {
        // URLのIDからデータを取得する
        $person = $this->Persons->get($id);
        if ($this->request->is(["post", "put"])) {
            if ($this->Persons->delete($person)) {
                return $this->redirect("/persons/index");
            }
        } else {
            $this->set("person", $person);
        }
    }

    public function find()
    {
        $persons = $this->Persons->find("all");
        // $persons = [];
        if ($this->request->is("post")) {
            $find = $this->request->getData("find");
            $persons = $this->Persons->find()
                ->offset(0)
                ->limit(2)
                ->where(["name like" => "%$find%"])
                ;
        }
        $this->set("msg", null);
        $this->set("persons", $persons);
    }

}
?>
