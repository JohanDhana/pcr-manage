<?php
defined('BASEPATH') or exit('No direct script access allowed');

include APPPATH . "/third_party/tcpdf_min/tcpdf.php";



class Pdf extends TCPDF
{

    function __construct()
    {
        parent::__construct();
    }
}
