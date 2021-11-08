<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
    	echo "<center><p><b>DATA DIRI SAYA"."</p></b>";
    //membuat array
    	$data = [
    	"Nama" => "Qaramathul puspita ningrum",
    	"Nim" => "TI16190017",
    	"Alamat" => "Puyung"
    ];
    // mencetak isi array
    echo "<center> Nama : ".$data["Nama"]."<br>";
    echo "Nim 			: ".$data["Nim"]."<br>";
    echo "Alamat 		: ".$data["Alamat"]."<br></center>";
    	return view('home_view', $data);
       
    } 

    public function Hobi()

    {
    	echo "<center><p><b>DATA DIRI SAYA"."</p></b>";

    	$Hobi = ["membaca", "makan", "menulis"];

    // menampilkan isi array
    	echo "<center> HOBI :"."<br>".$Hobi[0].",";
    	echo $Hobi[0].",";
    	echo $Hobi[1].",";
    	echo $Hobi[2]."</center>";
    	return view('hobi_view', $Hobi);
    }
    public function Riwayat()
{
	//SD
	echo "<center><p><b>DATA DIRI SAYA"."</p></b>";

    $riwayat = [
    	"N" => "SDN Labulia",
    	"T" => 2016,
    ]; 
    	echo "Nama sekolah : ".$riwayat["N"]."<br>";
    	echo "Tahun lulus  : ".$riwayat["T"]."<br></p>";
    //SMA
    	$riwayat =[
    		"N" => "MA",
    		"T" => "2019",
    ];
    	echo "SMA : ".$riwayat["N"]."<br>";
   		echo "Tahun lulus  : ".$riwayat["T"]."<br></p>";
    return view('Riwayat', $riwayat);
    //KULIAH
    $riwayat = [
    	"N" => "STMIK LOMBOK",
    	"T" => "SEDANG MENGIKUTI PERKULIAHAN",
    ]; 
    	echo "UNIVERSITAS : ".$riwayat["N"]."<br>";
    	echo "Tahun lulus  : ".$riwayat["T"]."<br></p>";
    	return view('riwayat_pendidikan',$riwayat);

}
}