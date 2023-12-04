<?php
include "../services/koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Calon</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="action-logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="container mt-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8 p-3">
                    <h1 class="text-left fw-bold">Daftar Calon</h1>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body m-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah</button>

                            <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tambahModalLabel">Tambah Siswa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="addForm" method="POST" action="../services/action-tambah-calon.php">
                                                <div class="mb-3">
                                                    <label for="addNoUrut" class="form-label">No. Urut</label>
                                                    <input type="number" class="form-control" id="addNoUrut" name="addNoUrut" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="addNama" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" id="addNama" name="addNama" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="addVisi" class="form-label">Visi</label>
                                                    <textarea class="form-control" id="addVisi" name="addVisi" rows="3" required></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="addMisi" class="form-label">Misi</label>
                                                    <textarea class="form-control" id="addMisi" name="addMisi" rows="6" required></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No. Urut</th>
                                            <th class="text-center" style="width: 450px;">Nama</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM calon";
                                        $result = mysqli_query($conn, $sql);

                                        // Display data in table
                                        if (mysqli_num_rows($result) > 0) {
                                            $no = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $row["calo_id"]; ?></td>
                                                    <td><?php echo $row["calo_nama"]; ?></td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['calo_id']; ?>">Edit</button>
                                                        <a href='../services/action-delete.php?calo_id=<?php echo $row['calo_id']; ?>' class='btn btn-danger mx-1'>Hapus</a>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="editModal<?php echo $row['calo_id']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel">Edit Calon No. Urut <?php echo $row['calo_id']; ?></h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form id="editForm" method="POST" action="../services/action-edit.php?calo_id=<?php echo $row['calo_id']; ?>">
                                                                    <div class="mb-3">
                                                                        <label for="editNoUrut" class="form-label">No. Urut</label>
                                                                        <input type="number" class="form-control" id="editNoUrut" name="editNoUrut" value="<?php echo $row['calo_id']; ?>" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="editNama" class="form-label">Nama</label>
                                                                        <input type="text" class="form-control" id="editNama" name="editNama" value="<?php echo $row['calo_nama']; ?>" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="editVisi" class="form-label">Visi</label>
                                                                        <textarea class="form-control" id="editVisi" name="editVisi" rows="3" required><?php echo $row['calo_visi']; ?></textarea>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="editMisi" class="form-label">Misi</label>
                                                                        <textarea class="form-control" id="editMisi" name="editMisi" rows="6" required><?php echo $row['calo_misi']; ?></textarea>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        } else {
                                            echo "<tr><td colspan='5'>No data found</td></tr>";
                                        }
                                        mysqli_close($conn);
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>