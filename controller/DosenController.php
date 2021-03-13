<?php


namespace controller;


use m\Application;
use m\Controller;

use model\DosenModel;

class DosenController extends Controller
{
    private $mDosen;

    public function __construct(Application $application)
    {
        parent::__construct($application);

        $this->mDosen = new DosenModel();
    }

    public function index()
    {
        $dosen = $this->mDosen->findAll();

        $data = array(
            'all_dosen' => $dosen
        );

        $this->view->setData($data);

        $this->view->setContentTemplate('/home/dosen/index.php');
        $this->view->render();
    }

    public function addDosen()
    {
        if(isset($_POST['submit']))
        {
            $this->saveData();

            $this->redirect('/dosen');
        }

        $this->view->setContentTemplate('/home/dosen/add_dosen.php');
        $this->view->render();
    }

    private function saveData()
    {
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $prodi = $_POST['prodi'];
        $notelp = $_POST['notelp'];

        $this->mDosen->addNew($nip, $nama, $alamat, $prodi, $notelp);
    }
}

?>