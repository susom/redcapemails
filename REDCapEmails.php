<?php
namespace Stanford\REDCapEmails;

class REDCapEmails extends \ExternalModules\AbstractExternalModule {
    public function __construct() {
        parent::__construct();
        // Other code to run when object is instantiated
    }

    public function redcap_email( string $to, string $from, string $subject, string $message, $cc, $bcc, $fromName, $attachments ) {
        global $Proj;
        $id = $Proj->project_id;
        if($id){
            global $from_email;
            $universal_email = \System::getUniversalFromAddess();
            $parts = explode("@", $universal_email);
            $re = '/[a-zA-Z0-9\-]+\+\d+/m';

            // only append pid if it was not appended before.
            if (!preg_match($re, $parts[0])) {
                $from_email = $parts[0] . "+$id"  . "@" . $parts[1];
            }

        }

        return TRUE;
    }


}
