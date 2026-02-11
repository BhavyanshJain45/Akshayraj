# Akshayraj Industry Pvt. Ltd. Static Website

A multi-page static business website built with pure HTML, CSS and JavaScript, plus a PHP contact mail handler.

## Project Structure

- `index.html`
- `about.html`
- `products.html`
- `manufacturing.html`
- `contact.html`
- `send-mail.php`
- `assets/css/style.css`
- `assets/js/main.js`
- `assets/images/*`
- `assets/svg/*`

## Hostinger Deployment Instructions

1. **Prepare files**
   - Keep all files/folders exactly as in this repository.
   - Ensure `send-mail.php` is in your web root (`public_html`).

2. **Upload to Hostinger**
   - Log into Hostinger hPanel.
   - Open **File Manager** → `public_html`.
   - Upload all project files and folders.

3. **PHP mail setup**
   - Confirm your plan supports PHP `mail()`.
   - In Hostinger Email settings, configure a domain email (recommended `no-reply@yourdomain.com`).
   - Optionally replace sender in `send-mail.php` with that mailbox.

4. **Domain and SSL**
   - Point your domain to Hostinger if not already done.
   - Enable SSL in hPanel and force HTTPS.

5. **Test contact form**
   - Open `https://yourdomain.com/contact.html`.
   - Submit a test message and confirm delivery at `sales@akshayrajindustry.com`.

6. **Troubleshooting**
   - If mail does not send, check Hostinger logs and disable spam keywords in test content.
   - Verify file permissions (typically `644` for files, `755` for folders).

## Local Preview

Run a local PHP server from project root:

```bash
php -S 0.0.0.0:8000
```

Then open `http://localhost:8000`.
