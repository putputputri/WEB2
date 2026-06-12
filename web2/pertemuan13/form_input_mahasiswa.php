<!DOCTYPE html>
<html> 
<head> 
    <title>Form Input Data Mahasiswa</title> 
    <style type="text/css" media="screen"> 
        body { font-family: Verdana, Arial, Helvetica, sans-serif; }
        table { font-size: 12px; } 
        input, select { 
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 12px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input:focus, select:focus {
            border-color: orange;
            outline: none;
        }
        .judul {
            color: orange;
            font-size: 18px;
            font-weight: bold;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 20px;
            cursor: pointer;
        }
        .reset-btn {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 8px 20px;
            cursor: pointer;
        }
        .container {
            border: 1px solid #ddd;
            padding: 20px;
            width: 500px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head> 
<body> 
    <div class="container"> 
        <h2 class="judul">Form Input Data Mahasiswa</h2>
        
        <form action="action_input_data.php" method="POST" name="form-input-data"> 
            <table width="100%" border="0" cellpadding="8"> 
                <tr> 
                    <td width="30%">ID Mahasiswa / NIM</td> 
                    <td>
                        <input type="text" name="id_mahasiswa" size="20" maxlength="6" required />
                        <small>(max 6 karakter)</small>
                    </td> 
                </tr>
                <tr> 
                    <td>Nama</td> 
                    <td><input type="text" name="nama" size="40" maxlength="30" required /></td> 
                </tr> 
                <tr> 
                    <td>Jurusan</td> 
                    <td>
                        <select name="jurusan" required> 
                            <option value="">- Pilih Jurusan -</option> 
                            <option value="Teknik Komputer">Teknik Komputer</option> 
                            <option value="Teknik Informatika">Teknik Informatika</option> 
                            <option value="Teknik Mesin">Teknik Mesin</option> 
                            <option value="Teknik Elektro">Teknik Elektro</option> 
                            <option value="Komputer Akuntansi">Komputer Akuntansi</option> 
                        </select>
                    </td> 
                </tr>
                <tr> 
                    <td>Alamat</td> 
                    <td><input type="text" name="alamat" size="40" maxlength="30" required /></td> 
                </tr> 
                <tr> 
                    <td>No. Telp</td> 
                    <td><input type="text" name="telepon" size="20" maxlength="12" required /></td> 
                </tr>
                <tr> 
                    <td></td> 
                    <td>
                        <input type="submit" name="Submit" value="Submit" class="submit-btn"> 
                        <input type="reset" name="reset" value="Cancel" class="reset-btn">
                    </td> 
                </tr> 
            </table> 
        </form> 
    </div> 
</body> 
</html>