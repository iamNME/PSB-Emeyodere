<?php
    // Fungsi Ubah Tanggal
    function ubah_tanggal($tanggal, $cetak_hari = false){
    	$hari = array ( 1 => 'Senin',
    				'Selasa',
    				'Rabu',
    				'Kamis',
    				'Jumat',
    				'Sabtu',
    				'Minggu'
    			);
            
    	$bulan = array ( 1 => 'Januari',
    				'Februari',
    				'Maret',
    				'April',
    				'Mei',
    				'Juni',
    				'Juli',
    				'Agustus',
    				'September',
    				'Oktober',
    				'November',
    				'Desember'
    			);
    	$split 	  = explode('-', $tanggal);
    	$tgl = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
            
    	if ($cetak_hari) {
            // N untuk mengambil hari dalam seminggu dengan bentuk 1(monday) sampai 7(sunday)
    		$num = date('N', strtotime($tanggal));
    		return $hari[$num] . ', ' . $tgl;
    	}
    	return $tgl;
    }
?>