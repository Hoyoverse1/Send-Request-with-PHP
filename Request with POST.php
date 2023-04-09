$url = 'https://www.contohwebsite.com/submit.php';

$data = array(
    'nama' => 'John Doe',
    'email' => 'johndoe@mail.com',
    'pesan' => 'Ini adalah pesan dari John Doe'
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

$result = curl_exec($ch);

echo $result;

curl_close($ch);
