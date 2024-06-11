<?php
require 'Koneksi.php';

function addMember($id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    global $koneksi;
    $id_member = mysqli_real_escape_string($koneksi, $id_member);
    $nama_member = mysqli_real_escape_string($koneksi, $nama_member);
    $nomor_member = mysqli_real_escape_string($koneksi, $nomor_member);
    $alamat = mysqli_real_escape_string($koneksi, $alamat);
    $tgl_mendaftar = mysqli_real_escape_string($koneksi, $tgl_mendaftar);
    $tgl_terakhir_bayar = mysqli_real_escape_string($koneksi, $tgl_terakhir_bayar);
    $sql = "INSERT INTO member (id_member, nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar)
    VALUES ('$id_member', '$nama_member', '$nomor_member', '$alamat', '$tgl_mendaftar', '$tgl_terakhir_bayar')";
    $query = mysqli_query($koneksi, $sql);
    return $query;
}

function deleteMember($id_member) {
    global $koneksi;
    $id_member = mysqli_real_escape_string($koneksi, $id_member);
    $sql = "DELETE FROM member WHERE id_member = '$id_member'";
    $query = mysqli_query($koneksi, $sql);
    mysqli_close($koneksi);
    return $query;
}

if (isset($_GET['delete_id_member'])) {
    $id_member = $_GET['delete_id_member'];
    if (deleteMember($id_member)) {
        echo "<script>alert('Data Member berhasil dihapus'); window.location='Member.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data Member'); window.location='Member.php';</script>";
    }
}

function updateMember($id_member_lama, $id_member_baru, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    global $koneksi;
    $id_member_lama = mysqli_real_escape_string($koneksi, $id_member_lama);
    $id_member_baru = mysqli_real_escape_string($koneksi, $id_member_baru);
    $nama_member = mysqli_real_escape_string($koneksi, $nama_member);
    $nomor_member = mysqli_real_escape_string($koneksi, $nomor_member);
    $alamat = mysqli_real_escape_string($koneksi, $alamat);
    $tgl_mendaftar = mysqli_real_escape_string($koneksi, $tgl_mendaftar);
    $tgl_terakhir_bayar = mysqli_real_escape_string($koneksi, $tgl_terakhir_bayar);
    $sql = "UPDATE member SET id_member = '$id_member_baru', nama_member = '$nama_member', nomor_member = '$nomor_member',
    alamat = '$alamat', tgl_mendaftar = '$tgl_mendaftar', tgl_terakhir_bayar = '$tgl_terakhir_bayar'
    WHERE id_member = '$id_member_lama'";
    $query = mysqli_query($koneksi, $sql);
    mysqli_close($koneksi);
    return $query;
}

function getMemberById($id_member) {
    global $koneksi;
    $id_member = mysqli_real_escape_string($koneksi, $id_member);
    $sql = "SELECT * FROM member WHERE id_member = '$id_member'";
    $query = mysqli_query($koneksi, $sql);
    $member = mysqli_fetch_assoc($query);
    mysqli_close($koneksi);
    return $member;
}

function getMember() {
    global $koneksi;
    $sql = "SELECT * FROM member";
    $query = mysqli_query($koneksi, $sql);
    $members = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $members[] = $data;
    }
    return $members;
}

function addBuku($id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit) {
    global $koneksi;
    $id_buku = mysqli_real_escape_string($koneksi, $id_buku);
    $judul_buku = mysqli_real_escape_string($koneksi, $judul_buku);
    $penulis = mysqli_real_escape_string($koneksi, $penulis);
    $penerbit = mysqli_real_escape_string($koneksi, $penerbit);
    $tahun_terbit = mysqli_real_escape_string($koneksi, $tahun_terbit);
    $sql = "INSERT INTO buku (id_buku, judul_buku, penulis, penerbit, tahun_terbit)
    VALUES ('$id_buku', '$judul_buku', '$penulis', '$penerbit', '$tahun_terbit')";
    $query = mysqli_query($koneksi, $sql);
    return $query;
}

function deleteBuku($id_buku) {
    global $koneksi;
    $id_buku = mysqli_real_escape_string($koneksi, $id_buku);
    $sql = "DELETE FROM buku WHERE id_buku = '$id_buku'";
    $query = mysqli_query($koneksi, $sql);
    mysqli_close($koneksi);
    return $query;
}

if (isset($_GET['delete_id_buku'])) {
    $id_buku = $_GET['delete_id_buku'];
    if (deleteBuku($id_buku)) {
        echo "<script>alert('Data Buku berhasil dihapus'); window.location='Peminjaman.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data Buku'); window.location='Peminjaman.php';</script>";
    }
}

