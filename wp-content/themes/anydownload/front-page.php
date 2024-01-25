<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package anydownload
 */

get_header();
?>
    <header class="pb-8 pb-lg-20">
        <nav class="navbar navbar-light navbar-expand-lg" id="header">
            <div class="container-fluid">
                <a class="navbar-brand h4 text-decoration-none" href="/">
                    All in One Video Downloader            </a>
                <div class="d-lg-none">
                    <button class="btn btn-sm navbar-burger">
                        <svg class="d-block" width="16" height="16" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Mobile Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul id="header-menu" class="navbar-nav ms-auto me-4" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                        <li  id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page header-menu menu-item-55 nav-item">
                            <a itemprop="url" href="/" class="nav-link">
                                <span itemprop="name">Demo</span>
                            </a>
                        </li>
                        <li  id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page header-menu menu-item-54 nav-item">
                            <a itemprop="url" href="/" class="nav-link">
                                <span itemprop="name">Buy Now</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-8">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                    <h1 class="mt-8 mb-8 mb-lg-12">
                        Free Video Downloader
                    </h1>
                    <h2 class="lead mb-8 mb-lg-12">
                        Fast and free all in one video downloader
                    </h2>
                    <div class="alert alert-warning" role="alert" id="alert" style="display: none"></div>
                    <div class="d-flex flex-wrap" id="download-form">
                        <input id="url" type="url" name="url" class="form-control w-100"
                               placeholder="Paste a video URL"
                               aria-label="Paste a video URL">
                        <input id="token" type="hidden" name="token" value="eea5b087e8c18fd69fab0ab13e09fe1d1530659352cc35fdbb42ff62647dd3c9">
                        <button class="mt-4 btn btn-primary btn-block me-4"  id="downloadBtn">
                            Download                        </button>
                        <button class="mt-4 btn btn-secondary btn-block me-4"
                                id="pasteBtn">Paste from clipboard
                        </button>
                    </div>
                    <div class="mt-1"></div>
                </div>
                <div class="col-12 col-lg-6 position-relative d-none d-lg-flex">
                    <img class="d-none d-lg-block position-absolute top-0 end-0 mt-5"
                         src="https://aiodown.com/wp-content/themes/aiodl-default/assets/icons/dots/yellow-dot-right-shield.svg" alt="">
                    <img class="position-relative img-fluid"
                         src="https://aiodown.com/wp-content/themes/aiodl-default/assets/images/header.webp"
                         alt="">
                    <img class="d-none d-lg-block position-absolute bottom-0 start-0 mb-5"
                         src="https://aiodown.com/wp-content/themes/aiodl-default/assets/icons/dots/blue-dot-left-bars-2.svg" alt="">
                </div>
            </div>
        </div>
        <div class="d-none navbar-menu position-relative">
            <div class="navbar-backdrop position-fixed top-0 start-0 end-0 bottom-0 bg-dark" style="opacity: 75%;"></div>
            <nav class="position-fixed top-0 start-0 bottom-0 d-flex flex-column w-75 max-w-sm py-6 px-6 bg-white overflow-auto">
                <div class="d-flex align-items-center mb-10">
                    <a class="me-auto h4 mb-0 text-decoration-none" href="/">
                        All in One Video Downloader
                    </a>
                    <button class="navbar-close btn-close" type="button" aria-label="Close"></button>
                </div>
                <div class="menu-header-container">
                    <ul id="mobile-menu" class="nav flex-column" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                        <li  class="menu-item menu-item-type-post_type menu-item-object-page mobile-menu menu-item-55 nav-item"><a itemprop="url" href="https://aiodown.com/admin-demo/" class="nav-link"><span itemprop="name">Admin Demo</span></a></li>
                        <li  class="menu-item menu-item-type-post_type menu-item-object-page mobile-menu menu-item-54 nav-item"><a itemprop="url" href="https://aiodown.com/buy-video-downloader-script/" class="nav-link"><span itemprop="name">Download Now</span></a></li>
                        <li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown mobile-menu menu-item-23 nav-item">
                            <a href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle" id="menu-item-dropdown-23"><span itemprop="name">Theme Switch</span></a>
                            <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-23">
                                <li  class="menu-item menu-item-type-custom menu-item-object-custom mobile-menu menu-item-24 nav-item"><a itemprop="url" href="https://aiodown.com/?theme-switch=aiodl-default&#038;utm_source=demo&#038;utm_medium=theme_switch&#038;utm_campaign=default_theme" class="dropdown-item"><span itemprop="name">Default (Built-in)</span></a></li>
                                <li  class="menu-item menu-item-type-custom menu-item-object-custom mobile-menu menu-item-25 nav-item"><a itemprop="url" href="https://aiodown.com/?theme-switch=aiodl-renk&#038;utm_source=demo&#038;utm_medium=theme_switch&#038;utm_campaign=renk_theme" class="dropdown-item"><span itemprop="name">Renk (Paid)</span></a></li>
                                <li  class="menu-item menu-item-type-custom menu-item-object-custom mobile-menu menu-item-26 nav-item"><a itemprop="url" href="https://aiodown.com/?theme-switch=aiodl-sober&#038;utm_source=demo&#038;utm_medium=theme_switch&#038;utm_campaign=sober_theme" class="dropdown-item"><span itemprop="name">Sober (Paid)</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </header>
