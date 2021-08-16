<?php
namespace App\Controller;

use App\Application;
use App\Controller\AppController;

class PersonsController extends AppController
{
    public function add()
    {
        if ($this->request->is("post")) {
            $person = $this->Persons->newEntity();
            $person = $this->Persons->patchEntity($person, $this->request->getData());
            if ($this->Persons->save($person)) {
                return $this->redirect("/persons/index");
            }
        }
    }

    public function index()
    {
        $this->set("persons", $this->Persons->find("all"));
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

}


?>