function updateBuku($id_buku_lama, $id_buku_baru, $judul_buku, $penulis, $penerbit, $tahun_terbit) {
    global $koneksi;
    $id_buku_lama = mysqli_real_escape_string($koneksi, $id_buku_lama);
    $id_buku_baru = mysqli_real_escape_string($koneksi, $id_buku_baru);
    $judul_buku = mysqli_real_escape_string($koneksi, $judul_buku);
    $penulis = mysqli_real_escape_string($koneksi, $penulis);
    $penerbit = mysqli_real_escape_string($koneksi, $penerbit);
    $tahun_terbit = mysqli_real_escape_string($koneksi, $tahun_terbit);
    $sql = "UPDATE buku SET id_buku = '$id_buku_baru', judul_buku = '$judul_buku', penulis = '$penulis',
    penerbit = '$penerbit', tahun_terbit = '$tahun_terbit'
    WHERE id_buku = '$id_buku_lama'";
    $query = mysqli_query($koneksi, $sql);
    mysqli_close($koneksi);
    return $query;
}

function getBukuById($id_buku) {
    global $koneksi;
    $id_buku = mysqli_real_escape_string($koneksi, $id_buku);
    $sql = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
    $query = mysqli_query($koneksi, $sql);
    $member = mysqli_fetch_assoc($query);
    mysqli_close($koneksi);
    return $member;
}


function getBuku() {
    global $koneksi;
    $sql = "SELECT * FROM buku";
    $query = mysqli_query($koneksi, $sql);
    $books = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $books[] = $data;
    }
    return $books;
}

function addPinjam($id_peminjaman, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku) {
    global $koneksi;
    $id_peminjaman = mysqli_real_escape_string($koneksi, $id_peminjaman);
    $tgl_pinjam = mysqli_real_escape_string($koneksi, $tgl_pinjam);
    $tgl_kembali = mysqli_real_escape_string($koneksi, $tgl_kembali);
    $id_member = mysqli_real_escape_string($koneksi, $id_member);
    $id_buku = mysqli_real_escape_string($koneksi, $id_buku);
    $sql = "INSERT INTO peminjaman (id_peminjaman, tgl_pinjam, tgl_kembali, id_member, id_buku)
    VALUES ('$id_peminjaman', '$tgl_pinjam', '$tgl_kembali', '$id_member', '$id_buku')";
    $query = mysqli_query($koneksi, $sql);
    return $query;
}

function deletePinjam($id_peminjaman) {
    global $koneksi;
    $id_peminjaman = mysqli_real_escape_string($koneksi, $id_peminjaman);
    $sql = "DELETE FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'";
    $query = mysqli_query($koneksi, $sql);
    mysqli_close($koneksi);
    return $query;
}

if (isset($_GET['delete_id_peminjaman'])) {
    $id_peminjaman = $_GET['delete_id_peminjaman'];
    if (deletePinjam($id_peminjaman)) {
        echo "<script>alert('Data Peminjaman berhasil dihapus'); window.location='Peminjaman.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data Peminjaman'); window.location='Peminjaman.php';</script>";
    }
}

function updatePinjam($id_peminjaman_lama, $id_peminjaman_baru, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku) {
    global $koneksi;
    $id_peminjaman_lama = mysqli_real_escape_string($koneksi, $id_peminjaman_lama);
    $id_peminjaman_baru = mysqli_real_escape_string($koneksi, $id_peminjaman_baru);
    $tgl_pinjam = mysqli_real_escape_string($koneksi, $tgl_pinjam);
    $tgl_kembali = mysqli_real_escape_string($koneksi, $tgl_kembali);
    $id_member = mysqli_real_escape_string($koneksi, $id_member);
    $id_buku = mysqli_real_escape_string($koneksi, $id_buku);
    $sql = "UPDATE peminjaman SET id_peminjaman = '$id_peminjaman_baru', tgl_pinjam = '$tgl_pinjam', tgl_kembali = '$tgl_kembali',
    id_member = '$id_member', id_buku = '$id_buku'
    WHERE id_peminjaman = '$id_peminjaman_lama'";
    $query = mysqli_query($koneksi, $sql);
    mysqli_close($koneksi);
    return $query;
}

function getPinjamById($id_peminjaman) {
    global $koneksi;
    $id_peminjaman = mysqli_real_escape_string($koneksi, $id_peminjaman);
    $sql = "SELECT * peminjaman buku WHERE id_peminjaman = '$id_peminjaman'";
    $query = mysqli_query($koneksi, $sql);
    $lending = mysqli_fetch_assoc($query);
    mysqli_close($koneksi);
    return $lending;
}

function getPinjam() {
    global $koneksi;
    $sql = "SELECT 
    p.id_peminjaman, p.tgl_pinjam, p.tgl_kembali, m.nama_member AS id_member, b.judul_buku AS id_buku FROM peminjaman p 
    JOIN member m ON p.id_member = m.id_member
    JOIN buku b ON p.id_buku = b.id_buku";
    $query = mysqli_query($koneksi, $sql);
    $lending = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $lending[] = $data;
    }
    return $lending;
}