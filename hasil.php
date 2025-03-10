<?php
session_start();

if(!isset($_SESSION['hasil'])) {
    header('Location: index.php');
    exit;
}

$hasil = $_SESSION['hasil'];
$score = $_SESSION['score'];
$total = $_SESSION['total'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Ujian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h2 class="text-center">HASIL UJIAN</h2>
            </div>
            <div class="card-body">
                <h3 class="text-center">Skor Anda: <?= $score ?> / <?= $total ?></h3>
                <table class="table table-bordered mt-4">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Soal</th>
                            <th>Jawaban Anda</th>
                            <th>Jawaban Benar</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($hasil as $bab => $data): ?>
                            <?php foreach($data as $idx => $result): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= "Bab " . str_replace("bab", "", $bab) . " - Soal " . ($idx + 1) ?></td>
                                    <td><?= $result['jawaban_user'] ?></td>
                                    <td><?= $result['jawaban_benar'] ?></td>
                                    <td>
                                        <?php if($result['status']): ?>
                                            <span class="badge bg-success">Benar</span>
                                        <?php else: ?>
                                            <span class="badge bg-danger">Salah</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-primary w-100">Coba Lagi</a>
            </div>
        </div>
    </div>
</body>
</html>
