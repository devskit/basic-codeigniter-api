<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/libraries/Rest.php');

class Api extends Rest
{

    public function __construct()
    {
        parent::__construct();

        $this->register_history();
    }

    public function register_history()
    {
        $preferred_languages = preferred_languages(['en', 'de', 'fr', 'ru'], $_SERVER["HTTP_ACCEPT_LANGUAGE"]);

        $languages = array();

        foreach ($preferred_languages as $key => $priority) {
            $languages[] = $key;
        }

        $data = array(
            'page' => uri_string(),
            'languages' => implode(',', $languages),
            'created_at' => date("Y-m-d H:i:s")
        );

        $browser = browser_data();

        $data['browser'] = $browser['name'];
        $data['os'] = ucwords($browser['platform']);

        $ip = real_ip();
        $ip_info = ip_info($ip);

        $data['ip'] = $ip;

        if (!empty($ip_info['loc'])) {
            $loc = explode(',', $ip_info['loc']);

            if (!empty($loc[0]) && !empty($loc[1])) {
                $data['lat'] = $loc[0];
                $data['lng'] = $loc[1];
            }
        }

        if (!empty($ip_info['city'])) {
            $data['city'] = $ip_info['city'];
        }

        if (!empty($ip_info['region'])) {
            $data['region'] = $ip_info['region'];
        }

        if (!empty($ip_info['country'])) {
            $data['country'] = $ip_info['country'];
        }

        if (!empty($ip_info['postal'])) {
            $data['postal'] = $ip_info['postal'];
        }

        $this->db->insert('history', $data);
    }

}
