<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class ServiceController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function create()
    {
        $service = Service::count() + 1;
        $kode = 'SMG-' . str_pad($service, 6, '0', STR_PAD_LEFT);
        // Cek Apakah Kode Sudah Ada
        $cek = Service::where('no_service', $kode)->first();
        if ($cek) {
            $kode = str_pad($service + 1, 6, '0', STR_PAD_LEFT);
        }
        return view('service-create', compact('kode'));
    }

    public function data()
    {
        $data = Service::all();
        return view('service-data', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'no_service' => 'required',
        ]);
        $service = new Service();
        $service->no_service = $request->no_service;
        $service->customer_name = $request->name;
        $service->address = $request->address;
        $service->phone = $request->phone;
        $service->save();
        return redirect()->route('service.detail', $request->no_service)->with('success', 'Data Berhasil Ditambahkan');
    }

    public function detail($no_service)
    {
        $service = Service::where('no_service', $no_service)->first();
        $serviceDetail = ServiceDetail::where('service_id', $service->id)->get();
        return view('service-detail', compact('service', 'serviceDetail'));
    }

    public function storeDetail(Request $request)
    {
        $request->validate([
            'service_id' => 'required',
            'area' => 'required',
            'sub_area' => 'nullable',
            'tp_cf' => 'nullable',
            'tp_hf' => 'nullable',
            'tp_s' => 'nullable',
            'tp_b' => 'nullable',
            'tp_lv' => 'nullable',
            'tp_t' => 'nullable',
            'tp_ot' => 'nullable',
            'ai' => 'nullable',
            'remark' => 'nullable',
        ]);
        $serviceDetail = new ServiceDetail();
        $serviceDetail->service_id = $request->service_id;
        $serviceDetail->area = $request->area;
        $serviceDetail->sub_area = $request->sub_area;
        $serviceDetail->tp_cf = $request->tp_cf;
        $serviceDetail->tp_hf = $request->tp_hf;
        $serviceDetail->tp_s = $request->tp_s;
        $serviceDetail->tp_b = $request->tp_b;
        $serviceDetail->tp_lv = $request->tp_lv;
        $serviceDetail->tp_t = $request->tp_t;
        $serviceDetail->tp_ot = $request->tp_ot;
        $serviceDetail->ai = $request->ai;
        $serviceDetail->remark = $request->remark;
        $serviceDetail->save();

        $service = Service::where('id', $request->service_id)->first();
        return redirect()->route('service.detail', $service->no_service)->with('success', 'Data Berhasil Ditambahkan');
    }

    public function updateDetail(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'area' => 'required',
            'sub_area' => 'nullable',
            'tp_cf' => 'nullable',
            'tp_hf' => 'nullable',
            'tp_s' => 'nullable',
            'tp_b' => 'nullable',
            'tp_lv' => 'nullable',
            'tp_t' => 'nullable',
            'tp_ot' => 'nullable',
            'ai' => 'nullable',
            'remark' => 'nullable',
        ]);
        $serviceDetail = ServiceDetail::where('id', $request->id)->first();
        $serviceDetail->area = $request->area;
        $serviceDetail->sub_area = $request->sub_area;
        $serviceDetail->tp_cf = $request->tp_cf;
        $serviceDetail->tp_hf = $request->tp_hf;
        $serviceDetail->tp_s = $request->tp_s;
        $serviceDetail->tp_b = $request->tp_b;
        $serviceDetail->tp_lv = $request->tp_lv;
        $serviceDetail->tp_t = $request->tp_t;
        $serviceDetail->tp_ot = $request->tp_ot;
        $serviceDetail->ai = $request->ai;
        $serviceDetail->remark = $request->remark;
        $serviceDetail->save();

        $service = Service::where('id', $serviceDetail->service_id)->first();
        return redirect()->route('service.detail', $service->no_service)->with('success', 'Data Berhasil Diubah');
    }

    public function deleteDetail($id)
    {
        $serviceDetail = ServiceDetail::where('id', $id)->first();
        $serviceDetail->delete();

        $service = Service::where('id', $serviceDetail->service_id)->first();
        return redirect()->route('service.detail', $service->no_service)->with('success', 'Data Berhasil Dihapus');
    }

    public function storeAdditional(Request $request)
    {
        $request->validate([
            'service_id' => 'required',
            'active_ingredient' => 'nullable',
            'dosage' => 'nullable',
            'usage' => 'nullable',
            'note' => 'nullable',
            'timein' => 'nullable',
            'timeout' => 'nullable',
            'recomendation_from_client' => 'nullable',
            'advice_from_client' => 'nullable',
            'ttd_from_admin' => 'nullable',
            'ttd_from_client' => 'nullable',
        ]);
        // Menyimpan file ttd_from_admin ke storage
        $service = Service::where('id', $request->service_id)->first();

        $folderPath = storage_path('app/public/signatures/');
        // Pastikan direktori signatures ada
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0755, true);
        }
        $image_parts_admin = explode(";base64,", $request->ttd_from_admin);
        $image_type_aux_admin = explode("image/", $image_parts_admin[0]);
        $image_type_admin = $image_type_aux_admin[1];
        $image_base64_admin = base64_decode($image_parts_admin[1]);
        $file_admin = $folderPath . uniqid() . '.' . $image_type_admin;
        file_put_contents($file_admin, $image_base64_admin);
        $service->ttd_from_admin = basename($file_admin);

        $image_parts_client = explode(";base64,", $request->ttd_from_client);
        $image_type_aux_client = explode("image/", $image_parts_client[0]);
        $image_type_client = $image_type_aux_client[1];
        $image_base64_client = base64_decode($image_parts_client[1]);
        $file_client = $folderPath . uniqid() . '.' . $image_type_client;
        file_put_contents($file_client, $image_base64_client);
        $service->ttd_from_client = uniqid() . '.' . $image_type_client;

        $service->active_ingredient = $request->active_ingredient;
        $service->dosage = $request->dosage;
        $service->usage = $request->usage;
        $service->note = $request->note;
        $service->timein = now()->format('Y-m-d') . ' ' . $request->timein; // Menyimpan waktu dengan tanggal saat ini
        $service->timeout = now()->format('Y-m-d') . ' ' . $request->timeout; // Menyimpan waktu dengan tanggal saat ini
        $service->recomendation_from_client = $request->recomendation_from_client;
        $service->advice_from_client = $request->advice_from_client;
        $service->save();
        return redirect()->route('service.data')->with('success', 'Data Berhasil Ditambahkan');
    }


    public function print($no_service)
    {
        $pdf = PDF::loadView('service-print');
        return $pdf->stream('invoice.pdf');
        // $service = Service::where('no_service', $no_service)->first();
        // $serviceDetail = ServiceDetail::where('service_id', $service->id)->get();
        // return view('service-print', compact('service', 'serviceDetail'));
    }
}
