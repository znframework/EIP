<?php namespace ZN\Email;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

interface SenderInterface
{
    //--------------------------------------------------------------------------------------------------------
    // Template -> 5.3.7
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $table
    // @param mixed  $column
    // @param array  $data
    //
    //--------------------------------------------------------------------------------------------------------
    public function template(String $table, $column, Array $data = []) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Template Match -> 5.3.7
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $table
    // @param string $column
    // @param array  $data
    //
    //--------------------------------------------------------------------------------------------------------
    public function templateMatch(String $content, Array $data) : String;

    //--------------------------------------------------------------------------------------------------------
    // Settings
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $settings
    //
    //--------------------------------------------------------------------------------------------------------
    public function settings(Array $settings = NULL) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Content Type
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $type: plain, html
    //
    //--------------------------------------------------------------------------------------------------------
    public function contentType(String $type = 'plain') : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Charset
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $charset
    //
    //--------------------------------------------------------------------------------------------------------
    public function charset(String $charset = 'UTF-8') : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Priority
    //--------------------------------------------------------------------------------------------------------
    //
    // @param int $count
    //
    //--------------------------------------------------------------------------------------------------------
    public function priority(Int $count = 3) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Add Header
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $header
    // @param string $value
    //
    //--------------------------------------------------------------------------------------------------------
    public function addHeader(String $header, String $value) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Encoding Type
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $type
    //
    //--------------------------------------------------------------------------------------------------------
    public function encodingType(String $type = '8bit') : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Multi Part
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $multiPart
    //
    //--------------------------------------------------------------------------------------------------------
    public function multiPart(String $multiPart = 'related') : Sender;

    //--------------------------------------------------------------------------------------------------------
    // SMTP Host
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $host
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpHost(String $host) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // SMTP User
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $user
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpUser(String $user) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // SMTP DNS
    //--------------------------------------------------------------------------------------------------------
    //
    // @param bool $dsn
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpDsn(Bool $dsn = true) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // SMTP Password
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $pass
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpPassword(String $pass) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // SMTP Port
    //--------------------------------------------------------------------------------------------------------
    //
    // @param int $port
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpPort(Int $port = 587) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // SMTP Timeout
    //--------------------------------------------------------------------------------------------------------
    //
    // @param int $timeout
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpTimeout(Int $timeout = 10) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // SMTP Keep Alive
    //--------------------------------------------------------------------------------------------------------
    //
    // @param bool $keepAlive
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpKeepAlive(Bool $keepAlive = true) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // SMTP Encode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $encode
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpEncode(String $encode) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // To
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed  $to
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function to($to, String $name) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Receiver
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed  $to
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function receiver($to, String $name) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Reply To
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed  $to
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function replyTo($replyTo, String $name) : Sender;


    //--------------------------------------------------------------------------------------------------------
    // CC
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed  $to
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function cc($cc, String $name) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // BCC
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed  $to
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function bcc($bcc, String $name) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // From
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $from
    // @param string $name
    // @param string $returnPath
    //
    //--------------------------------------------------------------------------------------------------------
    public function from(String $from, String $name = NULL, String $returnPath = NULL) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Sender
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $from
    // @param string $name
    // @param string $returnPath
    //
    //--------------------------------------------------------------------------------------------------------
    public function sender(String $from, String $name = NULL, String $returnPath = NULL) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Subject
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $subject
    //
    //--------------------------------------------------------------------------------------------------------
    public function subject(String $subject) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Message
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $message
    //
    //--------------------------------------------------------------------------------------------------------
    public function message(String $message) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Content
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $message
    //
    //--------------------------------------------------------------------------------------------------------
    public function content(String $message) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Attachment
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $file
    // @param string $disposition
    // @param string $newName
    // @param mixed  $mime
    //
    //--------------------------------------------------------------------------------------------------------
    public function attachment(String $file, String $disposition = NULL, String $newName = NULL, $mime = NULL) : Sender;

    //--------------------------------------------------------------------------------------------------------
    // Attachment Content ID
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $filename
    //
    //--------------------------------------------------------------------------------------------------------
    public function attachmentContentId(String $filename);

    //--------------------------------------------------------------------------------------------------------
    // Send
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $subject
    // @param string $message
    //
    //--------------------------------------------------------------------------------------------------------
    public function send(String $subject = NULL, String $message = NULL) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Driver
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $driver
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function driver(String $driver) : Sender;
}
