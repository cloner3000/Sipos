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
use App\BaseDesa as Desa;
use App\RegisterBayi;
use App\BasePosyandu as Posyandu;
use Auth;
use DataTables;

class AjaxController extends Controller
{
  public function getCatatanApi()
  {
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


  public function getPasanganApi()
  {
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



  public function getAnakApi()
  {
    $data = Anak::with('agama', 'pasangan.ortus')->get();
    $i = 1;
    foreach ($data as $d) {
      $d->no = $i++;
      $d->ayah = $d->pasangan->ortus[0]->jenis_kelamin == 'Laki-Laki' ? $d->pasangan->ortus[0] : $d->pasangan->ortus[1];
      $d->ibu = $d->pasangan->ortus[0]->jenis_kelamin == 'Perempuan' ? $d->pasangan->ortus[0] : $d->pasangan->ortus[1];
      $d->status_hidup = $d->status == 1 ? 'Hidup' : 'Mati';
    }

    return DataTables::of($data)->make(true);
  }



  public function getDesaApi()
  {
    $data = Desa::with('kecamatan', 'kecamatan.kabupaten')->get();
    $i = 1;
    foreach ($data as $d) {
      $d->no = $i++;
    }
    return DataTables::of($data)->make(true);
  }



  public function getPosyanduApi()
  {
    $posyandus = Posyandu::with('desa', 'desa.kecamatan')->get();
    $i = 1;
    foreach ($posyandus as $posyandu) {
      $posyandu->no = $i++;
    }
    return DataTables::of($posyandus)->make(true);
  }

  public $bulan = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'Mei', 6 => 'Jun', 7 => 'Jul', 8 => 'Agu', 9 => 'Sept', 10 => 'Okt', 11 => 'Nov', 12 => 'Des');

  public function getRegisterBayiApi($umur, $tahun)
  {
    switch ($umur) {
      case 0: {
        $data = RegisterBayi::with('anak', 'pemberianAsis', 'pemberianAsis.asi', 'pemberianImunisasis', 'pemberianImunisasis.imunisasi', 'pemberianNtobs', 'pemberianVitAs')
        ->where('umur', $umur)
        ->where('active', 1)
        ->get();

        $i = 1;
        $res = [];
        foreach ($data as $d) {
          $d->no = $i++;
          $ntobs = array();
          foreach ($d->pemberianNtobs as $ntob) {
            $dates = explode('-', $ntob->tanggal);
            if ($dates[0] != $tahun) {
              continue;
            }
            $month = (int)$dates[1];
            $ntobs[$month] = $ntob;
          }
          $d->ntobs = $ntobs;

          $asis = array();
          foreach ($d->pemberianAsis as $asi) {
            $dates = explode('-', $asi->tanggal);
            if ($dates[0] != $tahun) {
              continue;
            }
            $month = (int)$dates[1];
            $asis[$month] = $asi;
          }
          $d->asis = $asis;
          $imun_temp = array();
          foreach ($d->pemberianImunisasis as $imunisasi) {
            array_push($imun_temp, $imunisasi->imunisasi->nama_imunisasi);
          }
          $d->imunisasis = implode(", ", $imun_temp);
        }
        return $data;
      }
      break;

      case 1:
      return "12 - 23";
      break;

      case 2:
      return "0 - 11";
      break;

      case 3:
      return "0 - 11";
      break;

      case 4:
      return "0 - 11";
      break;

      default:
      abort(404);
      break;
    }
  }


  public function showRegisterBayiData($id)
  {
    $data = RegisterBayi::orderBy('umur', 'desc')->with('anak', 'pemberianAsis', 'pemberianAsis.asi', 'pemberianImunisasis', 'pemberianImunisasis.imunisasi', 'pemberianNtobs', 'pemberianVitAs')->where('id_anak', $id)->first();
    return $data;
  }
}
