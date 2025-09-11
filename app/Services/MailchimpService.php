<?php

namespace App\Services;

use DrewM\MailChimp\MailChimp;

class MailchimpService
{
    protected $mailchimp;
    protected $listId;

    public function __construct()
    {
        $this->mailchimp = new MailChimp(config('services.mailchimp.key'));
        $this->listId = config('services.mailchimp.list_id');
    }

    public function subscribe($email)
    {
        return $this->mailchimp->post("lists/{$this->listId}/members", [
            'email_address' => $email,
            'status'        => 'subscribed',
        ]);
    }
}
