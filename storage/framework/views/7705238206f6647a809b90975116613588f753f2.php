<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        .section-title {
            margin-left: 40px;
        }

        .heading {
            font-size: 32px;
            font-weight: 400;
        }

        .sub-heading {
            font-size: 32px;
            font-weight: 600;
        }

        .subtitle {
            font-size: 20px;
            font-weight: 400;
        }
    </style>

    <title>Laporan Pengaduan</title>
</head>

<body>
    <div class="container mt-5">
        
        <div class="d-flex flex-row">
            <img src="<?php echo e(asset('images/images.png')); ?>" width="120" alt="logo">
            <div class="text-center section-title">
                <h2 class="heading mb-0">Laporan Pengaduan Sekolah</h2>
                <h2 class="sub-heading">IDN Boarding School</h2>
                <h5 class="subtitle">Jl. Raya Dayeuh, Sukanegara, Kec. Jonggol, Bogor, Jawa Barat 16830</h5>
            </div>
        </div>
        <hr style="border: 1.7px solid #000">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Judul Laporan</th>
                    <th>Isi Laporan</th>
                    <th>Tanggal Kejadian</th>
                    <th>Lokasi Kejadian</th>
                    <th>Kategori</th>
                    <th>Tanggal Tanggapan</th>
                    <th>Tanggapan</th>
                    <th>Status</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($k += 1); ?></td>
                    <td><img src="<?php echo e(url('storage/'.$v->foto)); ?>" class="img-fluid" alt="<?php echo e($v->judul_laporan); ?>"></td>
                    <td><?php echo e($v->tgl_pengaduan->format('d-M-Y')); ?></td>
                    <td><?php echo e($v->judul_laporan); ?></td>
                    <td><?php echo e($v->isi_laporan); ?></td>
                    <td><?php echo e($v->tgl_kejadian->format('d-M-Y')); ?></td>
                    <td><?php echo e($v->lokasi_kejadian); ?></td>
                    <td><?php echo e(ucwords($v->kategori_kejadian)); ?></td>
                    <td><?php echo e($v->tanggapan->tgl_tanggapan->format('d-M-Y') ?? ''); ?></td>
                    <td><?php echo e($v->tanggapan->tanggapan ?? ''); ?></td>
                    <td><?php echo e($v->status == '0' ? 'Pending' : ucwords($v->status)); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

</body>

</html>
<?php /**PATH D:\backup c\documents\Tugas\laporan-app\resources\views/admin/Laporan/cetak.blade.php ENDPATH**/ ?>