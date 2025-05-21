<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Project</title>
    <link rel="icon" href="<?php echo base_url()?>assets/backend/mb.png" type="image/x-icon">
    <link href="<?php echo base_url()?>assets/backend/style.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body
    x-data="{ page: 'project', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
        darkMode = JSON.parse(localStorage.getItem('darkMode'));
        $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
  >
  <!-- ===== Preloader Start ===== -->
  <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})" class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
    <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent">
    </div>
  </div>
  <!-- ===== Preloader End ===== -->
  <!-- ===== Page Wrapper Start ===== -->
  <div class="flex h-screen overflow-hidden">
    <?php $this->load->view('backend/sidebar')?>

    <!-- ===== Content Area Start ===== -->
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
      <?php $this->load->view('backend/header')?>

      <!-- ===== Main Content Start ===== -->
      <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
          <div class="grid grid-cols-12 gap-4 md:gap-6 2xl:gap-9">
            <div class="col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5">
            <div class="flex justify-between items-center mb-4">  
              <h1 class="text-2xl font-bold mb-4">Lihat project</h1>
              <a href="<?= site_url('panel/partner') ?>" class="flex items-center gap-2 bg-blue-500 text-white p-3 rounded-md hover:bg-blue-700 focus:outline-none">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                  </svg>
                </a>
            </div>
              <form action="<?= site_url('project/update/'.$project->id_session) ?>" method="post" class="bg-white dark:bg-boxdark p-6 shadow-md rounded">
                <label class="block mb-2">
                  <strong>Nama Pengantin : </strong>
                  <?php
                  if (strtolower($project->religion) === 'kristen') {
                    echo htmlspecialchars($clients->m_bride_fname) . ' & ' . htmlspecialchars($clients->f_bride_fname);
                  } else {
                    echo htmlspecialchars($clients->f_bride_fname) . ' & ' . htmlspecialchars($clients->m_bride_fname);
                  }
                  ?>
                </label>
                <label class="block mb-2"><strong>Agama : </strong><?= $project->religion ?></label>        
                <label class="block mb-2"><strong>Tanggal Acara : </strong><?= hari($project->event_date) ?>, <?= tgl_indo($project->event_date) ?></label>
                <label class="block mb-2"><strong>Lokasi : </strong><?= $project->location ?></label>
                <label class="block mb-2"><strong>Maps : </strong>
                  <?php if (!empty($clients->maps)): ?>
                  <a href="<?= $clients->maps ?>" target="_blank" class="text-blue-500 underline">Lihat Maps</a>
                  <?php else: ?>
                  <span class="text-red-500">Belum tersedia</span>
                  <?php endif; ?>
                </label>

                    <div class="flex flex-col sm:flex-row sm:items-center sm:gap-2 mb-2">
                      <?php if (!empty($clients->wedding_ceremony)): ?>
                        <?php if ($project->religion == 'Islam'): ?>
                          <a href="<?= $clients->wedding_ceremony ?>" target="_blank" class="w-full sm:w-auto block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-2 sm:mb-0 text-center">Lihat Susunan Akad</a>
                        <?php else: ?>
                          <a href="<?= $clients->wedding_ceremony ?>" target="_blank" class="w-full sm:w-auto block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-2 sm:mb-0 text-center">Lihat Susunan Pemberkatan</a>
                        <?php endif; ?>
                      <?php endif; ?>

                      <?php if (!empty($clients->reception_afterward)): ?>
                        <a href="<?= $clients->reception_afterward ?>" target="_blank" class="w-full sm:w-auto block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-2 sm:mb-0 text-center">Lihat Susunan Resepsi</a>
                      <?php endif; ?>

                      <?php if (!empty($clients->list_photo)) : ?>
                        <a href="<?= $clients->list_photo ?>" target="_blank" class="w-full sm:w-auto block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 text-center">List Foto</a>
                      <?php endif; ?>
                    </div>

                  <div x-data="{ modalOpen: false }" class="block mb-2">
                    <?php if (!empty($partner_detail)): ?>
                      <p><strong>Yang Didapat Client</strong></p>
                      <button
                        type="button"
                        @click.prevent="modalOpen = true"
                        class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 w-full sm:w-auto"
                      >
                        Lihat Detail
                      </button>
                    <?php else: ?>
                      <p class="text-red-500 font-semibold">Detail belum tersedia.</p>
                    <?php endif; ?>

                    <div
                      x-show="modalOpen"
                      x-cloak
                      x-transition
                      class="fixed left-0 top-0 z-999999 flex h-full min-h-screen w-full items-center justify-center bg-black/90 px-4 py-5"
                    >
                      <div
                        @click.outside="modalOpen = false"
                        class="w-full max-w-142.5 rounded-lg bg-white px-8 py-12 text-center dark:bg-boxdark md:px-17.5 md:py-15"
                      >
                        <h3 class="pb-2 text-xl font-bold sm:text-2xl">
                          Detail
                        </h3>
                        <span
                          class="mx-auto mb-6 inline-block h-1 w-22.5 rounded bg-primary"
                        ></span>
                        <p class="whitespace-pre-line">
                          <?= $detail ? nl2br(htmlspecialchars($detail)) : "Belum ada detail." ?>
                        </p>
                        <div class="-mx-3 flex flex-wrap gap-y-4 mt-6">
                          <div class="w-full px-3">
                            <button
                              type="button"
                              @click="modalOpen = false"
                                :class="`block w-full rounded border border-stroke bg-gray p-3 text-center font-medium transition hover:border-meta-1 hover:bg-meta-1 dark:border-strokedark dark:bg-meta-4 dark:hover:border-meta-1 dark:hover:bg-meta-1 ${darkMode ? 'text-white' : 'text-black'}`"
                            >
                              Tutup
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                <h2 class="text-lg font-bold mb-2">List Vendor</h2>
                  <?php
                  // Tentukan urutan yang diinginkan
                  $type_order = [
                    'Venue', 'MC Akad', 'MC Pemberkatan', 'MC Resepsi', 'Wedding Organizer', 'MUA',
                    'Perlengkapan Catering', 'Catering', 'Dokumentasi',
                    'Dekorasi', 'Entertaiment'
                  ];

                  // Urutkan vendor berdasarkan tipe
                  usort($vendors, function ($a, $b) use ($type_order) {
                    $posA = array_search($a->type, $type_order);
                    $posB = array_search($b->type, $type_order);

                    // Jika tidak ditemukan dalam array, tempatkan di akhir
                    $posA = ($posA === false) ? count($type_order) : $posA;
                    $posB = ($posB === false) ? count($type_order) : $posB;

                    return $posA - $posB;
                  });
                  ?>

                <div class="border p-4 mb-4">
                  <?php if (!empty($vendors)): ?>
                    <?php foreach ($vendors as $index => $vendor): ?>
                      <div class="mb-2 flex items-center justify-between <?= $index === count($vendors) - 1 ? '' : 'border-b pb-2' ?>">
                        <div>
                          <p class='font-medium'>
                            <strong><?= htmlspecialchars($vendor->type) ?>:</strong> 
                            <?= htmlspecialchars($vendor->vendor) ?>
                          </p>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <p class='text-red-500 font-semibold'>Belum ada vendor.</p>
                  <?php endif; ?>
                </div>
              </form>
            </div>
          </div>
        </div>
      </main>
      <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
  </div>
  <script defer src="<?php echo base_url()?>assets/backend/bundle.js"></script>
</body>
</html>
