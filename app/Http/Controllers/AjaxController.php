<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\KeyHelper;
use App\Catatan;
use App\Pasangan;
use App\OrangTua;
use App\Anak;
use App\User;
use DataTables;

class AjaxController extends Controller
{
    public function getCatatanApi($key)
    {
        if (KeyHelper::checkKey(1, $key)) {
            $data = Catatan::with(['anak', 'anak.pasangan.ortus'])->get();
            $i = 1;
            foreach ($data as $d) {
                $d->no = $i++;
                $d->umur_meninggal_bayi = '-';
                $d->penyebab_meninggal_bayi = '-';
                $d->tanggal_meninggal_bayi = '-';
                $d->umur_meninggal_ibu = '-';
                $d->penyebab_meninggal_ibu = '-';
                $d->tanggal_meninggal_ibu = '-';

                $ibu = $d->anak->pasangan->ortus[0]->jenis_kelamin == 'Perempuan' ? $d->anak->pasangan->ortus[0] : $d->anak->pasangan->ortus[1];
                $ayah = $d->anak->pasangan->ortus[0]->jenis_kelamin == 'Laki-Laki' ? $d->anak->pasangan->ortus[0] : $d->anak->pasangan->ortus[1];
                $d->nama_ayah = $ayah->nama;
                $d->nama_ibu = $ibu->nama;
                $d->tanggal_lahir_anak = date('d-m-Y', strtotime($d->anak->tanggal_lahir));

                if ($d->meninggal != NULL) {
                    if ($d->meninggal == 1) {
                        $d->umur_meninggal_bayi = date('d', strtotime($d->tanggal_meninggal) - strtotime($d->anak->tanggal_lahir));
                        $d->penyebab_meninggal_bayi = $d->penyebab_meninggal;
                        $d->tanggal_meninggal_bayi = date('d-m-Y', strtotime($d->tanggal_meninggal));
                    } else if($d->meninggal == 2) {
                        $d->umur_meninggal_ibu = date('Y', strtotime($d->tanggal_meninggal) - strtotime($ibu->tanggal_lahir));
                        $d->penyebab_meninggal_ibu = $d->penyebab_meninggal;
                        $d->tanggal_meninggal_ibu = date('d-m-Y', strtotime($d->tanggal_meninggal));
                    }
                }
            }
            return DataTables::of($data)->make(true);
            // DataTables::of($data);
        }
        return 'lo cp?';
    }
}
