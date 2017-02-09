<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Language_model extends MY_Model
{

        public function __construct()
        {
                $this->table       = 'language';
                $this->primary_key = 'language_id';
                //   $this->soft_deletes = true;
                //$this->has_one['details'] = 'User_details_model';
                // $this->has_one['details'] = array('User_details_model','user_id','id');
                //  $this->has_one['details'] = array('local_key' => 'id', 'foreign_key' => 'user_id', 'foreign_model' => 'User_details_model');
                // $this->has_many['posts'] = 'Post_model';

                $this->timestamps        = TRUE;
                $this->return_as         = 'object';
                $this->timestamps_format = 'H:i:s m-d-Y';
                parent::__construct();
        }

}
