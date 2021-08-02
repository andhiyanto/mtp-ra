<?php
class M_sertifikasi extends CI_Model
{
    function ceksertif($Id_sertifikasi)
    {
        $hasil = $this->db->query("SELECT * FROM tbl_sertifikasi WHERE Id_sertifikasi ='$Id_sertifikasi' ");
        return $hasil;
    }
    function get_all_kategori()
    {
        $hsl = $this->db->query("select * from tbl_sertifikasi");
        return $hsl;
    }
    function simpan_kategori($Id_sertifikasi, $nama, $tgl_diserahkan)
    {
        $hsl = $this->db->query("INSERT INTO tbl_sertifikasi (id_sertifikasi,nama,tgl_diserahkan) VALUES ('$Id_sertifikasi','$nama','$tgl_diserahkan')");
        return $hsl;
    }

    function update_kategori($Id_sertifikasi, $nama, $tgl_diserahkan)
    {
        $hsl = $this->db->query("UPDATE tbl_sertifikasi set nama='$nama',id_sertifikasi='$Id_sertifikasi',tgl_diserahkan='$tgl_diserahkan' where id_sertifikasi='$Id_sertifikasi'");
        return $hsl;
    }
    function hapus_kategori($kode)
    {
        $hsl = $this->db->query("delete from tbl_sertifikasi where Id_sertifikasi ='$kode'");
        return $hsl;
    }

    function get_kategori_byid($Id_sertifikasi)
    {
        $hsl = $this->db->query("select * from tbl_sertifikasi where Id_sertifikasi ='$Id_sertifikasi'");
        return $hsl;
    }
}
