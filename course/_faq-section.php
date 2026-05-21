<?php
/**
 * Reusable FAQ accordion partial for course pages.
 *
 * Expected variables (set by the caller before include):
 *   $course_faqs        array of ['q' => string, 'a' => string]
 *   $course_faq_title   string heading shown above the accordion
 *   $course_faq_intro   string short intro paragraph (optional)
 *   $course_faq_program string short tag (e.g. "MBA", "BCA")
 */

if (empty($course_faqs) || !is_array($course_faqs)) { return; }

$__faq_title   = isset($course_faq_title)   ? $course_faq_title   : 'Frequently Asked Questions';
$__faq_intro   = isset($course_faq_intro)   ? $course_faq_intro   : '';
$__faq_program = isset($course_faq_program) ? $course_faq_program : '';
$__faq_id      = 'faq-' . strtolower(preg_replace('/[^a-z0-9]+/i', '-', $__faq_program ?: 'course'));

// Render an answer: escape HTML, then turn URLs into <a> tags and \n into <br>.
$__render_answer = function($text) {
    $safe = htmlspecialchars($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    // Linkify http(s) URLs.
    $safe = preg_replace(
        '~(https?://[^\s<]+[^\s<.,;:!?\)\]\}])~i',
        '<a href="$1" target="_blank" rel="noopener">$1</a>',
        $safe
    );
    // Preserve line breaks coming from the source document.
    $safe = nl2br($safe, false);
    return $safe;
};
?>
<style>
    /* ============== Course FAQ accordion ============== */
    .course-faq{
        font-family: 'Poppins', system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
        max-width: 980px;
        margin: 48px auto 24px;
        padding: 0 18px;
        color: #2a1414;
    }
    .course-faq .faq-eyebrow{
        display: inline-block;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #800000;
        background: linear-gradient(135deg, rgba(255,183,3,.18), rgba(214,40,40,.18));
        padding: 5px 14px;
        border-radius: 999px;
        margin-bottom: 12px;
    }
    .course-faq h2.faq-heading{
        font-family: 'Poppins', system-ui, sans-serif;
        font-size: 28px;
        font-weight: 800;
        color: #5e0000;
        margin: 0 0 10px;
        line-height: 1.2;
        letter-spacing: .2px;
    }
    .course-faq h2.faq-heading::after{
        content: "";
        display: block;
        width: 56px;
        height: 3px;
        margin-top: 12px;
        background: linear-gradient(90deg, #ffb703 0%, #d62828 100%);
        border-radius: 3px;
    }
    .course-faq .faq-intro{
        font-size: 14.5px;
        line-height: 1.6;
        color: #4a3030;
        margin: 6px 0 22px;
        max-width: 760px;
    }
    .course-faq .faq-toolbar{
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 18px;
    }
    .course-faq .faq-search{
        position: relative;
        flex: 1 1 280px;
        max-width: 420px;
    }
    .course-faq .faq-search input{
        width: 100%;
        font-family: inherit;
        font-size: 14px;
        padding: 11px 14px 11px 38px;
        border: 1.5px solid #e7d6c7;
        border-radius: 999px;
        background: #fff;
        color: #2a1414;
        transition: border-color .2s ease, box-shadow .2s ease;
        outline: none;
    }
    .course-faq .faq-search input::placeholder{ color: #a08a7a; }
    .course-faq .faq-search input:focus{
        border-color: #800000;
        box-shadow: 0 0 0 4px rgba(128,0,0,.10);
    }
    .course-faq .faq-search .faq-search-icon{
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: #800000;
        font-size: 14px;
        pointer-events: none;
    }
    .course-faq .faq-count{
        font-size: 12px;
        font-weight: 700;
        color: #800000;
        background: rgba(128,0,0,.06);
        border: 1px solid rgba(128,0,0,.18);
        padding: 6px 12px;
        border-radius: 999px;
        white-space: nowrap;
    }
    .course-faq .faq-actions{
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }
    .course-faq .faq-actions button{
        font-family: inherit;
        font-size: 12px;
        font-weight: 700;
        color: #800000;
        background: #fff;
        border: 1.5px solid rgba(128,0,0,.25);
        padding: 8px 14px;
        border-radius: 999px;
        cursor: pointer;
        transition: background .15s ease, color .15s ease, border-color .15s ease;
    }
    .course-faq .faq-actions button:hover{
        background: #800000;
        color: #fff;
        border-color: #800000;
    }
    .course-faq .faq-list{
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    /* Single accordion item — built on native <details>/<summary> */
    .course-faq details.faq-item{
        background: #fff;
        border: 1.5px solid #ecd9c5;
        border-radius: 12px;
        overflow: hidden;
        transition: border-color .2s ease, box-shadow .2s ease, transform .2s ease;
        box-shadow: 0 1px 0 rgba(94,0,0,.02);
    }
    .course-faq details.faq-item[open]{
        border-color: #800000;
        box-shadow: 0 8px 24px rgba(94,0,0,.10);
    }
    .course-faq details.faq-item summary{
        list-style: none;
        cursor: pointer;
        padding: 16px 56px 16px 20px;
        position: relative;
        font-weight: 600;
        font-size: 15px;
        color: #2a1414;
        line-height: 1.5;
        user-select: none;
        outline: none;
    }
    .course-faq details.faq-item summary::-webkit-details-marker{ display: none; }
    .course-faq details.faq-item summary:focus-visible{
        box-shadow: inset 0 0 0 3px rgba(255,183,3,.45);
        border-radius: 12px;
    }
    .course-faq details.faq-item summary::before{
        content: "Q";
        position: absolute;
        left: 20px;
        top: 16px;
        width: 24px;
        height: 24px;
        font-size: 11px;
        font-weight: 800;
        color: #fff;
        background: linear-gradient(135deg,#800000 0%,#5e0000 100%);
        border-radius: 50%;
        display: none;     /* show only when ≥ 480px (rule below) */
        align-items: center;
        justify-content: center;
        letter-spacing: 0;
    }
    .course-faq details.faq-item summary{
        padding-left: 20px;
    }
    @media (min-width: 480px){
        .course-faq details.faq-item summary{
            padding-left: 56px;
        }
        .course-faq details.faq-item summary::before{
            display: inline-flex;
        }
    }
    .course-faq details.faq-item summary::after{
        content: "";
        position: absolute;
        right: 22px;
        top: 50%;
        width: 10px;
        height: 10px;
        border-right: 2.5px solid #800000;
        border-bottom: 2.5px solid #800000;
        transform: translateY(-70%) rotate(45deg);
        transition: transform .2s ease;
    }
    .course-faq details.faq-item[open] summary::after{
        transform: translateY(-30%) rotate(-135deg);
    }
    .course-faq details.faq-item .faq-answer{
        padding: 0 20px 18px;
        font-size: 14px;
        line-height: 1.7;
        color: #3a2424;
        border-top: 1px dashed rgba(128,0,0,.18);
        margin-top: 0;
        padding-top: 14px;
    }
    @media (min-width: 480px){
        .course-faq details.faq-item .faq-answer{
            padding-left: 56px;
        }
    }
    .course-faq details.faq-item .faq-answer a{
        color: #800000;
        text-decoration: underline;
        text-underline-offset: 2px;
        word-break: break-word;
    }
    .course-faq details.faq-item .faq-answer a:hover{ color: #d62828; }

    /* No-results message */
    .course-faq .faq-empty{
        text-align: center;
        padding: 30px 20px;
        background: #fff8ec;
        border: 1px dashed #e9c98a;
        border-radius: 12px;
        color: #5e3a00;
        font-size: 14px;
        display: none;
    }
    .course-faq .faq-empty.is-visible{ display: block; }

    /* Hide via filter without affecting accordion state */
    .course-faq details.faq-item.is-hidden{ display: none; }

    /* Highlight match inside summary */
    .course-faq mark.faq-hl{
        background: #ffe69a;
        color: inherit;
        padding: 0 2px;
        border-radius: 3px;
    }

    @media (max-width: 575px){
        .course-faq{ margin-top: 36px; }
        .course-faq h2.faq-heading{ font-size: 22px; }
        .course-faq details.faq-item summary{ font-size: 14px; padding-right: 44px; }
    }
</style>

<section class="course-faq" id="<?php echo htmlspecialchars($__faq_id, ENT_QUOTES, 'UTF-8'); ?>" aria-labelledby="<?php echo htmlspecialchars($__faq_id, ENT_QUOTES, 'UTF-8'); ?>-heading">
    <?php if ($__faq_program): ?>
        <span class="faq-eyebrow"><?php echo htmlspecialchars($__faq_program, ENT_QUOTES, 'UTF-8'); ?> &middot; FAQs</span>
    <?php endif; ?>
    <h2 class="faq-heading" id="<?php echo htmlspecialchars($__faq_id, ENT_QUOTES, 'UTF-8'); ?>-heading"><?php echo htmlspecialchars($__faq_title, ENT_QUOTES, 'UTF-8'); ?></h2>
    <?php if ($__faq_intro): ?>
        <p class="faq-intro"><?php echo htmlspecialchars($__faq_intro, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <div class="faq-toolbar">
        <label class="faq-search" for="<?php echo htmlspecialchars($__faq_id, ENT_QUOTES, 'UTF-8'); ?>-search">
            <i class="fa fa-search faq-search-icon" aria-hidden="true"></i>
            <input
                id="<?php echo htmlspecialchars($__faq_id, ENT_QUOTES, 'UTF-8'); ?>-search"
                type="search"
                placeholder="Search questions… e.g. fees, placements, hostel"
                autocomplete="off"
                spellcheck="false"
                aria-label="Search <?php echo htmlspecialchars($__faq_program ?: 'course', ENT_QUOTES, 'UTF-8'); ?> FAQs"
            />
        </label>
        <div class="faq-actions">
            <span class="faq-count" data-faq-count><?php echo count($course_faqs); ?> questions</span>
            <button type="button" data-faq-expand>Expand all</button>
            <button type="button" data-faq-collapse>Collapse all</button>
        </div>
    </div>

    <div class="faq-list" data-faq-list>
        <?php foreach ($course_faqs as $i => $item):
            $q = isset($item['q']) ? $item['q'] : '';
            $a = isset($item['a']) ? $item['a'] : '';
            if ($q === '' || $a === '') continue;
        ?>
            <details class="faq-item" data-faq-item>
                <summary><span data-faq-q><?php echo htmlspecialchars($q, ENT_QUOTES, 'UTF-8'); ?></span></summary>
                <div class="faq-answer"><?php echo $__render_answer($a); ?></div>
            </details>
        <?php endforeach; ?>
    </div>

    <div class="faq-empty" data-faq-empty>No questions matched your search. Try a different keyword, or <a href="https://iitmjanakpuri.com/admissions/enquiry.php" style="color:#800000;font-weight:700;">ask us directly</a>.</div>
</section>

<!-- FAQPage schema for rich snippets in Google search results -->
<script type="application/ld+json">
<?php
$schema = [
    '@context' => 'https://schema.org',
    '@type'    => 'FAQPage',
    'mainEntity' => array_values(array_filter(array_map(function($item) {
        if (empty($item['q']) || empty($item['a'])) return null;
        return [
            '@type' => 'Question',
            'name'  => $item['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $item['a'],
            ],
        ];
    }, $course_faqs))),
];
echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>
</script>

<script>
(function(){
    var root = document.getElementById(<?php echo json_encode($__faq_id); ?>);
    if (!root) return;
    var searchInput = root.querySelector('input[type="search"]');
    var items = Array.prototype.slice.call(root.querySelectorAll('[data-faq-item]'));
    var countEl = root.querySelector('[data-faq-count]');
    var emptyEl = root.querySelector('[data-faq-empty]');
    var expandBtn = root.querySelector('[data-faq-expand]');
    var collapseBtn = root.querySelector('[data-faq-collapse]');
    var total = items.length;

    function escapeRegex(s){ return s.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'); }
    function strip(s){ return (s || '').toLowerCase(); }

    // Cache original question text so we can re-highlight clean each keystroke.
    items.forEach(function(it){
        var span = it.querySelector('[data-faq-q]');
        if (span) span.setAttribute('data-original', span.textContent);
    });

    function applyFilter(query){
        var q = strip(query).trim();
        var visible = 0;
        items.forEach(function(it){
            var qSpan = it.querySelector('[data-faq-q]');
            var ans = it.querySelector('.faq-answer');
            var qText = qSpan ? qSpan.getAttribute('data-original') : '';
            var aText = ans ? ans.textContent : '';
            var haystack = strip(qText + ' ' + aText);
            var match = !q || haystack.indexOf(q) !== -1;
            if (match) {
                it.classList.remove('is-hidden');
                visible++;
                if (qSpan) {
                    if (q) {
                        var re = new RegExp('(' + escapeRegex(q) + ')', 'ig');
                        qSpan.innerHTML = qText.replace(re, '<mark class="faq-hl">$1</mark>');
                    } else {
                        qSpan.textContent = qText;
                    }
                }
            } else {
                it.classList.add('is-hidden');
                if (qSpan) qSpan.textContent = qText;
            }
        });
        if (countEl) {
            countEl.textContent = (q ? visible + ' of ' + total : total + ' questions') + (q && visible === 1 ? '' : '');
        }
        if (emptyEl) emptyEl.classList.toggle('is-visible', visible === 0);
    }

    if (searchInput) {
        searchInput.addEventListener('input', function(){ applyFilter(this.value); });
    }
    if (expandBtn) {
        expandBtn.addEventListener('click', function(){
            items.forEach(function(it){ if (!it.classList.contains('is-hidden')) it.setAttribute('open', ''); });
        });
    }
    if (collapseBtn) {
        collapseBtn.addEventListener('click', function(){
            items.forEach(function(it){ it.removeAttribute('open'); });
        });
    }
})();
</script>
