<html>
    <head>
        <title>Form Input Matakuliah</title>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <center>
            <form action="<?=  base_url('matakuliah/cetak'); ?>" method="post">
                <table>
                    <tr>
                        <th colspan="3" align="center">
                            From Input Data Mata Kuliah 
                        </th>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <th>Kode MTK</th>
                        <th>:</th>
                        <td>
                            <input type="text" name="kode" id="kode">
                        </td>
                    </tr>
                    <tr>
                        <th>Nama MTK</th>
                        <th>:</th>
                        <td>
                            <input type="text" name="nama" id="nama">
                        </td>
                    </tr>
                    <tr>
                        <th>SKS</th>
                        <td>:</td>
                        <td>
                            <select name="sks" id="sks">
                                <option value="">Pilih SKS</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>