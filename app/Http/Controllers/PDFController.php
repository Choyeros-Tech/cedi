<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use PhpOffice\PhpWord\Shared\ZipArchive;

class PDFController extends Controller
{
    public function convertWordToPDF()
    {
        // Uncomment this for debugging, if you want errors shown in the browser, rather than the error log file
        //ini_set('display_errors',1);
        //error_reporting(E_ALL);

        // In this example, we read a docx from a file
        $filename = 'docs/doc.docx';
        $handle = fopen($filename, "rb");
        $contents = fread($handle, filesize($filename));
        fclose($handle);

        // Service endpoint
        $url = 'http://converter-eval.plutext.com/v1/00000000-0000-0000-0000-000000000000/convert';

        $options = array(
                'http' => array(
                'header'  => "Content-type: application/octet-stream\r\n",
                'method'  => 'POST',
                'content' => $contents
                ),
                "ssl"=>array(
                    "verify_peer"=>false,
                    "verify_peer_name"=>false,
                )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        // Assume all went well; write the PDF output to a file
        // Another example might stream it to the user
        $myfile = fopen("docs/out_nocurl.pdf", "w") or die("Unable to open file!");
        fwrite($myfile, $result);
        fclose($myfile);
    }

    public function test(){

        // Uncomment this for debugging, if you want errors shown in the browser, rather than the error log file
        //ini_set('display_errors',1);
        //error_reporting(E_ALL);


        // In this example, we read a docx from a file
        $filename = "docs/doc.docx";
        $handle = fopen($filename, "rb");
        $contents = fread($handle, filesize($filename));
        fclose($handle);


        // Service endpoint
        $url ='http://converter-eval.plutext.com:80/v1/00000000-0000-0000-0000-000000000000/convert';

        // Prepare to log HTTP request/response headers - you can comment these 2 lines out
        ob_start();
        $out = fopen('php://output', 'w');

        $resource = curl_init();
        curl_setopt($resource, CURLOPT_URL, $url);

        $header = array('Content-Type: application/octet-stream'); 
        curl_setopt($resource, CURLOPT_HTTPHEADER, $header);

        curl_setopt($resource, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($resource, CURLOPT_POST, 1);
        curl_setopt($resource, CURLOPT_POSTFIELDS, $contents);

        // Logging prep continued - you can comment these 2 lines out
        curl_setopt($resource, CURLOPT_VERBOSE, true);
        curl_setopt($resource, CURLOPT_STDERR, $out);

        // Execute the request
        $result = curl_exec($resource);
        curl_close($resource);

        // Capture the logs
        fclose($out);
        $debug = ob_get_clean();

        // Display the logs
        echo($debug);

        // Assume all went well; write the PDF output to a file
        // Another example might stream it to the user
        $myfile = fopen("docs/out.pdf", "w") or die("Unable to open file!");
        fwrite($myfile, $result);
        fclose($myfile);

    }
}
