<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/indexstyle.css">
</head>
<body>
    
    <div class="sidebar">
        <div class="logo"><img src="" alt=""></div>
            <ul class="menu">
                <li>
                    <a href="./index.php">
                        <h4>Dashboard</h4>
                    </a>
                </li>
                <li class="active">
                    <a href="./edit.php">
                        <h4>List Data</h4>
                    </a>
                </li>
                <li>
                    <a href="./insert.php">
                        <h4>Insert Data</h4>
                    </a>
                </li>
            </ul>
    </div>


<div class="main--content">
    <div class="row">
        <div class="col-lg-6">
        </div>
    </div>
        <div class="header--wrapper">
            <div class ="header--title">
                <h2>Event Management</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <form action="">
                        <i class="fas fa-search"></i>
                        <input type="text" id="search" name="search" placeholder="Search" autocomplete="off">
                        <button type="submit" id="tombolCari">Search</button>
                    </form>

                </div>
                <img src="../assets/background.jpg" alt=""/>
            </div>            
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Data Event</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                        <form action="">
                            <th>ID</th>
                            <th>Event<button type="submit" name="sort" value="nama_event"><i class="bi bi-sort-alpha-up"></i></button> </th>
                            <th>Alamat<button type="submit" name="sort" value="alamat"><i class="bi bi-sort-alpha-up"></i></button></th>
                            <th>Peserta<button type="submit" name="sort" value="telepon"><i class="bi bi-sort-alpha-up"></i></button></th>
                            <th>Tanggal<button type="submit" name="sort" value="tanggal"><i class="bi bi-sort-alpha-up"></i></button></th>
                            <th>Aksi</th>
                            <input type="hidden" name="order">
                        </form>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lomba Ngaji</td>
                                <td>Lapangan Ngawi</td>
                                <td>50</td>
                                <td>09/04/2024</td>
                                <td><a href="">Edit</a> | <a href="">Hapus</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pentas Seni</td>
                                <td>Stadion GBK</td>
                                <td>500</td>
                                <td>10/04/2024</td>
                                <td><a href="">Edit</a> | <a href="">Hapus</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Konser Musik</td>
                                <td>Lapangan Mangli</td>
                                <td>200</td>
                                <td>11/04/2024</td>
                                <td><a href="">Edit</a> | <a href="">Hapus</a></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    </body>
</html>