<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('js_tag'))
{
    function js_tag($file = '')
    {
        return "<script type='text/javascript' src='".base_url().$file."'></script>";
    }   

    function js_tag_external($file = '')
    {
        return "<script type='text/javascript' src='".$file."'></script>";
    }   
}
?>
