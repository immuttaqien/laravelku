<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KirimEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');

        return $this->from('admin@malasngoding.com')
                    ->view('emailku')
                    ->with(['nama' => 'Ilham Muttaqien', 'website' => 'iamdev.web.id'])
                    ->attach(public_path('/data_file/1602669128_distarcip.png'), ['as' => 'distarcip.png', 'mime' => 'image/png']);
    }
}
