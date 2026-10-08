@php
    $p = [
        'first' => 'Avicena',
        'last' => 'Widyanarga',
        'roles' => ['Web Developer', 'Software Developer', 'Laravel & PHP Developer'],
        'role' => '',
        'email' => 'avicenarga8793@gmail.com',
        'phone' => '+62 812-8836-0400',
        'whatsapp' => '6281288360400',
        'location' => 'Eromoko, Wonogiri, Jawa Tengah',
        // Isi null jika tidak ingin menampilkan.
        'github' => 'https://github.com/ums-l200220204',
        'instagram' => 'https://www.instagram.com/avicenaw/',
        'linkedin' => 'https://www.linkedin.com/in/avicena-widyanarga-75782543b/?isSelfProfile=true',
        'about' => 'Saya lulusan Program Studi Teknik Informatika Universitas Muhammadiyah Surakarta dengan IPK 3.74, mengambil peminatan rekayasa perangkat lunak. Di sana saya belajar Python, Java, dan PHP. Saya tertarik membuat website dan terus mempelajari hal baru untuk mengembangkan kemampuan saya.',

        'education' => [
            ['school' => 'Universitas Muhammadiyah Surakarta', 'meta' => 'Teknik Informatika · 2022 – 2026', 'note' => 'IPK 3.74 / 4.00'],
            ['school' => 'SMA Negeri 2 Wonogiri', 'meta' => 'Jurusan Matematika IPA · 2019 – 2022', 'note' => null],
        ],

        'internships' => [
            [
                'company' => 'Tribun News Solo',
                'meta' => 'Web Development Intern · Maret – April 2025',
                'points' => [
                    'Mengenal peran IT Support di sebuah perusahaan.',
                    'Mengenal lingkungan kerja perusahaan.',
                    'Mengerjakan proyek website ticketing untuk penanganan kerusakan.',
                ],
            ],
        ],

        // 'github' => link repository GitHub proyek (isi null jika repo privat, tombol tidak akan tampil)
        // 'url'    => link demo/website langsung (isi null jika belum ada, tombol Demo tidak akan tampil)
        'projects' => [
            ['title' => 'Tribun E-Ticketing Management System', 'type' => 'Web', 'icon' => 'bi-ticket-perforated',
             'github' => 'https://github.com/ums-l200220204/Tribun-Service-Desk', 'url' => null,
             'desc' => 'Fitur ticketing yang efisien untuk kebutuhan internal perusahaan. Saya bertanggung jawab pada implementasinya.',
             'tags' => ['Laravel', 'Node.js', 'Tailwind CSS']],
            ['title' => 'Website Monitoring Upaya Pencegahan Stunting', 'type' => 'Web', 'icon' => 'bi-heart-pulse',
             'github' => 'https://github.com/ums-l200220204/stunting-sigenting', 'url' => 'https://stunting-sigenting.smartsense.my.id/',
             'desc' => 'Website untuk memantau pertumbuhan anak sebagai upaya pencegahan stunting.',
             'tags' => ['PHP', 'Laravel', 'JavaScript', 'CSS', 'MySQL']],
            ['title' => 'Website Maknews', 'type' => 'Web', 'icon' => 'bi-newspaper',
             'github' => 'https://github.com/ums-l200220204/Mak-News', 'url' => null,
             'desc' => 'Pembuatan website yang digunakan sebagai portal berita.',
             'tags' => ['Laravel', 'PHP', 'MySQL']],
            ['title' => 'Aplikasi Mobile RoomBook', 'type' => 'Mobile', 'icon' => 'bi-phone',
             'github' => 'https://github.com/ums-l200220204/Room-Book/tree/main/RoomBook', 'url' => null,
             'desc' => 'Aplikasi mobile untuk memesan ruangan yang akan digunakan.',
             'tags' => ['Java']],
        ],

        'skills' => [
            'tech' => [
                ['Laravel', 'bi-boxes'], ['PHP', 'bi-filetype-php'], ['MySQL', 'bi-database'], ['Java', 'bi-filetype-java'],
            ],
            'soft' => [
                ['Sistem basis data', 'bi-diagram-3'], ['Pemecahan masalah', 'bi-puzzle'], ['Bekerja dalam tim', 'bi-people'],
            ],
        ],
    ];

    $initials = strtoupper(substr($p['first'], 0, 1) . substr($p['last'], 0, 1));
    $hasPhoto = file_exists(public_path('images/foto.jpg'));
    $bento = ['col-lg-6', 'col-lg-6', 'col-lg-6', 'col-lg-6'];
