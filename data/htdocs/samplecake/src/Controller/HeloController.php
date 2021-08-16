<?php
namespace App\Controller;

use App\Controller\AppController;

class HeloController extends AppController
{
    public function index($a = "", $b = "")
    {
        $this->autoRender = false;

        if ($a == "") {
            return $this->redirect("/helo/err");

            $this->setAction("err");
            return;
        }

        echo "<html><head></head><body>";
        echo "<h1>Hello!</h1>";
        echo "<p>これは、サンプルで作成したページです。</p>";
        if ($a ==! "") {
            echo "パラメータA:" . $a;
        }
        if ($b ==! "") {
            echo "パラメータB:" . $b;
        }
        echo "</body></html>";
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
