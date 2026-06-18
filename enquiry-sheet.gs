/**
 * IITM Janakpuri — Admission Enquiry capture endpoint.
 *
 * Receives POSTs from the website enquiry popup (enquiry-modal.php) and appends
 * one row per enquiry to the spreadsheet this script is bound to.
 *
 * SETUP (one time):
 *   1. Create a Google Sheet (the admission team will open this to view leads).
 *   2. In that Sheet: Extensions ▸ Apps Script. Delete any sample code,
 *      paste THIS whole file, and Save.
 *   3. Deploy ▸ New deployment ▸ (gear) Web app.
 *        - Description: IITM enquiry capture
 *        - Execute as:   Me
 *        - Who has access: Anyone
 *      Click Deploy, authorise when prompted.
 *   4. Copy the Web app URL (ends in /exec) and paste it into enquiry-modal.php
 *      as the value of SHEET_ENDPOINT.
 *
 * If you change this script later, you must Deploy ▸ Manage deployments ▸ Edit
 * ▸ New version, otherwise the live URL keeps running the old code.
 */

var SHEET_NAME = 'Enquiries';
var HEADERS = ['Timestamp', 'Name', 'Phone', 'Email', 'Course', 'Lead',
               'Exam', 'Rank', 'Other Exam', 'Other Rank', 'Page'];

function doPost(e) {
  // Serialise concurrent submissions so two enquiries never overwrite a row.
  var lock = LockService.getScriptLock();
  lock.waitLock(30000);
  try {
    var ss = SpreadsheetApp.getActiveSpreadsheet();
    var sheet = ss.getSheetByName(SHEET_NAME) || ss.insertSheet(SHEET_NAME);

    // First write to an empty sheet: lay down a bold, frozen header row.
    if (sheet.getLastRow() === 0) {
      sheet.appendRow(HEADERS);
      sheet.getRange(1, 1, 1, HEADERS.length).setFontWeight('bold');
      sheet.setFrozenRows(1);
    }

    var p = (e && e.parameter) ? e.parameter : {};
    var ts = Utilities.formatDate(new Date(), 'Asia/Kolkata', 'yyyy-MM-dd HH:mm:ss');

    sheet.appendRow([
      ts,
      p.name   || '',
      p.phone  || '',
      p.email  || '',
      p.course || '',
      p.lead   || '',
      p.exam   || '',
      p.rank   || '',
      p.exam2  || '',
      p.rank2  || '',
      p.page   || ''
    ]);

    return ContentService
      .createTextOutput(JSON.stringify({ ok: true }))
      .setMimeType(ContentService.MimeType.JSON);
  } catch (err) {
    return ContentService
      .createTextOutput(JSON.stringify({ ok: false, error: String(err) }))
      .setMimeType(ContentService.MimeType.JSON);
  } finally {
    lock.releaseLock();
  }
}

// Visiting the URL in a browser just confirms it is live (handy sanity check).
function doGet() {
  return ContentService.createTextOutput('IITM enquiry endpoint is live.');
}