<section class="py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 mb-12 mb-lg-0">
                <span class="small text-info fw-bold">How to use?</span>
                <h2 class="mt-8 mb-10">Free video downloader</h2>
                <p class="mb-12 lead text-muted">Easy to use, unlimited and free</p>
                <a class="btn btn-primary" href="#header">Start using</a>
            </div>
            <div class="col-12 col-lg-6">
                <div class="bg-light rounded px-5 px-lg-10">
                    <div class="py-8 border-bottom">
                        <div class="d-flex align-items-end">
                                <span class="me-6 flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle bg-info text-white"
                                      style="width: 48px; height: 48px;">1</span>
                            <div>
                                <p class="text-muted">Copy shareable video URL</p>
                            </div>
                        </div>
                    </div>
                    <div class="py-8 border-bottom">
                        <div class="d-flex align-items-end">
                                <span class="me-6 flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle bg-warning text-white"
                                      style="width: 48px; height: 48px;">2</span>
                            <p class="text-muted">Paste it into the field above</p>
                        </div>
                    </div>
                    <div class="py-8">
                        <div class="d-flex align-items-end">
                                <span class="me-6 flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle bg-danger text-white"
                                      style="width: 48px; height: 48px;">3</span>
                            <div>
                                <p class="text-muted">Click to download button</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- result -->
    <div class="container" id="result" style="display: none">
        <div class="row mb-0">
            <div class="col-12 mb-10 mb-lg-0">
                <h2 class="mt-8 mb-0 text-center">Lỗi Tại Mưa - Voi Bản Đôn | The Masked Singer Vietnam 2023 [Audio Lyric] <small class="text-muted" id="videoDuration">05:54</small></h2>
                <div class="row text-center">
                    <div class="col-md-4 col-sm-12 mt-4"> <img class="position-relative img-fluid rounded w-100" style="object-fit: cover;z-index:-1" src="https://i.ytimg.com/vi/VonSuAoKzpo/mqdefault.jpg" alt="Lỗi Tại Mưa - Voi Bản Đôn | The Masked Singer Vietnam 2023 [Audio Lyric]" title="Lỗi Tại Mưa - Voi Bản Đôn | The Masked Singer Vietnam 2023 [Audio Lyric]"> </div>
                    <div class="col-md-8 col-sm-12 mt-4 p-0">
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MA==" class="btn btn-success btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>360p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 467.968 467.968">
                                <path d="M264.704 96.512H51.2c-28.16 0-51.2 23.04-51.2 51.2v172.544c0 28.16 23.04 51.2 51.2 51.2h213.504c28.16 0 51.2-23.04 51.2-51.2V147.712c0-28.672-23.04-51.2-51.2-51.2zM430.08 124.672c-3.072.512-6.144 2.048-8.704 3.584l-79.872 46.08V293.12l80.384 46.08c14.848 8.704 33.28 3.584 41.984-11.264 2.56-4.608 4.096-9.728 4.096-15.36V154.368c0-18.944-17.92-34.304-37.888-29.696z"></path>
                            </svg>
                            mp4<br>(9.11 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MQ==" class="btn btn-success btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>720p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 467.968 467.968">
                                <path d="M264.704 96.512H51.2c-28.16 0-51.2 23.04-51.2 51.2v172.544c0 28.16 23.04 51.2 51.2 51.2h213.504c28.16 0 51.2-23.04 51.2-51.2V147.712c0-28.672-23.04-51.2-51.2-51.2zM430.08 124.672c-3.072.512-6.144 2.048-8.704 3.584l-79.872 46.08V293.12l80.384 46.08c14.848 8.704 33.28 3.584 41.984-11.264 2.56-4.608 4.096-9.728 4.096-15.36V154.368c0-18.944-17.92-34.304-37.888-29.696z"></path>
                            </svg>
                            mp4<br>(16.11 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=Mg==" class="btn btn-success btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>1080p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 467.968 467.968">
                                <path d="M264.704 96.512H51.2c-28.16 0-51.2 23.04-51.2 51.2v172.544c0 28.16 23.04 51.2 51.2 51.2h213.504c28.16 0 51.2-23.04 51.2-51.2V147.712c0-28.672-23.04-51.2-51.2-51.2zM430.08 124.672c-3.072.512-6.144 2.048-8.704 3.584l-79.872 46.08V293.12l80.384 46.08c14.848 8.704 33.28 3.584 41.984-11.264 2.56-4.608 4.096-9.728 4.096-15.36V154.368c0-18.944-17.92-34.304-37.888-29.696z"></path>
                            </svg>
                            mp4<br>(42.16 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=Mw==" class="btn btn-danger btn-sq btn-dl text-uppercase  mx-1 my-1" target="_blank">
                            <strong>48kbps</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 415.963 415.963">
                                <path d="M328.712 264.539c12.928-21.632 21.504-48.992 23.168-76.064 1.056-17.376-2.816-35.616-11.2-52.768-13.152-26.944-35.744-42.08-57.568-56.704-16.288-10.912-31.68-21.216-42.56-35.936l-1.952-2.624c-6.432-8.64-13.696-18.432-14.848-26.656-1.152-8.32-8.704-14.24-16.96-13.76a15.957 15.957 0 00-14.88 15.936v285.12c-13.408-8.128-29.92-13.12-48-13.12-44.096 0-80 28.704-80 64s35.904 64 80 64 80-28.704 80-64V165.467c24.032 9.184 63.36 32.576 74.176 87.2-2.016 2.976-3.936 6.176-6.176 8.736-5.856 6.624-5.216 16.736 1.44 22.56 6.592 5.888 16.704 5.184 22.56-1.44 4.288-4.864 8.096-10.56 11.744-16.512.384-.448.737-.928 1.056-1.472z"></path>
                            </svg>
                            m4a<br>(2.06 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=NA==" class="btn btn-danger btn-sq btn-dl text-uppercase  mx-1 my-1" target="_blank">
                            <strong>48kbps</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 415.963 415.963">
                                <path d="M328.712 264.539c12.928-21.632 21.504-48.992 23.168-76.064 1.056-17.376-2.816-35.616-11.2-52.768-13.152-26.944-35.744-42.08-57.568-56.704-16.288-10.912-31.68-21.216-42.56-35.936l-1.952-2.624c-6.432-8.64-13.696-18.432-14.848-26.656-1.152-8.32-8.704-14.24-16.96-13.76a15.957 15.957 0 00-14.88 15.936v285.12c-13.408-8.128-29.92-13.12-48-13.12-44.096 0-80 28.704-80 64s35.904 64 80 64 80-28.704 80-64V165.467c24.032 9.184 63.36 32.576 74.176 87.2-2.016 2.976-3.936 6.176-6.176 8.736-5.856 6.624-5.216 16.736 1.44 22.56 6.592 5.888 16.704 5.184 22.56-1.44 4.288-4.864 8.096-10.56 11.744-16.512.384-.448.737-.928 1.056-1.472z"></path>
                            </svg>
                            mp3<br>(2.06 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=NQ==" class="btn btn-danger btn-sq btn-dl text-uppercase  mx-1 my-1" target="_blank">
                            <strong>48kbps</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 415.963 415.963">
                                <path d="M328.712 264.539c12.928-21.632 21.504-48.992 23.168-76.064 1.056-17.376-2.816-35.616-11.2-52.768-13.152-26.944-35.744-42.08-57.568-56.704-16.288-10.912-31.68-21.216-42.56-35.936l-1.952-2.624c-6.432-8.64-13.696-18.432-14.848-26.656-1.152-8.32-8.704-14.24-16.96-13.76a15.957 15.957 0 00-14.88 15.936v285.12c-13.408-8.128-29.92-13.12-48-13.12-44.096 0-80 28.704-80 64s35.904 64 80 64 80-28.704 80-64V165.467c24.032 9.184 63.36 32.576 74.176 87.2-2.016 2.976-3.936 6.176-6.176 8.736-5.856 6.624-5.216 16.736 1.44 22.56 6.592 5.888 16.704 5.184 22.56-1.44 4.288-4.864 8.096-10.56 11.744-16.512.384-.448.737-.928 1.056-1.472z"></path>
                            </svg>
                            webm<br>(2.06 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=Ng==" class="btn btn-danger btn-sq btn-dl text-uppercase  mx-1 my-1" target="_blank">
                            <strong>64kbps</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 415.963 415.963">
                                <path d="M328.712 264.539c12.928-21.632 21.504-48.992 23.168-76.064 1.056-17.376-2.816-35.616-11.2-52.768-13.152-26.944-35.744-42.08-57.568-56.704-16.288-10.912-31.68-21.216-42.56-35.936l-1.952-2.624c-6.432-8.64-13.696-18.432-14.848-26.656-1.152-8.32-8.704-14.24-16.96-13.76a15.957 15.957 0 00-14.88 15.936v285.12c-13.408-8.128-29.92-13.12-48-13.12-44.096 0-80 28.704-80 64s35.904 64 80 64 80-28.704 80-64V165.467c24.032 9.184 63.36 32.576 74.176 87.2-2.016 2.976-3.936 6.176-6.176 8.736-5.856 6.624-5.216 16.736 1.44 22.56 6.592 5.888 16.704 5.184 22.56-1.44 4.288-4.864 8.096-10.56 11.744-16.512.384-.448.737-.928 1.056-1.472z"></path>
                            </svg>
                            webm<br>(2.71 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=Nw==" class="btn btn-danger btn-sq btn-dl text-uppercase  mx-1 my-1" target="_blank">
                            <strong>128kbps</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 415.963 415.963">
                                <path d="M328.712 264.539c12.928-21.632 21.504-48.992 23.168-76.064 1.056-17.376-2.816-35.616-11.2-52.768-13.152-26.944-35.744-42.08-57.568-56.704-16.288-10.912-31.68-21.216-42.56-35.936l-1.952-2.624c-6.432-8.64-13.696-18.432-14.848-26.656-1.152-8.32-8.704-14.24-16.96-13.76a15.957 15.957 0 00-14.88 15.936v285.12c-13.408-8.128-29.92-13.12-48-13.12-44.096 0-80 28.704-80 64s35.904 64 80 64 80-28.704 80-64V165.467c24.032 9.184 63.36 32.576 74.176 87.2-2.016 2.976-3.936 6.176-6.176 8.736-5.856 6.624-5.216 16.736 1.44 22.56 6.592 5.888 16.704 5.184 22.56-1.44 4.288-4.864 8.096-10.56 11.744-16.512.384-.448.737-.928 1.056-1.472z"></path>
                            </svg>
                            webm<br>(5.3 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=OA==" class="btn btn-danger btn-sq btn-dl text-uppercase  mx-1 my-1" target="_blank">
                            <strong>128kbps</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 415.963 415.963">
                                <path d="M328.712 264.539c12.928-21.632 21.504-48.992 23.168-76.064 1.056-17.376-2.816-35.616-11.2-52.768-13.152-26.944-35.744-42.08-57.568-56.704-16.288-10.912-31.68-21.216-42.56-35.936l-1.952-2.624c-6.432-8.64-13.696-18.432-14.848-26.656-1.152-8.32-8.704-14.24-16.96-13.76a15.957 15.957 0 00-14.88 15.936v285.12c-13.408-8.128-29.92-13.12-48-13.12-44.096 0-80 28.704-80 64s35.904 64 80 64 80-28.704 80-64V165.467c24.032 9.184 63.36 32.576 74.176 87.2-2.016 2.976-3.936 6.176-6.176 8.736-5.856 6.624-5.216 16.736 1.44 22.56 6.592 5.888 16.704 5.184 22.56-1.44 4.288-4.864 8.096-10.56 11.744-16.512.384-.448.737-.928 1.056-1.472z"></path>
                            </svg>
                            m4a<br>(5.46 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=OQ==" class="btn btn-danger btn-sq btn-dl text-uppercase  mx-1 my-1" target="_blank">
                            <strong>128kbps</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 415.963 415.963">
                                <path d="M328.712 264.539c12.928-21.632 21.504-48.992 23.168-76.064 1.056-17.376-2.816-35.616-11.2-52.768-13.152-26.944-35.744-42.08-57.568-56.704-16.288-10.912-31.68-21.216-42.56-35.936l-1.952-2.624c-6.432-8.64-13.696-18.432-14.848-26.656-1.152-8.32-8.704-14.24-16.96-13.76a15.957 15.957 0 00-14.88 15.936v285.12c-13.408-8.128-29.92-13.12-48-13.12-44.096 0-80 28.704-80 64s35.904 64 80 64 80-28.704 80-64V165.467c24.032 9.184 63.36 32.576 74.176 87.2-2.016 2.976-3.936 6.176-6.176 8.736-5.856 6.624-5.216 16.736 1.44 22.56 6.592 5.888 16.704 5.184 22.56-1.44 4.288-4.864 8.096-10.56 11.744-16.512.384-.448.737-.928 1.056-1.472z"></path>
                            </svg>
                            mp3<br>(5.46 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MTA=" class="btn btn-info btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>144p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 448.075 448.075">
                                <path d="M352.021 16.075c0-6.08-3.52-11.84-8.96-14.4-5.76-2.88-12.16-1.92-16.96 1.92l-141.76 112.96 167.68 167.68V16.075zM443.349 420.747l-416-416c-6.24-6.24-16.384-6.24-22.624 0s-6.24 16.384 0 22.624l100.672 100.704h-9.376c-9.92 0-18.56 4.48-24.32 11.52-4.8 5.44-7.68 12.8-7.68 20.48v128c0 17.6 14.4 32 32 32h74.24l155.84 124.48c2.88 2.24 6.4 3.52 9.92 3.52 2.24 0 4.8-.64 7.04-1.6 5.44-2.56 8.96-8.32 8.96-14.4v-57.376l68.672 68.672c3.136 3.136 7.232 4.704 11.328 4.704s8.192-1.568 11.328-4.672c6.24-6.272 6.24-16.384 0-22.656z"></path>
                            </svg>
                            mp4<br>(1.5 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MTE=" class="btn btn-info btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>144p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 448.075 448.075">
                                <path d="M352.021 16.075c0-6.08-3.52-11.84-8.96-14.4-5.76-2.88-12.16-1.92-16.96 1.92l-141.76 112.96 167.68 167.68V16.075zM443.349 420.747l-416-416c-6.24-6.24-16.384-6.24-22.624 0s-6.24 16.384 0 22.624l100.672 100.704h-9.376c-9.92 0-18.56 4.48-24.32 11.52-4.8 5.44-7.68 12.8-7.68 20.48v128c0 17.6 14.4 32 32 32h74.24l155.84 124.48c2.88 2.24 6.4 3.52 9.92 3.52 2.24 0 4.8-.64 7.04-1.6 5.44-2.56 8.96-8.32 8.96-14.4v-57.376l68.672 68.672c3.136 3.136 7.232 4.704 11.328 4.704s8.192-1.568 11.328-4.672c6.24-6.272 6.24-16.384 0-22.656z"></path>
                            </svg>
                            webm<br>(2.58 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MTI=" class="btn btn-info btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>240p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 448.075 448.075">
                                <path d="M352.021 16.075c0-6.08-3.52-11.84-8.96-14.4-5.76-2.88-12.16-1.92-16.96 1.92l-141.76 112.96 167.68 167.68V16.075zM443.349 420.747l-416-416c-6.24-6.24-16.384-6.24-22.624 0s-6.24 16.384 0 22.624l100.672 100.704h-9.376c-9.92 0-18.56 4.48-24.32 11.52-4.8 5.44-7.68 12.8-7.68 20.48v128c0 17.6 14.4 32 32 32h74.24l155.84 124.48c2.88 2.24 6.4 3.52 9.92 3.52 2.24 0 4.8-.64 7.04-1.6 5.44-2.56 8.96-8.32 8.96-14.4v-57.376l68.672 68.672c3.136 3.136 7.232 4.704 11.328 4.704s8.192-1.568 11.328-4.672c6.24-6.272 6.24-16.384 0-22.656z"></path>
                            </svg>
                            mp4<br>(2.6 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MTM=" class="btn btn-info btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>240p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 448.075 448.075">
                                <path d="M352.021 16.075c0-6.08-3.52-11.84-8.96-14.4-5.76-2.88-12.16-1.92-16.96 1.92l-141.76 112.96 167.68 167.68V16.075zM443.349 420.747l-416-416c-6.24-6.24-16.384-6.24-22.624 0s-6.24 16.384 0 22.624l100.672 100.704h-9.376c-9.92 0-18.56 4.48-24.32 11.52-4.8 5.44-7.68 12.8-7.68 20.48v128c0 17.6 14.4 32 32 32h74.24l155.84 124.48c2.88 2.24 6.4 3.52 9.92 3.52 2.24 0 4.8-.64 7.04-1.6 5.44-2.56 8.96-8.32 8.96-14.4v-57.376l68.672 68.672c3.136 3.136 7.232 4.704 11.328 4.704s8.192-1.568 11.328-4.672c6.24-6.272 6.24-16.384 0-22.656z"></path>
                            </svg>
                            webm<br>(2.77 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MTQ=" class="btn btn-info btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>360p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 448.075 448.075">
                                <path d="M352.021 16.075c0-6.08-3.52-11.84-8.96-14.4-5.76-2.88-12.16-1.92-16.96 1.92l-141.76 112.96 167.68 167.68V16.075zM443.349 420.747l-416-416c-6.24-6.24-16.384-6.24-22.624 0s-6.24 16.384 0 22.624l100.672 100.704h-9.376c-9.92 0-18.56 4.48-24.32 11.52-4.8 5.44-7.68 12.8-7.68 20.48v128c0 17.6 14.4 32 32 32h74.24l155.84 124.48c2.88 2.24 6.4 3.52 9.92 3.52 2.24 0 4.8-.64 7.04-1.6 5.44-2.56 8.96-8.32 8.96-14.4v-57.376l68.672 68.672c3.136 3.136 7.232 4.704 11.328 4.704s8.192-1.568 11.328-4.672c6.24-6.272 6.24-16.384 0-22.656z"></path>
                            </svg>
                            mp4<br>(5.32 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MTU=" class="btn btn-info btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>360p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 448.075 448.075">
                                <path d="M352.021 16.075c0-6.08-3.52-11.84-8.96-14.4-5.76-2.88-12.16-1.92-16.96 1.92l-141.76 112.96 167.68 167.68V16.075zM443.349 420.747l-416-416c-6.24-6.24-16.384-6.24-22.624 0s-6.24 16.384 0 22.624l100.672 100.704h-9.376c-9.92 0-18.56 4.48-24.32 11.52-4.8 5.44-7.68 12.8-7.68 20.48v128c0 17.6 14.4 32 32 32h74.24l155.84 124.48c2.88 2.24 6.4 3.52 9.92 3.52 2.24 0 4.8-.64 7.04-1.6 5.44-2.56 8.96-8.32 8.96-14.4v-57.376l68.672 68.672c3.136 3.136 7.232 4.704 11.328 4.704s8.192-1.568 11.328-4.672c6.24-6.272 6.24-16.384 0-22.656z"></path>
                            </svg>
                            webm<br>(5.58 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MTY=" class="btn btn-info btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>480p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 448.075 448.075">
                                <path d="M352.021 16.075c0-6.08-3.52-11.84-8.96-14.4-5.76-2.88-12.16-1.92-16.96 1.92l-141.76 112.96 167.68 167.68V16.075zM443.349 420.747l-416-416c-6.24-6.24-16.384-6.24-22.624 0s-6.24 16.384 0 22.624l100.672 100.704h-9.376c-9.92 0-18.56 4.48-24.32 11.52-4.8 5.44-7.68 12.8-7.68 20.48v128c0 17.6 14.4 32 32 32h74.24l155.84 124.48c2.88 2.24 6.4 3.52 9.92 3.52 2.24 0 4.8-.64 7.04-1.6 5.44-2.56 8.96-8.32 8.96-14.4v-57.376l68.672 68.672c3.136 3.136 7.232 4.704 11.328 4.704s8.192-1.568 11.328-4.672c6.24-6.272 6.24-16.384 0-22.656z"></path>
                            </svg>
                            webm<br>(9.2 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MTc=" class="btn btn-info btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>480p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 448.075 448.075">
                                <path d="M352.021 16.075c0-6.08-3.52-11.84-8.96-14.4-5.76-2.88-12.16-1.92-16.96 1.92l-141.76 112.96 167.68 167.68V16.075zM443.349 420.747l-416-416c-6.24-6.24-16.384-6.24-22.624 0s-6.24 16.384 0 22.624l100.672 100.704h-9.376c-9.92 0-18.56 4.48-24.32 11.52-4.8 5.44-7.68 12.8-7.68 20.48v128c0 17.6 14.4 32 32 32h74.24l155.84 124.48c2.88 2.24 6.4 3.52 9.92 3.52 2.24 0 4.8-.64 7.04-1.6 5.44-2.56 8.96-8.32 8.96-14.4v-57.376l68.672 68.672c3.136 3.136 7.232 4.704 11.328 4.704s8.192-1.568 11.328-4.672c6.24-6.272 6.24-16.384 0-22.656z"></path>
                            </svg>
                            mp4<br>(9.85 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MTg=" class="btn btn-info btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>720p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 448.075 448.075">
                                <path d="M352.021 16.075c0-6.08-3.52-11.84-8.96-14.4-5.76-2.88-12.16-1.92-16.96 1.92l-141.76 112.96 167.68 167.68V16.075zM443.349 420.747l-416-416c-6.24-6.24-16.384-6.24-22.624 0s-6.24 16.384 0 22.624l100.672 100.704h-9.376c-9.92 0-18.56 4.48-24.32 11.52-4.8 5.44-7.68 12.8-7.68 20.48v128c0 17.6 14.4 32 32 32h74.24l155.84 124.48c2.88 2.24 6.4 3.52 9.92 3.52 2.24 0 4.8-.64 7.04-1.6 5.44-2.56 8.96-8.32 8.96-14.4v-57.376l68.672 68.672c3.136 3.136 7.232 4.704 11.328 4.704s8.192-1.568 11.328-4.672c6.24-6.272 6.24-16.384 0-22.656z"></path>
                            </svg>
                            webm<br>(14.6 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MTk=" class="btn btn-info btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>720p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 448.075 448.075">
                                <path d="M352.021 16.075c0-6.08-3.52-11.84-8.96-14.4-5.76-2.88-12.16-1.92-16.96 1.92l-141.76 112.96 167.68 167.68V16.075zM443.349 420.747l-416-416c-6.24-6.24-16.384-6.24-22.624 0s-6.24 16.384 0 22.624l100.672 100.704h-9.376c-9.92 0-18.56 4.48-24.32 11.52-4.8 5.44-7.68 12.8-7.68 20.48v128c0 17.6 14.4 32 32 32h74.24l155.84 124.48c2.88 2.24 6.4 3.52 9.92 3.52 2.24 0 4.8-.64 7.04-1.6 5.44-2.56 8.96-8.32 8.96-14.4v-57.376l68.672 68.672c3.136 3.136 7.232 4.704 11.328 4.704s8.192-1.568 11.328-4.672c6.24-6.272 6.24-16.384 0-22.656z"></path>
                            </svg>
                            mp4<br>(19.48 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MjA=" class="btn btn-info btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>1080p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 448.075 448.075">
                                <path d="M352.021 16.075c0-6.08-3.52-11.84-8.96-14.4-5.76-2.88-12.16-1.92-16.96 1.92l-141.76 112.96 167.68 167.68V16.075zM443.349 420.747l-416-416c-6.24-6.24-16.384-6.24-22.624 0s-6.24 16.384 0 22.624l100.672 100.704h-9.376c-9.92 0-18.56 4.48-24.32 11.52-4.8 5.44-7.68 12.8-7.68 20.48v128c0 17.6 14.4 32 32 32h74.24l155.84 124.48c2.88 2.24 6.4 3.52 9.92 3.52 2.24 0 4.8-.64 7.04-1.6 5.44-2.56 8.96-8.32 8.96-14.4v-57.376l68.672 68.672c3.136 3.136 7.232 4.704 11.328 4.704s8.192-1.568 11.328-4.672c6.24-6.272 6.24-16.384 0-22.656z"></path>
                            </svg>
                            mp4<br>(40.1 MB)
                        </a>
                        <a href="/video-downloader/download.php?source=youtube&amp;media=MjE=" class="btn btn-info btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank">
                            <strong>1080p</strong><br>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 448.075 448.075">
                                <path d="M352.021 16.075c0-6.08-3.52-11.84-8.96-14.4-5.76-2.88-12.16-1.92-16.96 1.92l-141.76 112.96 167.68 167.68V16.075zM443.349 420.747l-416-416c-6.24-6.24-16.384-6.24-22.624 0s-6.24 16.384 0 22.624l100.672 100.704h-9.376c-9.92 0-18.56 4.48-24.32 11.52-4.8 5.44-7.68 12.8-7.68 20.48v128c0 17.6 14.4 32 32 32h74.24l155.84 124.48c2.88 2.24 6.4 3.52 9.92 3.52 2.24 0 4.8-.64 7.04-1.6 5.44-2.56 8.96-8.32 8.96-14.4v-57.376l68.672 68.672c3.136 3.136 7.232 4.704 11.328 4.704s8.192-1.568 11.328-4.672c6.24-6.272 6.24-16.384 0-22.656z"></path>
                            </svg>
                            webm<br>(41.63 MB)
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-n6 py-6 d-flex align-items-start text-center">
                <div id="share-buttons">
                    <p class="lead share-text">Share</p>
                    <a title="Facebook" href="https://www.facebook.com/sharer.php?u=https://aiodown.com/#url=https://www.youtube.com/watch?v=VonSuAoKzpo&amp;list=RDMMVonSuAoKzpo&amp;start_radio=1" class="btn btn-social btn-fill btn-facebook mx-1" target="_blank">Facebook</a><a title="Twitter" href="https://twitter.com/intent/tweet?url=https://aiodown.com/#url=https://www.youtube.com/watch?v=VonSuAoKzpo&amp;list=RDMMVonSuAoKzpo&amp;start_radio=1&amp;text=Download%20L%E1%BB%97i%20T%E1%BA%A1i%20M%C6%B0a%20-%20Voi%20B%E1%BA%A3n%20%C4%90%C3%B4n%20%7C%20The%20Masked%20Singer%20Vietnam%202023%20%5BAudio%20Lyric%5D" class="btn btn-social btn-fill btn-twitter mx-1" target="_blank">Twitter</a><a title="Whatsapp" href="whatsapp://send?text=Download%20L%E1%BB%97i%20T%E1%BA%A1i%20M%C6%B0a%20-%20Voi%20B%E1%BA%A3n%20%C4%90%C3%B4n%20%7C%20The%20Masked%20Singer%20Vietnam%202023%20%5BAudio%20Lyric%5D%20https://aiodown.com/#url=https://www.youtube.com/watch?v=VonSuAoKzpo&amp;list=RDMMVonSuAoKzpo&amp;start_radio=1" class="btn btn-social btn-fill btn-whatsapp mx-1" target="_blank">Whatsapp</a><a title="Pinterest" href="http://pinterest.com/pin/create/link/?url=https://aiodown.com/#url=https://www.youtube.com/watch?v=VonSuAoKzpo&amp;list=RDMMVonSuAoKzpo&amp;start_radio=1" class="btn btn-social btn-fill btn-pinterest mx-1" target="_blank">Pinterest</a><a title="Tumblr" href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=https://aiodown.com/#url=https://www.youtube.com/watch?v=VonSuAoKzpo&amp;list=RDMMVonSuAoKzpo&amp;start_radio=1&amp;title=L%E1%BB%97i%20T%E1%BA%A1i%20M%C6%B0a%20-%20Voi%20B%E1%BA%A3n%20%C4%90%C3%B4n%20%7C%20The%20Masked%20Singer%20Vietnam%202023%20%5BAudio%20Lyric%5D" class="btn btn-social btn-fill btn-tumblr mx-1" target="_blank">Tumblr</a><a title="Reddit" href="https://reddit.com/submit?url=https://aiodown.com/#url=https://www.youtube.com/watch?v=VonSuAoKzpo&amp;list=RDMMVonSuAoKzpo&amp;start_radio=1&amp;title=L%E1%BB%97i%20T%E1%BA%A1i%20M%C6%B0a%20-%20Voi%20B%E1%BA%A3n%20%C4%90%C3%B4n%20%7C%20The%20Masked%20Singer%20Vietnam%202023%20%5BAudio%20Lyric%5D" class="btn btn-social btn-fill btn-reddit mx-1" target="_blank">Reddit</a><a title="QR Code" href="https://chart.googleapis.com/chart?cht=qr&amp;chs=300x300&amp;chl=https://aiodown.com/#url=https://www.youtube.com/watch?v=VonSuAoKzpo&amp;list=RDMMVonSuAoKzpo&amp;start_radio=1" class="btn btn-social btn-fill btn-qr mx-1" target="_blank">QR Code</a>
                </div>
            </div>
        </div>
    </div>

<!-- end result -->



<div class="text-center" id="ad-area-2"></div>
<section class="py-20">
    <div class="container">
        <div class="max-w-3xl mx-auto mb-16 text-center">
            <h2 class="mt-8 mb-10">Supports The Most Popular Sources</h2>
            <p class="lead text-muted">You can check regularly updated supported sources list.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center">
                    <a href="/" class="text-decoration-none text-dark">
                        <img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/9gag.svg" alt="9GAG video downloader" title="9GAG">9GAG</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/akillitv-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/akillitv.svg" alt="Akıllı TV video downloader" title="Akıllı TV">Akıllı TV</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/bandcamp-music-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/bandcamp.svg" alt="Bandcamp video downloader" title="Bandcamp">Bandcamp</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/bilibili-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/bilibili.svg" alt="Bilibili video downloader" title="Bilibili">Bilibili</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/bitchute-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/bitchute.svg" alt="Bitchute video downloader" title="Bitchute">Bitchute</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/blogger-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/blogger.svg" alt="Blogger video downloader" title="Blogger">Blogger</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/blutv-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/blutv.svg" alt="BluTV video downloader" title="BluTV">BluTV</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/buzzfeed-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/buzzfeed.svg" alt="Buzzfeed video downloader" title="Buzzfeed">Buzzfeed</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/capcut-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/capcut.svg" alt="Capcut video downloader" title="Capcut">Capcut</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/chingari-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/chingari.svg" alt="Chingari video downloader" title="Chingari">Chingari</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/dailymotion-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/dailymotion.svg" alt="Dailymotion video downloader" title="Dailymotion">Dailymotion</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/douyin-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/douyin.svg" alt="Douyin video downloader" title="Douyin">Douyin</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/espn-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/espn.svg" alt="ESPN video downloader" title="ESPN">ESPN</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/facebook-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/facebook.svg" alt="Facebook video downloader" title="Facebook">Facebook</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/febspot-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/febspot.svg" alt="Febspot video downloader" title="Febspot">Febspot</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/flickr-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/flickr.svg" alt="Flickr video downloader" title="Flickr">Flickr</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/ifunyy-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/ifunny.svg" alt="Ifunny video downloader" title="Ifunny">Ifunny</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/imdb-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/imdb.svg" alt="IMDB video downloader" title="IMDB">IMDB</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/imgur-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/imgur.svg" alt="Imgur video downloader" title="Imgur">Imgur</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/instagram-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/instagram.svg" alt="Instagram video downloader" title="Instagram">Instagram</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/izlesene-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/izlesene.svg" alt="Izlesene video downloader" title="Izlesene">Izlesene</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/kwai-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/kwai.svg" alt="Kwai video downloader" title="Kwai">Kwai</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/likee-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/likee.svg" alt="Likee video downloader" title="Likee">Likee</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/linkedin-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/linkedin.svg" alt="LinkedIn video downloader" title="LinkedIn">LinkedIn</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/loom-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/loom.svg" alt="Loom video downloader" title="Loom">Loom</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/mashable-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/mashable.svg" alt="Mashable video downloader" title="Mashable">Mashable</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/mastodon-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/mastodon.svg" alt="Mastodon video downloader" title="Mastodon">Mastodon</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/mixcloud-music-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/mixcloud.svg" alt="Mixcloud video downloader" title="Mixcloud">Mixcloud</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/moj-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/moj.svg" alt="Moj video downloader" title="Moj">Moj</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/mxtakatak-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/mxtakatak.svg" alt="MxTakatak video downloader" title="MxTakatak">MxTakatak</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/odnoklassniki-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/odnoklassniki.svg" alt="Ok.ru video downloader" title="Ok.ru">Ok.ru</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/pinterest-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/pinterest.svg" alt="Pinterest video downloader" title="Pinterest">Pinterest</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/puhutv-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/puhutv.svg" alt="PuhuTV video downloader" title="PuhuTV">PuhuTV</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/reddit-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/reddit.svg" alt="Reddit video downloader" title="Reddit">Reddit</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/rumble-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/rumble.svg" alt="Rumble video downloader" title="Rumble">Rumble</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/share-chat-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/sharechat.svg" alt="Share Chat video downloader" title="Share Chat">Share Chat</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/snapchat-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/snapchat.svg" alt="Snapchat video downloader" title="Snapchat">Snapchat</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/soundcloud-music-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/soundcloud.svg" alt="Soundcloud video downloader" title="Soundcloud">Soundcloud</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/streamable-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/streamable.svg" alt="Streamable video downloader" title="Streamable">Streamable</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/ted-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/ted.svg" alt="TED video downloader" title="TED">TED</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/telegram-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/telegram.svg" alt="Telegram video downloader" title="Telegram">Telegram</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/threads-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/threads.svg" alt="Threads video downloader" title="Threads">Threads</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/tiktok-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/tiktok.svg" alt="Tiktok video downloader" title="Tiktok">Tiktok</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/tumblr-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/tumblr.svg" alt="Tumblr video downloader" title="Tumblr">Tumblr</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/twitch-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/twitch.svg" alt="Twitch video downloader" title="Twitch">Twitch</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/vimeo-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/vimeo.svg" alt="Vimeo video downloader" title="Vimeo">Vimeo</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/vk-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/vkontakte.svg" alt="VK video downloader" title="VK">VK</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/youtube-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/youtube.svg" alt="YouTube video downloader" title="YouTube">YouTube</a></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4">
                <div class="bg-light rounded py-4 text-center"><a href="https://aiodown.com/x-video-downloader/" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="<?php echo get_template_directory_uri() ?>/icons/x.svg" alt="X video downloader" title="X">X</a></div>
            </div>
        </div>
    </div>
</section>
<section class="py-20">
    <div class="container">
        <div class="row mb-n12 mb-lg-n20">
            <div class="col-12 col-md-6 col-lg-4 mb-12 mb-lg-20">
                <div class="d-flex">
                <span class="flex-shrink-0 d-flex align-items-center justify-content-center me-6 bg-success rounded-circle"
                      style="width: 48px; height: 48px;">
                </span>
                    <div>
                        <h3 class="mb-4 h4">Download Videos from Multiple Sources</h3>
                        <p>Video Downloader Script offers you to download videos in multiple formats including MP4, M4A, 3GP from multiple sources which includes</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-12 mb-lg-20">
                <div class="d-flex">
                <span class="flex-shrink-0 d-flex align-items-center justify-content-center me-6 bg-info rounded-circle"
                      style="width: 48px; height: 48px;">
                </span>
                    <div>
                        <h3 class="mb-4 h4">Supported Websites</h3>
                        <p>9GAG, Akıllı TV, Bandcamp, Bilibili, Bitchute, Blogger, BluTV, Buzzfeed, Capcut, Chingari, Dailymotion, Douyin, ESPN, Facebook, Febspot, Flickr, Ifunny, IMDB, Imgur, Instagram, Izlesene, Kwai, Likee, LinkedIn, Loom, Mashable, Mastodon, Mixcloud, Moj, MxTakatak, Ok.ru, Pinterest, PuhuTV, Reddit, Rumble, Share Chat, Snapchat, Soundcloud, Streamable, TED, Telegram, Threads, Tiktok, Tumblr, Twitch, Vimeo, VK, YouTube, X</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-12 mb-lg-20">
                <div class="d-flex">
                <span class="flex-shrink-0 d-flex align-items-center justify-content-center me-6 bg-danger rounded-circle"
                      style="width: 48px; height: 48px;">
                </span>
                    <div>
                        <h3 class="mb-4 h4">Download Audios</h3>
                        <p>You can download audio files if they are available.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-20" id="blog-posts">
    <div class="container">
        <div class="max-w-3xl mx-auto mb-16 text-center">
            <h2 class="mb-10">Blog Posts</h2>
        </div>
        <div class="row">
            <?php
            $query = new WP_Query([
                'post_type'    => 'post',
                'orderby'    =>  'ID'
            ]);

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
            ?>
            <article class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col">
                        <div style="height: 10rem;">
                            <img class="d-block rounded w-100 h-100" loading="lazy" style="object-fit: cover;" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium') ?>" alt="<?php the_title(); ?>"
                        </div>
                    </div>
                    <div class="col">
                        <span class="d-inline-block mb-4 small text-muted">
                            <?php the_time( 'F jS, Y' ); ?>
                        </span>
                        <h3 class="mb-4 h3 font-semibold font-heading">
                            <a href="<?php the_permalink(); ?>" class="blog-post-title"><?php the_title(); ?></a>
                        </h3>
                    </div>
                </div>
            </article>
            <?php
            endwhile;
            endif;
            ?>
            <div class="text-center"></div>
        </div>
    </div>
</section>
<!-- #main -->


<?php
get_footer();
