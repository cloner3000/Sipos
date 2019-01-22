<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\KeyHelper;
use App\Helpers\DateHelper;
use App\Catatan;
use App\Pasangan;
use App\OrangTua;
use App\Anak;
use App\User;
use App\Desa;
use App\RegisterBayi;
use App\Posyandu;
use Auth;
use DataTables;

class AjaxController extends Controller
{
    public function getCatatanApi($key)
    {
        if (KeyHelper::checkKey(Auth::user()->id, $key)) {
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
                $d->tanggal_lahir_anak = DateHelper::YMDtoDMY($d->anak->tanggal_lahir);

                if ($d->meninggal != null) {
                    if ($d->meninggal == 1) {
                        $d->umur_meninggal_bayi = DateHelper::YMDSubstract($d->anak->tanggal_lahir, $d->tanggal_meninggal)->d;
                        $d->penyebab_meninggal_bayi = $d->penyebab_meninggal;
                        $d->tanggal_meninggal_bayi = DateHelper::YMDtoDMY($d->tanggal_meninggal);
                    } elseif ($d->meninggal == 2) {
                        $d->umur_meninggal_ibu = DateHelper::YMDSubstract($ibu->tanggal_lahir, $d->tanggal_meninggal)->y;
                        $d->penyebab_meninggal_ibu = $d->penyebab_meninggal;
                        $d->tanggal_meninggal_ibu = DateHelper::YMDtoDMY($d->tanggal_meninggal);
                    }
                }
            }
            return DataTables::of($data)->make(true);
            // DataTables::of($data);
        }
        return 'lo cp?';
    }

    public function getPasanganApi($key)
    {
        if (KeyHelper::checkKey(Auth::user()->id, $key)) {
            $data = Pasangan::with('ortus', 'anaks', 'desa', 'desa.kecamatan')->get();
            $i = 1;
            foreach ($data as $d) {
                $d->no = $i++;
                $d->tanggal_menikah = DateHelper::YMDtoDMY($d->tanggal_menikah);
                $d->ayah = $d->ortus[0]->jenis_kelamin == 'Laki-Laki' ? $d->ortus[0] : $d->ortus[1];
                $d->ibu = $d->ortus[0]->jenis_kelamin == 'Perempuan' ? $d->ortus[0] : $d->ortus[1];
                $d->jumlah_anak = count($d->anaks);
            }

            return DataTables::of($data)->make(true);
        }

        return 'lo cp?';
    }

    public function getAnakApi($key)
    {
        if (KeyHelper::checkKey(Auth::user()->id, $key)) {
            $data = Anak::with('pasangan.ortus', 'agama')->get();
            $i = 1;
            foreach ($data as $d) {
                $d->no = $i++;
                $d->ayah = $d->pasangan->ortus[0]->jenis_kelamin == 'Laki-Laki' ? $d->pasangan->ortus[0] : $d->pasangan->ortus[1];
                $d->ibu = $d->pasangan->ortus[0]->jenis_kelamin == 'Perempuan' ? $d->pasangan->ortus[0] : $d->pasangan->ortus[1];
                $d->status_hidup = $d->status == 1 ? 'Hidup' : 'Mati';
            }

            return DataTables::of($data)->make(true);
        }

        return 'lo cp?';
    }

    public function getDesaApi($key)
    {
        if (KeyHelper::checkKey(Auth::user()->id, $key)) {
            $data = Desa::with('kecamatan', 'kecamatan.kabupaten')->get();
            $i = 1;
            foreach ($data as $d) {
                $d->no = $i++;
            }
            return DataTables::of($data)->make(true);
        }

        return 'lo cp?';
    }

    public function getPosyanduApi($key)
    {
        if (KeyHelper::checkKey(Auth::user()->id, $key)) {
            $posyandus = Posyandu::with('desa', 'desa.kecamatan')->get();
            $i = 1;
            foreach ($posyandus as $posyandu) {
                $posyandu->no = $i++;
            }
            return DataTables::of($posyandus)->make(true);
        }

        return 'lo cp?';
    }

    public function showRegisterBayiData($id)
    {
      $data = RegisterBayi::orderBy('umur', 'desc')->with('anak', 'pemberianAsis', 'pemberianImunisasis', 'pemberianNtobs', 'pemberianVitAs')->where('id_anak', $id)->first();
      return $data;
    }
}
