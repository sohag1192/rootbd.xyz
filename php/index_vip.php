<?php
declare(strict_types=1);

function e(string|int|null $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function repo(string $name, string $url, string $description, string $language, int $stars, int $forks, string $updated, array $tags): array
{
    return compact('name', 'url', 'description', 'language', 'stars', 'forks', 'updated', 'tags');
}

$profile = [
    'name' => 'Md Sohag Rana',
    'handle' => 'sohag1192',
    'title' => 'ISP Automation Architect & Streaming Solutions Specialist',
    'summary' => 'Full-stack developer and network engineer building ISP automation, IPTV/VOD streaming, MikroTik tooling, billing systems, and high-performance PHP infrastructure.',
    'github' => 'https://github.com/sohag1192',
    'website' => 'https://rootbd.xyz/',
    'orcid' => 'https://orcid.org/0009-0006-6443-9997',
    'telegram' => 'https://t.me/Md_Sohag_Rana',
    'telegram_alt' => 'https://t.me/Flussonics',
    'avatar' => 'https://avatars.githubusercontent.com/u/67639702?v=4',
    'repos' => 130,
    'followers' => 46,
    'following' => 3,
    'github_updated' => '2026-06-23',
];

$focusAreas = [
    ['ISP Automation', 'Radius billing, PPPoE provisioning, MikroTik/Cisco integration, BGP-aware traffic shaping, queue design, and network operations tooling.'],
    ['Streaming Systems', 'Flussonic, Emby/Jellyfin, Live TV, VOD, HLS/M3U routing, token auth, playlist generation, and media server workflow design.'],
    ['PHP Platforms', 'Production-style PHP panels, API backends, file servers, auth services, dashboards, and fast single-page tools for operators.'],
    ['Infrastructure', 'Linux automation, NGINX/RTMP, Apache/PHP, UFW, DNS, proxy services, Speedtest endpoints, and repeatable server deployment scripts.'],
];

$skills = [
    'Backend & Logic' => ['PHP', 'Python', 'Shell', 'REST APIs', 'MySQL', 'Automation'],
    'Network & ISP' => ['MikroTik', 'RouterOS', 'Radius', 'PPPoE', 'BGP', 'QoS/PCQ'],
    'Streaming & Media' => ['Flussonic', 'Emby', 'Jellyfin', 'HLS', 'M3U', 'IPTV'],
    'Frontend & UI' => ['HTML', 'CSS', 'JavaScript', 'Responsive UI', 'Dashboards', 'Operator Tools'],
];

// UPDATED: Carefully curated from your provided list to showcase your best infrastructure & UI work
$featuredRepos = [
    repo('Flussonic-Media-Servers', 'https://github.com/sohag1192/Flussonic-Media-Servers', 'Comprehensive setup and operational configurations for high-concurrency Flussonic streaming and media delivery.', 'Shell', 45, 0, '2026-06-15', ['Flussonic', 'IPTV', 'VOD']),
    repo('Live-Tv-Server', 'https://github.com/sohag1192/Live-Tv-Server', 'Robust architecture for managing, routing, and delivering live IPTV streams with dynamic M3U generation.', 'HTML/PHP', 27, 12, '2026-06-21', ['Live TV', 'Streaming', 'UI']),
    repo('Emby-Home-Swiper-UI', 'https://github.com/sohag1192/Emby-Home-Swiper-UI', 'A modern, touch-optimized, dynamic customizable carousel plugin that completely overhauls the Emby/Jellyfin home screen.', 'JavaScript', 51, 6, '2026-02-11', ['Emby', 'Jellyfin', 'UI']),
    repo('MikroTik-Script-Generator', 'https://github.com/sohag1192/MikroTik-Script-Generator', 'Automated web-based toolset to rapidly deploy complex RouterOS configs for QoS, VLANs, Mangle rules, and routing.', 'HTML', 5, 3, '2026-02-17', ['MikroTik', 'RouterOS', 'Automation']),
    repo('NGINX-RTMP-Scripts', 'https://github.com/sohag1192/NGINX-with-the-RTMP-module-and-configures-scripts', 'Automated deployment scripts for configuring NGINX with RTMP modules for robust live video streaming.', 'Shell', 12, 4, '2025-11-04', ['NGINX', 'RTMP', 'Linux']),
    repo('Streaming-Platform-Webpage', 'https://github.com/sohag1192/Streaming-Platform-Webpage', 'High-fidelity frontend UI customized specifically for VOD and Live TV streaming catalogs and user management.', 'HTML/CSS', 8, 2, '2026-06-10', ['Web UI', 'Streaming', 'Frontend']),
    repo('MikroTik-Netwatch-script', 'https://github.com/sohag1192/MikroTik-Netwatch-script', 'Advanced Netwatch scripts for RouterOS to monitor ISP uplinks and trigger automated failover routing.', 'RouterOS', 6, 1, '2026-01-22', ['MikroTik', 'Netwatch', 'Failover']),
    repo('System-Cleanup-Script', 'https://github.com/sohag1192/System-Cleanup-Script', 'Operational shell scripts for deep Linux system cleanup, log rotation, and server maintenance automation.', 'Shell', 10, 10, '2026-06-16', ['Shell', 'ServerOps', 'Linux']),
];

$recentWork = [
    'rootbd.xyz portfolio refresh & deployment',
    'Streaming Platform Webpage UI updates',
    'Live TV server and Flussonic architecture',
    'MikroTik script generators & Netwatch failovers',
    'NGINX RTMP and server infrastructure deployments',
];

$stats = [
    ['label' => 'Public repositories', 'value' => $profile['repos']],
    ['label' => 'GitHub followers', 'value' => $profile['followers']],
    ['label' => 'Featured projects', 'value' => count($featuredRepos)],
    ['label' => 'Core domains', 'value' => count($focusAreas)],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= e($profile['summary']); ?>">
    <meta name="theme-color" content="#030712">
    <title><?= e($profile['name']); ?> | PHP, ISP Automation & Streaming Systems</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Color Palette */
            --bg-main: #030712;
            --bg-surface: #111827;
            --bg-surface-hover: #1f2937;
            --primary: #10b981; /* Emerald Green */
            --secondary: #0ea5e9; /* Sky Blue */
            --accent: #8b5cf6; /* Violet */
            --text-bright: #f9fafb;
            --text-main: #d1d5db;
            --text-muted: #9ca3af;
            --border: rgba(255, 255, 255, 0.08);
            --border-hover: rgba(16, 185, 129, 0.3);
            
            /* Sizing & Effects */
            --radius-md: 12px;
            --radius-lg: 24px;
            --shadow-glow: 0 0 20px rgba(16, 185, 129, 0.15);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Base Reset & Styling */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        
        ::selection {
            background: rgba(16, 185, 129, 0.3);
            color: var(--text-bright);
        }

        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: var(--bg-main); }
        ::-webkit-scrollbar-thumb { background: #374151; border-radius: 5px; }
        ::-webkit-scrollbar-thumb:hover { background: #4b5563; }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-main);
            background-image: 
                radial-gradient(circle at 15% 0%, rgba(16, 185, 129, 0.08), transparent 40vw),
                radial-gradient(circle at 85% 30%, rgba(14, 165, 233, 0.08), transparent 40vw);
            color: var(--text-main);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }

        a { color: inherit; transition: var(--transition); }
        img { max-width: 100%; display: block; }
        
        .wrap {
            width: min(1200px, calc(100% - 40px));
            margin: 0 auto;
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .animate-in { animation: fadeInUp 0.8s ease backwards; }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }

        /* Floating Navigation */
        .nav-wrapper {
            position: fixed;
            top: 20px;
            left: 0;
            width: 100%;
            z-index: 50;
            display: flex;
            justify-content: center;
            pointer-events: none;
        }

        .nav {
            pointer-events: auto;
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--border);
            border-radius: 100px;
            padding: 10px 24px;
            display: flex;
            align-items: center;
            gap: 40px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            font-weight: 800;
            color: var(--text-bright);
            font-size: 1.1rem;
        }

        .brand-mark {
            width: 32px;
            height: 32px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            color: var(--bg-main);
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            font-size: 0.85rem;
        }

        .nav-links { display: flex; gap: 24px; }
        .nav-links a { text-decoration: none; color: var(--text-muted); font-weight: 500; font-size: 0.95rem; }
        .nav-links a:hover { color: var(--text-bright); transform: translateY(-1px); }

        /* Buttons */
        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            border-radius: var(--radius-md);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            border: 1px solid var(--border);
            background: rgba(255, 255, 255, 0.03);
            color: var(--text-bright);
            cursor: pointer;
        }

        .button:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--border-hover);
            transform: translateY(-2px);
        }

        .button.primary {
            background: linear-gradient(270deg, var(--primary), var(--secondary), var(--accent));
            background-size: 200% 200%;
            animation: gradientMove 6s ease infinite;
            border: none;
            color: #fff;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .button.primary:hover {
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.5);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero { min-height: 100vh; display: flex; align-items: center; padding: 120px 0 60px; }
        .hero-grid { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 60px; align-items: center; }

        .eyebrow {
            display: inline-flex; align-items: center; padding: 6px 14px;
            border: 1px solid rgba(16, 185, 129, 0.2); border-radius: 100px;
            color: var(--primary); background: rgba(16, 185, 129, 0.05);
            font-weight: 600; font-size: 0.85rem; margin-bottom: 24px;
        }

        h1, h2, h3 { color: var(--text-bright); line-height: 1.2; }
        h1 {
            font-size: clamp(3rem, 6vw, 5rem); font-weight: 900; letter-spacing: -0.02em; margin-bottom: 24px;
            background: linear-gradient(to right, #fff, #9ca3af); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }

        .lead { font-size: clamp(1.1rem, 2vw, 1.25rem); color: var(--text-muted); margin-bottom: 40px; max-width: 90%; }
        .hero-actions { display: flex; flex-wrap: wrap; gap: 16px; margin-bottom: 48px; }

        /* Metrics */
        .metric-row { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
        .metric { padding: 20px; border-radius: var(--radius-md); background: var(--bg-surface); border: 1px solid var(--border); transition: var(--transition); }
        .metric:hover { border-color: var(--border-hover); transform: translateY(-3px); box-shadow: var(--shadow-glow); }
        .metric strong { display: block; font-size: 2rem; font-weight: 800; color: var(--primary); margin-bottom: 4px; }
        .metric span { font-size: 0.85rem; font-weight: 500; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em; }

        /* Profile Card */
        .profile-card {
            background: var(--bg-surface); border: 1px solid var(--border); border-radius: var(--radius-lg);
            padding: 32px; position: relative; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }
        .profile-card::before {
            content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .avatar { width: 120px; height: 120px; border-radius: 50%; border: 4px solid var(--bg-main); box-shadow: 0 0 0 2px var(--border); margin-bottom: 24px; }
        .profile-card h2 { font-size: 1.5rem; margin-bottom: 12px; }
        .profile-card p { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 24px; }

        .terminal { background: #000; border-radius: 8px; border: 1px solid #333; overflow: hidden; }
        .terminal-head { background: #111; padding: 8px 16px; font-size: 0.8rem; color: #888; border-bottom: 1px solid #333; display: flex; align-items: center; gap: 8px; }
        .terminal-head::before {
            content: ''; display: block; width: 10px; height: 10px; border-radius: 50%;
            background: #ef4444; box-shadow: 16px 0 0 #eab308, 32px 0 0 #22c55e;
        }
        .terminal pre { padding: 16px; color: #a7f3d0; font-family: 'Fira Code', 'Courier New', monospace; font-size: 0.85rem; overflow-x: auto; }

        /* Sections */
        section { padding: 100px 0; }
        .section-head { display: flex; align-items: flex-end; justify-content: space-between; gap: 40px; margin-bottom: 60px; }
        .section-head h2 { font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; margin-top: 12px; }
        .section-head p { max-width: 500px; color: var(--text-muted); margin: 0; }

        /* Grids & Cards */
        .grid-4 { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; }
        .card { background: var(--bg-surface); border: 1px solid var(--border); border-radius: var(--radius-md); padding: 32px; transition: var(--transition); height: 100%; }
        .card:hover { transform: translateY(-5px); border-color: var(--border-hover); box-shadow: var(--shadow-glow); background: var(--bg-surface-hover); }
        .card .number { display: inline-flex; align-items: center; justify-content: center; width: 48px; height: 48px; border-radius: 12px; background: rgba(16, 185, 129, 0.1); color: var(--primary); font-size: 1.25rem; font-weight: 800; margin-bottom: 24px; }
        .card h3 { font-size: 1.25rem; margin-bottom: 12px; }
        .card p { color: var(--text-muted); font-size: 0.95rem; }

        /* Skills */
        .skills-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; }
        .skill-box h3 { margin-bottom: 20px; font-size: 1.1rem; color: var(--text-bright); }
        .tags { display: flex; flex-wrap: wrap; gap: 10px; }
        .tag { padding: 6px 14px; background: rgba(255, 255, 255, 0.05); border: 1px solid var(--border); border-radius: 100px; font-size: 0.85rem; font-weight: 500; color: var(--text-main); transition: var(--transition); }
        .tag:hover { background: rgba(16, 185, 129, 0.1); border-color: var(--primary); color: var(--primary); }

        /* Repositories */
        .repos-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 24px; }
        .repo-card { background: var(--bg-surface); border: 1px solid var(--border); border-radius: var(--radius-md); padding: 32px; display: flex; flex-direction: column; transition: var(--transition); }
        .repo-card:hover { transform: translateY(-5px); border-color: rgba(14, 165, 233, 0.3); box-shadow: 0 10px 30px rgba(14, 165, 233, 0.1); background: var(--bg-surface-hover); }
        .repo-top { display: flex; justify-content: space-between; align-items: flex-start; gap: 16px; margin-bottom: 20px; }
        .repo-card h3 { font-size: 1.25rem; margin-bottom: 8px; }
        .repo-card h3 a { text-decoration: none; }
        .repo-card h3 a::after { content: ' ↗'; font-size: 0.9em; opacity: 0; transition: var(--transition); }
        .repo-card:hover h3 a::after { opacity: 1; color: var(--secondary); }
        .repo-card p { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 24px; flex-grow: 1; }
        
        .lang-badge {
            background: rgba(245, 158, 11, 0.1); color: #fbbf24; border: 1px solid rgba(245, 158, 11, 0.2);
            padding: 4px 12px; border-radius: 100px; font-size: 0.75rem; font-weight: 700; white-space: nowrap;
        }

        .repo-meta { margin-top: 24px; padding-top: 20px; border-top: 1px solid var(--border); display: flex; gap: 16px; font-size: 0.85rem; color: var(--text-muted); font-weight: 500; }

        /* Layout & Lists */
        .split-section { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
        .work-list { list-style: none; display: flex; flex-direction: column; gap: 12px; }
        .work-list li {
            padding: 20px 24px; background: var(--bg-surface); border: 1px solid var(--border); border-radius: var(--radius-md);
            font-weight: 500; display: flex; align-items: center; gap: 12px; transition: var(--transition);
        }
        .work-list li::before { content: ''; width: 8px; height: 8px; border-radius: 50%; background: var(--primary); box-shadow: 0 0 10px var(--primary); }
        .work-list li:hover { transform: translateX(10px); border-color: var(--border-hover); }

        /* Contact Panel */
        .contact-panel {
            background: linear-gradient(145deg, var(--bg-surface), #0a0f18); border: 1px solid var(--border); border-radius: var(--radius-lg);
            padding: 60px; display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; position: relative; overflow: hidden;
        }
        .contact-panel::after {
            content: ''; position: absolute; right: 0; bottom: 0; width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.1), transparent 70%); pointer-events: none;
        }
        .contact-links { display: grid; gap: 16px; }
        .contact-links a {
            display: flex; align-items: center; justify-content: space-between; padding: 16px 24px;
            background: rgba(0,0,0,0.2); border: 1px solid var(--border); border-radius: var(--radius-md); font-weight: 600; text-decoration: none;
        }
        .contact-links a:hover { background: rgba(255,255,255,0.05); border-color: var(--primary); transform: scale(1.02); color: var(--text-bright); }

        /* Footer */
        footer { padding: 40px 0; border-top: 1px solid var(--border); text-align: center; color: var(--text-muted); font-size: 0.9rem; margin-top: 60px; }

        /* Responsive */
        @media (max-width: 1024px) {
            .hero-grid, .split-section, .contact-panel { grid-template-columns: 1fr; gap: 40px; }
            .section-head { flex-direction: column; align-items: flex-start; gap: 20px; }
            .contact-panel { padding: 40px 24px; }
        }
        @media (max-width: 768px) {
            .nav-wrapper { top: auto; bottom: 20px; }
            .nav { padding: 12px 20px; gap: 20px; width: 90%; justify-content: space-between; overflow-x: auto; }
            .brand span:last-child { display: none; }
            h1 { font-size: 2.5rem; }
            .metric-row { grid-template-columns: repeat(2, 1fr); }
            section { padding: 60px 0; }
        }
    </style>
</head>
<body>
    <div class="nav-wrapper">
        <nav class="nav animate-in">
            <a class="brand" href="#top" aria-label="Home">
                <span class="brand-mark">SR</span>
                <span><?= e($profile['name']); ?></span>
            </a>
            <div class="nav-links" aria-label="Primary navigation">
                <a href="#focus">Focus</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
        </nav>
    </div>

    <main id="top">
        <header class="hero">
            <div class="wrap hero-grid">
                <div class="animate-in delay-1">
                    <span class="eyebrow">
                        <span style="display:inline-block; width:8px; height:8px; background:var(--primary); border-radius:50%; margin-right:8px; box-shadow: 0 0 10px var(--primary);"></span>
                        Available for work &middot; @<?= e($profile['handle']); ?>
                    </span>
                    <h1><?= e($profile['name']); ?></h1>
                    <p class="lead"><?= e($profile['title']); ?>. <?= e($profile['summary']); ?></p>
                    <div class="hero-actions">
                        <a class="button primary" href="<?= e($profile['github']); ?>" target="_blank" rel="noopener">Explore GitHub</a>
                        <a class="button" href="<?= e($profile['telegram']); ?>" target="_blank" rel="noopener">Message Telegram</a>
                        <a class="button" href="#projects">View Projects</a>
                    </div>
                    <div class="metric-row">
                        <?php foreach ($stats as $stat): ?>
                            <div class="metric">
                                <strong><?= e($stat['value']); ?></strong>
                                <span><?= e($stat['label']); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <aside class="profile-card animate-in delay-2" aria-label="GitHub profile summary">
                    <img class="avatar" src="<?= e($profile['avatar']); ?>" alt="<?= e($profile['name']); ?>">
                    <h2><?= e($profile['title']); ?></h2>
                    <p>Building high-performance network tooling and media infrastructure.</p>
                    <div class="terminal">
                        <div class="terminal-head">
                            <span style="letter-spacing:1px; margin-left:12px;">~/profile.php</span>
                        </div>
                        <pre>$focus = ['ISP Automation', 'Streaming', 'PHP'];
$repos = <?= e($profile['repos']); ?>;
$status = 'Online';
$updated = '<?= e($profile['github_updated']); ?>';
> Executing build...</pre>
                    </div>
                </aside>
            </div>
        </header>

        <section id="focus">
            <div class="wrap">
                <div class="section-head animate-in delay-3">
                    <div>
                        <span class="eyebrow">Engineering Focus</span>
                        <h2>Systems that operators can trust.</h2>
                    </div>
                    <p>Built around practical ISP, media, and server workflows: provision faster, stream reliably, monitor clearly, and automate repeatable work.</p>
                </div>

                <div class="grid-4">
                    <?php foreach ($focusAreas as $index => $area): ?>
                        <article class="card">
                            <span class="number">0<?= e($index + 1); ?></span>
                            <h3><?= e($area[0]); ?></h3>
                            <p><?= e($area[1]); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="skills">
            <div class="wrap">
                <div class="section-head">
                    <div>
                        <span class="eyebrow">Tech Stack</span>
                        <h2>PHP plus infrastructure depth.</h2>
                    </div>
                    <p>The strongest work here sits where web dashboards meet real network and streaming operations.</p>
                </div>

                <div class="skills-grid">
                    <?php foreach ($skills as $group => $items): ?>
                        <div class="card skill-box">
                            <h3><?= e($group); ?></h3>
                            <div class="tags">
                                <?php foreach ($items as $item): ?>
                                    <span class="tag"><?= e($item); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="projects">
            <div class="wrap">
                <div class="section-head">
                    <div>
                        <span class="eyebrow">Selected Work</span>
                        <h2>Featured repositories.</h2>
                    </div>
                    <p>Selected from <?= e($profile['repos']); ?> public repositories, linking directly to current GitHub source code.</p>
                </div>

                <div class="repos-grid">
                    <?php foreach ($featuredRepos as $repo): ?>
                        <article class="repo-card">
                            <div class="repo-top">
                                <div>
                                    <h3><a href="<?= e($repo['url']); ?>" target="_blank" rel="noopener"><?= e($repo['name']); ?></a></h3>
                                </div>
                                <span class="lang-badge"><?= e($repo['language']); ?></span>
                            </div>
                            <p><?= e($repo['description']); ?></p>
                            <div class="tags">
                                <?php foreach ($repo['tags'] as $tag): ?>
                                    <span class="tag"><?= e($tag); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="repo-meta">
                                <span>⭐ <?= e($repo['stars']); ?></span>
                                <span>🍴 <?= e($repo['forks']); ?></span>
                                <span style="margin-left:auto;">Updated <?= e($repo['updated']); ?></span>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="activity">
            <div class="wrap split-section">
                <div>
                    <span class="eyebrow">Recent Activity</span>
                    <h2>Active across streaming, ISP tools, and PHP.</h2>
                    <p class="lead" style="margin-top:20px;">The newest GitHub activity shows a strong run of portfolio, Emby/Jellyfin UI, Live TV server, Flussonic, and MikroTik tooling updates.</p>
                    <a class="button" href="<?= e($profile['github']); ?>?tab=repositories" target="_blank" rel="noopener">
                        Browse all <?= e($profile['repos']); ?> repositories &rarr;
                    </a>
                </div>
                <ul class="work-list">
                    <?php foreach ($recentWork as $work): ?>
                        <li><?= e($work); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <section id="contact">
            <div class="wrap">
                <div class="contact-panel">
                    <div>
                        <span class="eyebrow">Open for collaboration</span>
                        <h2>Streaming and ISP systems need sharp execution.</h2>
                        <p class="lead" style="margin-top:20px;">For PHP dashboards, Flussonic/Emby work, MikroTik automation, billing flows, or server setup, reach out through the active channels.</p>
                    </div>
                    <div class="contact-links">
                        <a href="<?= e($profile['github']); ?>" target="_blank" rel="noopener">
                            <span>GitHub</span> <span>@<?= e($profile['handle']); ?> &rarr;</span>
                        </a>
                        <a href="<?= e($profile['telegram']); ?>" target="_blank" rel="noopener">
                            <span>Telegram</span> <span>Md_Sohag_Rana &rarr;</span>
                        </a>
                        <a href="<?= e($profile['telegram_alt']); ?>" target="_blank" rel="noopener">
                            <span>Telegram (Alt)</span> <span>Flussonics &rarr;</span>
                        </a>
                        <a href="<?= e($profile['website']); ?>" target="_blank" rel="noopener">
                            <span>Website</span> <span>rootbd.xyz &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="wrap">
            &copy; <?= date('Y'); ?> <?= e($profile['name']); ?>. Engineered with PHP, HTML5, and Modern CSS.
        </div>
    </footer>
</body>
</html>