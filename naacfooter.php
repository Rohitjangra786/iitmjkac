<style>
    /* ========================== MODERN FOOTER ========================== */
    .modern-footer{
        font-family: 'Poppins', system-ui, sans-serif;
        background:
            radial-gradient(circle at 0% 0%, rgba(255,183,3,.10) 0%, transparent 45%),
            radial-gradient(circle at 100% 100%, rgba(214,40,40,.18) 0%, transparent 55%),
            linear-gradient(135deg,#5e0000 0%,#800000 50%,#3d0000 100%);
        color: #f0e6d2;
        margin-top: 30px;
        padding: 0;
    }

    /* ---------- Admission CTA banner at the very top of the footer ---------- */
    .footer-admission-banner{
        background: linear-gradient(135deg,#ffb703 0%,#fb8500 50%,#d62828 100%);
        padding: 22px 20px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .footer-admission-banner::before{
        content:"";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 30% 20%, rgba(255,255,255,.18), transparent 50%);
        pointer-events: none;
    }
    .footer-admission-banner .fab-eyebrow{
        display: inline-block;
        font-size: 10px;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #5e0000;
        background: rgba(255,255,255,.25);
        padding: 4px 12px;
        border-radius: 50px;
        margin-bottom: 8px;
        position: relative;
    }
    .footer-admission-banner .fab-headline{
        font-size: 22px;
        font-weight: 800;
        color: #fff;
        margin: 0 0 4px;
        letter-spacing: .3px;
        line-height: 1.15;
        text-shadow: 0 2px 6px rgba(0,0,0,.18);
        position: relative;
    }
    .footer-admission-banner .fab-courses{
        font-size: 12px;
        font-weight: 600;
        color: rgba(255,255,255,.92);
        margin: 0 0 14px;
        letter-spacing: .3px;
        position: relative;
    }
    .footer-admission-banner .fab-actions{
        display: inline-flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        position: relative;
    }
    .footer-admission-banner .fab-btn{
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 10px 18px;
        border-radius: 50px;
        font-weight: 800;
        font-size: 13px;
        text-decoration: none;
        letter-spacing: .3px;
        transition: transform .2s ease, box-shadow .2s ease;
        border: 0;
        cursor: pointer;
    }
    .footer-admission-banner .fab-btn.primary{
        background: linear-gradient(135deg,#800000 0%,#5e0000 100%);
        color: #fff;
        box-shadow: 0 6px 18px rgba(94,0,0,.35);
        border: 1.5px solid rgba(255,255,255,.18);
    }
    .footer-admission-banner .fab-btn.outline{
        background: rgba(255,255,255,.12);
        color: #fff;
        border: 1.5px solid rgba(255,255,255,.55);
        backdrop-filter: blur(4px);
    }
    .footer-admission-banner .fab-btn:hover,
    .footer-admission-banner .fab-btn:focus{
        transform: translateY(-2px);
        text-decoration: none;
        color: #fff;
    }
    .footer-admission-banner .fab-btn.primary:hover{ box-shadow: 0 10px 26px rgba(94,0,0,.55); }
    .footer-admission-banner .fab-btn.outline:hover{ background: rgba(255,255,255,.22); }

    /* ---------- Main grid ---------- */
    .modern-footer .footer-inner{
        max-width: 1200px;
        margin: 0 auto;
        padding: 36px 22px 22px;
    }

    .modern-footer .footer-grid{
        display: grid;
        grid-template-columns: 1.5fr 1fr 1fr 1.2fr;
        gap: 32px;
    }
    @media (max-width: 991.98px){
        .modern-footer .footer-grid{ grid-template-columns: 1fr 1fr; gap: 22px; }
    }
    @media (max-width: 575px){
        .modern-footer .footer-grid{ grid-template-columns: 1fr; gap: 22px; }
        .modern-footer .footer-inner{ padding: 26px 18px 18px; }
        .footer-admission-banner{ padding: 18px 16px; }
        .footer-admission-banner .fab-headline{ font-size: 19px; }
        .footer-admission-banner .fab-courses{ font-size: 11.5px; }
    }

    .modern-footer h6.footer-heading{
        font-family: 'Poppins', system-ui, sans-serif;
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1.6px;
        color: #ffd700;
        margin: 0 0 14px;
        padding-bottom: 8px;
        position: relative;
    }
    .modern-footer h6.footer-heading::after{
        content:"";
        position: absolute;
        left: 0; bottom: 0;
        width: 28px; height: 2px;
        background: linear-gradient(90deg,#ffd700,#fb8500);
        border-radius: 2px;
    }

    /* ---------- Brand column ---------- */
    .modern-footer .footer-brand img{
        height: 64px;
        width: auto;
        max-width: 100%;
        background: transparent;
        padding: 0;
        border-radius: 0;
        box-shadow: none;
        margin: 0 auto 14px;
        display: block;
        object-fit: contain;
        filter: brightness(0) invert(1) drop-shadow(0 3px 6px rgba(0,0,0,.30));
    }
    .modern-footer .footer-brand .brand-tag{
        font-size: 12px;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: .8px;
        text-transform: uppercase;
        margin: -8px 0 12px;
        display: block;
        opacity: .92;
    }
    .modern-footer .footer-brand p{
        font-size: 12.5px;
        line-height: 1.55;
        color: #e8d6bf;
        margin: 0 0 14px;
    }

    .modern-footer .contact-line{
        display: flex;
        align-items: flex-start;
        gap: 8px;
        font-size: 12.5px;
        margin-bottom: 7px;
        color: #f0e6d2;
        text-decoration: none;
        line-height: 1.45;
    }
    .modern-footer .contact-line i{
        flex-shrink: 0;
        color: #ffd700;
        font-size: 12px;
        margin-top: 4px;
        width: 14px;
        text-align: center;
    }
    .modern-footer a.contact-line:hover{
        color: #fff;
        text-decoration: none;
    }
    .modern-footer a.contact-line:hover i{ color: #fff; }

    /* ---------- Link lists ---------- */
    .modern-footer ul.footer-links{
        list-style: none;
        padding: 0; margin: 0;
    }
    .modern-footer ul.footer-links li{ margin-bottom: 8px; }
    .modern-footer ul.footer-links a{
        color: #e8d6bf;
        text-decoration: none;
        font-size: 12.5px;
        font-weight: 500;
        transition: color .2s ease, padding-left .2s ease;
        display: inline-block;
        position: relative;
        padding-left: 12px;
    }
    .modern-footer ul.footer-links a::before{
        content:"›";
        position: absolute;
        left: 0; top: 0;
        color: #ffd700;
        font-weight: 800;
        transition: transform .2s ease;
    }
    .modern-footer ul.footer-links a:hover{
        color: #fff;
        padding-left: 16px;
    }
    .modern-footer ul.footer-links a:hover::before{ transform: translateX(2px); }

    /* ---------- Map ---------- */
    .modern-footer .footer-map{
        display: block;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 8px 22px rgba(0,0,0,.30);
        position: relative;
        border: 1px solid rgba(255,215,0,.25);
    }
    .modern-footer .footer-map img{
        width: 100%;
        height: auto;
        max-height: 150px;
        object-fit: cover;
        display: block;
        transition: transform .35s ease;
    }
    .modern-footer .footer-map:hover img{ transform: scale(1.04); }
    .modern-footer .footer-map .map-overlay{
        position: absolute;
        left: 0; right: 0; bottom: 0;
        padding: 8px 12px;
        background: linear-gradient(0deg, rgba(0,0,0,.72), transparent);
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 6px;
        letter-spacing: .3px;
    }
    .modern-footer .footer-map .map-overlay i{ color: #ffd700; }

    /* ---------- Accreditation strip (matches the hero accreditation line) ---------- */
    .modern-footer .footer-accreditation{
        margin: 24px auto 0;
        padding: 12px 16px;
        text-align: center;
        background: rgba(0,0,0,.18);
        border-top: 1px solid rgba(255,215,0,.20);
        border-bottom: 1px solid rgba(255,215,0,.20);
        font-size: 11.5px;
        line-height: 1.5;
        color: rgba(255,255,255,.88);
        letter-spacing: .3px;
    }
    .modern-footer .footer-accreditation .acc-label{
        font-weight: 800;
        color: #ffd700;
        text-transform: uppercase;
        letter-spacing: 1.4px;
        font-size: 10px;
        margin-right: 6px;
        display: inline-block;
    }

    /* ---------- Bottom bar ---------- */
    .modern-footer .footer-bottom{
        max-width: 1200px;
        margin: 0 auto;
        padding: 16px 22px 18px;
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        justify-content: space-between;
        align-items: center;
    }
    .modern-footer .footer-bottom .copy{
        font-size: 11.5px;
        color: #cdb89a;
        letter-spacing: .2px;
    }
    .modern-footer .footer-bottom .visitor{
        background: rgba(255,255,255,.08);
        padding: 5px 14px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 11px;
        color: #ffd700;
        letter-spacing: .8px;
        text-transform: uppercase;
        border: 1px solid rgba(255,215,0,.20);
    }

    /* Minimal flat social icons — no chunky backgrounds, just plain icons */
    .modern-footer .footer-social{
        display: flex;
        gap: 16px;
        align-items: center;
    }
    .modern-footer .footer-social a{
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: transparent;
        border: 0;
        padding: 0;
        color: rgba(255,255,255,.80);
        font-size: 17px;
        text-decoration: none;
        transition: transform .2s ease, color .2s ease;
        line-height: 1;
    }
    .modern-footer .footer-social a svg{
        width: 1em;
        height: 1em;
        display: block;
    }
    .modern-footer .footer-social a:hover{
        transform: translateY(-2px);
        filter: brightness(1.15);
    }
    /* Brand colors on dark footer (Instagram keeps its own gradient) */
    .modern-footer .footer-social a.fa-facebook  { color: #4ea3ff; }
    .modern-footer .footer-social a.fa-linkedin  { color: #4ea3ff; }
    .modern-footer .footer-social a.fa-twitter   { color: #ffffff; }
    .modern-footer .footer-social a.fa-youtube   { color: #ff5e5e; }

    /* Reserve vertical space at the bottom of the footer so the fixed FABs always sit over
       the dark maroon footer area instead of a white gap below it. Mobile only. */
    @media (max-width: 991.98px){
        .modern-footer .footer-bottom{ padding-bottom: 90px; }
    }

    @media (max-width: 575px){
        .modern-footer .footer-bottom{
            justify-content: center;
            text-align: center;
            flex-direction: column;
            padding: 14px 18px 90px;
        }
        .modern-footer .footer-accreditation{
            font-size: 10.5px;
            padding: 10px 14px;
        }
        .modern-footer .footer-accreditation .acc-label{
            display: block;
            margin-bottom: 2px;
        }
    }
</style>

<footer class="modern-footer">

    <!-- Admission CTA banner -->
    <div class="footer-admission-banner">
        <span class="fab-eyebrow">Admissions Open</span>
        <h3 class="fab-headline">Academic Year 2026 - 27</h3>
        <p class="fab-courses">MBA &middot; MCA &middot; BBA &middot; BCA &middot; B.Com (H) &middot; BA (JMC)</p>
        <div class="fab-actions">
            <a href="https://forms.gle/pV2QPG3CtNt6eWBc6" target="_blank" rel="noopener" class="fab-btn primary">Apply Now ›</a>
            <a href="#enquiryModal" data-bs-toggle="modal" class="fab-btn outline">Talk to a Program Lead</a>
        </div>
    </div>

    <div class="footer-inner">
        <div class="footer-grid">

            <!-- Brand + Address -->
            <div class="footer-brand">
                <img src="<?php echo isset($iitm_base_url) ? $iitm_base_url : ''; ?>iitm-1.png" onerror="this.onerror=null;this.src='https://www.iitmjanakpuri.com/logow.png';" alt="IITM — Nurturing Excellence">
                <span class="brand-tag">Janakpuri &middot; Est. 1999</span>
                <p>Institute of Information Technology &amp; Management. A NAAC Grade 'A' &amp; NBA-accredited institute committed to nurturing future leaders.</p>
                <a class="contact-line" href="https://maps.app.goo.gl/bvzrJ9wBiBPAYqor8" target="_blank" rel="noopener">
                    <i class="fa fa-map-marker"></i>
                    <span>D-29, Institutional Area, Janakpuri, New Delhi - 110058</span>
                </a>
                <a class="contact-line" href="tel:01128525051">
                    <i class="fa fa-phone"></i>
                    <span>011-28525882 / 28520239 / 28525051</span>
                </a>
                <a class="contact-line" href="mailto:director@iitmipu.ac.in">
                    <i class="fa fa-envelope"></i>
                    <span>director@iitmipu.ac.in</span>
                </a>
            </div>

            <!-- Quick Links -->
            <div>
                <h6 class="footer-heading">Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="https://iitmjanakpuri.com/course/programmes.php">Programmes</a></li>
                    <li><a href="https://iitmjanakpuri.com/admissions/admissionprocedure.php">Admissions</a></li>
                    <li><a href="https://iitmjanakpuri.com/placements/placements.php">Placements</a></li>
                    <li><a href="https://iitmjanakpuri.com/Library/">Library</a></li>
                    <li><a href="https://www.alumniiitmjanakpuri.com/" target="_blank" rel="noopener">Alumni Portal</a></li>
                    <li><a href="https://iitmjanakpuri.com/notices.php">Notices</a></li>
                </ul>
            </div>

            <!-- Important / Compliance -->
            <div>
                <h6 class="footer-heading">Important</h6>
                <ul class="footer-links">
                    <li><a href="https://iitmjanakpuri.com/upload_new/icc.pdf" target="_blank" rel="noopener">ICC</a></li>
                    <li><a href="https://iitmjanakpuri.com/upload_new/scst.pdf" target="_blank" rel="noopener">SC/ST Committee</a></li>
                    <li><a href="https://iitmjanakpuri.com/upload_new/DisbabilityCommitteee.pdf" target="_blank" rel="noopener">Disabilities Committee</a></li>
                    <li><a href="https://iitmjanakpuri.com/upload_new/Kaagaz_20251006_162228496644.pdf" target="_blank" rel="noopener">Anti-Ragging</a></li>
                    <li><a href="https://iitmjanakpuri.com/upload_new/ResearchCommittee.pdf" target="_blank" rel="noopener">Research Committee</a></li>
                    <li><a href="https://iitmjanakpuri-sdc.in/tracking/" target="_blank" rel="noopener">Grievance Redressal</a></li>
                </ul>
            </div>

            <!-- Find Us -->
            <div class="footer-find-us">
                <h6 class="footer-heading">Find Us</h6>
                <a href="https://maps.app.goo.gl/bvzrJ9wBiBPAYqor8" target="_blank" rel="noopener" class="footer-map" aria-label="Open campus location in Google Maps">
                    <img src="https://iitmjanakpuri.com/images/map.png" alt="Campus location on map">
                    <span class="map-overlay"><i class="fa fa-map-marker"></i> Open in Google Maps</span>
                </a>
            </div>

        </div>
    </div>

    <!-- Accreditation strip -->
    <div class="footer-accreditation">
        <span class="acc-label">Accredited by</span>
        NAAC Grade &lsquo;A&rsquo; &middot; NBA &middot; AICTE &middot; UGC 2(f) &middot; GGSIPU
    </div>

    <!-- Bottom bar -->
    <div class="footer-bottom">
        <div class="copy">&copy; <?php echo date('Y'); ?> IITM Janakpuri &middot; All rights reserved.</div>
        <div class="footer-social" id="footer-social-anchor">
            <a href="https://www.instagram.com/iitm_janakpuri/" class="fa-instagram" target="_blank" rel="noopener" aria-label="Instagram">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <defs>
                        <linearGradient id="ig-grad-ft" x1="0%" y1="100%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#feda75"/>
                            <stop offset="25%" stop-color="#fa7e1e"/>
                            <stop offset="50%" stop-color="#d62976"/>
                            <stop offset="75%" stop-color="#962fbf"/>
                            <stop offset="100%" stop-color="#4f5bd5"/>
                        </linearGradient>
                    </defs>
                    <path fill="url(#ig-grad-ft)" d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.336 3.608 1.311.975.975 1.249 2.242 1.311 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.336 2.633-1.311 3.608-.975.975-2.242 1.249-3.608 1.311-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.336-3.608-1.311-.975-.975-1.249-2.242-1.311-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.336-2.633 1.311-3.608.975-.975 2.242-1.249 3.608-1.311C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.332.014 7.052.072 5.775.13 4.602.396 3.635 1.363c-.967.967-1.233 2.14-1.291 3.417C2.014 8.332 2 8.741 2 12c0 3.259.014 3.668.072 4.948.058 1.277.324 2.45 1.291 3.417.967.967 2.14 1.233 3.417 1.291 1.28.058 1.689.072 4.948.072s3.668-.014 4.948-.072c1.277-.058 2.45-.324 3.417-1.291.967-.967 1.233-2.14 1.291-3.417.058-1.28.072-1.689.072-4.948 0-3.259-.014-3.668-.072-4.948-.058-1.277-.324-2.45-1.291-3.417C19.398.396 18.225.13 16.948.072 15.668.014 15.259 0 12 0z"/>
                    <path fill="url(#ig-grad-ft)" d="M12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8z"/>
                    <circle fill="url(#ig-grad-ft)" cx="18.406" cy="5.594" r="1.44"/>
                </svg>
            </a>
            <a href="https://www.facebook.com/iitmjanakpurinewdelhi" class="fa-facebook" target="_blank" rel="noopener" aria-label="Facebook">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M24 12c0-6.627-5.373-12-12-12S0 5.373 0 12c0 5.99 4.388 10.954 10.125 11.854V15.47H7.078V12h3.047V9.356c0-3.007 1.792-4.668 4.533-4.668 1.312 0 2.686.234 2.686.234v2.953H15.83c-1.491 0-1.956.925-1.956 1.874V12h3.328l-.532 3.47h-2.796v8.385C19.612 22.954 24 17.99 24 12z"/></svg>
            </a>
            <a href="https://www.linkedin.com/in/iitm-janakpuri-29678b100" class="fa-linkedin" target="_blank" rel="noopener" aria-label="LinkedIn">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
            <a href="https://twitter.com/iitm_ipu" class="fa-twitter" target="_blank" rel="noopener" aria-label="X (formerly Twitter)">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231 5.45-6.231zm-1.161 17.52h1.833L7.084 4.126H5.117l11.966 15.644z"/></svg>
            </a>
            <a href="https://www.youtube.com/channel/UCRfsFwiKcTStwUIf2vISxCw" class="fa-youtube" target="_blank" rel="noopener" aria-label="YouTube">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
        </div>
    </div>
</footer>
