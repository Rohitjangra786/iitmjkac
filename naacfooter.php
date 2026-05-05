<style>
    /* ==================== MODERN FOOTER ==================== */
    .modern-footer{
        font-family: 'Poppins', system-ui, sans-serif;
        background: linear-gradient(135deg,#5e0000 0%,#800000 50%,#3d0000 100%);
        color: #f0e6d2;
        margin-top: 30px;
        padding: 0;
    }

    .modern-footer .footer-inner{
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px 24px;
    }

    .modern-footer .footer-grid{
        display: grid;
        grid-template-columns: 1.4fr 1fr 1fr 1.1fr;
        gap: 32px;
    }
    @media (max-width: 991.98px){
        .modern-footer .footer-grid{ grid-template-columns: 1fr 1fr; gap: 24px; }
    }
    @media (max-width: 575px){
        .modern-footer .footer-grid{ grid-template-columns: 1fr; gap: 20px; }
        .modern-footer .footer-inner{ padding: 28px 18px 18px; }
    }

    .modern-footer h6.footer-heading{
        font-size: 13px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1.4px;
        color: #ffd9b3;
        margin: 0 0 14px;
        padding-bottom: 8px;
        position: relative;
    }
    .modern-footer h6.footer-heading::after{
        content:"";
        position: absolute;
        left: 0; bottom: 0;
        width: 36px; height: 2px;
        background: linear-gradient(90deg,#ffb703,#fb8500);
        border-radius: 2px;
    }

    .modern-footer .footer-brand img{
        height: 56px;
        width: auto;
        max-width: 180px;
        background: transparent;
        padding: 0;
        border-radius: 0;
        box-shadow: none;
        margin-bottom: 14px;
        display: block;
        /* Force any logo source (maroon iitm-1.png or white logow.png) to render as a clean white wordmark
           — the only way both sources look correct on a maroon footer without per-image styling */
        filter: brightness(0) invert(1) drop-shadow(0 3px 6px rgba(0,0,0,.35));
    }
    .modern-footer .footer-brand p{
        font-size: 13px;
        line-height: 1.55;
        color: #e8d6bf;
        margin: 0 0 14px;
    }

    .modern-footer .contact-line{
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 13px;
        margin-bottom: 8px;
        color: #f0e6d2;
        text-decoration: none;
    }
    .modern-footer .contact-line i{
        width: 28px; height: 28px;
        flex: 0 0 28px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(255,255,255,.10);
        border-radius: 8px;
        color: #ffd9b3;
        font-size: 13px;
        margin-top: 1px;
    }
    .modern-footer a.contact-line:hover{
        color: #fff;
        text-decoration: none;
    }

    .modern-footer ul.footer-links{
        list-style: none;
        padding: 0; margin: 0;
    }
    .modern-footer ul.footer-links li{ margin-bottom: 9px; }
    .modern-footer ul.footer-links a{
        color: #e8d6bf;
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        transition: color .2s ease, padding-left .2s ease;
        display: inline-block;
        position: relative;
        padding-left: 14px;
    }
    .modern-footer ul.footer-links a::before{
        content:"›";
        position: absolute;
        left: 0; top: 0;
        color: #ffb703;
        font-weight: 800;
    }
    .modern-footer ul.footer-links a:hover{
        color: #fff;
        padding-left: 18px;
    }

    /* Connect column — mini-brand block above the heading */
    .modern-footer .connect-brand{
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 14px;
        padding: 10px 12px;
        background: rgba(255,255,255,.08);
        border: 1px solid rgba(255,255,255,.10);
        border-radius: 12px;
        backdrop-filter: blur(6px);
    }
    .modern-footer .connect-brand img{
        height: 36px;
        width: auto;
        max-width: 110px;
        background: transparent;
        padding: 0;
        border-radius: 0;
        flex-shrink: 0;
        object-fit: contain;
        filter: brightness(0) invert(1) drop-shadow(0 2px 4px rgba(0,0,0,.3));
    }
    .modern-footer .connect-brand span{
        font-family: 'Poppins', system-ui, sans-serif;
        font-weight: 800;
        font-size: 14px;
        color: #ffd9b3;
        letter-spacing: .8px;
        text-transform: uppercase;
    }

    /* Connect column */
    .modern-footer .footer-social{
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 16px;
    }
    .modern-footer .footer-social a{
        width: 38px; height: 38px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: rgba(255,255,255,.10);
        color: #fff;
        font-size: 16px;
        text-decoration: none;
        transition: transform .2s ease, background .2s ease;
    }
    .modern-footer .footer-social a:hover{
        transform: translateY(-3px);
        background: linear-gradient(135deg,#ffb703,#fb8500);
        color: #5e0000;
    }
    .modern-footer .footer-social a.fa-facebook:hover { background: #1877f2; color: #fff; }
    .modern-footer .footer-social a.fa-instagram:hover { background: linear-gradient(135deg,#f09433,#e6683c,#dc2743,#cc2366,#bc1888); color: #fff; }
    .modern-footer .footer-social a.fa-linkedin:hover { background: #0a66c2; color: #fff; }
    .modern-footer .footer-social a.fa-twitter:hover { background: #1da1f2; color: #fff; }
    .modern-footer .footer-social a.fa-youtube:hover { background: #ff0000; color: #fff; }

    .modern-footer .footer-map{
        display: block;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 8px 22px rgba(0,0,0,.30);
        position: relative;
    }
    .modern-footer .footer-map img{
        width: 100%;
        height: auto;
        max-height: 160px;
        object-fit: cover;
        display: block;
    }
    .modern-footer .footer-map .map-overlay{
        position: absolute;
        left: 0; right: 0; bottom: 0;
        padding: 8px 12px;
        background: linear-gradient(0deg, rgba(0,0,0,.65), transparent);
        color: #fff;
        font-size: 12px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    /* Bottom bar */
    .modern-footer .footer-bottom{
        margin-top: 28px;
        padding-top: 18px;
        border-top: 1px solid rgba(255,255,255,.12);
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: space-between;
        align-items: center;
        font-size: 12px;
        color: #cdb89a;
    }
    .modern-footer .footer-bottom .visitor{
        background: rgba(255,255,255,.08);
        padding: 4px 12px;
        border-radius: 50px;
        font-weight: 600;
    }
    @media (max-width: 575px){
        .modern-footer .footer-bottom{
            justify-content: center;
            text-align: center;
        }
    }
</style>

<footer class="modern-footer">
    <div class="footer-inner">
        <div class="footer-grid">

            <!-- Brand + Address -->
            <div class="footer-brand">
                <img src="iitm-1.png" onerror="this.onerror=null;this.src='https://www.iitmjanakpuri.com/logow.png';" alt="IITM — Nurturing Excellence">
                <p>Institute of Information Technology &amp; Management — Janakpuri. Established in 1999. Committed to academic excellence and grooming future leaders.</p>
                <a class="contact-line" href="https://maps.app.goo.gl/bvzrJ9wBiBPAYqor8" target="_blank" rel="noopener">
                    <i class="fa fa-map-marker"></i>
                    <span>D-29, Institutional Area, Janakpuri,<br>New Delhi - 110058</span>
                </a>
                <a class="contact-line" href="tel:01128525051">
                    <i class="fa fa-phone"></i>
                    <span>011-28525882 &nbsp;/&nbsp; 28520239 &nbsp;/&nbsp; 28525051</span>
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

            <!-- Find Us (map) -->
            <div class="footer-find-us">
                <h6 class="footer-heading">Find Us</h6>
                <a href="https://maps.app.goo.gl/bvzrJ9wBiBPAYqor8" target="_blank" rel="noopener" class="footer-map" aria-label="Open campus location in Google Maps">
                    <img src="https://iitmjanakpuri.com/images/map.png" alt="Campus location on map">
                    <span class="map-overlay"><i class="fa fa-map-marker"></i> Open in Maps</span>
                </a>
            </div>

        </div>

        <div class="footer-bottom">
            <div>&copy; <?php echo date('Y'); ?> Institute of Information Technology &amp; Management — Janakpuri. All rights reserved.</div>
            <div class="visitor">Visitors: 1,234,569</div>
        </div>
    </div>
</footer>
