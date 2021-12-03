<?php
    class Controller_Tariff extends Controller
    {
        function __construct()
        {
            $this->model = new Model_Tariff();
            $this->view = new View();
        }
	
        function action_index()
        {
            $this->model->give_data();
            $data = $this->model->get_data();		
            $this->view->generate('tariff_view.php', 'template_view.php', $data);
        }
    }
?>