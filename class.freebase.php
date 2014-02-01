<?php

//https://www.googleapis.com/freebase/v1/mqlread?query=[{%22type%22:%22/people/person%22,%22return%22:%22count%22}]

class Freebase {

    private $api_key = 'AIzaSyBUnCk2HK0SNB-i8Pf5wlpZ9ZzHP69RiZA';

    public function mql($type, $verbos = false) {
        $url = 'https://www.googleapis.com/freebase/v1/mqlread?query=';
        $url .= "[{";
        $url .= '"type":"' . $type . '",';
        if ($verbos) {
            $url .= '"location":{},';
            $url .= '"id":{}';
        } else {
            $url .= '"location":null,';
            $url .= '"id":null';
        }
        $url .= "}]";
        //$url .= '&limit=' . $limit;
        $url .= '&key=' . $this->api_key;

        return json_decode(file_get_contents($url), true);
    }

    public function search($query, $filter = '', $start = 0, $limit = 10, $exact = 'false') {

        if (!empty($query)) {
            $query = urlencode($query);
            $url = 'https://www.googleapis.com/freebase/v1/search?query=' . $query;
            if (strlen($filter) != 0) {
                $url .= '&filter=(' . urlencode($filter) . ')';
            }
            $url .= '&start=' . $start;
            $url .= '&limit=' . $limit;
            $url .= '&exact=' . $exact;
            $url .= '&key=' . $this->api_key;

            return json_decode(file_get_contents($url), true);
        }
    }

    public function topic2($entity_id) {
        if (!empty($entity_id)) {
            $url = 'https://www.googleapis.com/freebase/v1/topic' . $entity_id . '?limit=1';
            return json_decode(file_get_contents($url), true);
        }
    }

    public function topic($topic_id) {
        if (!empty($topic_id)) {
            $service_url = 'https://www.googleapis.com/freebase/v1/topic';
            $params = array('key' => $this->api_key);
            $url = $service_url . $topic_id . '?' . http_build_query($params);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $topic = json_decode(curl_exec($ch), true);
            echo curl_error($ch);
            curl_close($ch);
            //echo $url.'<br>'.$topic["id"];
            return $topic;
        }
    }

    public function image($entity_id, $max_width = 150, $max_height = 150) {

        if (!empty($entity_id)) {
            $url = 'https://usercontent.googleapis.com/freebase/v1/image' . $entity_id;
            $url .= '?maxwidth=' . $max_width;
            $url .= '&maxheight=' . $max_height;
            $url .= '&key=' . $this->api_key;

            return $url;
        }
    }

    public function text($entity_id, $max_length = '0') {

        if (!empty($entity_id)) {
            $url = 'https://www.googleapis.com/freebase/v1/text/' . $entity_id;
            $url .= '?maxlength=' . $max_length;
            $url .= '&key=' . $this->api_key;

            $json = json_decode(file_get_contents($url), true);
            return $json['result'];
        }
    }

}

?>