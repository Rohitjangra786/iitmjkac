# Admission Enquiry → Google Sheet — Setup Guide

The admission-enquiry popup (`enquiry-modal.php`) now saves **every** submission to a
Google Sheet, in addition to opening WhatsApp. This means the admission team gets a
record of each lead even when the student never completes the WhatsApp send.

You only need to do this **once**. Takes about 5 minutes.

---

## Step 1 — Create the Google Sheet

1. Sign in with the admission team's Google account (use a shared/department
   account, not a personal one, so access survives staff changes).
2. Go to <https://sheets.new> to create a blank spreadsheet.
3. Rename it to something clear, e.g. **"IITM Admission Enquiries 2026-27"**.
4. Leave it blank — the script fills in the header row automatically on the first
   enquiry.

## Step 2 — Add the capture script

1. In that Sheet: **Extensions ▸ Apps Script**.
2. Delete any sample code in the editor.
3. Open the file **`enquiry-sheet.gs`** from this project, copy **all** of it, and
   paste it into the Apps Script editor.
4. Click the **Save** (💾) icon.

## Step 3 — Deploy as a Web App

1. Click **Deploy ▸ New deployment**.
2. Click the gear icon ⚙ next to "Select type" and choose **Web app**.
3. Fill in:
   - **Description:** `IITM enquiry capture`
   - **Execute as:** `Me`
   - **Who has access:** `Anyone`  ← important, or the website can't post to it
4. Click **Deploy**. Google will ask you to **authorise** — approve it
   (choose your account ▸ Advanced ▸ "Go to … (unsafe)" ▸ Allow). This warning is
   normal for your own scripts.
5. Copy the **Web app URL**. It ends in **`/exec`** and looks like:
   `https://script.google.com/macros/s/AKfy.....long.....string/exec`

> Sanity check: paste that URL into a browser. You should see
> `IITM enquiry endpoint is live.`

## Step 4 — Connect the website to the Sheet

1. Open **`enquiry-modal.php`**.
2. Near the top of the `<script>` block, find this line:

   ```js
   var SHEET_ENDPOINT = 'PASTE_YOUR_APPS_SCRIPT_WEB_APP_URL_HERE';
   ```

3. Replace the placeholder with your `/exec` URL from Step 3, e.g.:

   ```js
   var SHEET_ENDPOINT = 'https://script.google.com/macros/s/AKfy..../exec';
   ```

4. Save, commit, and deploy (cPanel ▸ Git Version Control ▸ **Deploy HEAD Commit**).

## Step 5 — Test it end-to-end

1. Open the live site, let the enquiry popup appear (or click the ✉️ button).
2. Fill it in with a test name and submit.
3. Open the Google Sheet — a new row should appear within a second or two, with
   columns: **Timestamp, Name, Phone, Email, Course, Lead, Exam, Rank, Other Exam,
   Other Rank, Page**.

That's it. The admission team just bookmarks the Sheet link to review leads anytime.

---

## How the team uses it

- **Bookmark the Sheet** — no website login needed. Multiple people can view at once.
- **Sort / filter** by Course or Date using Google Sheets' built-in tools
  (Data ▸ Create a filter).
- **Optional email alert** for new leads: in the Sheet, **Tools ▸ Notification
  settings ▸ Notify me when… any changes are made**, choose how often.

## Notes & troubleshooting

- **Timezone:** the Timestamp is recorded in IST (Asia/Kolkata).
- **WhatsApp still works exactly as before** — this only *adds* the Sheet record.
  If the Sheet endpoint is ever down, the popup still opens WhatsApp normally.
- **Nothing appears in the Sheet?** Re-check that *Who has access* = **Anyone**, and
  that `SHEET_ENDPOINT` ends in `/exec` (not `/dev`).
- **You edited the .gs script later?** You must **Deploy ▸ Manage deployments ▸
  Edit ✏ ▸ Version: New version ▸ Deploy** for changes to go live. The `/exec` URL
  stays the same.
- **Privacy:** this Sheet holds students' names, phones and emails. Keep sharing
  restricted to the admission team only.
