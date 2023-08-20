<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $inventories = Inventory::get();
  
        $data = [
            'title' => 'Invoice Summary',
            'date' => date('m/d/Y'),
            'inventories' => $inventories
        ]; 
            
        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('motorcompany.pdf');
    }
}
