<?php

class Registry {

    /**
     * Get url
     * @param  String $url [description]
     * @return JSON      [description]
     */
    function get($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "$url");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    /**
     * [head description]
     * @param  [type] $url [description]
     * @return [type]      [description]
     */
    function head($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "$url");
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'HEAD');
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    /**
     * [isAvailable description]
     * @return boolean [description]
     */
    function isAvailable() {
        return true;
    }

    /**
     * [search description]
     * @param  [type] $searchTerm [description]
     * @return [type]             [description]
     */
    function search($searchTerm) {

    }

    /**
     * [getImage description]
     * @param  [type] $imageId [description]
     * @return [type]          [description]
     */
    function getImage($imageId) {

    }

    /**
     * [getLabels description]
     * @param  [type] $imageId [description]
     * @return [type]          [description]
     */
    function getLabels($imageId) {

    }

}

// EOF
