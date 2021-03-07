@extends('layout/main')

@section('title', 'Mahasiswa')
<style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
             <h1 class="mt-3">Daftar Mahasiswa</h1>
             <table
             align="center"
             border="solid, 1px"
             width="400px">
             <tr>
             <th>No</th>
             <th>NIM</th>
             <th>Nama</th>
             </tr>
             <?php
$data = array('Hanum Cahya'=> array ('1','185150700011001', 'Hanum Cahya'),
		'Dinar Farah' => array ('2','185007001111011', 'Dinar Farah'),
		'Arum Diana' => array ('3', '185070011110231', 'Arum Diana'),
		'Dimas'=> array ('4', '185007000111034', 'Dimas'),
		'Rey Anto' => array ('5', '185150700110022', 'Rey Anto'),
        'Andi Diandra' => array ('6', '1851700777722','Andi Diandra'));
echo "<tr>";
foreach ($data['Hanum Cahya'] as $nama)
{	
   echo  "<td align=center>$nama</td>";
}
echo "</tr>";

echo "<tr>";
foreach ($data['Dinar Farah'] as $nama)
{	
   echo  "<td align=center>$nama</td>";
}
echo "</tr>";

echo "<tr>";
foreach ($data['Arum Diana'] as $nama)
{	
   echo  "<td align=center>$nama</td>";
}
echo "</tr>";

echo "<tr>";
foreach ($data['Dimas'] as $nama)
{	
   echo  "<td align=center>$nama</td>";
}
echo "</tr>";

echo "<tr>";
foreach ($data['Rey Anto'] as $nama)
{	
   echo  "<td align=center>$nama</td>";
}
echo "</tr>";

echo "<tr>";
foreach ($data['Andi Diandra'] as $nama)
{	
   echo  "<td align=center>$nama</td>";
}
echo "</tr>";
?>
        </div>
    </div>
</div>
@endsection
