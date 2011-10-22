<?php

function get_boobox() {
    $CI =& get_instance();

    $CI->load->model('bba_model');
    $CI->load->helper(array('html', 'url'));

    $opts = $CI->bba_model->get('conf = "form_bba_uid"');
    $uid = $opts['value'];

    $opts = $CI->bba_model->get('conf = "form_bba_tags"');
    $tags = preg_replace('/ /', '+', $opts['value']);
    $tags = preg_replace('/,/', '', $tags);

    $opts = $CI->bba_model->get('conf = "form_bba_limit"');
    $limit = $opts['value'];

    $opts = $CI->bba_model->get('conf = "form_bba_aff"');
    $aff = $opts['value'];

    $aff = explode(',', trim($aff, ','));

    shuffle($aff);

    $aff = $aff[0];

    $urlbb = "http://boo-box.com/api/format:xml/aff:{$aff}/uid:{$uid}/tags:{$tags}/limit:{$limit}";

    @ $bbjson = file_get_contents($urlbb);

    $retorno = '';

    if (trim($bbjson) == '') {
        $bb = array(1);
    }
    else {
        $bb = simplexml_load_string($bbjson);

        foreach ($bb->item as $item) {
            $retorno .= anchor($item->uri, img(array(
                'src' => $item->img['src'],
                'alt' => $item->title,
                'width' => 120
            )), array('title' => $item->title));
        }
    }

    return $retorno;
}
