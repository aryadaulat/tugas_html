<!DOCTYPE html>
<html>
    <header
        <meta charset="UTF-8">
        <title>Input Personal Data Viewers</title>
    </header>

    <body style="background-color: lightblue">
        <form action="getgit.php" method="GET"> 
        <div class="container">
            <div class="tulisan">
                <div class="input">
                    <div class="submit">
            <h3>Form Pendaftaran Mahasiswa </h3> 
            <table class="table">
               <td><label>Nama Lengkap : </label></td>
                <td><?php echo $_GET['nama'];?></td>
            <br>
            <tr>
                <td><label>NIM : </label></td>
                <td><?php echo $_GET['NIM'];?></td>
            </tr>
            <tr>
                <td><label>Program Studi : </label></td>
                <td><?php echo $_GET['prodi'];?></td>
            </tr>
            <tr>
                <td><label>Jenis Kelamin :</label></td>
                <td><?php echo $_GET['gender'];?></td>
            <tr>
                <td><label> No Hp : </label> </td>
                <td><?php echo $_GET['email'];?></td>
            </tr>
            <tr>
                <td><label>Semester : </label></td>
                <td><?php echo $_GET['semester'];?></td>
            </tr>
        </div>
            </div>
                </div>
                    </div>
        </form>
    </body>
</html>