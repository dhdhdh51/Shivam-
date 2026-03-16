<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Vasanth — Soul of Indian Fashion</title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,800;1,400;1,600&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=Kalam:wght@300;400&display=swap" rel="stylesheet"/>
<style>
  :root {
    --cream: #fdf6ec;
    --beige: #f0e6d3;
    --warm-orange: #e8864a;
    --soft-orange: #f4a96a;
    --terracotta: #c96a3a;
    --earthy-green: #7a9e7e;
    --sage: #a8c5a0;
    --deep-brown: #3d2b1f;
    --warm-brown: #8b5e3c;
    --gold: #d4a043;
    --soft-gold: #f0c870;
    --dusty-rose: #e8b4a0;
    --muted-teal: #6b9ea0;
    --text-dark: #2c1810;
    --text-mid: #5a3d2b;
    --text-light: #9b7b5e;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  html { scroll-behavior: smooth; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--cream);
    color: var(--text-dark);
    overflow-x: hidden;
  }

  /* ─── PARTICLES ─── */
  #particles-canvas {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    pointer-events: none;
    z-index: 0;
    opacity: 0.55;
  }

  /* ─── NAVBAR ─── */
  nav {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    padding: 16px 48px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(253, 246, 236, 0.55);
    backdrop-filter: blur(18px) saturate(1.6);
    -webkit-backdrop-filter: blur(18px) saturate(1.6);
    border-bottom: 1px solid rgba(212, 160, 67, 0.18);
    transition: background 0.4s;
  }
  .nav-logo {
    font-family: 'Playfair Display', serif;
    font-size: 1.65rem;
    font-weight: 800;
    color: var(--terracotta);
    letter-spacing: -0.5px;
    text-decoration: none;
  }
  .nav-logo span { color: var(--gold); }
  .nav-links {
    display: flex;
    gap: 36px;
    list-style: none;
  }
  .nav-links a {
    font-size: 0.9rem;
    font-weight: 400;
    color: var(--text-mid);
    text-decoration: none;
    letter-spacing: 0.3px;
    transition: color 0.25s;
    position: relative;
  }
  .nav-links a::after {
    content: '';
    position: absolute;
    bottom: -3px; left: 0;
    width: 0; height: 1.5px;
    background: var(--warm-orange);
    transition: width 0.3s;
  }
  .nav-links a:hover { color: var(--warm-orange); }
  .nav-links a:hover::after { width: 100%; }
  .nav-actions {
    display: flex;
    gap: 16px;
    align-items: center;
  }
  .nav-cart {
    position: relative;
    cursor: pointer;
    font-size: 1.3rem;
    color: var(--text-mid);
    transition: transform 0.2s;
  }
  .nav-cart:hover { transform: scale(1.15); color: var(--warm-orange); }
  .cart-badge {
    position: absolute;
    top: -6px; right: -8px;
    background: var(--warm-orange);
    color: white;
    font-size: 0.6rem;
    font-weight: 700;
    width: 16px; height: 16px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
  }
  .btn-nav {
    padding: 9px 22px;
    background: var(--terracotta);
    color: white;
    border: none;
    border-radius: 50px;
    font-family: 'DM Sans', sans-serif;
    font-size: 0.85rem;
    font-weight: 500;
    cursor: pointer;
    transition: background 0.25s, transform 0.2s, box-shadow 0.25s;
    box-shadow: 0 4px 14px rgba(201,106,58,0.3);
  }
  .btn-nav:hover {
    background: var(--warm-orange);
    transform: translateY(-1px);
    box-shadow: 0 6px 20px rgba(201,106,58,0.4);
  }

  /* ─── HERO ─── */
  .hero {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    overflow: hidden;
  }
  .hero-bg {
    position: absolute;
    inset: 0;
    z-index: 1;
  }
  /* Sky gradient */
  .hero-sky {
    position: absolute;
    inset: 0;
    background: linear-gradient(
      180deg,
      #fce9d0 0%,
      #f7d5a8 25%,
      #f5c98e 45%,
      #e8b87a 65%,
      #d4956a 80%,
      #c4785a 100%
    );
  }
  /* Sun */
  .hero-sun {
    position: absolute;
    top: 10%;
    right: 20%;
    width: 90px; height: 90px;
    border-radius: 50%;
    background: radial-gradient(circle, #fff5b0 0%, #ffd060 40%, #ffb030 70%, rgba(255,140,20,0) 100%);
    box-shadow: 0 0 60px 20px rgba(255,180,40,0.5);
    animation: sunPulse 4s ease-in-out infinite;
  }
  @keyframes sunPulse {
    0%,100% { box-shadow: 0 0 60px 20px rgba(255,180,40,0.5); transform: scale(1); }
    50% { box-shadow: 0 0 80px 30px rgba(255,180,40,0.65); transform: scale(1.04); }
  }
  /* Clouds */
  .cloud {
    position: absolute;
    background: rgba(255,250,240,0.75);
    border-radius: 50px;
    filter: blur(2px);
    animation: cloudDrift linear infinite;
  }
  .cloud::before, .cloud::after {
    content: '';
    position: absolute;
    background: inherit;
    border-radius: 50%;
  }
  .c1 { width: 160px; height: 44px; top: 14%; left: -180px; animation-duration: 38s; animation-delay: -5s; }
  .c1::before { width: 80px; height: 60px; top: -30px; left: 20px; }
  .c1::after { width: 55px; height: 45px; top: -20px; left: 80px; }
  .c2 { width: 100px; height: 30px; top: 22%; left: -120px; animation-duration: 50s; animation-delay: -18s; opacity: 0.6; }
  .c2::before { width: 55px; height: 44px; top: -22px; left: 15px; }
  .c3 { width: 200px; height: 50px; top: 8%; left: -220px; animation-duration: 45s; animation-delay: -30s; opacity: 0.5; }
  .c3::before { width: 90px; height: 65px; top: -35px; left: 30px; }
  .c3::after { width: 70px; height: 55px; top: -25px; left: 100px; }
  @keyframes cloudDrift {
    from { transform: translateX(0); }
    to { transform: translateX(calc(100vw + 250px)); }
  }
  /* Ground */
  .hero-ground {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 42%;
    background: linear-gradient(180deg, #c4785a 0%, #a85f40 30%, #8b4f30 60%, #7a3f22 100%);
    border-radius: 60% 60% 0 0 / 20px 20px 0 0;
  }
  .hero-ground::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 6px;
    background: linear-gradient(90deg, rgba(255,200,100,0.3) 0%, rgba(255,220,120,0.6) 50%, rgba(255,200,100,0.3) 100%);
    border-radius: 50%;
    filter: blur(2px);
  }
  /* Street cobbles */
  .cobbles {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 90px;
    background-image:
      radial-gradient(ellipse 28px 14px at 50px 30px, rgba(0,0,0,0.12) 80%, transparent 100%),
      radial-gradient(ellipse 28px 14px at 120px 55px, rgba(0,0,0,0.1) 80%, transparent 100%),
      radial-gradient(ellipse 28px 14px at 190px 30px, rgba(0,0,0,0.12) 80%, transparent 100%),
      radial-gradient(ellipse 28px 14px at 260px 55px, rgba(0,0,0,0.1) 80%, transparent 100%),
      radial-gradient(ellipse 28px 14px at 330px 30px, rgba(0,0,0,0.12) 80%, transparent 100%),
      radial-gradient(ellipse 28px 14px at 400px 55px, rgba(0,0,0,0.1) 80%, transparent 100%),
      radial-gradient(ellipse 28px 14px at 470px 30px, rgba(0,0,0,0.12) 80%, transparent 100%),
      radial-gradient(ellipse 28px 14px at 540px 55px, rgba(0,0,0,0.1) 80%, transparent 100%);
    background-repeat: repeat-x;
  }
  /* Buildings */
  .buildings {
    position: absolute;
    bottom: 36%;
    left: 0; right: 0;
    display: flex;
    align-items: flex-end;
    gap: 6px;
    padding: 0 60px;
    height: 200px;
  }
  .building {
    background: linear-gradient(180deg, #e8b87a 0%, #d4956a 100%);
    border-radius: 6px 6px 0 0;
    position: relative;
    flex-shrink: 0;
  }
  .building::after {
    content: '';
    position: absolute;
    top: -10px; left: 10%; right: 10%;
    height: 12px;
    background: var(--terracotta);
    border-radius: 50% 50% 0 0 / 100% 100% 0 0;
  }
  .b1 { width: 70px; height: 130px; background: linear-gradient(180deg, #dba870 0%, #c48060 100%); }
  .b2 { width: 55px; height: 100px; }
  .b3 { width: 90px; height: 160px; background: linear-gradient(180deg, #e4b278 0%, #cc8860 100%); }
  .b4 { width: 60px; height: 115px; }
  .b5 { width: 80px; height: 145px; background: linear-gradient(180deg, #dba870 0%, #c48060 100%); }
  /* Windows on buildings */
  .win {
    position: absolute;
    background: rgba(255,220,130,0.8);
    border-radius: 3px;
    box-shadow: 0 0 6px rgba(255,200,80,0.6);
  }
  /* Shop facade */
  .shop {
    position: absolute;
    bottom: 33%;
    left: 50%;
    transform: translateX(-50%);
    width: 280px;
    z-index: 5;
  }
  .shop-body {
    background: linear-gradient(180deg, #f7e0c0 0%, #edd5a8 100%);
    border-radius: 12px 12px 0 0;
    height: 170px;
    position: relative;
    border: 3px solid #c4845a;
    overflow: hidden;
  }
  .shop-roof {
    height: 30px;
    background: linear-gradient(180deg, #c96a3a 0%, #a84f28 100%);
    border-radius: 8px 8px 0 0;
    margin: 0 -3px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .shop-name {
    font-family: 'Kalam', cursive;
    font-size: 0.75rem;
    color: #fff5e0;
    letter-spacing: 1px;
  }
  .shop-door {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 56px; height: 80px;
    background: linear-gradient(180deg, #8b5e3c 0%, #5a3520 100%);
    border-radius: 28px 28px 0 0;
    border: 2px solid #7a4828;
  }
  .shop-door::after {
    content: '◉';
    position: absolute;
    right: 7px;
    top: 40%;
    font-size: 8px;
    color: #d4a043;
  }
  .shop-window-l, .shop-window-r {
    position: absolute;
    top: 40px;
    width: 55px; height: 55px;
    background: linear-gradient(135deg, rgba(200,230,255,0.5) 0%, rgba(180,215,240,0.3) 100%);
    border: 2px solid #c4845a;
    border-radius: 4px;
  }
  .shop-window-l { left: 18px; }
  .shop-window-r { right: 18px; }
  .shop-awning {
    position: absolute;
    top: -2px; left: -10px; right: -10px;
    height: 22px;
    background: linear-gradient(180deg, #c96a3a 0%, #b05828 100%);
    border-radius: 4px;
    clip-path: polygon(0 0, 100% 0, 95% 100%, 5% 100%);
  }
  /* Hanging banners/cloth */
  .banners-wrap {
    position: absolute;
    top: 28%;
    left: 0; right: 0;
    height: 80px;
    z-index: 6;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    gap: 0;
  }
  .banner-rope {
    position: absolute;
    top: 8px;
    left: 8%;
    right: 8%;
    height: 3px;
    background: linear-gradient(90deg, rgba(100,60,20,0.6) 0%, rgba(80,40,10,0.8) 50%, rgba(100,60,20,0.6) 100%);
    border-radius: 50%;
  }
  .banner {
    width: 38px;
    height: 52px;
    border-radius: 0 0 6px 6px;
    position: relative;
    transform-origin: top center;
    animation: bannerWave ease-in-out infinite alternate;
    margin: 0 2px;
    top: 6px;
    clip-path: polygon(5% 0%, 95% 0%, 100% 90%, 50% 100%, 0% 90%);
  }
  .bn1 { background: linear-gradient(180deg, #e84040 0%, #c02020 100%); animation-duration: 2.1s; animation-delay: 0s; }
  .bn2 { background: linear-gradient(180deg, #e8a020 0%, #c07000 100%); animation-duration: 2.4s; animation-delay: -0.3s; }
  .bn3 { background: linear-gradient(180deg, #2080e8 0%, #0050c0 100%); animation-duration: 2.2s; animation-delay: -0.8s; }
  .bn4 { background: linear-gradient(180deg, #20c040 0%, #009020 100%); animation-duration: 2.6s; animation-delay: -0.2s; }
  .bn5 { background: linear-gradient(180deg, #d020e8 0%, #900095 100%); animation-duration: 2.0s; animation-delay: -0.5s; }
  .bn6 { background: linear-gradient(180deg, #e84040 0%, #c02020 100%); animation-duration: 2.3s; animation-delay: -1.0s; }
  .bn7 { background: linear-gradient(180deg, #e8a020 0%, #c07000 100%); animation-duration: 2.5s; animation-delay: -0.4s; }
  .bn8 { background: linear-gradient(180deg, #2080e8 0%, #0050c0 100%); animation-duration: 2.1s; animation-delay: -0.7s; }
  .bn9 { background: linear-gradient(180deg, #20c040 0%, #009020 100%); animation-duration: 2.4s; animation-delay: -0.1s; }
  .bn10{ background: linear-gradient(180deg, #e8c020 0%, #c09000 100%); animation-duration: 2.2s; animation-delay: -0.6s; }
  @keyframes bannerWave {
    0%   { transform: rotate(-4deg) skewX(-1deg); }
    25%  { transform: rotate(-1deg) skewX(1deg); }
    50%  { transform: rotate(2deg) skewX(-2deg); }
    75%  { transform: rotate(0deg) skewX(2deg); }
    100% { transform: rotate(4deg) skewX(-1deg); }
  }
  /* Hero figure (Ghibli girl) */
  .ghibli-figure {
    position: absolute;
    bottom: 30%;
    right: 22%;
    width: 130px;
    z-index: 8;
    animation: figureFloat 5s ease-in-out infinite;
  }
  @keyframes figureFloat {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
  }
  /* Flower pots / decor near shop */
  .pot {
    position: absolute;
    bottom: 31%;
    z-index: 7;
  }
  .pot-l { left: 32%; }
  .pot-r { right: 30%; }
  /* Trees */
  .tree {
    position: absolute;
    bottom: 35%;
    z-index: 4;
  }
  .tree-l { left: 8%; }
  .tree-r { right: 6%; }
  /* Hero content */
  .hero-content {
    position: relative;
    z-index: 10;
    max-width: 520px;
    padding: 0 0 0 80px;
    margin-top: 80px;
  }
  .hero-eyebrow {
    font-family: 'Kalam', cursive;
    font-size: 1rem;
    color: var(--soft-gold);
    letter-spacing: 2px;
    margin-bottom: 14px;
    opacity: 0;
    animation: fadeUp 0.8s ease forwards 0.4s;
  }
  .hero-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.6rem, 5vw, 3.8rem);
    font-weight: 800;
    line-height: 1.12;
    color: var(--deep-brown);
    margin-bottom: 20px;
    opacity: 0;
    animation: fadeUp 0.9s ease forwards 0.6s;
  }
  .hero-title em {
    font-style: italic;
    color: var(--terracotta);
  }
  .hero-sub {
    font-size: 1.05rem;
    color: var(--text-mid);
    line-height: 1.7;
    margin-bottom: 36px;
    max-width: 380px;
    opacity: 0;
    animation: fadeUp 0.9s ease forwards 0.8s;
  }
  .hero-ctas {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
    opacity: 0;
    animation: fadeUp 0.9s ease forwards 1.0s;
  }
  .btn-primary {
    padding: 14px 32px;
    background: linear-gradient(135deg, var(--terracotta) 0%, var(--warm-orange) 100%);
    color: white;
    border: none;
    border-radius: 50px;
    font-family: 'DM Sans', sans-serif;
    font-size: 0.95rem;
    font-weight: 500;
    cursor: pointer;
    box-shadow: 0 6px 24px rgba(201,106,58,0.4);
    transition: transform 0.25s, box-shadow 0.25s;
    letter-spacing: 0.3px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }
  .btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 32px rgba(201,106,58,0.5);
  }
  .btn-secondary {
    padding: 14px 32px;
    background: rgba(255,255,255,0.45);
    backdrop-filter: blur(10px);
    color: var(--deep-brown);
    border: 1.5px solid rgba(61,43,31,0.25);
    border-radius: 50px;
    font-family: 'DM Sans', sans-serif;
    font-size: 0.95rem;
    font-weight: 500;
    cursor: pointer;
    transition: background 0.25s, transform 0.25s;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }
  .btn-secondary:hover {
    background: rgba(255,255,255,0.7);
    transform: translateY(-3px);
  }
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  /* Scroll indicator */
  .scroll-hint {
    position: absolute;
    bottom: 32px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    opacity: 0;
    animation: fadeUp 1s ease forwards 1.6s;
  }
  .scroll-hint span {
    font-size: 0.7rem;
    letter-spacing: 2px;
    color: var(--text-mid);
    text-transform: uppercase;
  }
  .scroll-mouse {
    width: 22px; height: 34px;
    border: 2px solid var(--warm-brown);
    border-radius: 11px;
    position: relative;
    display: flex;
    justify-content: center;
    padding-top: 6px;
  }
  .scroll-dot {
    width: 4px; height: 7px;
    background: var(--warm-orange);
    border-radius: 2px;
    animation: scrollDot 1.5s ease-in-out infinite;
  }
  @keyframes scrollDot {
    0% { transform: translateY(0); opacity: 1; }
    80% { transform: translateY(12px); opacity: 0; }
    100% { transform: translateY(0); opacity: 0; }
  }

  /* ─── SECTION COMMON ─── */
  section { position: relative; z-index: 2; }
  .container { max-width: 1200px; margin: 0 auto; padding: 0 48px; }
  .section-label {
    font-family: 'Kalam', cursive;
    font-size: 0.85rem;
    letter-spacing: 2.5px;
    color: var(--soft-orange);
    text-transform: uppercase;
    margin-bottom: 10px;
  }
  .section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.8rem, 3.5vw, 2.7rem);
    font-weight: 700;
    color: var(--deep-brown);
    line-height: 1.2;
    margin-bottom: 14px;
  }
  .section-sub {
    font-size: 1rem;
    color: var(--text-light);
    line-height: 1.7;
    max-width: 500px;
  }
  .section-header { margin-bottom: 52px; }

  /* ─── MARQUEE STRIP ─── */
  .marquee-strip {
    background: var(--terracotta);
    padding: 12px 0;
    overflow: hidden;
    position: relative;
    z-index: 3;
  }
  .marquee-inner {
    display: flex;
    gap: 48px;
    animation: marquee 22s linear infinite;
    white-space: nowrap;
  }
  .marquee-inner span {
    font-family: 'Kalam', cursive;
    font-size: 0.85rem;
    color: rgba(255,245,220,0.9);
    letter-spacing: 1px;
    flex-shrink: 0;
  }
  .marquee-dot {
    color: var(--soft-gold);
    font-size: 1.2rem;
    flex-shrink: 0;
    display: inline-block;
    margin: 0 4px;
  }
  @keyframes marquee {
    from { transform: translateX(0); }
    to   { transform: translateX(-50%); }
  }

  /* ─── CATEGORIES ─── */
  .categories-section { padding: 100px 0 80px; background: var(--cream); }
  .categories-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
  }
  .cat-card {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    cursor: pointer;
    aspect-ratio: 3/4;
    transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
    box-shadow: 0 8px 28px rgba(61,43,31,0.12);
  }
  .cat-card:hover { transform: translateY(-8px) scale(1.02); }
  .cat-bg {
    position: absolute;
    inset: 0;
    transition: transform 0.5s ease;
  }
  .cat-card:hover .cat-bg { transform: scale(1.06); }
  .cat-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(0,0,0,0) 30%, rgba(61,30,15,0.75) 100%);
  }
  .cat-info {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    padding: 20px 16px 16px;
    color: white;
  }
  .cat-icon { font-size: 1.5rem; margin-bottom: 6px; }
  .cat-name {
    font-family: 'Playfair Display', serif;
    font-size: 1rem;
    font-weight: 700;
    margin-bottom: 3px;
  }
  .cat-count { font-size: 0.75rem; opacity: 0.8; }
  /* Category illustrations using CSS */
  .cat-men    { background: linear-gradient(145deg, #d4956a 0%, #a86048 100%); }
  .cat-women  { background: linear-gradient(145deg, #e8a0a0 0%, #d06060 100%); }
  .cat-kids   { background: linear-gradient(145deg, #a8d0a0 0%, #68a858 100%); }
  .cat-ethnic { background: linear-gradient(145deg, #e8c060 0%, #c09030 100%); }
  .cat-street { background: linear-gradient(145deg, #80a8c8 0%, #4878a0 100%); }
  .cat-figure { font-size: 4rem; display: flex; align-items: center; justify-content: center; height: 100%; }

  /* ─── PRODUCTS ─── */
  .products-section { padding: 80px 0 100px; background: linear-gradient(180deg, var(--cream) 0%, #f7ead8 100%); }
  .products-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
  }
  .product-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba
