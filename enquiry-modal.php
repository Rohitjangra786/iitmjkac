<?php
/*
 * Admission Enquiry Modal — shared site-wide partial.
 * Included once per page via naacfooter.php so the modal works on the homepage
 * AND every course page (bcom, bca, mba, etc.). Self-contained: carries its own
 * CSS + JS so it renders correctly wherever naacfooter.php is included.
 */
?>
<style>
/* ==================== ENQUIRY MODAL ==================== */
.enquiry-modal-content{
    border-radius: 18px !important;
    overflow: hidden;
    border: 0 !important;
    box-shadow: 0 30px 60px rgba(0,0,0,.35);
    font-family: 'Poppins', system-ui, sans-serif;
}
.enquiry-modal-content .modal-header{
    background: linear-gradient(135deg,#800000 0%,#a52a2a 60%,#5e0000 100%);
    color: #fff;
    padding: 18px 22px;
    border-bottom: 0;
    align-items: flex-start;
}
.enquiry-modal-content .modal-title{
    font-weight: 800;
    letter-spacing: .3px;
    font-size: 18px;
    line-height: 1.2;
}
.enquiry-modal-content .modal-title small{
    display: block;
    font-size: 11px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    opacity: .9;
    margin-top: 3px;
}
.enquiry-modal-content .btn-close{
    filter: invert(1) brightness(2);
    opacity: .9;
}
.enquiry-modal-content .modal-body{
    padding: 22px;
    background: #fffaf5;
}
.enquiry-modal-content .form-group{
    margin-bottom: 14px;
}
.enquiry-modal-content label{
    font-size: 11px;
    font-weight: 700;
    color: #800000;
    text-transform: uppercase;
    letter-spacing: .8px;
    display: block;
    margin-bottom: 5px;
}
.enquiry-modal-content .form-control,
.enquiry-modal-content .form-select{
    border-radius: 10px;
    border: 1.5px solid rgba(128,0,0,.18);
    padding: 11px 14px;
    font-size: 14px;
    background-color: #fff;
    transition: border-color .2s ease, box-shadow .2s ease;
    width: 100%;
    font-family: inherit;
}
.enquiry-modal-content .form-control:focus,
.enquiry-modal-content .form-select:focus{
    border-color: #800000;
    box-shadow: 0 0 0 4px rgba(128,0,0,.12);
    outline: 0;
}
.enquiry-modal-content .form-help{
    font-size: 11.5px;
    color: #6b6b6b;
    margin-top: 2px;
    line-height: 1.3;
}
/* Entrance Exam — dropdown that reveals a checkbox list (multi-select) */
.enquiry-modal-content .ms-select{
    position: relative;
}
.enquiry-modal-content .ms-toggle{
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;
    text-align: left;
    background-color: #fff;
    background-image: none; /* suppress Bootstrap .form-select caret; we draw our own */
    color: #3a3a3a;
    cursor: pointer;
}
.enquiry-modal-content .ms-toggle.is-placeholder{
    color: #8a8a8a;
}
.enquiry-modal-content .ms-toggle::after{
    content: "";
    flex: 0 0 auto;
    width: 8px;
    height: 8px;
    border-right: 2px solid #800000;
    border-bottom: 2px solid #800000;
    transform: rotate(45deg);
    margin-top: -3px;
    transition: transform .2s ease;
}
.enquiry-modal-content .ms-select.open .ms-toggle::after{
    transform: rotate(-135deg);
    margin-top: 2px;
}
.enquiry-modal-content .ms-menu{
    display: none;
    margin-top: 5px;
    background: #fff;
    border: 1.5px solid rgba(128,0,0,.18);
    border-radius: 10px;
    box-shadow: 0 12px 26px rgba(0,0,0,.14);
    padding: 6px;
    max-height: 190px;
    overflow-y: auto;
}
.enquiry-modal-content .ms-select.open .ms-menu{
    display: block;
}
.enquiry-modal-content label.ms-option{
    display: flex;
    align-items: center;
    gap: 9px;
    margin: 0;
    padding: 7px 9px;
    border-radius: 7px;
    font-size: 13px;
    font-weight: 500;
    color: #3a3a3a;
    text-transform: none;
    letter-spacing: normal;
    cursor: pointer;
}
.enquiry-modal-content label.ms-option:hover{
    background: rgba(128,0,0,.06);
}
.enquiry-modal-content label.ms-option input{
    width: 16px;
    height: 16px;
    flex: 0 0 auto;
    accent-color: #800000;
    cursor: pointer;
}
.enquiry-modal-content .ms-select.is-invalid .ms-toggle{
    border-color: #dc3545;
}
.enquiry-modal-content .ms-error{
    color: #dc3545;
    font-weight: 600;
}
/* Stack exam + its rank tightly so they read as one unit */
.enquiry-modal-content .exam-rank-input{
    margin-top: 8px;
}
.enquiry-modal-content .opt-tag{
    text-transform: none;
    font-weight: 500;
    letter-spacing: normal;
    color: #8a8a8a;
}
.btn-submit-enquiry{
    width: 100%;
    background: linear-gradient(135deg,#22c55e,#16a34a);
    color: #fff;
    border: 0;
    border-radius: 12px;
    padding: 13px 20px;
    font-weight: 800;
    font-size: 14px;
    letter-spacing: .5px;
    cursor: pointer;
    transition: transform .2s ease, box-shadow .2s ease;
    margin-top: 8px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}
.btn-submit-enquiry:hover,
.btn-submit-enquiry:focus{
    transform: translateY(-2px);
    box-shadow: 0 12px 26px rgba(22,163,74,.45);
}
</style>

<!-- Admission Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content enquiry-modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enquiryModalLabel">
                    Admission Enquiry
                    <small>2026 - 27 · Talk to admission incharge</small>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="enquiryForm" novalidate>
                    <div class="form-group">
                        <label for="enq-name">Student Name</label>
                        <input type="text" class="form-control" id="enq-name" name="name" required minlength="2" autocomplete="name" placeholder="Your full name">
                    </div>
                    <div class="form-group">
                        <label for="enq-email">Email</label>
                        <input type="email" class="form-control" id="enq-email" name="email" required autocomplete="email" placeholder="you@example.com">
                    </div>
                    <div class="form-group">
                        <label for="enq-phone">Phone</label>
                        <input type="tel" class="form-control" id="enq-phone" name="phone" required pattern="[0-9]{10}" autocomplete="tel" placeholder="10-digit mobile number">
                    </div>
                    <div class="form-group">
                        <label id="courseLabel">Course of Interest</label>
                        <div class="ms-select" id="courseSelect">
                            <button type="button" class="form-select ms-toggle is-placeholder" id="courseToggle" aria-haspopup="listbox" aria-expanded="false" aria-labelledby="courseLabel">
                                <span class="ms-text">Select a course</span>
                            </button>
                            <div class="ms-menu" role="listbox" aria-multiselectable="false">
                                <label class="ms-option"><input type="radio" name="course" value="BCA|8796283551|Ms. Leena Gupta"><span>BCA</span></label>
                                <label class="ms-option"><input type="radio" name="course" value="MCA|8796452755|Mr. Ashish Nayyar"><span>MCA</span></label>
                                <label class="ms-option"><input type="radio" name="course" value="BBA|8796452756|Dr. Deepali Saluja"><span>BBA</span></label>
                                <label class="ms-option"><input type="radio" name="course" value="B.Com (H)|8796452757|Dr. Raghav Jain"><span>B.Com (H)</span></label>
                                <label class="ms-option"><input type="radio" name="course" value="MBA|9560098709|Dr. Mandeep Singh"><span>MBA</span></label>
                                <label class="ms-option"><input type="radio" name="course" value="BA (JMC)|7217872947|Dr. Nivedita Sharma"><span>BA (JMC)</span></label>
                            </div>
                        </div>
                        <div class="form-help ms-error" id="courseError" style="display:none;">Please select your course of interest.</div>
                    </div>
                    <div class="form-group">
                        <label id="examLabel">Entrance Exam &amp; Rank</label>
                        <div class="ms-select" id="examSelect">
                            <button type="button" class="form-select ms-toggle is-placeholder" id="examToggle" aria-haspopup="listbox" aria-expanded="false" aria-labelledby="examLabel">
                                <span id="examText" class="ms-text">Select entrance exam</span>
                            </button>
                            <div class="ms-menu" id="examMenu" role="listbox" aria-multiselectable="false">
                                <label class="ms-option"><input type="radio" name="exam" value="NIMCET-MCA"><span>NIMCET-MCA</span></label>
                                <label class="ms-option"><input type="radio" name="exam" value="CAT - MBA"><span>CAT - MBA</span></label>
                                <label class="ms-option"><input type="radio" name="exam" value="CMAT - MBA"><span>CMAT - MBA</span></label>
                                <label class="ms-option"><input type="radio" name="exam" value="CET- MCA"><span>CET- MCA</span></label>
                                <label class="ms-option"><input type="radio" name="exam" value="CET - MBA"><span>CET - MBA</span></label>
                                <label class="ms-option"><input type="radio" name="exam" value="CUET - PG"><span>CUET - PG</span></label>
                                <label class="ms-option"><input type="radio" name="exam" value="CET-BCA"><span>CET-BCA</span></label>
                                <label class="ms-option"><input type="radio" name="exam" value="CET-BBA"><span>CET-BBA</span></label>
                                <label class="ms-option"><input type="radio" name="exam" value="CET - B.Com(H)"><span>CET - B.Com(H)</span></label>
                                <label class="ms-option"><input type="radio" name="exam" value="CET- BA(JMC)"><span>CET- BA(JMC)</span></label>
                                <label class="ms-option"><input type="radio" name="exam" value="CUET - UG"><span>CUET - UG</span></label>
                                <label class="ms-option"><input type="radio" name="exam" value="None"><span>None</span></label>
                            </div>
                        </div>
                        <input type="text" class="form-control exam-rank-input" id="enq-rank" name="rank" required autocomplete="off" placeholder="Rank / score" aria-label="Entrance exam rank">
                        <div class="form-help ms-error" id="examError" style="display:none;">Please select your entrance exam.</div>
                    </div>
                    <div class="form-group">
                        <label id="exam2Label">Other Exam &amp; Rank <span class="opt-tag">(optional)</span></label>
                        <div class="ms-select" id="exam2Select">
                            <button type="button" class="form-select ms-toggle is-placeholder" id="exam2Toggle" aria-haspopup="listbox" aria-expanded="false" aria-labelledby="exam2Label">
                                <span class="ms-text">Select entrance exam</span>
                            </button>
                            <div class="ms-menu" role="listbox" aria-multiselectable="false">
                                <label class="ms-option"><input type="radio" name="exam2" value="NIMCET-MCA"><span>NIMCET-MCA</span></label>
                                <label class="ms-option"><input type="radio" name="exam2" value="CAT - MBA"><span>CAT - MBA</span></label>
                                <label class="ms-option"><input type="radio" name="exam2" value="CMAT - MBA"><span>CMAT - MBA</span></label>
                                <label class="ms-option"><input type="radio" name="exam2" value="CET- MCA"><span>CET- MCA</span></label>
                                <label class="ms-option"><input type="radio" name="exam2" value="CET - MBA"><span>CET - MBA</span></label>
                                <label class="ms-option"><input type="radio" name="exam2" value="CUET - PG"><span>CUET - PG</span></label>
                                <label class="ms-option"><input type="radio" name="exam2" value="CET-BCA"><span>CET-BCA</span></label>
                                <label class="ms-option"><input type="radio" name="exam2" value="CET-BBA"><span>CET-BBA</span></label>
                                <label class="ms-option"><input type="radio" name="exam2" value="CET - B.Com(H)"><span>CET - B.Com(H)</span></label>
                                <label class="ms-option"><input type="radio" name="exam2" value="CET- BA(JMC)"><span>CET- BA(JMC)</span></label>
                                <label class="ms-option"><input type="radio" name="exam2" value="CUET - UG"><span>CUET - UG</span></label>
                                <label class="ms-option"><input type="radio" name="exam2" value="None"><span>None</span></label>
                            </div>
                        </div>
                        <input type="text" class="form-control exam-rank-input" id="enq-rank2" name="rank2" autocomplete="off" placeholder="Rank / score" aria-label="Other exam rank">
                    </div>
                    <button type="submit" class="btn-submit-enquiry">
                        <span>Send Enquiry on WhatsApp</span>
                        <span style="font-size:18px;">›</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
(function(){
    var modalEl = document.getElementById('enquiryModal');
    var form    = document.getElementById('enquiryForm');
    if (!modalEl || !form) return;

    // ---- Google Sheet capture ----------------------------------------------
    // Every enquiry is also saved to the admission Google Sheet so the team has
    // a record even when the student never completes the WhatsApp send.
    // Paste the Apps Script Web App /exec URL here (see ENQUIRY-SHEET-SETUP.md).
    var SHEET_ENDPOINT = 'https://script.google.com/macros/s/AKfycbyjRfZK6qnla8dUJFnU-jJC-K2Bu47YCInYo9zG-bT-dCZhSMm34o5W1q19vfmIdtQ8/exec';

    function saveToSheet(data){
        // Not configured yet — skip silently so the WhatsApp flow still works.
        if (!SHEET_ENDPOINT || SHEET_ENDPOINT.indexOf('PASTE_') === 0) return;
        try {
            var body = new URLSearchParams(data).toString();
            fetch(SHEET_ENDPOINT, {
                method:  'POST',
                mode:    'no-cors', // Apps Script sends no CORS headers; fire-and-forget
                headers: { 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' },
                body:    body,
                keepalive: true     // let it finish even as we open the WhatsApp tab
            }).catch(function(){ /* network hiccup — never block the user */ });
        } catch (_) { /* very old browser — skip silently */ }
    }

    // ---- Reusable single-select dropdown that reveals radio options ----
    function initRadioSelect(rootId, placeholder, errorEl){
        var root = document.getElementById(rootId);
        if (!root) return null;
        var menu   = root.querySelector('.ms-menu');
        var toggle = root.querySelector('.ms-toggle');
        var text   = root.querySelector('.ms-text');
        var radios = menu.querySelectorAll('input[type="radio"]');

        function picked(){ return menu.querySelector('input:checked'); }
        function open(o){
            root.classList.toggle('open', o);
            toggle.setAttribute('aria-expanded', o ? 'true' : 'false');
        }
        function refresh(){
            var p = picked();
            text.textContent = p ? p.parentNode.querySelector('span').textContent : placeholder;
            toggle.classList.toggle('is-placeholder', !p);
        }
        function setInvalid(bad){
            root.classList.toggle('is-invalid', bad);
            if (errorEl) errorEl.style.display = bad ? 'block' : 'none';
        }
        toggle.addEventListener('click', function(){ open(!root.classList.contains('open')); });
        radios.forEach(function(r){
            r.addEventListener('change', function(){
                refresh();
                setInvalid(false);
                open(false); // single choice — collapse once picked
            });
        });
        // Close when clicking outside the widget
        document.addEventListener('mousedown', function(e){
            if (!root.contains(e.target)) open(false);
        });

        return {
            value:    function(){ var p = picked(); return p ? p.value : ''; },
            isPicked: function(){ return !!picked(); },
            setInvalid: setInvalid,
            openFocus: function(){ open(true); toggle.focus(); },
            reset:    function(){ refresh(); setInvalid(false); open(false); }
        };
    }

    var courseSelect = initRadioSelect('courseSelect', 'Select a course', document.getElementById('courseError'));
    var examSelect   = initRadioSelect('examSelect', 'Select entrance exam', document.getElementById('examError'));
    var exam2Select  = initRadioSelect('exam2Select', 'Select entrance exam', null); // optional secondary exam

    // Auto-show the enquiry modal once per browser session, ~1.8s after page is interactive
    window.addEventListener('load', function(){
        try {
            if (sessionStorage.getItem('enquiryModalShown') === '1') return;
        } catch (_) { /* sessionStorage may be blocked — fall through and show */ }
        setTimeout(function(){
            var modal = bootstrap.Modal.getOrCreateInstance(modalEl);
            modal.show();
            try { sessionStorage.setItem('enquiryModalShown', '1'); } catch (_) {}
        }, 1800);
    });

    // Form submit → open WhatsApp with pre-filled message to the selected course lead
    form.addEventListener('submit', function(e){
        e.preventDefault();
        var courseOK = courseSelect && courseSelect.isPicked();
        var examOK   = examSelect && examSelect.isPicked();
        if (courseSelect) courseSelect.setInvalid(!courseOK);
        if (examSelect)   examSelect.setInvalid(!examOK);
        if (!form.checkValidity() || !courseOK || !examOK){
            form.classList.add('was-validated');
            if (!form.checkValidity()) form.reportValidity();
            else if (!courseOK) courseSelect.openFocus();
            else if (!examOK)   examSelect.openFocus();
            return;
        }
        var name   = form.name.value.trim();
        var email  = form.email.value.trim();
        var phone  = form.phone.value.trim();
        var parts  = courseSelect.value().split('|'); // [course, leadPhone, leadName]
        var course = parts[0], leadPhone = parts[1], leadName = parts[2];
        var exam   = examSelect.value();
        var rank   = form.rank.value.trim();
        var exam2  = exam2Select ? exam2Select.value() : '';
        var rank2  = form.rank2.value.trim();

        // Save the lead to the admission Google Sheet BEFORE opening WhatsApp,
        // so it is captured even if the student never sends the WhatsApp message.
        saveToSheet({
            name:   name,
            phone:  phone,
            email:  email,
            course: course,
            lead:   leadName,
            exam:   exam,
            rank:   rank,
            exam2:  exam2,
            rank2:  rank2,
            page:   location.href
        });

        var msg =
            'Hello ' + leadName + ',\n\n' +
            'I am interested in admission for ' + course + ' (Academic Year 2026-27) at IITM Janakpuri.\n\n' +
            'My Details:\n' +
            '• Name: '  + name  + '\n' +
            '• Phone: ' + phone + '\n' +
            '• Email: ' + email + '\n' +
            '• Entrance Exam: ' + exam + '\n' +
            '• Rank: ' + rank + '\n';
        if (exam2 || rank2){
            msg += '• Other Exam: ' + (exam2 || 'N/A') + '\n' +
                   '• Other Exam Rank: ' + (rank2 || 'N/A') + '\n';
        }
        msg += '\nPlease guide me through the admission process. Thank you!';

        var url = 'https://wa.me/91' + leadPhone + '?text=' + encodeURIComponent(msg);
        window.open(url, '_blank', 'noopener');

        // Close the modal after submit
        var modal = bootstrap.Modal.getInstance(modalEl);
        if (modal) modal.hide();
        form.reset();
        if (courseSelect) courseSelect.reset();
        if (examSelect)   examSelect.reset();
        if (exam2Select)  exam2Select.reset();
    });
})();
</script>
