<?php
session_start();

// Data Soal dan Jawaban
$soal = [
    'bab6' => [
        [
            'soal' => 'Perhatikan Q.S. Yūnus/10: 40, di bawah ini! Sambungan ayat di atas yang tepat adalah...',
            'pilihan' => [
                'A' => 'لَهُمْ عَذَابٌ أَلِيمٌ',
                'B' => 'وَأَتْمَمْتُ عَلَيْكُمْ نِعْمَتِي',
                'C' => 'اَعْلَمُ بِالْمُفْسِدِيْنَ',
                'D' => 'فَاصْبِرْ إِنَّ الْعَاقِبَةَ لِلْمُتَّقِينَ',
                'E' => 'وَمَا أَنْتَ عَلَيْهِمْ بِجَبَّارٍ'
            ],
            'jawaban' => 'C'
        ],
        [
            'soal' => 'فَقُلْ لِّيْ عَمَلِيْ ... 2. Dalam Q.S. Yūnus/10: 41 ada kalimat. Terjemahan yang tepat untuk kalimat di atas adalah …',
            'pilihan' => [
                'A' => 'maka katakanlah "Aku telah berbuat"',
                'B' => 'maka katakanlah "Ini perbuatanku"',
                'C' => 'maka katakanlah "Ini hasil kerjaku"',
                'D' => 'maka katakanlah "Aku yang melakukan"',
                'E' => 'maka katakanlah "Bagiku pekerjaanku"'
            ],
            'jawaban' => 'E'
        ],
        [
            'soal' => 'Diantara isi Q.S. Yūnus/10: 40-41 adalah agar umat Islam mempunyai sikap …',
            'pilihan' => [
                'A' => 'Tawakal',
                'B' => 'Sabar',
                'C' => 'Ikhlas',
                'D' => 'Samhah',
                'E' => 'Tawadhu'
            ],
            'jawaban' => 'D'
        ],
        [
            'soal' => '﴿وَاِنْ كَذَّبُوْكَ فَقُلْ لِّيْ عَمَلِيْ وَلَكُمْ عَمَلُكُمْۚاَنْتُمْ بَرِيْۤـُٔوْنَمَِّآ اَعْمَلُ وَاَنَا۠. Perhatikan ayat di bawah ini (بَرِيْۤءٌ مَِّّا تَعْمَلُوْنَ) Dari ayat yang digaris bawahi, bacaan tajwid yang benar dan urut adalah …',
            'pilihan' => [
                'A' => 'Ikhfa’, ghunnah, mad wajib muttasil',
                'B' => 'Ikhfa’ syafawi, ikhfa’, ghunnah, dan mad jaiz munfasil',
                'C' => 'Idgham bighunnah, mad lin, dan qalqalah sughra',
                'D' => 'Ikhfa’ haqiqi, mad arid lissukun, dan idgham bilaghunnah',
                'E' => 'Mad thabi’i, idgham mutamatsilain, dan ghunnah'
            ],
            'jawaban' => 'B'
        ],
        [
            'soal' => 'Dalam Hadis Nabi Muhammad Saw., dari Abu Hurairah r.a., bahwa alThufail bin ‘Amr menemui Nabi dan menceritakan bahwa Daus (salah satu kabilah Yaman) telah durhaka serta menolak dakwahnya, dan meminta agar Nabi mendoakan mereka binasa. Respon Nabi sesuai hadis tersebut adalah …',
            'pilihan' => [
                'A' => 'Nabi mendoakan kebinasaan mereka',
                'B' => 'Nabi memerintahkan untuk memerangi mereka',
                'C' => 'Nabi berdoa, "Ya Allah berilah petunjuk kepada kabilah Daus dan datangkanlah (mereka) bersama orang muslim (masuk Islam)."',
                'D' => 'Nabi mengabaikan mereka',
                'E' => 'Nabi meminta mereka untuk membayar jizyah'
            ],
            'jawaban' => 'C'
        ],
        [
            'soal' => 'Perhatikan ayat di bawah ini! مَنْ أَحْيَاهَا فَكَأَنَّمَا أَحْيَا النَّاسَ جَمِيعًا Terjemahan yang tepat dari ayat tersebut adalah …',
            'pilihan' => [
                'A' => 'Barangsiapa memelihara kehidupan seorang manusia, maka seakan-akan dia telah memelihara kehidupan semua manusia',
                'B' => 'Barangsiapa membunuh seorang manusia, maka seakan-akan dia telah membunuh semua manusia',
                'C' => 'Barangsiapa menyelamatkan nyawa seseorang, maka dia akan mendapatkan pahala yang besar',
                'D' => 'Barangsiapa menghidupkan hati seseorang, maka dia akan mendapatkan surga',
                'E' => 'Barangsiapa memberikan kehidupan kepada orang lain, maka dia akan diampuni dosanya'
            ],
            'jawaban' => 'A'
        ],
        [
            'soal' => 'Perhatikan Q.S. Al-Maidah/5:32 di bawah ini. Dari ayat yang digarisbawahi, bacaan tajwid yang benar dan urut adalah …',
            'pilihan' => [
                'A' => 'idzhar khalqi, qalqalah sughra, ikhfa’, ghunnah, dan mad thabi’i',
                'B' => 'Ikhfa’ syafawi, mad lin, dan idgham bilaghunnah',
                'C' => 'Mad wajib muttasil, idgham bighunnah, dan qalqalah kubra',
                'D' => 'Ikhfa’ haqiqi, mad arid lissukun, dan ghunnah',
                'E' => 'Mad thabi’i, idgham mutamatsilain, dan ghunnah'
            ],
            'jawaban' => 'A'
        ],
        [
            'soal' => 'Penerapan dari Q.S. Al-Maidah/5:32 adalah …',
            'pilihan' => [
                'A' => 'Membantu orang yang sedang kesusahan',
                'B' => 'Memberikan sedekah kepada fakir miskin',
                'C' => 'Memberikan santunan kepada anak yatim piatu',
                'D' => 'Menjaga lingkungan sekitar',
                'E' => 'Menghormati orang tua'
            ],
            'jawaban' => 'C'
        ],
        [
            'soal' => 'Diriwayatkan dari ‘Abdullah bin ‘Amr, jarak mencium harumnya surga adalah …',
            'pilihan' => [
                'A' => '10 tahun',
                'B' => '20 tahun',
                'C' => '30 tahun',
                'D' => '40 tahun',
                'E' => '50 tahun'
            ],
            'jawaban' => 'D'
        ],
        [
            'soal' => 'Orang yang datang pada hari kiamat membawa shalat, puasa, dan zakat tetapi juga melakukan kejahatan disebut …',
            'pilihan' => [
                'A' => 'Al-Munafiq',
                'B' => 'Al-Muflis',
                'C' => 'Al-Kafir',
                'D' => 'Al-Fasiq',
                'E' => 'Al-Murtad'
            ],
            'jawaban' => 'B'
        ]
    ],
    'bab7' => [
        [
            'soal' => 'Dalam Hadis Nabi Muhammad Saw. yang diriwayatkan Al-Bukhāri, bahwa maksudnya kekayaan itu adalah …',
            'pilihan' => [
                'A' => 'Banyaknya harta',
                'B' => 'Kekayaan hati',
                'C' => 'Banyaknya ilmu',
                'D' => 'Kekuatan fisik',
                'E' => 'Banyaknya keturunan'
            ],
            'jawaban' => 'B'
        ],
        [
            'soal' => 'Perhatikan Q.S. Al-Ahzab/33:35 di bawah ini! Dari ayat tersebut, merupakan dalil naqli tentang salah satu cabang iman yaitu …',
            'pilihan' => [
                'A' => 'Menjaga kehormatan',
                'B' => 'Bersedekah',
                'C' => 'Berpuasa',
                'D' => 'Bersabar',
                'E' => 'Bersyukur'
            ],
            'jawaban' => 'A'
        ],
        [
            'soal' => 'Di bawah ini yang merupakan pemahaman yang benar tentang sifat zuhud adalah …',
            'pilihan' => [
                'A' => 'Menjauhi semua kenikmatan dunia',
                'B' => 'Tidak peduli dengan urusan dunia',
                'C' => 'Menggunakan harta untuk kemewahan',
                'D' => 'Menjadi kaya raya',
                'E' => 'Menjadikan harta dunia untuk mengantarkan kebahagiaan di akhirat'
            ],
            'jawaban' => 'E'
        ],
        [
            'soal' => 'Meninggalkan kenikmatan duniawi untuk mendapatkan kenikmatan akhirat merupakan salah satu ciri orang yang memiliki sifat zuhud. Namun, ciri lain dari orang zuhud adalah …',
            'pilihan' => [
                'A' => 'Menyukai kemewahan',
                'B' => 'Mudah putus asa',
                'C' => 'Selalu mencari kesenangan',
                'D' => 'Hanya fokus pada dunia',
                'E' => 'Bersikap sederhana baik saat dipuji maupun saat dicela'
            ],
            'jawaban' => 'E'
        ],
        [
            'soal' => 'Dibawah ini merupakan tingkatan ikhlas dengan urut adalah …',
            'pilihan' => [
                'A' => 'khawas, khawasul khawas, awam',
                'B' => 'khawasul khawas, awam, khawas',
                'C' => 'awam, khawas, dan khawasul khawas',
                'D' => 'awam, khawasul khawas, khawas',
                'E' => 'khawas, awam, dan khawasul khawas'
            ],
            'jawaban' => 'C'
        ],
        [
            'soal' => 'Di bawah ini yang termasuk ciri-ciri orang ikhlas adalah …',
            'pilihan' => [
                'A' => 'tidak pernah beramal',
                'B' => 'senantiasa beramal dan bersungguh-sungguh dalam beramal',
                'C' => 'selalu mencari pujian',
                'D' => 'mengabaikan kebaikan',
                'E' => 'hanya beramal saat diawasi'
            ],
            'jawaban' => 'B'
        ],
        [
            'soal' => 'Di bawah ini merupakan manfaat ikhlas adalah …',
            'pilihan' => [
                'A' => 'mempercepat kekayaan materi',
                'B' => 'terhindar dari tipu daya setan',
                'C' => 'mendatangkan popularitas',
                'D' => 'memudahkan mendapatkan jabatan',
                'E' => 'menjamin kehidupan yang bahagia'
            ],
            'jawaban' => 'B'
        ],
        [
            'soal' => 'Dalam Hadis Nabi Muhammad Saw. yang diriwayatkan oleh Tirmidzī, yang termasuk malu kepada Allah dengan sebenarnya adalah …',
            'pilihan' => [
                'A' => 'tidak beramal sama sekali',
                'B' => 'hanya berdoa saja',
                'C' => 'menjaga seluruh anggota badan dari perbuatan yang dilarang oleh agama Islam',
                'D' => 'menghindari bergaul dengan non-Muslim',
                'E' => 'berpura-pura saleh'
            ],
            'jawaban' => 'C'
        ],
        [
            'soal' => 'Perhatikan pernyataan di bawah ini! 1) menghindari perbuatan maksiat, 2) menghantarkan hambanya melakukan kebaikan, 3) mengurangi rezeki, 4) lebih dekat dengan Allah, 5) tidak mendapatkan pekerjaan. Yang termasuk manfaat sikap malu sebagai cabang iman adalah …',
            'pilihan' => [
                'A' => '1) dan 3) saja',
                'B' => '2) dan 4) saja',
                'C' => '1), 3), dan 5) saja',
                'D' => '2), 4), dan 1) saja',
                'E' => 'semua pernyataan'
            ],
            'jawaban' => 'D'
        ],
        [
            'soal' => 'Malu merupakan tanda baik atau tidaknya iman seseorang. Malu berbeda dengan tidak percaya diri. Salah satu penerapan sifat malu yang tepat adalah …',
            'pilihan' => [
                'A' => 'malu tidak mengerjakan tugas',
                'B' => 'malu untuk tampil di depan umum',
                'C' => 'malu untuk menerima pujian',
                'D' => 'malu untuk mengkritik orang lain',
                'E' => 'malu untuk berbicara dengan orang asing'
            ],
            'jawaban' => 'A'
        ]
    ],
    'bab8' => [
        [
            'soal' => 'Adab dari segi bahasa menunjuk kepada sesuatu yang sudah lama dilakukan dan sudah membudaya dalam kehidupan. Dari sini dapat diketahui bahwa makna dari adab adalah kecuali…',
            'pilihan' => [
                'A' => 'sopan santun',
                'B' => 'tata krama',
                'C' => 'etika',
                'D' => 'peraturan',
                'E' => 'kehendak'
            ],
            'jawaban' => 'E'
        ],
        [
            'soal' => 'Perhatikan Q.S. Al-Hujurāt/49:6! Dari ayat tersebut, apabila seorang fasik datang kepadamu membawa berita, maka kalian hendaknya …',
            'pilihan' => [
                'A' => 'mengabaikan berita tersebut',
                'B' => 'langsung menyebarkan berita tersebut',
                'C' => 'mempercayai berita tersebut tanpa verifikasi',
                'D' => 'meneliti kebenaran beritanya',
                'E' => 'membalas dengan menyebarkan berita palsu'
            ],
            'jawaban' => 'D'
        ],
        [
            'soal' => 'Perhatikan hadis Nabi Muhammad Saw. di bawah ini! Dari hadis tersebut, maksud muslim yang paling baik adalah …',
            'pilihan' => [
                'A' => 'seorang muslim yang kaya raya',
                'B' => 'seorang muslim yang orang lain merasa aman dari gangguan lisan dan tangannya',
                'C' => 'seorang muslim yang pandai berbicara',
                'D' => 'seorang muslim yang taat menjalankan ritual saja',
                'E' => 'seorang muslim yang selalu beribadah'
            ],
            'jawaban' => 'B'
        ],
        [
            'soal' => 'Al-Qur’an memberikan panduan dalam menggunakan media sosial. Dalam Q.S. Al-Haj/22:30, hendaknya kalian mematuhi adab menggunakan media sosial, yaitu …',
            'pilihan' => [
                'A' => 'menyebarkan informasi dengan bebas',
                'B' => 'menyampaikan informasi tanpa rekayasa atau manipulasi',
                'C' => 'berbagi informasi secara berlebihan',
                'D' => 'mengkritik setiap pendapat secara terbuka',
                'E' => 'mengabaikan etika dalam penyampaian'
            ],
            'jawaban' => 'B'
        ],
        [
            'soal' => 'Dalam mengupdate status atau mengunggah tulisan di media sosial, umat Islam harus mengikuti perintah dalam Q.S. Al-Hujurāt/49:12, yaitu …',
            'pilihan' => [
                'A' => 'mengunggah tanpa filter',
                'B' => 'berkata kasar kepada orang lain',
                'C' => 'menyebarkan informasi hoaks',
                'D' => 'menyembunyikan identitas asli',
                'E' => 'menghindari su’udzan, tajassus, dan ghibah'
            ],
            'jawaban' => 'E'
        ],
        [
            'soal' => 'Perhatikan pernyataan berikut: 1) mengajak orang lain berbuat kebaikan, 2) memilih teman bermain dari daerah sendiri, 3) menyampaikan argumentasi dengan cara yang baik, 4) berniat baik dalam menggunakan media sosial, 5) memproduksi konten yang bersifat hate speech. Yang termasuk adab menggunakan media sosial adalah …',
            'pilihan' => [
                'A' => '1) dan 5) saja',
                'B' => '2) dan 3) saja',
                'C' => '4) saja',
                'D' => '1), 2), dan 5) saja',
                'E' => '3), 4), dan 1)'
            ],
            'jawaban' => 'E'
        ],
        [
            'soal' => 'Dalam Hadis Nabi Muhammad Saw. yang diriwayatkan oleh Tirmidzī, disebutkan bahwa maksud sebagian dari kebaikan Islam seseorang adalah …',
            'pilihan' => [
                'A' => 'mendapatkan harta dunia',
                'B' => 'memperoleh popularitas',
                'C' => 'menjalankan ibadah secara seremonial',
                'D' => 'meninggalkan sesuatu yang tidak bermanfaat baginya',
                'E' => 'mendapatkan kekuasaan politik'
            ],
            'jawaban' => 'D'
        ],
        [
            'soal' => 'Dalam Hadis Nabi Muhammad Saw. yang diriwayatkan Muslim, barangsiapa yang menunjukkan kepada kebaikan, maka …',
            'pilihan' => [
                'A' => 'dia akan mendapatkan pahala yang lebih kecil',
                'B' => 'dia akan mendapatkan pahala yang sama seperti orang yang menjalankan kebaikan tersebut',
                'C' => 'kebaikan itu tidak dihitung',
                'D' => 'dia akan mendapatkan pahala yang berlipat ganda',
                'E' => 'pahalanya ditahan sampai hari kiamat'
            ],
            'jawaban' => 'B'
        ],
        [
            'soal' => 'Saat ini banyak ustadz dan artis menggunakan media sosial untuk mengupload kajian keislaman. Media sosial dapat bermanfaat sebagai …',
            'pilihan' => [
                'A' => 'sarana hiburan semata',
                'B' => 'sarana dalam berdakwah',
                'C' => 'media untuk mencari popularitas',
                'D' => 'platform untuk politik praktis',
                'E' => 'alat untuk promosi bisnis'
            ],
            'jawaban' => 'B'
        ],
        [
            'soal' => 'Di bawah ini merupakan penerapan adab dalam menggunakan media sosial yang benar, yaitu …',
            'pilihan' => [
                'A' => 'saling menghormati dan menghargai antaranggota dalam satu grup',
                'B' => 'mengunggah konten secara berlebihan',
                'C' => 'mengkritik tanpa dasar',
                'D' => 'menyebarkan berita hoaks',
                'E' => 'menggunakan bahasa kasar'
            ],
            'jawaban' => 'A'
        ]
    ],
    'bab9' => [
        [
            'soal' => 'Perhatikan hadis di bawah ini! Hadis tersebut menjadi dasar penetapan hukum menikah bagi seorang laki-laki. Menikah hukumnya wajib bagi orang yang …',
            'pilihan' => [
                'A' => 'belum pernah menikah',
                'B' => 'sudah kaya raya',
                'C' => 'sudah mampu menikah secara lahir batin serta tidak sanggup menghindar dari zina',
                'D' => 'berumur di atas 25 tahun',
                'E' => 'memiliki harta yang cukup'
            ],
            'jawaban' => 'C'
        ],
        [
            'soal' => 'Seorang pria dan wanita melaksanakan umrah ke tanah suci. Di sela ibadah, sebelum tahalul, mereka melangsungkan pernikahan yang disaksikan dua saksi. Hukum pernikahan tersebut adalah …',
            'pilihan' => [
                'A' => 'sah',
                'B' => 'haram',
                'C' => 'batal',
                'D' => 'mubah',
                'E' => 'sunnah'
            ],
            'jawaban' => 'B'
        ],
        [
            'soal' => 'Perhatikan pernyataan berikut: 1) harta, 2) status, 3) jabatan, 4) agama, 5) kecantikan/ketampanan, 6) keturunan. Yang termasuk pertimbangan dalam menikah menurut Nabi Muhammad Saw. adalah …',
            'pilihan' => [
                'A' => '1) dan 2) saja',
                'B' => '2), 3), dan 4) saja',
                'C' => '1), 3), dan 5) saja',
                'D' => '4), 5), 6), dan 1) saja',
                'E' => 'semua pernyataan'
            ],
            'jawaban' => 'D'
        ],
        [
            'soal' => 'Rukun nikah harus dipenuhi agar pernikahan sah. Rukun nikah terdiri atas beberapa unsur, kecuali …',
            'pilihan' => [
                'A' => 'Calon suami',
                'B' => 'Calon istri',
                'C' => 'Mahar',
                'D' => 'Wali',
                'E' => 'bapak calon istri'
            ],
            'jawaban' => 'E'
        ],
        [
            'soal' => 'Kewajiban material suami kepada istri adalah …',
            'pilihan' => [
                'A' => 'menikahkan istri dengan harta yang besar',
                'B' => 'memberi pakaian mewah',
                'C' => 'memberi nafkah istri sesuai kemampuannya',
                'D' => 'memberikan rumah mewah',
                'E' => 'memberikan mobil mewah'
            ],
            'jawaban' => 'C'
        ],
        [
            'soal' => 'Di bawah ini yang bukan merupakan tujuan nikah adalah …',
            'pilihan' => [
                'A' => 'mewujudkan cinta kasih',
                'B' => 'membangun keluarga sakinah',
                'C' => 'mencari keberkahan dalam hidup',
                'D' => 'mendapatkan keturunan',
                'E' => 'terpenuhinya kebutuhan biologis semata'
            ],
            'jawaban' => 'E'
        ],
        [
            'soal' => 'Perhatikan daftar berikut: 1) Calon suami; 2) Calon istri; 3) Mahar; 4) Wali; 5) 2 orang saksi; 6) Walimah; 7) Ijab qabul. Yang termasuk rukun menikah adalah …',
            'pilihan' => [
                'A' => '1, 2, 3, 4, 5, 6, 7',
                'B' => '1, 2, 3, 4, 5',
                'C' => '1, 2, 4, 5, 7',
                'D' => '2, 3, 4, 6, 7',
                'E' => '1, 2, 4, 6, 7'
            ],
            'jawaban' => 'C'
        ],
        [
            'soal' => 'Batas usia minimal menurut UU No. 16 Tahun 2019 baik untuk laki-laki maupun perempuan adalah …',
            'pilihan' => [
                'A' => '17 tahun',
                'B' => '18 tahun',
                'C' => '19 tahun',
                'D' => '21 tahun',
                'E' => '25 tahun'
            ],
            'jawaban' => 'C'
        ],
        [
            'soal' => 'Hukum menikah ditujukan untuk orang yang sudah mampu secara lahir batin namun dapat mengendalikan diri dari godaan perzinaan adalah …',
            'pilihan' => [
                'A' => 'wajib',
                'B' => 'sunah',
                'C' => 'haram',
                'D' => 'makruh',
                'E' => 'mubah'
            ],
            'jawaban' => 'B'
        ],
        [
            'soal' => 'Di bawah ini yang bukan termasuk hikmah dalam pernikahan adalah …',
            'pilihan' => [
                'A' => 'terhindar dari fitnah',
                'B' => 'menjalin persatuan keluarga',
                'C' => 'terhindar dari bahan ejekan dari masyarakat',
                'D' => 'menambah keberkahan hidup',
                'E' => 'mewujudkan cinta kasih'
            ],
            'jawaban' => 'C'
        ]
    ],
    'bab10' => [
        [
            'soal' => 'Ajaran Islam tidak hanya mementingkan akhirat, tetapi juga kehidupan dunia. Pemikiran ini dikemukakan oleh …',
            'pilihan' => [
                'A' => 'Jamaludin al-Afghani',
                'B' => 'Muhammad Abduh',
                'C' => 'Rifa’ah Baidawi',
                'D' => 'KH. Ahmad Dahlan',
                'E' => 'KH. Hasyim Asy’ari'
            ],
            'jawaban' => 'A'
        ],
        [
            'soal' => 'Perhatikan tokoh berikut: 1) Muhammad Ali Pasya, 2) Muhammad Abduh, 3) Rifa’ah Baidawi Rafi’at at-Tahtawi, 4) KH. Ahmad Dahlan, 5) KH. Hasyim Asy’ari, 6) Muhammad Iqbal. Tokoh Islam masa modern yang berkiprah di Mesir adalah …',
            'pilihan' => [
                'A' => '1), 2), dan 3)',
                'B' => '2), 3), dan 4)',
                'C' => '3), 4), dan 5)',
                'D' => '4), 5), dan 6)',
                'E' => '1), 3), dan 6)'
            ],
            'jawaban' => 'A'
        ],
        [
            'soal' => 'Menurut Harun Nasution, periode sejarah Islam dari tahun 1800 sampai sekarang disebut …',
            'pilihan' => [
                'A' => 'masa klasik',
                'B' => 'masa pertengahan',
                'C' => 'masa kontemporer',
                'D' => 'masa modern',
                'E' => 'masa pramodern'
            ],
            'jawaban' => 'D'
        ],
        [
            'soal' => 'Pintu ijtihad masih terbuka lebar bagi umat Islam. Ijtihad sebagai dasar penting dalam menafsirkan ajaran Islam dikemukakan oleh …',
            'pilihan' => [
                'A' => 'KH. Ahmad Dahlan',
                'B' => 'KH. Hasyim Asy’ari',
                'C' => 'Muhammad Abduh dan Muhammad Iqbal',
                'D' => 'Jamaludin al-Afghani',
                'E' => 'Muhammad Ali Pasya'
            ],
            'jawaban' => 'C'
        ],
        [
            'soal' => 'Tokoh pembaharu abad ke-18 yang mendirikan sekolah Maktebi Ma’aarif, Maktebi Ulum’i edibiyet, serta sekolah kedokteran, militer, dan teknik adalah …',
            'pilihan' => [
                'A' => 'Muhammad Abduh',
                'B' => 'Rifa’ah Baidawi',
                'C' => 'KH. Ahmad Dahlan',
                'D' => 'Sultan Mahmud II',
                'E' => 'Muhammad Iqbal'
            ],
            'jawaban' => 'D'
        ],
        [
            'soal' => 'Perhatikan kitab berikut: 1) Al-Qadha wa al-Qadar, 2) Risalah tauhid, 3) Syarh Nahjil Balaghah, 4) Ishlahu al-Mahakim al-Syar’iyyah, 5) Adab al-Alim wa al-Muta’allim. Karya mana yang merupakan karya Muhammad Abduh?',
            'pilihan' => [
                'A' => '1) dan 5)',
                'B' => '2), 3), dan 4)',
                'C' => '3), 4), dan 5)',
                'D' => '1), 2), dan 3)',
                'E' => '1), 4), dan 5)'
            ],
            'jawaban' => 'B'
        ],
        [
            'soal' => 'Siapa tokoh pembaharu yang dikenal sebagai bapak pendiri Negara Pakistan?',
            'pilihan' => [
                'A' => 'KH. Ahmad Dahlan',
                'B' => 'KH. Hasyim Asy’ari',
                'C' => 'Muhammad Abduh',
                'D' => 'Jamaludin al-Afghani',
                'E' => 'Muhammad Iqbal'
            ],
            'jawaban' => 'E'
        ],
        [
            'soal' => 'Di bawah ini adalah pokok-pokok pikiran KH. Ahmad Dahlan, kecuali …',
            'pilihan' => [
                'A' => 'fondasi dalam pemerintahan dalam Islam mempunyai tujuan memberi persamaan bagi setiap muslim, melayani kepentingan dengan cara perundingan, dan menjaga keadilan',
                'B' => 'penekanan pada pendidikan agama',
                'C' => 'penguatan ukhuwah Islamiyah',
                'D' => 'penekanan pada pembaruan sosial',
                'E' => 'semua pernyataan merupakan pokok pikiran KH. Ahmad Dahlan'
            ],
            'jawaban' => 'A'
        ],
        [
            'soal' => 'KH. Hasyim Asy’ari menulis banyak kitab. Karya beliau yang menekankan pentingnya persatuan umat Islam dalam merespon upaya Belanda adalah …',
            'pilihan' => [
                'A' => 'Risalah tauhid',
                'B' => 'Al-Mawa’idz',
                'C' => 'Syarh Nahjil Balaghah',
                'D' => 'Ishlahu al-Mahakim al-Syar’iyyah',
                'E' => 'Adab al-Alim wa al-Muta’allim'
            ],
            'jawaban' => 'B'
        ],
        [
            'soal' => 'Di bawah ini yang bukan merupakan hikmah mempelajari perkembangan Islam pada abad modern adalah …',
            'pilihan' => [
                'A' => 'mendorong umat Islam untuk menguasai IPTEK',
                'B' => 'memperkuat identitas keislaman',
                'C' => 'meningkatkan kualitas pendidikan',
                'D' => 'menjaga agar tidak tersesat',
                'E' => 'mendorong dialog antar agama'
            ],
            'jawaban' => 'A'
        ]
    ]
];

