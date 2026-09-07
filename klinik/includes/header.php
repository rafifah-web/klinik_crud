<?php if(!isset($page_title))$page_title="Dashboard"; if(!isset($active))$active="dashboard"; ?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?=htmlspecialchars($page_title)?> • Klinik</title><link rel="stylesheet" href="../assets/css/style.css"></head><body>
<div class="layout"><aside class="sidebar" id="sidebar"><div class="logo"><span>✚</span> Klinik</div><div class="section-label">MENU</div>
<a class="nav <?=$active==='dashboard'?'active':''?>" href="dashboard.php">⌂ <span>Dashboard</span></a>
<a class="nav <?=$active==='pasien'?'active':''?>" href="pasien.php">♙ <span>Pasien</span></a>
<a class="nav <?=$active==='dokter'?'active':''?>" href="dokter.php">⚕ <span>Dokter</span></a>
<a class="nav <?=$active==='jadwal'?'active':''?>" href="jadwal.php">◷ <span>Jadwal</span></a>
<a class="nav <?=$active==='rekam'?'active':''?>" href="rekam_medis.php">▤ <span>Rekam Medis</span></a>
<a class="nav <?=$active==='obat'?'active':''?>" href="obat.php">✚ <span>Obat</span></a>
<div class="section-label gap">SISTEM</div><a class="nav <?=$active==='laporan'?'active':''?>" href="laporan.php">▥ <span>Laporan</span></a>
<div class="side-user"><div class="avatar">A</div><div><b>Admin Klinik</b><small>Administrator</small></div><a href="../logout.php">↪</a></div></aside>
<main class="main"><header class="topbar"><div class="top-title"><button class="hamburger" onclick="toggleMenu()">☰</button><span><?=$page_title?></span></div><div class="top-tools"><div class="global-search">⌕ <input placeholder="Cari..."></div><span class="notification">◦</span><div class="top-avatar">A</div></div></header><div class="content">