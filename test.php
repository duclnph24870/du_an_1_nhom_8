<?php 
    function convert_date_to_number ($dateTime) {
        $dateObj = explode('-',explode(' ',$dateTime)[0]);
        return [
            'day' => $dateObj[2],
            'month' => $dateObj[1],
            'year' => $dateObj[0],
        ];
    }

    print_r(convert_date_to_number("2022-10-13 12:01:12"));
?>