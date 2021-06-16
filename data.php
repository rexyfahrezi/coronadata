<?php
function http_request($url){
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);
    
    // set user agent    
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // mengembalikan hasil curl
    return $output;
}

if (isset($_GET["search"])) {
	$provinsi=urlencode($_GET["search"]);
} else {
	$provinsi="lampung";
}
$apidata = http_request("https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=Provinsi%20%3D%20'".$provinsi."'&outFields=*&outSR=4326&f=json");
// ubah string JSON menjadi array
$apidata = json_decode($apidata, TRUE);

//error handling
set_error_handler('exceptions_error_handler');

function exceptions_error_handler($severity, $message, $filename, $lineno) {
  if (error_reporting() == 0) {
    return;
  }
  if (error_reporting() & $severity) {
    //throw new ErrorException($message, 0, $severity, $filename, $lineno);
	echo "<script type='text/javascript'>alert('Nama provinsi tidak ditemukan');</script>";
	header("Refresh: 2; URL=/index.php", true, 301);
	//membuat kode di bawah header tidak diproses oleh website sehingga lebih aman
	exit();
  }
}

//pindahin value
try {
	$data = $apidata['features'][0]['attributes'];

	$namaprovinsi = $data['Provinsi'];
	$positif = $data['Kasus_Posi'];
	$sembuh = $data['Kasus_Semb'];
	$meninggal = $data['Kasus_Meni'];
} catch (Exception $e) {
  echo "Something went wrong.";
}
?>
