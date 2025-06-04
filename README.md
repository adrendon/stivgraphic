# stivgraphic

This project is a static portfolio site. It now includes a simple PHP script for the contact form and a Cypress test suite.

## Contact form setup

Edit `send-mail.php` and replace `you@example.com` with the email address that should receive contact form submissions. Ensure your PHP server is configured to send mail (e.g., via SMTP).

The contact form in `contact-me.html` posts to `send-mail.php` and expects the script to return a JSON response with `{"success": true}`.

## Running tests

Install dependencies and execute Cypress:

```bash
npm install
npm test
```

This will run Cypress in headless mode and execute the contact form test.
