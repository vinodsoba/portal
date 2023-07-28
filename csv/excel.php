<?php
header( "Content-type: application/vnd.ms-excel; charset=UTF-16" );
header('Content-Disposition: attachment; filename=sample.csv');

$data = $_GET["data"];
$datastr = html_entity_decode($data);


include('simple_html_dom.php');
        $html = str_get_html($datastr);

        

        $fp = fopen("php://output", "w");

        foreach($html->find('tr') as $element)
        {
            $td = array();
            foreach( $element->find('td') as $row)  
            {
                $td [] = $row->plaintext;
            }
            fputcsv($fp, $td);
        }

        fclose($fp);
?>