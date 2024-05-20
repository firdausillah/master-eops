<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once FCPATH . 'vendor/autoload.php';

class M_pdf
{

    public function __construct()
    {
        // Constructor dapat dibiarkan kosong jika tidak digunakan
    }

    public function load($param = NULL)
    {
        if ($param == NULL) {
            $param = [
                'mode' => 'utf-8',
                'format' => 'A4',
                'default_font_size' => 0,
                'default_font' => '',
                'margin_left' => 20,
                'margin_right' => 15,
                'margin_top' => 15,
                'margin_bottom' => 15,
                'margin_header' => 6,
                'margin_footer' => 3
            ];
        }

        return new \Mpdf\Mpdf($param);
    }
}
