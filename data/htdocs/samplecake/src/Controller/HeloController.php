<?php
namespace App\Controller;

use App\Controller\AppController;

class HeloController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout("sample");
        $this->set('header', '* this is sample site *');
        $this->set('footer', 'copyright 2015 libro.');
    }

    public function index()
    {
        // $this->set("message", $this->request->getData("text1"));


        if ($this->request->is("post")) {
            $str = $this->request->getData("text1");
            $this->set("message", $str);
        } else {
            $str = "";
            $this->set("message", $str);
        }



        // $this->autoRender = false;
        // if ($a == "") {
        //     return $this->redirect("/helo/err");

        //     $this->setAction("err");
        //     return;
        // }

        // echo "<html><head></head><body>";
        // echo "<h1>Hello!</h1>";
        // echo "<p>これは、サンプルで作成したページです。</p>";
        // if ($a ==! "") {
        //     echo "パラメータA:" . $a;
        // }
        // if ($b ==! "") {
        //     echo "パラメータB:" . $b;
        // }
        // echo "</body></html>";
    }

    public function err()
    {
        $this->autoRender = false;
        echo "<html><head></head><body>";
        echo "<h1>Hello!</h1>";
        echo "<p>パラメータがありませんでした。</p>";
        echo "</body></html>";
    }
}

?>
