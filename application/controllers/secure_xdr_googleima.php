<?php
    class Secure_XDR_GoogleIMA extends CI_Controller{

        private $_api_wrapper;
        private $_default_embed_code;
        private $_default_player_id;
        private $_google_ima_player_id;
        private $_sample_email;
        private $_google_ima_ad_tag;

        // Reference to the CodeIgniter app
        protected $CI;

        function __construct() {
            parent::__construct();
            // We load the configuration file
            $this->CI =& get_instance();
            $this->CI->load->config('ooyala_config');
            // We load Ooyala wrapper
            $this->load->library('ooyala');
            $this->load->helper('url');
            $this->_default_embed_code = $this->CI->config->item('default_embed_code');
            $this->_default_player_id = $this->CI->config->item('default_player_id');
            $this->_google_ima_player_id = $this->CI->config->item('google_ima_player_id');
            $this->_sample_email = $this->CI->config->item('sample_email');
            $this->_google_ima_ad_tag = $this->CI->config->item('google_ima_ad_tag');
            $this->_api_wrapper = new Ooyala();

        }

        public function index(){
            // Just the barebones to know that everything works OK
            // with CodeIgniter and the API
            $data['assets'] = $this->_api_wrapper->test();
            $this->load->view('test', $data);
        }

        public function multi_feature(){
            $data['uses_google_ima'] = true;
            $data['player_id'] = $this->_google_ima_player_id;
            $embed_code = $this->_default_embed_code;
            $data['embed_code'] = $embed_code;
            $data['adTagUrl'] = $this->_google_ima_ad_tag;
            $user_id = $this->_sample_email;
            $embed_token_url = $this->_api_wrapper->get_embed_token($embed_code, $user_id);
            $data['embed_token_url'] = $embed_token_url;
            $playhead_time =  $this->_api_wrapper->get_playhead_time($embed_code, $user_id);
            $data['playhead_time'] = $playhead_time;
            $this->load->view('multi-feature', $data);
        }


        public function cross_resume(){
            $data['player_id'] = $this->_default_player_id;
            $embed_code = $this->_default_embed_code;
            $data['embed_code'] = $embed_code;
            $user_id = $this->_sample_email;
            $embed_token_url = $this->_api_wrapper->get_embed_token($embed_code, $user_id);
            $data['embed_token_url'] = $embed_token_url;
            $playhead_time =  $this->_api_wrapper->get_playhead_time($embed_code, $user_id);
            $data['playhead_time'] = $playhead_time;
            $this->load->view('cross_resume', $data);

        }

        public function simple(){
            $data['embed_code'] = $this->_default_embed_code;
            $data['player_id'] = $this->_default_player_id;
            $this->load->view('simple', $data);
        }

        public function message_bus(){
            $data['embed_code'] = $this->_default_embed_code;
            $data['player_id'] = $this->_default_player_id;
            $this->load->view('message-bus', $data);
        }

        public function message_bus_advanced(){
            $data['embed_code'] = $this->_default_embed_code;
            $data['player_id'] = $this->_default_player_id;
            $this->load->view('message-bus-advanced', $data);
        }

        public function player_token(){
            $data['player_id'] = $this->_default_player_id;
            $embed_code = $this->_default_embed_code;
            $data['embed_code'] = $embed_code;
            $embed_token_url = $this->_api_wrapper->get_embed_token($embed_code, $this->_sample_email);
            $data['embed_token_url'] = $embed_token_url;
            $this->load->view('token', $data);
        }

        public function google_ima(){
            $data['player_id'] = $this->_google_ima_player_id;
            $embed_code = $this->_default_embed_code;
            $data['embed_code'] = $embed_code;
            $data['adTagUrl'] = $this->_google_ima_ad_tag;
            $this->load->view('google_ima', $data);
        }

    }
?>