<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;
use Termwind\Components\Dd;

class TicketController extends Controller
{


    public function handleTiket(Request $request)
    {
        // dd($request->all());
        // Validasi inputan
        $validatedData = $request->validate([
            'name_input.*' => 'sometimes',
            'medicine_input.*' => 'sometimes',
            'exp_date_input.*' => 'sometimes',
            'daily_dosage_input.*' => 'sometimes',
            'medicine_form_input.*' => 'sometimes',
            'detail_input.*' => 'sometimes',
        ]);



        // Periksa tombol yang diklik
        if ($request->input('button') == "cetak-salep") {
            $data = [];
            foreach ($validatedData['name_input'] as $index => $name) {
                $data[] = [
                    'nama' => $name,
                    'date' => now(),
                    'medicine' => $validatedData['medicine_input'][$index] ?? null,
                    'expdate' => $validatedData['exp_date_input'][$index] ?? null,
                    'dailydosage' => $validatedData['daily_dosage_input'][$index] ?? null,
                    'medicineform' => $validatedData['medicine_form_input'][$index] ?? null,
                    'detail' => $validatedData['detail_input'][$index] ?? null,
                ];
            }

            $filename = 'cetak_tiket_biru';
            $pdf = Pdf::loadView('pdf.tiketbiru', ['data' => $data])
                      ->setPaper('a4', 'portrait'); // Atur ukuran kertas

            return $pdf->stream($filename);
        }

    elseif ($request->input('button') == "cetak-obat") {
            // Buat data untuk PDF
            // $data = [
            //     'nama' =>$validatedData['name_input'],
            //     'date' => now(),
            //     'medicine' => $validatedData['medicine_input'],
            //     'expdate' => $validatedData['exp_date_input'],
            //     'dailydosage' => $validatedData['daily_dosage_input'],
            //     'medicineform' => $validatedData['medicine_form_input'],
            //     'detail' => $validatedData['detail_input'],
            //     'filename'=> $validatedData['name_input'].'_'.$validatedData['medicine_input'].'_'.'tiket'.'_'.'putih'
            // ];

            // Buat data untuk PDF
            $data = [];
            foreach($validatedData['name_input'] as $index => $name) {
                $data[] = [
                    // 'nama' =>$validatedData['name_input'],
                    // 'date' => now(),
                    // 'medicine' => $validatedData['medicine_input'],
                    // 'expdate' => $validatedData['exp_date_input'],
                    // 'dailydosage' => $validatedData['daily_dosage_input'],
                    // 'medicineform' => $validatedData['medicine_form_input'],
                    // 'detail' => $validatedData['detail_input'],
                    // 'filename'=> $validatedData['name_input'].'_'.$validatedData['medicine_input'].'_'.'tiket'.'_'.'biru'

                    'nama' => $name,
                    'date' => now(),
                    'medicine' => $validatedData['medicine_input'][$index] ?? null,
                    'expdate' => $validatedData['exp_date_input'][$index] ?? null,
                    'dailydosage' => $validatedData['daily_dosage_input'][$index] ?? null,
                    'medicineform' => $validatedData['medicine_form_input'][$index] ?? null,
                    'detail' => $validatedData['detail_input'][$index] ?? null,

                ];
            }
            //penamaan file
            $filename='cetak'.'_'.'tiket'.'_'.'putih';

            //stream pdf
            $pdf = Pdf::loadView('pdf.tiketputih', ['data' => $data]);
            return $pdf->stream($filename);
        } else {
            return redirect()->back()->with('error', 'Tombol yang diklik tidak sesuai');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
