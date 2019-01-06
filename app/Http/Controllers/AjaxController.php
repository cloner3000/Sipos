<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catatan;
use App\Pasangan;
use App\OrangTua;
use App\Anak;
use App\User;
use App\Helpers\KeyHelper;

class AjaxController extends Controller
{
    public function getCatatanApi($key)
    {
        if (KeyHelper::checkKey(1, $key)) {
            $data = Catatan::with(['anak', 'anak.pasangan.ortus'])->get();
            foreach ($data as $d) {
                $d->umur_meninggal_bayi = '-';
                $d->penyebab_meninggal_bayi = '-';
                $d->umur_meninggal_ibu = '-';
                $d->penyebab_meninggal_ibu = '-';

                if ($d->meninggal != NULL) {
                    if ($d->meninggal == 1) {
                        $d->umur_meninggal_bayi = date('d', strtotime($d->tanggal_meninggal) - strtotime($d->anak->tanggal_lahir));
                        $d->penyebab_meninggal_bayi = $d->penyebab_meninggal;
                    } else if($d->meninggal == 2) {
                        $ibu = $d->anak->pasangan->ortus[0]->jenis_kelamin == 'Perempuan' ? $d->anak->pasangan->ortus[0] : $d->anak->pasangan->ortus[1];
                        $d->umur_meninggal_ibu = date('Y', strtotime($d->tanggal_meninggal) - strtotime($ibu->tanggal_lahir));
                        $d->penyebab_meninggal_ibu = $d->penyebab_meninggal;
                    }
                }
            }
            return $data;
            // DataTables::of($data);
        }
        return 'lo cp?';
    }
}
