<style>
    /* body */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    height: 100vh;
    background-color: #F0F0F0;
}

.container {
    display: flex;
    width: 100%;
}

.navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #fff;
    color: #889CFE;
    display: flex;
    align-items: center;
    padding: 10px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    z-index: 1000;
}
.navbar p {
    display: flex;
    margin-left: 15px;
}
.navbar img {
    width: 36px;
    height: 32px;
    gap: 0px;
    opacity: 0px;
}

.sidebar {
    background-color: #F4F2EC;
    color: #696161;
    width: 300px;
    display: flex;
    flex-direction: column;
    padding: 10px 0;
    margin-top: 60px; /* Adjusted for fixed navbar */
}

.user-info {
    align-items: center;
    border-radius: 8px;
    padding: 10px;
    gap: 20px;
    display: flex;
}

.user-info img {
    display: flex;
    width: 90px;
    height: 120px;
    border-radius: 50%;
    margin-left: 15px;
    margin-top: 20px;
}

.user-info table {
    text-align: right;
    margin-top: 10px;
    text-align: left;
}

.menu {
    list-style: none;
    padding: 0;
}

.menu li {
    padding: 10px;
    text-align: center;
    cursor: pointer;
    background-color: #889CFE;
    border-top: 1px solid #889CFE;
    border-bottom: 1px solid #889CFE;
    padding-bottom: 5px;
    margin-bottom: 8px;
    color: #353333;
    text-align: left;
}

.menu li:hover {
    background-color: #C7D0C4;
    border-top: 1px solid #C7D0C4;
    border-bottom: 1px solid #C7D0C4;
}

.menu p {
    color: #353333;
    margin-left: 10px;
}

.main-content {
    margin-top: 60px; /* Space for navbar */
    flex-grow: 1;
    padding: 20px;
    background-image: url("../SAKSI/img/gedung.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
}

.header1 {
    background-color: #889CFE;
    color: #353333;
    padding: 30px;
    text-align: left;
    margin-bottom: 50px;
}
.filter-section {
    margin-bottom: 5px;
    display: flex;
}

.button-filter {
    margin-left: 1201px;
    background-color: #889CFE;
    color: black;
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    cursor: pointer;
    margin-bottom: 5px;
}

.button-filter:hover {
    background-color: #C7D0C4;
}
.table-header{
    background-color: #E3F2FD;
    padding: 5px;
    padding-left: 30px;
}

.content {
    flex-grow: 5;
    background-color: #fff;
  }
  .data-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
}

.data-table th {
    background-color: #EAECF0;
    border: 1px solid #ddd;
    font-weight: bold;
    padding: 15px;
}
.data-table tr, .data-table td {
    border: 1px solid #ddd;
    padding: 15px;
    text-align: center;
}


.button-view {
    padding: 5px 10px;
    background-color: #819cff;
    color: white;
    border: none;
    cursor: pointer;
    width: 90px;
    height: 30px;
    border-radius: 12px;
    font-weight: bold;
    font-family: Arial;
    font-size: 17px
}

.button-view:hover {
    background-color: #C7D0C4;
}
.icon-check-wrapper {
    display: flex;
    gap: 10px; /* Menyusun ikon dengan jarak */
    justify-content: center;
    align-items: center;
}
.icon-check {
    font-size: 16px; /* Ukuran ikon */
    color: white; /* Warna ikon centang */
    background-color: #819cff; /* Warna latar belakang lingkaran */
    border-radius: 50%; /* Membuat bentuk lingkaran */
    padding: 10px; /* Padding untuk memperbesar lingkaran */
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 16px; /* Lebar lingkaran */
    height: 16px; /* Tinggi lingkaran */
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek */
}

.icon-cross {
    color: #819cff;
    font-size: 16px; /* Ukuran ikon */
    color: white; /* Warna ikon centang */
    background-color: #819cff; /* Warna latar belakang lingkaran */
    border-radius: 50%; /* Membuat bentuk lingkaran */
    padding: 10px; /* Padding untuk memperbesar lingkaran */
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 16px; /* Lebar lingkaran */
    height: 16px; /* Tinggi lingkaran */
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek */
}
.icon-check:hover{
    background-color: #C7D0C4;
}
.icon-cross:hover{
    background-color: #C7D0C4;
}
.out {
    background-color: #819cff;
    color: black;
    padding: 10px;
    cursor: pointer;
    width: 100px;
    align-self: center;
    border: none;
    margin-top: 50px;
    margin-left: 10px;

}
.out:hover{
    background-color: #C7D0C4;
    border-top: 1px solid #C7D0C4;
    border-bottom: 1px solid #C7D0C4;
}
  



</style>
<div style="
    background-color: #ffffff;
    padding: 20px; 
    padding-bottom: 30px; 
    margin: 0; 
    border-radius: 8px; 
    width: calc(100% - 0px); 
    height: 100%;
    box-sizing: border-box;">
        <!-- Main Content -->
        <div class="main-content">
                <div class="table-header">
                <h2>Daftar Pelanggaran Anda</h2>
                <div class="filter-section">
                    <p>JTI - Politeknik Negeri Malang</p>
                </div>
                </div>
              
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dosen</th>
                            <th>Nama Mahasiswa</th>
                            <th>Tanggal Laporan</th>
                            <th>Pelanggaran</th>
                            <th>Tingkat</th>
                            <th>Cetak Sanksi</th>
                            <th>Bukti Sanksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center-text">1</td>
                            <td class="center-text">xxxxxxxx</td>
                            <td class="center-text">Muhammad Rizky</td>
                            <td class="center-text">30/11/2024</td>
                            <td class="center-text">200</td>
                            <td class="center-text">xxxxxxxx</td>
                            <td><button name="cetak" class="button-view">print</button></td>
                            <td><button name="upload" class="button-view">upload</button></td>
                        </tr>
                    </tbody>
                </table>
        </div>