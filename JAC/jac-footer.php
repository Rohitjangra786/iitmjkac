    </main>
</div><!-- /.jac-shell -->

<footer class="jac-foot">
    <div class="in">
        <div>
            <h4>Institute of Information Technology &amp; Management</h4>
            <p>D-29, Institutional Area, Janakpuri, New Delhi &ndash; 110058</p>
            <p><i class="fas fa-phone-alt"></i>&nbsp; +91 11-28525882, 28520239, 28525051</p>
            <p><i class="fas fa-envelope"></i>&nbsp; <a href="mailto:director@iitmipu.ac.in">director@iitmipu.ac.in</a></p>
        </div>
        <div>
            <h4>Quick Links</h4>
            <ul>
                <li><a href="https://www.iitmjanakpuri.com/index.php">Main Website</a></li>
                <li><a href="https://www.iitmjanakpuri.com/course/programmes.php">Programmes</a></li>
                <li><a href="https://www.iitmjanakpuri.com/admissions/admissions.php">Admissions</a></li>
                <li><a href="mandatorydisclosure.php">Mandatory Disclosure</a></li>
            </ul>
        </div>
        <div>
            <h4>Recognition</h4>
            <ul>
                <li>NAAC Grade &lsquo;A&rsquo;</li>
                <li>NBA Accredited</li>
                <li>Approved by AICTE</li>
                <li>Affiliated to GGSIPU</li>
            </ul>
        </div>
    </div>
    <div class="bar">&copy; <?php echo date('Y'); ?> IITM Janakpuri &middot; Joint Assessment Committee. All rights reserved.</div>
</footer>

<button class="jac-top" id="jacTop" aria-label="Back to top"><i class="fas fa-arrow-up"></i></button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
(function(){
    document.addEventListener('DOMContentLoaded', function(){
        // Subtle reveal for document content — only applied when AOS actually loaded,
        // so content is never left hidden if the CDN/library fails.
        if (window.AOS){
            var sel = '.jac-main > h1, .jac-main > h2, .jac-main > h3, .jac-main > p, .jac-main > .jac-lead,'
                    + '.jac-main > table, .jac-main > .doc-scroll, .jac-main > .doc-index, .jac-main > .doc-dl, .jac-main > .doc-grid,'
                    + '.jac-main > figure, .jac-main > ul, .jac-main > ol, .jac-main > blockquote, .jac-main > .doc-note';
            var n = 0;
            document.querySelectorAll(sel).forEach(function(el){
                if (el.hasAttribute('data-aos')) return;
                el.setAttribute('data-aos', 'fade-up');
                el.setAttribute('data-aos-delay', String((n++ % 3) * 60));
            });
            AOS.init({ duration:600, once:true, offset:50, easing:'ease-out-cubic' });
        }
        // Back-to-top
        var btn = document.getElementById('jacTop');
        if (btn){
            var onScroll = function(){ btn.classList.toggle('show', window.pageYOffset > 320); };
            window.addEventListener('scroll', onScroll, { passive:true });
            onScroll();
            btn.addEventListener('click', function(){ window.scrollTo({ top:0, behavior:'smooth' }); });
        }
        // Mobile: collapsible "Disclosure Index" sidebar
        var toc = document.querySelector('.jac-toc');
        if (toc){
            var th = toc.querySelector('.h');
            if (th){
                th.addEventListener('click', function(){
                    if (window.matchMedia('(max-width:900px)').matches){ toc.classList.toggle('open'); }
                });
            }
        }
    });
})();
</script>

</body>
</html>
