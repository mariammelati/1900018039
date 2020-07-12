<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href=""></head>
    <title>formulir data</title>
<body>
    
    <form method="POST" action="FORMproses.php">
    <h1>Pendaftaran Panitia Ospek</h1>  
    
    <td>
            <pre>
    <label>Nama Lengkap             :</label><input type="dropdown" name="nama" value=""></input>
            </pre>

            <pre>
    <label>Alamat Asal          :</label><input type="dropdown" name="alasal" value=""></input>
            </pre>

            <pre>
    <label>Alamat Sekarang      :</label><input type="dropdown" name="alasek" value=""></input>
            </pre>

            <pre>
    <label>Tempat Lahir     :</label><input type="dropdown" name="lahir" value=""></input>
            </pre>

            <pre>
    <label>Tanggal Lahir        :</label><input type="dropdown" name="tgl" value=""></input>
            </pre>
            <pre>
    <label>Email        :</label><input type="dropdown" name="email" value=""></input>
            </pre>

            <pre>
    <label>No.HP             :</label><input type="dropdown" name="hp" value=""></input>
            </pre>

            <pre>
    <label>Jenis Kelamin    :<input type="radio" name="jk" value="Laki-laki">Laki-laki</input></label><label><input type="radio" name="jk" value="Perempuan">Perempuan</input></label>
            </pre>

            <pre>
    <label>Agama        :</label><td><select type=text name="agama" id="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katolik</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Kong Hu Cu</option>
                </select>
                </td>
            </pre>

            <pre>
    <label>kota         :</label><td><select type=text name="kota" id="kota">
            <option>Banda Aceh</option>
            <option>Denpasar</option>
            <option>Serang</option>
            <option>Tangerang</option>
            <option>Bengkulu</option>
            <option>Gorontalo</option>
            <option>Jakarta</option>
            <option>Jambi</option>
            <option>Bandung</option>
            <option>Bekasi</option>
            <option>Bogor</option>
            <option>Cimahi</option>
            <option>Cirebon</option>
            <option>Depok</option>
            <option>Sukabumi</option>
            <option>Tasikmalaya</option>
            <option>Banjar</option>
            <option>Magelang</option>
            <option>Pekalongan</option>
            <option>Purwokerto</option>
                </select>
            </td>

            </pre>

            <pre>
    <label>Kepanitiaan yang di Minati       :</label><td><select type=text name="minat" id="minat">
            <option>KETUA</option>
            <option>SEKRETARIS</option>
            <option>BENDAHARA</option>
            <option>SIE ACARA</option>
            <option>P3K</option>
            <option>PUBLIKASI DEMOKRASI DOKUMENTASI (PDD)</option>
            <option>SIE PERLENGKAPAN</option>
            <option>SIE HUMAS</option>
            <option>SPONSORSHIP</option>
            <option>SIE KESEKRETARIATAN</option>
            <option>PEMANDU</option>
            <option>SPK</option>
               
                </select>
            </td>

            </pre>

            <pre>
    <label>Alasan Daftar          :<td><textarea name="reason" cols="20" rows="2"></textarea></td></label>
                
            </pre>

        <p></p><input type="submit" value="Submit">
        
    </form>
   
</body>
</html>

