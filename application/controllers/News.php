<?php
class News extends CI_Controller {

    //CI遵循MVC模式，Controller层次，加载Model层数据。
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    //路由配置文件配置的指向路径，默认是index函数（）
    public function index()
    {
        //调用Model数据
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'news archive';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');

    }

    public function index2()
    {
        //调用Model数据
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'news22 archive';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');

    }

//    public function view()
//    {
//        $data['news_item'] = $this->news_model->get_news();
//
//        if (empty($data['news_item']))
//        {
//            show_404();
//        }
//
//        $data['username'] = $data['news_item']['username'];
//
//        $this->load->view('templates/header', $data);
//        $this->load->view('news/view', $data);
//        $this->load->view('templates/footer');
//    }
}