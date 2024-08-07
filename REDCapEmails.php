<?php
namespace Stanford\REDCapEmails;

class REDCapEmails extends \ExternalModules\AbstractExternalModule {
    public function __construct() {
        parent::__construct();
        // Other code to run when object is instantiated
    }

    public function redcap_email( string $to, string $from, string $subject, string $message, $cc, $bcc, $fromName, $attachments ) {

    }


}
