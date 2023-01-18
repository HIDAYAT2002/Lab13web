<?php
$q="";
if (isset($_GET ['submit']) && !empty($_GET['q'])) {
    $q = $_GET['q'];
    $sql_where = "WHERE nama LIKE '{$q}%";
}
$title = 'Data Barang';
include_once 'Koneksi.php';
$sql = 'SELECT * FROM data_Barang';
if (isset($sql_where))
    $sql .= mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);
include_once 'header.php';
echo '<a href="tambah_Barang.php" class ="btn" btn-large">Tambah Barang</a>;
?>
<from action ="" method="get">
    <label for="q">cari data : </label>
    <iinput type="text" id="q" class="input-q" value="<?php echo $q ?>">
    <input type="submit" name="submit" value="cari" class="btn btn-primary">
</form>
<?phpif ($result):
?>
<table>