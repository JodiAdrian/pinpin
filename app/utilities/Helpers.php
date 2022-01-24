<?php

namespace App\Utilities;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class Helpers
{
    public static function formatDate($date, $full = false, $indonesia = false, $timezone = 0){
        if($date){
            $dt = Carbon::parse($date);
            if($timezone != 0){
                $dt = $dt->addHour($timezone);
            }
            if($indonesia){
                if($full){
                    return Helpers::IndonesiaFormatDate($dt->format('d m Y H:i'));
                }else{
                    return Helpers::IndonesiaFormatDate($dt->format('d m Y'));
                }
            }
            if($full){
                return $dt->format('d F Y H:i');
            }else{
                return $dt->format('d F Y');
            }
        }else{
            return '-';
        }
    }
    
    public static function IndonesiaFormatDate($date){
        $month = [
            1   => 'Januari',
            2   => 'Febuari',
            3   => 'Maret',
            4   => 'April',
            5   => 'Mei',
            6   => 'Juni',
            7   => 'Juli',
            8   => 'Agustus',
            9   => 'September',
            10  => 'Oktober',
            11  => 'November',
            12  => 'Desember',
        ];

        $explode = explode(' ', $date);
        if(count($explode) === 4){
            return $explode[0].' '.$month[(int)$explode[1]].' '.$explode[2].' '.$explode[3];
        }
        return $explode[0].' '.$month[(int)$explode[1]].' '.$explode[2];
    }

    public static function formatCurrency($number = 0, $unit = '', $isSuffixUnit = false, $decimal = 0){
        if($isSuffixUnit){
            return number_format($number, $decimal, ',', '.').' '.$unit;
        } else {
            return $unit.' '.number_format($number, $decimal, ',', '.');
        }
    }

    public static function detailTransaction($param, $function){
        $param = $function."('".$param."')";
        return '<button class="btn btn-light-info font-weight-bolder btn-sm mr-2" onclick="'.$param.'">
                    <span class="svg-icon svg-icon-md">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1" />
                        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1" />
                            </g>
                        </svg>
                    </span>
                    Detail
                </button>';
    }

    public static function editButton($param, $function){
        $param = $function."('".$param."')";
        return '<button class="btn btn-light-warning font-weight-bolder btn-sm mr-2" onclick="'.$param.'">   
                    <span class="svg-icon svg-icon-md">
                    <svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                        viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                fill="#000000" fill-rule="nonzero"
                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1" />
                        </g>
                    </svg>
                    </span>
                    Ubah
                </button>';
    }

    public static function deleteButton($param, $function){
        $param = $function."('".$param."')";
        return '<button class="btn btn-light-danger font-weight-bolder btn-sm" onclick="'.$param.'">
                    <span class="svg-icon svg-icon-md">
                        <svg
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                    fill="#000000" fill-rule="nonzero" />
                                <path
                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                    fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                    </span>
                    Hapus
                </button>';
    }

    public static function statusBadge($param){
        $status = Str::title(Str::replace('_', ' ', $param));
        if($param == 'Approved'){
            return '<span class="label label-lg font-weight-bold label-light-primary label-inline">'.$status.'</span>';
        }else if($param == 'Waiting'){
            return '<span class="label label-lg font-weight-bold label-light-danger label-inline">'.$status.'</span>';
        }
    }
}