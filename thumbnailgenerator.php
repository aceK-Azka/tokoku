<?php
// Tautkan jenis gambar ke pemuat dan penghemat gambar yang benar
// - memudahkan untuk menambahkan jenis tambahan nanti
// - membuat fungsi lebih mudah dibaca
const IMAGE_HANDLERS = [
    IMAGETYPE_JPEG => [
        'load' => 'imagecreatefromjpeg',
        'save' => 'imagejpeg',
        'quality' => 100
    ],
    IMAGETYPE_PNG => [
        'load' => 'imagecreatefrompng',
        'save' => 'imagepng',
        'quality' => 0
    ],
    IMAGETYPE_GIF => [
        'load' => 'imagecreatefromgif',
        'save' => 'imagegif'
    ]
];

/**
 * @param $src - lokasi file yang valid
 * @param $dest - target file yang valid
 * @param $targetWidth - lebar keluaran yang diinginkan
 * @param $targetHeight - tinggi keluaran yang diinginkan atau nol
 */
function createThumbnail($src, $dest, $targetWidth, $targetHeight = null) {

    // 1. Muat gambar dari $src . yang diberikan
    // - lihat apakah file itu benar-benar ada
    // - periksa apakah itu dari jenis gambar yang valid
    // - memuat sumber gambar

    // dapatkan jenis gambarnya
    // kita membutuhkan tipe untuk menentukan loader yang benar
    $type = exif_imagetype($src);

   // jika tidak ada tipe yang valid atau tidak ada penangan yang ditemukan -> keluar
    if (!$type || !IMAGE_HANDLERS[$type]) {
        return null;
    }

    // memuat gambar dengan pemuat yang benar
    $image = call_user_func(IMAGE_HANDLERS[$type]['load'], $src);

    // tidak ada gambar yang ditemukan di lokasi yang disediakan -> keluar
    if (!$image) {
        return null;
    }


    // 2. Buat thumbnail dan ubah ukuran $image yang dimuat
    // - dapatkan dimensi gambar
    // - tentukan ukuran output dengan tepat
    // - buat thumbnail berdasarkan ukuran itu
    // - atur transparansi alfa untuk GIF dan PNG
    // - gambar thumbnail terakhir

    // dapatkan lebar dan tinggi gambar asli
    $width = imagesx($image);
    $height = imagesy($image);

    // pertahankan rasio aspek saat tidak ada ketinggian yang disetel
    if ($targetHeight == null) {

        // dapatkan rasio lebar dan tinggi
        $ratio = $width / $height;

        // jika potret
        // gunakan rasio untuk mengukur tinggi agar pas dengan persegi
        if ($width > $height) {
            $targetHeight = floor($targetWidth / $ratio);
        }
        // jika lanskap
        // gunakan rasio untuk menskalakan lebar agar pas dengan persegi
        else {
            $targetHeight = $targetWidth;
            $targetWidth = floor($targetWidth * $ratio);
        }
    }

    // buat gambar duplikat berdasarkan ukuran target yang dihitung
    $thumbnail = imagecreatetruecolor($targetWidth, $targetHeight);

    // atur opsi transparansi untuk GIF dan PNG
    if ($type == IMAGETYPE_GIF || $type == IMAGETYPE_PNG) {

        // membuat gambar menjadi transparan
        imagecolortransparent(
            $thumbnail,
            imagecolorallocate($thumbnail, 0, 0, 0)
        );

        // pengaturan tambahan untuk PNG
        if ($type == IMAGETYPE_PNG) {
            imagealphablending($thumbnail, false);
            imagesavealpha($thumbnail, true);
        }
    }

    // salin seluruh gambar sumber untuk menduplikasi gambar dan mengubah ukuran
    imagecopyresampled(
        $thumbnail,
        $image,
        0, 0, 0, 0,
        $targetWidth, $targetHeight,
        $width, $height
    );


    // 3. Simpan $thumbnail ke disk
    // - panggil metode penyimpanan yang benar
    // - atur tingkat kualitas yang benar

    // simpan versi duplikat gambar ke disk
    return call_user_func(
        IMAGE_HANDLERS[$type]['save'],
        $thumbnail,
        $dest,
        IMAGE_HANDLERS[$type]['quality']
    );
}
?>