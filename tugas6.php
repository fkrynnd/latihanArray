<?php 

//array, 
//array terdiri dari key => value
//contoh [saifur], key = 0, value = 'saifur'
$assetku = ['Rumah','Villa','Mobil','Motor','Logam Mulia','Berlian'];
//padanannya $belajarngoding = [ 0 => 'saifur', 1 => 'mega' dst ]
//mencetak ke browser, untuk keperluan user
foreach($assetku as $data){
    echo $data. ',';
}
//debugging untuk keperluan programmer
echo "<pre>";
var_dump($assetku);
echo "</pre>";

//asosiative array, key ditentukan sendiri
$pemilik = [
        'nama' => 'Rumah',
        'tahun' => '2020',
        'keterangan' => 'Type 36/72',
        'nilai' => 500000000
];
foreach($pemilik as $v => $k){
    echo $v.':'.$k .'<br/>';
}

//multidimensional array
$arraymultidimensi = [
    [2,3,5],
    [7,6,10],
    [5,7,8],
];
echo "<pre>";
var_dump($arraymultidimensi);
echo "</pre>";

$pemilik = [
    [
        'nama' => 'Rumah',
        'tahun' => '2020',
        'keterangan' => 'Type 36/72',
        'nilai' => 500000000
    ],
    [
        'nama' => 'Villa',
        'tahun' => '2018',
        'keterangan' =>'Puncak Bogor',
        'nilai' => 1000000000,
    ],
];
foreach($pemilik as $pemilik){
    echo "Nama: ".$pemilik['nama']."<br/>";
    echo "Tahun: ".$pemilik['tahun']."<br/>";
    echo "Keterangan: ".$pemilik['keterangan']."<br/>";
    echo "Nilai: ".$pemilik['nilai']."<br/>";
}
?>
<table border="1">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Tanggal Lahir</td>
        <td>Umur</td>
    </tr>
<?php
$no = 1;
foreach($pemilik as $pemilik){
    echo "<tr>";
    echo "<td>".$no."</td>
        <td>".$pemilik['nama']."</td>
        <td>".$pemilik['tahun']."</td>
        <td>".$pemilik['keterangan']."</td>
        <td>".$pemilik['nilai']."</td>";
    echo "</tr>";
    $no++;
}
?>
</table>