@endphp
<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>{{ $p['first'] }} {{ $p['last'] }} — Web Developer</title>
    <meta name="description" content="Portofolio {{ $p['first'] }} {{ $p['last'] }}, lulusan Teknik Informatika dengan pengalaman Laravel, PHP, dan MySQL.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        /* Nilai kilau yang bisa dianimasikan (cahaya mengikuti kursor) */
        @property --lit{syntax:'<number>';inherits:false;initial-value:0}

        :root{
            --bs-font-sans-serif:'Plus Jakarta Sans',system-ui,-apple-system,'Segoe UI',Roboto,sans-serif;
            --bs-primary:#1E4594;--bs-primary-rgb:30,69,148;
            --bs-primary-bg-subtle:#E6EDFA;--bs-primary-text-emphasis:#17376F;--bs-primary-border-subtle:#C5D4F2;
            --accent:#1E4594;--accent-2:#14B8A6;
            --section-y:clamp(3.5rem,9vw,6.5rem);
            --ease:cubic-bezier(.22,.9,.3,1);

            /* Liquid glass */
            --page-bg:linear-gradient(160deg,#E4EEFF 0%,#EAF4FF 50%,#E0F7F4 100%);
            --glass-tint:255,255,255;
            --glass-a:.40;--glass-b:.12;--bar-a:.24;
            --glass-border:rgba(255,255,255,.75);
            --glass-shadow:0 26px 50px -26px rgba(23,55,111,.50),0 2px 10px rgba(23,55,111,.08);
            --glass-hi:inset 0 1.5px 0 rgba(255,255,255,.95),inset 0 -1px 0 rgba(255,255,255,.45),inset 0 0 26px rgba(255,255,255,.25);
            --solid:#1E4594;
            --orb-op:1;
        }
        [data-bs-theme=dark]{
            --bs-primary:#7CA3F2;--bs-primary-rgb:124,163,242;
            --bs-primary-bg-subtle:#1B2A52;--bs-primary-text-emphasis:#B4CBFA;--bs-primary-border-subtle:#2A3F78;
            --accent:#6C9BFF;--accent-2:#5EEAD4;

            --page-bg:linear-gradient(160deg,#050B1D 0%,#0A1432 50%,#06122A 100%);
            --glass-a:.13;--glass-b:.03;--bar-a:.06;
            --glass-border:rgba(255,255,255,.20);
            --glass-shadow:0 26px 50px -26px rgba(0,0,0,.75),0 2px 10px rgba(0,0,0,.35);
            --glass-hi:inset 0 1px 0 rgba(255,255,255,.42),inset 0 -1px 0 rgba(255,255,255,.06),inset 0 0 24px rgba(255,255,255,.05);
            --solid:#3566C4;
            --orb-op:.85;
        }

        /* ===== Dasar ===== */
        html{background:var(--page-bg);-webkit-text-size-adjust:100%}
        body{background:transparent;overflow-x:hidden;letter-spacing:-.005em}
        .section{padding-block:var(--section-y)}
        :focus-visible{outline:3px solid var(--bs-primary);outline-offset:2px}

        /* ===== Latar cair (orb berwarna di balik kaca) ===== */
        .orbs{position:fixed;inset:0;z-index:-1;overflow:hidden;pointer-events:none}
        .orbs i{position:absolute;border-radius:50%;opacity:var(--orb-op);will-change:transform}
        .orbs .o1{width:62vmax;height:62vmax;left:-22vmax;top:-20vmax;background:radial-gradient(circle,rgba(53,102,196,.60),transparent 66%);animation:drift1 26s ease-in-out infinite}
        .orbs .o2{width:54vmax;height:54vmax;right:-20vmax;top:12vh;background:radial-gradient(circle,rgba(20,184,166,.45),transparent 66%);animation:drift2 30s ease-in-out infinite}
        .orbs .o3{width:50vmax;height:50vmax;left:8vw;bottom:-26vmax;background:radial-gradient(circle,rgba(91,168,255,.58),transparent 66%);animation:drift2 34s ease-in-out infinite reverse}
        .orbs .o4{width:34vmax;height:34vmax;right:6vw;bottom:-8vmax;background:radial-gradient(circle,rgba(56,189,248,.38),transparent 66%);animation:drift1 38s ease-in-out infinite}
        @keyframes drift1{0%,100%{transform:translate(0,0) scale(1)}50%{transform:translate(8vw,6vh) scale(1.12)}}
        @keyframes drift2{0%,100%{transform:translate(0,0) scale(1)}50%{transform:translate(-7vw,-6vh) scale(1.1)}}

        /* ===== Komponen kaca ===== */
        .glass{
            position:relative;
            background:
                radial-gradient(380px circle at var(--mx,50%) var(--my,0%),rgba(255,255,255,calc(var(--lit,0) * .32)),transparent 62%),
                linear-gradient(135deg,rgba(var(--glass-tint),var(--glass-a)) 0%,rgba(var(--glass-tint),var(--glass-b)) 52%,rgba(var(--glass-tint),calc(var(--glass-a) * .75)) 100%);
            -webkit-backdrop-filter:blur(22px) saturate(180%) brightness(1.05);
            backdrop-filter:blur(22px) saturate(180%) brightness(1.05);
            border:1px solid var(--glass-border);
            border-radius:1.5rem;
            box-shadow:var(--glass-hi),var(--glass-shadow);
            transition:--lit .35s ease,transform .45s var(--ease),border-color .3s,box-shadow .45s;
        }
        .glass-bar{
            background:rgba(var(--glass-tint),var(--bar-a));
            -webkit-backdrop-filter:blur(18px) saturate(170%);
            backdrop-filter:blur(18px) saturate(170%);
            border-color:var(--glass-border)!important;
        }

        /* ===== Tombol ===== */
        .btn{transition:transform .25s var(--ease),box-shadow .25s,background-color .2s;border-radius:999px}
        .btn:hover{transform:translateY(-2px)}
        .btn-primary{
            --bs-btn-bg:rgba(30,69,148,.86);--bs-btn-border-color:rgba(255,255,255,.40);--bs-btn-color:#fff;
            --bs-btn-hover-bg:rgba(23,55,111,.95);--bs-btn-hover-border-color:rgba(255,255,255,.5);--bs-btn-hover-color:#fff;
            --bs-btn-active-bg:rgba(23,55,111,.95);--bs-btn-active-border-color:rgba(255,255,255,.5);--bs-btn-active-color:#fff;
            background-image:linear-gradient(180deg,rgba(255,255,255,.38),rgba(255,255,255,0) 58%);
            -webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);
            box-shadow:inset 0 1px 0 rgba(255,255,255,.6),inset 0 -1px 0 rgba(255,255,255,.12),0 12px 26px -10px rgba(30,69,148,.65);
        }
        [data-bs-theme=dark] .btn-primary{--bs-btn-bg:rgba(53,102,196,.80);--bs-btn-hover-bg:rgba(74,122,216,.92);--bs-btn-active-bg:rgba(74,122,216,.92)}
        .btn-primary:hover{box-shadow:inset 0 1px 0 rgba(255,255,255,.65),0 16px 32px -10px rgba(53,102,196,.75)}
        .btn-outline-primary{
            --bs-btn-bg:rgba(var(--glass-tint),.26);--bs-btn-color:var(--bs-primary-text-emphasis);--bs-btn-border-color:var(--glass-border);
            --bs-btn-hover-bg:rgba(var(--bs-primary-rgb),.16);--bs-btn-hover-color:var(--bs-primary-text-emphasis);--bs-btn-hover-border-color:var(--glass-border);
            --bs-btn-active-bg:rgba(var(--bs-primary-rgb),.22);--bs-btn-active-color:var(--bs-primary-text-emphasis);--bs-btn-active-border-color:var(--glass-border);
            -webkit-backdrop-filter:blur(14px) saturate(160%);backdrop-filter:blur(14px) saturate(160%);
            box-shadow:var(--glass-hi);
        }
        .icon-btn{width:38px;height:38px;padding:0;display:grid;place-items:center;border-radius:50%;border:1px solid var(--glass-border);background:rgba(var(--glass-tint),.28);color:var(--bs-body-color);cursor:pointer;box-shadow:var(--glass-hi);transition:transform .25s var(--ease),background-color .2s}
        .icon-btn:hover{transform:rotate(12deg) scale(1.06);background:rgba(var(--bs-primary-rgb),.18)}

        /* ===== Progress bar ===== */
        #progress{position:fixed;top:0;left:0;height:3px;width:0;z-index:2000;background:linear-gradient(90deg,var(--accent),var(--accent-2))}

        /* ===== Judul section ===== */
        .section-title{font-weight:800;letter-spacing:-.03em;font-size:clamp(1.7rem,4.8vw,2.5rem);margin-bottom:1rem}
        .section-title::after{content:"";display:block;height:4px;width:0;margin-top:.7rem;border-radius:4px;background:linear-gradient(90deg,var(--accent),var(--accent-2));transition:width .9s var(--ease) .25s}
        .show .section-title::after,.section-title.show::after{width:56px}
        .section-lead{color:var(--bs-secondary-color);max-width:40rem}

        /* ===== Navbar kaca melayang ===== */
        .navbar.glass{position:sticky;top:.75rem;z-index:1030;width:min(1120px,calc(100% - 1.5rem));margin:.75rem auto 0;padding-block:.4rem;border-radius:1.75rem}
        .navbar.glass.scrolled{box-shadow:var(--glass-hi),0 18px 40px -16px rgba(11,26,58,.45)}
        .navbar>.container{max-width:none;padding-inline:1.1rem}
        .navbar-nav .nav-link{font-weight:500;color:var(--bs-secondary-color);border-radius:999px;padding:.5rem .95rem;transition:background-color .25s,color .25s}
        .navbar-nav .nav-link:hover{color:var(--bs-primary);background:rgba(var(--bs-primary-rgb),.08)}
        .navbar-nav .nav-link.active{color:var(--bs-primary);background:rgba(var(--bs-primary-rgb),.15);box-shadow:inset 0 1px 0 rgba(255,255,255,.5)}
        .navbar-toggler{border:1px solid var(--glass-border);border-radius:999px;background:rgba(var(--glass-tint),.28)}
        @media (max-width:991.98px){
            .navbar-nav{padding-block:.6rem .4rem;gap:.15rem}
        }

        /* ===== Hero ===== */
        .hero{position:relative;overflow:hidden;min-height:calc(100svh - 76px);display:flex;align-items:center;padding-block:clamp(3rem,8vw,5rem)}
        .hero .container{position:relative;z-index:1}

        .hero h1{font-size:clamp(2.6rem,10vw,5.2rem);font-weight:800;letter-spacing:-.045em;line-height:1}
        .grad-text{background:linear-gradient(100deg,var(--accent) 0%,#38BDF8 45%,var(--accent-2) 100%);background-size:200% auto;-webkit-background-clip:text;background-clip:text;color:transparent;animation:shine 6s linear infinite}
        @keyframes shine{to{background-position:200% center}}
        .typed{font-size:clamp(1.15rem,3.2vw,1.6rem);font-weight:600;min-height:1.6em}
        .typed .cursor{display:inline-block;width:2px;height:1.1em;margin-left:3px;vertical-align:-.15em;background:var(--bs-primary);animation:blink 1s steps(1) infinite}
        @keyframes blink{50%{opacity:0}}
        .role{font-size:clamp(1rem,2.4vw,1.15rem);color:var(--bs-secondary-color);max-width:32rem}

        /* Masuk hero berurutan */
        .rise{opacity:0;transform:translateY(24px);animation:rise .9s var(--ease) forwards;animation-delay:calc(var(--i,0) * 110ms + 100ms)}
        @keyframes rise{to{opacity:1;transform:none}}

        /* Kartu kode hero */
        .code-wrap{position:relative;max-width:440px;margin-inline:auto}
        .code-card{border-radius:1.5rem;animation:float 6s ease-in-out infinite}
        .code-bar{display:flex;gap:.4rem;padding:.85rem 1.1rem;border-bottom:1px solid var(--glass-border)}
        .code-bar span{width:11px;height:11px;border-radius:50%;background:#ff5f57;box-shadow:inset 0 1px 0 rgba(255,255,255,.5)}
        .code-bar span:nth-child(2){background:#febc2e}.code-bar span:nth-child(3){background:#28c840}
        .code-card pre{margin:0;padding:1.1rem 1.25rem 1.3rem;font-size:.88rem;line-height:1.75;font-family:ui-monospace,SFMono-Regular,Menlo,Consolas,monospace;color:var(--bs-body-color);white-space:pre-wrap}
        .k{color:#0EA5E9}.s{color:#0D9488}.v{color:var(--bs-primary)}
        [data-bs-theme=dark] .k{color:#7DD3FC}
        [data-bs-theme=dark] .s{color:#5EEAD4}
        @keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}
        .chip{position:absolute;display:flex;align-items:center;gap:.5rem;padding:.55rem .95rem;border-radius:999px;font-weight:600;font-size:.88rem;animation:float 5s ease-in-out infinite}
        .chip i{color:var(--bs-primary);font-size:1.1rem}
        .chip.c1{top:-18px;right:-14px;animation-delay:-1s}
        .chip.c2{bottom:38px;left:-34px;animation-delay:-2.5s}
        .chip.c3{bottom:-20px;right:26px;animation-delay:-3.5s}

        /* Foto dengan bingkai kaca */
        .avatar-ring{padding:12px;border-radius:50%;display:inline-block;animation:float 7s ease-in-out infinite}
        .avatar{display:block;width:clamp(112px,30vw,300px);aspect-ratio:1/1;border-radius:50%;object-fit:cover}

        .scroll-hint{position:absolute;bottom:1.2rem;left:50%;transform:translateX(-50%);z-index:1;color:var(--bs-secondary-color);font-size:1.4rem;animation:bounce 2s ease-in-out infinite}
        @keyframes bounce{50%{transform:translate(-50%,8px)}}
        @media (max-height:700px),(max-width:575.98px){.scroll-hint{display:none}}
        @media (max-width:575.98px){.hero .btn{width:100%}}

        /* ===== Marquee teknologi ===== */
        .marquee{overflow:hidden;border-block:1px solid var(--glass-border);padding-block:1rem;
            background:rgba(var(--glass-tint),var(--bar-a));
            -webkit-backdrop-filter:blur(18px) saturate(170%);backdrop-filter:blur(18px) saturate(170%);
            box-shadow:var(--glass-hi)}
        .marquee-mask{mask-image:linear-gradient(90deg,transparent,#000 8%,#000 92%,transparent);-webkit-mask-image:linear-gradient(90deg,transparent,#000 8%,#000 92%,transparent)}
        .marquee-track{display:flex;gap:3rem;width:max-content;animation:scrollx 28s linear infinite}
        .marquee:hover .marquee-track{animation-play-state:paused}
        .marquee-track span{display:inline-flex;align-items:center;gap:.6rem;font-weight:700;font-size:1.1rem;color:var(--bs-secondary-color);white-space:nowrap}
        .marquee-track i{color:var(--bs-primary)}
        @keyframes scrollx{to{transform:translateX(-50%)}}

        /* ===== Muncul saat scroll ===== */
        .reveal{opacity:0;transform:var(--rv,translateY(28px))}
        .reveal.from-left{--rv:translateX(-36px)}
        .reveal.from-right{--rv:translateX(36px)}
        .reveal.zoom{--rv:scale(.94)}
        .reveal.show{opacity:1;transform:none;animation:revealIn .8s var(--ease) backwards;animation-delay:calc(var(--d,0) * 100ms)}
        @keyframes revealIn{from{opacity:0;transform:var(--rv,translateY(28px))}}

        /* ===== Tentang ===== */
        .about-card{padding:1.5rem}
        .info-row{display:flex;align-items:center;gap:.9rem;padding:.8rem 0}
        .info-row + .info-row{border-top:1px solid var(--glass-border)}
        .info-row i{width:42px;height:42px;flex:none;display:grid;place-items:center;border-radius:.85rem;background:rgba(var(--bs-primary-rgb),.14);color:var(--bs-primary-text-emphasis);font-size:1.1rem;box-shadow:inset 0 1px 0 rgba(255,255,255,.55)}
        .info-row small{display:block;color:var(--bs-secondary-color)}

        /* ===== Timeline ===== */
        .timeline{position:relative;margin-left:.5rem;padding-left:0}
        .timeline::before{content:"";position:absolute;left:0;top:.4rem;bottom:0;width:2px;background:linear-gradient(var(--accent),transparent);transform-origin:top;transform:scaleY(0);transition:transform 1.4s var(--ease)}
        .timeline.show::before{transform:scaleY(1)}
        .timeline-item{position:relative;margin:0 0 1rem 1.5rem;padding:1.1rem 1.25rem;border-radius:1.25rem}
        .timeline-item:last-child{margin-bottom:0}
        .timeline-item::before{content:"";position:absolute;left:calc(-1.5rem - 6px);top:1.35rem;width:14px;height:14px;border-radius:50%;background:var(--bs-primary);box-shadow:0 0 0 4px rgba(var(--bs-primary-rgb),.2)}
        .timeline-item.show::after{content:"";position:absolute;left:calc(-1.5rem - 6px);top:1.35rem;width:14px;height:14px;border-radius:50%;background:var(--bs-primary);animation:ping 2.4s ease-out 1;opacity:.6}
        @keyframes ping{to{transform:scale(3);opacity:0}}

        /* ===== Proyek ===== */
        .project:hover{border-color:rgba(var(--bs-primary-rgb),.55)}
        .project-icon{width:50px;height:50px;border-radius:1rem;display:inline-flex;align-items:center;justify-content:center;font-size:1.3rem;background:rgba(var(--bs-primary-rgb),.14);color:var(--bs-primary-text-emphasis);box-shadow:inset 0 1px 0 rgba(255,255,255,.55);transition:transform .4s var(--ease),background .3s,color .3s}
        .project:hover .project-icon{transform:rotate(-8deg) scale(1.1);background:var(--solid);color:#fff}
        .tag{display:inline-block;padding:.25rem .7rem;border-radius:999px;font-size:.78rem;font-weight:500;background:rgba(var(--glass-tint),.30);border:1px solid var(--glass-border);box-shadow:inset 0 1px 0 rgba(255,255,255,.5)}

        /* ===== Skills ===== */
        .skill{display:flex;align-items:center;gap:.8rem;padding:1.1rem 1.2rem;border-radius:1.25rem}
        .skill i{font-size:1.7rem;color:var(--bs-primary);transition:transform .45s var(--ease)}
        .skill:hover i{transform:scale(1.2) rotate(-6deg)}
        .pill:hover{border-color:rgba(var(--bs-primary-rgb),.55)}

        /* ===== Kontak (teks di atas, ikon di bawah) ===== */
        .contact-panel{padding:clamp(1.75rem,5vw,3.5rem);border-radius:2rem;text-align:center}
        .contact-panel .section-title::after{margin-inline:auto}
        .contact-icons{display:flex;flex-wrap:wrap;gap:1rem;justify-content:center}
        .contact-icon{width:64px;height:64px;display:grid;place-items:center;border:1px solid var(--glass-border);border-radius:50%;background:rgba(var(--glass-tint),.30);color:var(--bs-body-color);font-size:1.6rem;text-decoration:none;box-shadow:var(--glass-hi),0 12px 24px -14px rgba(11,26,58,.5);-webkit-backdrop-filter:blur(14px) saturate(170%);backdrop-filter:blur(14px) saturate(170%);transition:background-color .25s,color .25s,transform .3s var(--ease)}
        a.contact-icon:hover{background:var(--solid);color:#fff;transform:translateY(-6px) scale(1.05)}

        #totop{width:44px;height:44px;margin-bottom:env(safe-area-inset-bottom,0)}

        /* Efek angkat saat hover (didefinisikan terakhir agar menang atas .reveal.show) */
        .glass-lift:hover{transform:translateY(-6px);box-shadow:var(--glass-hi),0 30px 54px -24px rgba(var(--bs-primary-rgb),.55)}

        /* Cadangan jika browser tidak mendukung backdrop-filter */
        @supports not ((backdrop-filter:blur(1px)) or (-webkit-backdrop-filter:blur(1px))){
            .glass,.glass-bar,.marquee,.contact-icon{background-color:rgba(255,255,255,.82)}
            [data-bs-theme=dark] .glass,[data-bs-theme=dark] .glass-bar,[data-bs-theme=dark] .marquee,[data-bs-theme=dark] .contact-icon{background-color:rgba(20,32,66,.9)}
        }

        @media (prefers-reduced-motion:reduce){
            *,*::before,*::after{animation:none!important;transition:none!important}
            .rise,.reveal{opacity:1;transform:none}
            .timeline::before{transform:none}
            .section-title::after{width:56px}
        }
    </style>
</head>
<body>

<div id="progress"></div>

<div class="orbs" aria-hidden="true"><i class="o1"></i><i class="o2"></i><i class="o3"></i><i class="o4"></i></div>

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg glass" id="nav">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary fs-4" href="#beranda" aria-label="Beranda">{{ $initials }}</a>
        <div class="d-flex align-items-center gap-2 order-lg-3">
            <button id="theme" type="button" class="icon-btn d-lg-none" aria-label="Ganti tema"><i class="bi bi-moon-stars"></i></button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Buka menu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse order-lg-2" id="menu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1" id="navmenu">
                <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#perjalanan">Pendidikan &amp; Magang</a></li>
                <li class="nav-item"><a class="nav-link" href="#proyek">Proyek</a></li>
                <li class="nav-item"><a class="nav-link" href="#kemampuan">Kemampuan</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                <li class="nav-item d-none d-lg-block ms-lg-2">
                    <button id="theme-lg" type="button" class="icon-btn" aria-label="Ganti tema"><i class="bi bi-moon-stars"></i></button>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- Hero --}}
<header id="beranda" class="hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-12 col-lg-7">
                <h1 class="mb-3 rise" style="--i:1">{{ $p['first'] }}<br><span class="grad-text">{{ $p['last'] }}</span></h1>
                <div class="typed mb-3 rise" style="--i:2"><span id="typed" data-roles='@json($p['roles'])'>{{ $p['roles'][0] }}</span><span class="cursor"></span></div>
                @if (!empty($p['role']))
                    <p class="role mb-4 rise" style="--i:3">{{ $p['role'] }}</p>
                @endif
                <div class="d-flex flex-column flex-sm-row gap-2 mt-4 rise" style="--i:5">
                    <a class="btn btn-primary btn-lg px-4 fw-semibold" href="#proyek"><i class="bi bi-code-slash me-2"></i>Lihat proyek</a>
                    <a class="btn btn-outline-primary btn-lg px-4 fw-semibold" href="#kontak">Hubungi saya</a>
                </div>
            </div>
            <div class="col-12 col-lg-5 d-none d-lg-block rise" style="--i:3">
                @if ($hasPhoto)
                    <div class="d-flex justify-content-end"><div class="avatar-ring glass"><img src="{{ asset('images/foto.jpg') }}" alt="Foto {{ $p['first'] }} {{ $p['last'] }}" class="avatar" width="300" height="300"></div></div>
                @else
                    <div class="code-wrap" aria-hidden="true">
                        <div class="code-card glass">
                            <div class="code-bar"><span></span><span></span><span></span></div>
<pre><span class="k">class</span> <span class="v">Developer</span> {
  <span class="k">public</span> $nama  = <span class="s">'{{ $p['first'] }}'</span>;
  <span class="k">public</span> $stack = [
    <span class="s">'Laravel'</span>, <span class="s">'PHP'</span>,
    <span class="s">'MySQL'</span>, <span class="s">'Java'</span>
  ];
  <span class="k">public</span> $status = <span class="s">'siap bekerja'</span>;
}</pre>
                        </div>
                        <span class="chip glass c1"><i class="bi bi-boxes"></i>Laravel</span>
                        <span class="chip glass c2"><i class="bi bi-database"></i>MySQL</span>
                        <span class="chip glass c3"><i class="bi bi-filetype-php"></i>PHP</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <a href="#tentang" class="scroll-hint" aria-label="Gulir ke bawah"><i class="bi bi-chevron-double-down"></i></a>
</header>

{{-- Strip teknologi --}}
<div class="marquee" aria-hidden="true">
    <div class="marquee-mask">
        <div class="marquee-track">
            @for ($n = 0; $n < 2; $n++)
                @foreach ($p['skills']['tech'] as $s)
                    <span><i class="bi {{ $s[1] }}"></i>{{ $s[0] }}</span>
                @endforeach
                @foreach ($p['skills']['tech'] as $s)
                    <span><i class="bi {{ $s[1] }}"></i>{{ $s[0] }}</span>
                @endforeach
            @endfor
        </div>
    </div>
</div>

<main>

    {{-- Tentang --}}
    <section id="tentang" class="section">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-12 col-lg-7 reveal from-left">
                    <h2 class="section-title">Tentang saya</h2>
                    <p class="fs-5 text-body-secondary mb-0" style="line-height:1.75">{{ $p['about'] }}</p>
                </div>
                <div class="col-12 col-lg-5 reveal from-right" style="--d:2">
                    <div class="about-card glass glass-lit">
                        <div class="info-row"><i class="bi bi-mortarboard"></i><span><small>Pendidikan</small><strong>UMS · Teknik Informatika</strong></span></div>
                        <div class="info-row"><i class="bi bi-code-slash"></i><span><small>Peminatan</small><strong>Rekayasa Perangkat Lunak</strong></span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Pendidikan & Magang --}}
    <section id="perjalanan" class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-lg-6">
                    <h2 class="section-title reveal"><i class="bi bi-mortarboard text-primary me-2"></i>Pendidikan</h2>
                    <div class="timeline reveal mt-4">
                        @foreach ($p['education'] as $e)
                            <div class="timeline-item glass reveal" style="--d:{{ $loop->index + 1 }}">
                                <h3 class="h6 fw-bold mb-1">{{ $e['school'] }}</h3>
                                <p class="text-body-secondary small mb-1">{{ $e['meta'] }}</p>
                                @if ($e['note'])<p class="fw-semibold text-primary small mb-0">{{ $e['note'] }}</p>@endif
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <h2 class="section-title reveal"><i class="bi bi-briefcase text-primary me-2"></i>Pengalaman magang</h2>
                    <div class="timeline reveal mt-4">
                        @foreach ($p['internships'] as $i)
                            <div class="timeline-item glass reveal" style="--d:1">
                                <h3 class="h6 fw-bold mb-1">{{ $i['company'] }}</h3>
                                <p class="text-body-secondary small mb-2">{{ $i['meta'] }}</p>
                                <ul class="mb-0 ps-3">
                                    @foreach ($i['points'] as $pt)<li class="mb-1">{{ $pt }}</li>@endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Proyek --}}
    <section id="proyek" class="section">
        <div class="container">
            <h2 class="section-title reveal">Proyek</h2>
            <p class="section-lead mb-5 reveal" style="--d:1">Beberapa proyek yang pernah saya kerjakan, dari website hingga aplikasi mobile.</p>
            <div class="row g-3 g-md-4">
                @foreach ($p['projects'] as $pr)
                    <div class="col-12 {{ $bento[$loop->index % 4] }}">
                        <article class="glass glass-lift project h-100 p-4 d-flex flex-column reveal zoom" style="--d:{{ $loop->index % 2 }}">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="project-icon"><i class="bi {{ $pr['icon'] }}"></i></span>
                                <span class="tag">{{ $pr['type'] }}</span>
                            </div>
                            <h3 class="h5 fw-bold">{{ $pr['title'] }}</h3>
                            <p class="text-body-secondary">{{ $pr['desc'] }}</p>
                            <div class="d-flex flex-wrap gap-2 mt-auto pt-2">
                                @foreach ($pr['tags'] as $t)<span class="tag">{{ $t }}</span>@endforeach
                            </div>
                            @if (!empty($pr['github']) || !empty($pr['url']))
                                <div class="d-flex flex-wrap gap-2 mt-3">
                                    @if (!empty($pr['github']))
                                        <a href="{{ $pr['github'] }}" target="_blank" rel="noopener"
                                           class="btn btn-sm btn-outline-primary"
                                           aria-label="Lihat kode {{ $pr['title'] }} di GitHub">
                                            <i class="bi bi-github me-1"></i>GitHub
                                        </a>
                                    @endif
                                    @if (!empty($pr['url']))
                                        <a href="{{ $pr['url'] }}" target="_blank" rel="noopener"
                                           class="btn btn-sm btn-primary"
                                           aria-label="Buka demo {{ $pr['title'] }}">
                                            Demo <i class="bi bi-box-arrow-up-right ms-1"></i>
                                        </a>
                                    @endif
                                </div>
                            @endif
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Kemampuan --}}
    <section id="kemampuan" class="section">
        <div class="container">
            <h2 class="section-title mb-4 reveal">Kemampuan</h2>

            <h3 class="h6 text-body-secondary mb-3 reveal">Teknis</h3>
            <div class="row row-cols-2 row-cols-md-4 g-3 mb-5">
                @foreach ($p['skills']['tech'] as $s)
                    <div class="col">
                        <div class="glass glass-lift skill h-100 reveal zoom" style="--d:{{ $loop->index }}"><i class="bi {{ $s[1] }}"></i><span class="fw-semibold">{{ $s[0] }}</span></div>
                    </div>
                @endforeach
            </div>

            <h3 class="h6 text-body-secondary mb-3 reveal">Lainnya</h3>
            <div class="d-flex flex-wrap gap-2">
                @foreach ($p['skills']['soft'] as $s)
                    <span class="glass pill d-inline-flex align-items-center px-3 py-2 fw-medium rounded-pill reveal zoom" style="--d:{{ $loop->index }}"><i class="bi {{ $s[1] }} text-primary me-2"></i>{{ $s[0] }}</span>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Kontak: teks di atas, ikon kontak di bawah --}}
    <section id="kontak" class="section">
        <div class="container">
            <div class="contact-panel glass reveal zoom">
                <h2 class="section-title">Mari bekerja sama</h2>
                <p class="text-body-secondary fs-5 mb-4 mx-auto" style="max-width:36rem">Saya terbuka untuk posisi web developer dan peluang kerja sama. Hubungi saya lewat email, WhatsApp, atau media sosial.</p>

                <div class="contact-icons">
                    <a class="contact-icon" href="mailto:{{ $p['email'] }}" aria-label="Email" title="Email"><i class="bi bi-envelope"></i></a>
                    <a class="contact-icon" href="https://wa.me/{{ $p['whatsapp'] }}" target="_blank" rel="noopener" aria-label="WhatsApp" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    @if (!empty($p['github']))
                        <a class="contact-icon" href="{{ $p['github'] }}" target="_blank" rel="noopener" aria-label="GitHub" title="GitHub"><i class="bi bi-github"></i></a>
                    @endif
                    @if (!empty($p['linkedin']))
                        <a class="contact-icon" href="{{ $p['linkedin'] }}" target="_blank" rel="noopener" aria-label="LinkedIn" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    @endif
                    @if (!empty($p['instagram']))
                        <a class="contact-icon" href="{{ $p['instagram'] }}" target="_blank" rel="noopener" aria-label="Instagram" title="Instagram"><i class="bi bi-instagram"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="glass-bar py-4 text-body-secondary small border-top">
    <div class="container d-flex flex-column flex-sm-row justify-content-between gap-1">
        <span>© {{ date('Y') }} {{ $p['first'] }} {{ $p['last'] }}</span>
        <span>Dibuat dengan Laravel &amp; Bootstrap</span>
    </div>
</footer>

<button id="totop" type="button" class="btn btn-primary rounded-circle shadow position-fixed bottom-0 end-0 m-3 m-md-4 d-none" aria-label="Kembali ke atas"><i class="bi bi-arrow-up"></i></button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
(function () {
    var root = document.documentElement;
    var reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Tema
    var btns = [document.getElementById('theme'), document.getElementById('theme-lg')];
    function apply(t) {
        root.setAttribute('data-bs-theme', t);
        btns.forEach(function (b) { b.querySelector('i').className = 'bi ' + (t === 'dark' ? 'bi-sun' : 'bi-moon-stars'); });
    }
    var saved = null;
    try { saved = localStorage.getItem('theme'); } catch (e) {}
    apply(saved || (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'));
    btns.forEach(function (b) {
        b.addEventListener('click', function () {
            var next = root.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark';
            apply(next);
            try { localStorage.setItem('theme', next); } catch (e) {}
        });
    });

    // Navigasi: klik menu / tombol #anchor -> scroll ke section
    var menu = document.getElementById('menu');
    var links = [].slice.call(document.querySelectorAll('#navmenu .nav-link'));
    var bar = document.getElementById('progress'), nav = document.getElementById('nav'), top = document.getElementById('totop');

    // Navbar melayang: tinggi + jarak atas
    function navOffset() { return nav.offsetHeight + 24; }

    function goTo(hash) {
        var el = document.querySelector(hash);
        if (!el) return;
        var y = el.getBoundingClientRect().top + window.scrollY - navOffset() + 1;
        window.scrollTo({ top: Math.max(0, y), behavior: reduce ? 'auto' : 'smooth' });
        try { history.replaceState(null, '', hash); } catch (e) {}
    }
    document.querySelectorAll('a[href^="#"]').forEach(function (a) {
        a.addEventListener('click', function (e) {
            var h = a.getAttribute('href');
            if (h.length < 2 || !document.querySelector(h)) return;
            e.preventDefault();
            if (menu.classList.contains('show')) {
                // tunggu menu mobile selesai menutup, baru scroll
                menu.addEventListener('hidden.bs.collapse', function () { goTo(h); }, { once: true });
                bootstrap.Collapse.getOrCreateInstance(menu).hide();
            } else {
                goTo(h);
            }
        });
    });

    // Menu aktif sesuai section yang sedang dilihat
    var secs = links.map(function (a) { return document.querySelector(a.getAttribute('href')); });
    function spy() {
        var current = -1;
        secs.forEach(function (s, i) {
            if (s && s.getBoundingClientRect().top <= navOffset() + 40) current = i;
        });
        if (window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 4) current = secs.length - 1;
        links.forEach(function (a, i) { a.classList.toggle('active', i === current); });
    }

    // Scroll: progress bar, bayangan navbar, tombol ke atas
    function onScroll() {
        var h = document.documentElement.scrollHeight - window.innerHeight;
        bar.style.width = (h > 0 ? window.scrollY / h * 100 : 0) + '%';
        nav.classList.toggle('scrolled', window.scrollY > 10);
        top.classList.toggle('d-none', window.scrollY < 500);
        spy();
    }
    window.addEventListener('scroll', onScroll, { passive: true }); onScroll();
    top.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' }); });

    // Animasi muncul saat di-scroll
    var els = document.querySelectorAll('.reveal');
    if (!reduce && 'IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (x) {
                if (x.isIntersecting) { x.target.classList.add('show'); io.unobserve(x.target); }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
        els.forEach(function (e) { io.observe(e); });
    } else {
        els.forEach(function (e) { e.classList.add('show'); });
    }

    // Kilau kaca mengikuti kursor
    document.querySelectorAll('.glass').forEach(function (c) {
        c.addEventListener('pointermove', function (e) {
            var r = c.getBoundingClientRect();
            c.style.setProperty('--mx', (e.clientX - r.left) + 'px');
            c.style.setProperty('--my', (e.clientY - r.top) + 'px');
            c.style.setProperty('--lit', '1');
        });
        c.addEventListener('pointerleave', function () { c.style.setProperty('--lit', '0'); });
    });

    // Efek mengetik
    var t = document.getElementById('typed');
    if (t && !reduce) {
        var roles = JSON.parse(t.getAttribute('data-roles')), ri = 0, ci = roles[0].length, del = true;
        (function tick() {
            var word = roles[ri], wait = del ? 45 : 85;
            t.textContent = word.slice(0, ci);
            if (!del && ci === word.length) { del = true; wait = 1800; }
            else if (del && ci === 0) { del = false; ri = (ri + 1) % roles.length; wait = 350; }
            else { ci += del ? -1 : 1; }
            setTimeout(tick, wait);
        })();
    }
})();
</script>
</body>
</html>