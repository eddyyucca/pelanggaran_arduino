<?php
class M_login extends CI_Model
{
    function cekadmin($username, $password)
    {
        $hasil = $this->db->query('SELECT * FROM pengguna WHERE pengguna_username="' . $username . '" AND pengguna_password="' . $password . '"');
        return $hasil;
    }
}
