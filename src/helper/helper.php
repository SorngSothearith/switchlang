<?php
/** Author: SORNG SOTHEARITH */
function date_lang($date,$mode=0)
{
    $full_date = explode('-', $date);
    $year_start_status = false;
    $date_have_time_start_status = false;
    $date_have_time_status = false;
    //All Variable
    $year = '';
    $month = '';
    $date = '';
    //All result output
    $result_year = '';
    $result_month = '';
    $result_day = '';
    if (count($full_date) == 3) {

        if (count($full_date) == 3) {
            if (strlen($full_date[0]) == 4)
                $year_start_status = true;
            else if (strlen($full_date[2]) == 4)
                $year_start_status = false;
            else
                return 'wrong format';
            if (count(explode(' ', $full_date[2])) == 2 || count(explode(' ', $full_date[2]) == 1)) {
                if (count(explode(' ', $full_date[2]) == 1))
                    $date_have_time_status = true;
                $date_have_time_start_status = false;
            } else if (count(explode(' ', $full_date[0])) == 2 || count(explode(' ', $full_date[0]) == 1)) {
                if (count(explode(' ', $full_date[0]) == 1))
                    $date_have_time_status = true;
                $date_have_time_start_status = true;
            } else
                return 'wrong format';
            if ($year_start_status) {
                $year = $full_date[0];
                $month = $full_date[1];
                $full_date_sub_end = explode(' ', $full_date[2]);
                if ($date_have_time_status) {
                    if ($date_have_time_start_status) {
                        //date in the start
                        $date = $full_date[2];
                    } elseif (!$date_have_time_start_status) {
                        //date in the end
                        $date = $full_date_sub_end[0];
                    }
                } else {
                    $full_date_sub_start = explode(' ', $full_date[0]);
                    if ($date_have_time_start_status) {
                        //date in the start
                        $date = $full_date[0];
                    } elseif (!$date_have_time_start_status) {
                        //date in the end
                        $date = $full_date_sub_start[2];
                    }
                }
            } else {
                $year = $full_date[3];
                $month = $full_date[1];
            }
        }

    } else
        return 'wrong format';
    $nameOfDay = strtolower(date('l', strtotime($date.'-'.$month.'-'.$year)));
    if (app()->getLocale() == 'kh') {
        $date_number_kh='';
        $year_number_kh='';
        for($i=0;$i<strlen($date);$i++) {
            switch ($date[$i]) {
                case "0":
                    $date_number_kh .= "០";
                    break;
                case "1":
                    $date_number_kh .= "១";
                    break;
                case "2":
                    $date_number_kh .= "២";
                    break;
                case "3":
                    $date_number_kh .= "៣";
                    break;
                case "4":
                    $date_number_kh .= "៤";
                    break;
                case "5":
                    $date_number_kh .= "៥";
                    break;
                case "6":
                    $date_number_kh .= "៦";
                    break;
                case "7":
                    $date_number_kh .= "៧";
                    break;
                case "8":
                    $date_number_kh .= "៨";
                    break;
                case "9":
                    $date_number_kh .= "៩";
                    break;
                default:
                    $date_number_kh .= '';
            }
        }
        $date=$date_number_kh;
        for($i=0;$i<strlen($year);$i++) {
            switch ($year[$i]) {
                case "0":
                    $year_number_kh .= "០";
                    break;
                case "1":
                    $year_number_kh .= "១";
                    break;
                case "2":
                    $year_number_kh .= "២";
                    break;
                case "3":
                    $year_number_kh .= "៣";
                    break;
                case "4":
                    $year_number_kh .= "៤";
                    break;
                case "5":
                    $year_number_kh .= "៥";
                    break;
                case "6":
                    $year_number_kh .= "៦";
                    break;
                case "7":
                    $year_number_kh .= "៧";
                    break;
                case "8":
                    $year_number_kh .= "៨";
                    break;
                case "9":
                    $year_number_kh .= "៩";
                    break;
                default:
                    $year_number_kh .= '';
            }
        }
        $year=$year_number_kh;
        switch ($nameOfDay) {
            case "monday":
                $result_day = "ថ្ងៃច័ន្ទ";
                break;
            case "tuesday":
                $result_day = "ថ្ងៃអង្គារ";
                break;
            case "wednesday":
                $result_day = "ថ្ងៃពុធ";
                break;
            case "thursday":
                $result_day = "ថ្ងៃព្រហស្បតិ៍";
                break;
            case "friday":
                $result_day = "ថ្ងៃសុក្រ";
                break;
            case "saturday":
                $result_day = "ថ្ងៃសៅរ៍";
                break;
            case "sunday":
                $result_day = "ថ្ងៃអាទិត្យ";
                break;
            default:
                $result_day = 'មានបញ្ហា';
        }
        switch ($month) {
            case "01":
                $result_month = "ខែមករា";
                break;
            case "02":
                $result_month = "ខែកុម្ភះ";
                break;
            case "03":
                $result_month = "ខែមិនា";
                break;
            case "04":
                $result_month = "ខែមេសា";
                break;
            case "05":
                $result_month = "ខែឧសភា";
                break;
            case "06":
                $result_month = "ខែមិថុនា";
                break;
            case "07":
                $result_month = "ខែកក្កដា";
                break;
            case "08":
                $result_month = "ខែសីហា";
                break;
            case "09":
                $result_month = "ខែកញ្ញា";
                break;
            case "10":
                $result_month = "ខែតុលា";
                break;
            case "11":
                $result_month = "ខែវិច្ជកា";
                break;
            case "12":
                $result_month = "ខែធ្នូ";
                break;
            default:
                $result_month = 'មានបញ្ហា';
        }
        $result_year='ឆ្នាំ '.$year;

    } else if (app()->getLocale() == 'en') {

        switch ($nameOfDay) {
            case "monday":
                $result_day = "Monday";
                break;
            case "tuesday":
                $result_day = "Tuesday";
                break;
            case "wednesday":
                $result_day = "Wednesday";
                break;
            case "thursday":
                $result_day = "Thursday";
                break;
            case "friday":
                $result_day = "Friday";
                break;
            case "saturday":
                $result_day = "Saturday";
                break;
            case "sunday":
                $result_day = "Sunday";
                break;
            default:
                $result_day = 'មានបញ្ហា';
        }

        switch ($month) {
            case "01":
                $result_month = "January";
                break;
            case "02":
                $result_month = "February";
                break;
            case "03":
                $result_month = "March";
                break;
            case "04":
                $result_month = "April";
                break;
            case "05":
                $result_month = "May";
                break;
            case "06":
                $result_month = "June";
                break;
            case "07":
                $result_month = "July";
                break;
            case "08":
                $result_month = "August";
                break;
            case "09":
                $result_month = "September";
                break;
            case "10":
                $result_month = "October";
                break;
            case "11":
                $result_month = "November";
                break;
            case "12":
                $result_month = "December";
                break;
            default:
                $result_month = 'Error';
        }
        $result_year=$year;

    } else {
        return 'error';
    }
    if ($mode==0){
        return $result_year.', '.$date.' '.$result_month.', '.$result_day;
    }else if ($mode==1){
        return $result_day.', '.$date.' '.$result_month.', '.$result_year;
    }else
    {
        return 'error mode';
    }
}

?>