// Kunci jawaban
$kunci = [];
foreach($soal as $bab => $data) {
    foreach($data as $idx => $item) {
        $kunci[$bab][$idx] = $item['jawaban'];
    }
}

// Handle Submit
if(isset($_POST['submit'])) {
    $score = 0;
    $total = 0;
    $hasil = [];

    foreach($_POST['jawaban'] as $bab => $answers) {
        foreach($answers as $no => $jawaban) {
            $benar = ($jawaban == $kunci[$bab][$no]);
            if($benar) {
                $score++;
            }
            $total++;
            $hasil[$bab][$no] = [
                'jawaban_user' => $jawaban,
                'jawaban_benar' => $kunci[$bab][$no],
                'status' => $benar
            ];
        }
    }

    $_SESSION['score'] = $score;
    $_SESSION['total'] = $total;
    $_SESSION['hasil'] = $hasil;
    header('Location: hasil.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulangan Agama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center">ULANGAN AGAMA ISLAM</h2>
            </div>
            <div class="card-body">
                <form method="POST">
                    <?php foreach($soal as $bab => $questions): ?>
                    <h4 class="mb-4"><?= strtoupper(str_replace('bab', 'BAB ', $bab)) ?></h4>
                    <?php foreach($questions as $idx => $item): ?>
                    <div class="mb-3">
                        <p class="fw-bold"><?= ($idx + 1) . ". " . $item['soal'] ?></p>
                        <?php foreach($item['pilihan'] as $opt => $text): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban[<?= $bab ?>][<?= $idx ?>]" value="<?= $opt ?>" required>
                            <label class="form-check-label"><?= $opt ?>. <?= $text ?></label>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endforeach; ?>
                    <?php endforeach; ?>
                    <button type="submit" name="submit" class="btn btn-primary w-100">Kumpulkan Jawaban</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>