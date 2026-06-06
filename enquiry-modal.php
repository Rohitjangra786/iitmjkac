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
.enquiry-modal-content .exam-group{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px 14px;
    margin-top: 2px;
}
.enquiry-modal-content label.exam-option{
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 0;
    font-size: 13px;
    font-weight: 500;
    color: #3a3a3a;
    text-transform: none;
    letter-spacing: normal;
    cursor: pointer;
}
.enquiry-modal-content label.exam-option input[type="checkbox"]{
    width: 16px;
    height: 16px;
    flex: 0 0 auto;
    accent-color: #800000;
    cursor: pointer;
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
                        <label for="enq-course">Course of Interest</label>
                        <select class="form-select" id="enq-course" name="course" required>
                            <option value="" disabled selected>Select a course</option>
                            <option value="BCA|8796283551|Ms. Leena Gupta">BCA</option>
                            <option value="MCA|8796452755|Mr. Ashish Nayyar">MCA</option>
                            <option value="BBA|8796452756|Dr. Deepali Saluja">BBA</option>
                            <option value="B.Com (H)|8796452757|Dr. Raghav Jain">B.Com (H)</option>
                            <option value="MBA|9560098709|Dr. Mandeep Singh">MBA</option>
                            <option value="BA (JMC)|7217872947|Dr. Nivedita Sharma">BA (JMC)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Entrance Exam</label>
                        <div class="exam-group">
                            <label class="exam-option"><input type="checkbox" name="exam" value="NIMCET-MCA"> NIMCET-MCA</label>
                            <label class="exam-option"><input type="checkbox" name="exam" value="CAT - MBA"> CAT - MBA</label>
                            <label class="exam-option"><input type="checkbox" name="exam" value="CMAT - MBA"> CMAT - MBA</label>
                            <label class="exam-option"><input type="checkbox" name="exam" value="CET- MCA"> CET- MCA</label>
                            <label class="exam-option"><input type="checkbox" name="exam" value="CET - MBA"> CET - MBA</label>
                            <label class="exam-option"><input type="checkbox" name="exam" value="CUET - PG"> CUET - PG</label>
                            <label class="exam-option"><input type="checkbox" name="exam" value="CET-BCA"> CET-BCA</label>
                            <label class="exam-option"><input type="checkbox" name="exam" value="CET-BBA"> CET-BBA</label>
                            <label class="exam-option"><input type="checkbox" name="exam" value="CET - B.Com(H)"> CET - B.Com(H)</label>
                            <label class="exam-option"><input type="checkbox" name="exam" value="CET- BA(JMC)"> CET- BA(JMC)</label>
                            <label class="exam-option"><input type="checkbox" name="exam" value="CUET - UG"> CUET - UG</label>
                            <label class="exam-option"><input type="checkbox" name="exam" value="None"> None</label>
                        </div>
                        <div class="form-help">Select all that apply.</div>
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

    // Entrance Exam is a checkbox group (at least one required). Clear the
    // "select at least one" error as soon as the user ticks any box.
    var examBoxes = form.querySelectorAll('input[name="exam"]');
    var firstExam = examBoxes[0];
    examBoxes.forEach(function(cb){
        cb.addEventListener('change', function(){ if (firstExam) firstExam.setCustomValidity(''); });
    });

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
        // Require at least one entrance-exam checkbox before the native validity check
        var examChecked = form.querySelectorAll('input[name="exam"]:checked');
        if (firstExam) firstExam.setCustomValidity(examChecked.length ? '' : 'Please select at least one entrance exam.');
        if (!form.checkValidity()){
            form.classList.add('was-validated');
            form.reportValidity();
            return;
        }
        var name   = form.name.value.trim();
        var email  = form.email.value.trim();
        var phone  = form.phone.value.trim();
        var parts  = form.course.value.split('|'); // [course, leadPhone, leadName]
        var course = parts[0], leadPhone = parts[1], leadName = parts[2];
        var exam   = Array.prototype.map.call(examChecked, function(n){ return n.value; }).join(', ');

        var msg =
            'Hello ' + leadName + ',\n\n' +
            'I am interested in admission for ' + course + ' (Academic Year 2026-27) at IITM Janakpuri.\n\n' +
            'My Details:\n' +
            '• Name: '  + name  + '\n' +
            '• Phone: ' + phone + '\n' +
            '• Email: ' + email + '\n' +
            '• Entrance Exam: ' + exam + '\n\n' +
            'Please guide me through the admission process. Thank you!';

        var url = 'https://wa.me/91' + leadPhone + '?text=' + encodeURIComponent(msg);
        window.open(url, '_blank', 'noopener');

        // Close the modal after submit
        var modal = bootstrap.Modal.getInstance(modalEl);
        if (modal) modal.hide();
        form.reset();
    });
})();
</script>
