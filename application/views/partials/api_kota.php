
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: 8467d75b54d4e45fe1a43f98b8f77bab"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $listKota = array(); //bikin array untuk nampung list kota

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {

        $arrayResponse = json_decode($response, true); //decode response dari raja ongkir, json ke array
      
        $tempListKota = $arrayResponse['rajaongkir']['results']; // ambil array yang dibutuhin aja, disini resultnya aja

        //looping array temporary untuk masukin object yang kita butuhin
        foreach ($tempListKota as $value) {
            //bikin object baru
            $kota = new stdClass();
            $kota->id = $value['city_id']; //id kotanya
            $kota->nama = $value['city_name']; //nama kotanya

            array_push($listKota, $kota); //push object kota yang kita bikin ke array yang nampung list kota

        }

        //$listKota : udah berisi list kota yang kita butuhin

        //ini untuk ngecek aja isi $list kota udah bener apa belum
		

    }
