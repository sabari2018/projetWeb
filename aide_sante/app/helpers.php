<?php

/**Fonction qui permet de spliter un fichier csv en fonction du delimiter puis place les donnees dans
 * un tableau
 * @param string $filename
 * @param string $delimiter
 * @return array|bool
 */
function csvToArray($filename = '', $delimiter = ';'){
    if (!file_exists($filename) || !is_readable($filename))
        return false;

    $header = null;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== false)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
        {
            if (!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }

    return $data;
}

/**Fonction qui permet de spliter un URL youtube pour recuperer l'ID de la video
 * @param $link
 * @return mixed
 */
function split_link($link){

    $links = explode("embed/",$link);
    return $links[1];
}