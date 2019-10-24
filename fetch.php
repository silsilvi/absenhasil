<?php
//fetch.php
$koneksi = mysqli_connect("localhost", "root", "", "absenhasil1");
$column = array("tanggal", "batang", "lahan", "seri", "ket", "mesin", "panjang", "lebar", "tebal", "kw", "jenis", "hasil");
$query = "SELECT * FROM kupasan";
$query .= " WHERE ";
if(isset($_POST["is_category"]))
{
 $query .= "kupasan = '".$_POST["is_category"]."' AND ";
}
if(isset($_POST["search"]["value"]))
{
$query .= '(tanggal LIKE "%'.$_POST["search"]["value"].'%" ';
$query .= 'OR batang LIKE "%'.$_POST["search"]["value"].'%" ';
$query .= 'OR lahan LIKE "%'.$_POST["search"]["value"].'%" ';
$query .= 'OR seri LIKE "%'.$_POST["search"]["value"].'%" ';
$query .= 'OR ket LIKE "%'.$_POST["search"]["value"].'%" ';
$query .= 'OR mesin LIKE "%'.$_POST["search"]["value"].'%" ';
$query .= 'OR panjang LIKE "%'.$_POST["search"]["value"].'%" ';
$query .= 'OR lebar LIKE "%'.$_POST["search"]["value"].'%" ';
$query .= 'OR tebal LIKE "%'.$_POST["search"]["value"].'%" ';
$query .= 'OR kw LIKE "%'.$_POST["search"]["value"].'%" ';
$query .= 'OR jenis LIKE "%'.$_POST["search"]["value"].'%" ';
$query .= 'OR hasil LIKE "%'.$_POST["search"]["value"].'%" ';

}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY seri DESC ';
}

$query1 = '';

if($_POST["length"] != 1)
{
 $query1 .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($koneksi, $query));

$result = mysqli_query($koneksi, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["tanggal"];
 $sub_array[] = $row["batang"];
 $sub_array[] = $row["lahan"];
 $sub_array[] = $row["seri"];
 $sub_array[] = $row["ket"];
 $sub_array[] = $row["mesin"];
 $sub_array[] = $row["panjang"];
 $sub_array[] = $row["lebar"];
 $sub_array[] = $row["tebal"];
 $sub_array[] = $row["kw"];
 $sub_array[] = $row["jenis"];
 $sub_array[] = $row["hasil"];
 $data[] = $sub_array;
}

function get_all_data($koneksi)
{
 $query = "SELECT * FROM kupasan";
 $result = mysqli_query($koneksi, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($koneksi),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
