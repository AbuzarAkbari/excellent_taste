<?php
require_once "ArrayHelper.php";

/**
 * The HTMLElements used for creating html elements e.g. tables, forms
 *
 * @category   Model
 */
class HTMLElements
{


    /**
     * creates a table with vertical rows
     *
     * @param mixed $array array or object you want to make a table with
     * @param string (optional) $tableClass a class you want to add to the table
     * @return string the table
     *
     */
    public static function tableVerticalRows($array, string $tableClass = "table")
    {


        $output = "<table class=\"$tableClass\">";

        foreach ($array[0] ?? [] as $key => $value) {

            if (empty($value))
                continue;

            $output .= "
                <tr>
                    <th>$key</th>
                    <td>$value</td>
                </tr>
            ";
        }

        $output .= "</table>";
        return $output;

    }

    /**
     * @param mixed $array array or object you want to make a table with
     * @param string (optional) $tableClass a class you want to add to the table
     * @return string the table
     */
    public static function printTable($array)
    {
        $table = "<table class='table'>";
        foreach ($array as $key => $value) {
            $table .= "<thead class='thead-inverse'><tr>";
            foreach ($value as $k => $v) {
                $table .= "<th>" . $k . "</th>";
            }
            break;
        }
        foreach ($array as $k => $v) {
            $table .= "<tr>";
            foreach ($v as $key => $value) {
                $table .= "<td>" . $value . "</td>";
            }
        }
        $table .= "</table>";
        return $table;
    }

    public static function clickableLink($array, $tableClass = "table")
    {

        foreach ($array as $key => $value) {
            $array[$key]["Order"] = "<td><a style='color:black;text-decoration: none;' href='/reserve/order/$value[reservering_id]'>$value[tafelnummer]</a></td>";
        }


        return $array;
    }
    

}
