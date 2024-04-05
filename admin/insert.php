
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
                <li >
                    <a href="./edit.php">
                        <h4>List Data</h4>
                    </a>
                </li>
                <li class="active">
                    <a href="./insert.php">
                        <h4>Insert Data</h4>
                    </a>
                </li>
            </ul>
        </div>

    <div class="main--content">
            
            <form action="">
                
                <div class=>
                    <label for="nama_event" class="form-label">Event</label>
                    <input type="text" class="form-control" id="nama_event" name="nama_event" required>
                </div>
    
                <div class=>
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
    
                <div class=>
                    <label for="peserta" class="form-label">Peserta</label>
                    <input type="text" class="form-control" id="jumlah_peserta" name="jumlah_peserta" required>
                </div>

                <div class=>
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                
                <!-- Tombol Submit -->
                <div class=>
                    <button class="btn btn-secondary" type="submit" name="submit">Tambah Data</button>
                </div>
            </form>
        </div>
    
</body>
</html>
