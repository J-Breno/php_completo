<?php
/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "fullstackphp");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.localhost/fsphp/06-seguranca-e-boas-praticas/06-08-camada-de-manipulacao-pt3");
define("CONF_URL_ADMIN", CONF_URL_BASE . "/admin");
define("CONF_URL_ERROR", CONF_URL_BASE . "/404");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * SESSION
 */
define("CONF_SES_PATH", __DIR__ . "/../../storage/sessions/");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "trigger");
define("CONF_MESSAGE_INFO", "info");
define("CONF_MESSAGE_SUCCESS", "success");
define("CONF_MESSAGE_WARNING", "warning");
define("CONF_MESSAGE_ERROR", "error");

/**
 * MAIL
 * */
define("CONF_MAIL_HOST", "smtp.mailersend.net");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "MS_7BFTAN@test-51ndgwvnp8rlzqx8.mlsender.net");
define("CONF_MAIL_SENDER", ["name" => "João Breno", "address" => "brenojoao2222@jbrenodev.com.br"]);
define("CONF_MAIL_PASS", "mssp.6lpdBsh.pq3enl6rw68l2vwr.AgNMmRB");

define("CONF_MAIL_OPTIONAL_LANG", "br");
define("CONF_MAIL_OPTIONAL_HTML", true);
define("CONF_MAIL_OPTIONAL_AUTH", true);
define("CONF_MAIL_OPTIONAL_SECURE", "tls");
define("CONF_MAIL_OPTIONAL_CHARSET", "utf-8");