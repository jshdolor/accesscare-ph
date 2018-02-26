<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('toCsv'))
{
    function toCsv($data){
        
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="'.ucwords($this->getFileName()).'"');

        $fp = fopen('php://output', 'w');
        foreach ( $data as $line ) {
            $val = explode(",", $line);
            fputcsv($fp, $val);
        }
        fclose($fp);
    }
}

if ( ! function_exists('dd'))
{
    function dd($data){
        
       echo "<pre>";
       var_dump($data);
       die();
       echo "</pre>";

    }
}