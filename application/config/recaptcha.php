<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['use_captcha'] = true;

// To use reCAPTCHA, you need to sign up for an API key pair for your site.
// link: http://www.google.com/recaptcha/admin

$config['recaptcha_site_key'] = '';
$config['recaptcha_secret_key'] = '';

// reCAPTCHA supported 40+ languages listed here:
// https://developers.google.com/recaptcha/docs/language

$config['recaptcha_lang'] = 'en';

// Theme
$config['recaptcha_theme'] = 'dark';

/* End of file recaptcha.php */
/* Location: ./application/config/recaptcha.php */
