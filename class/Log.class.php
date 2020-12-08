<<<<<<< HEAD
<?php
class Log
{
    private $l; //tablica tablic - 1 wiersz - jedna pozycja dziennika

    public function __construct()
    {
        $this->l = array();
    }

    public function log(string $message, string $sender = 'none', string $type = 'info')
    {
        $entry = array(
            'timestamp' => time(),
            'message'   => $message,
            'sender'    => $sender,
            'type'      => $type,
        );
        array_push($this->l, $entry);
    }

    public function getLog($lines = 10) : array
    {
        return array_slice($this->l, $lines * -1);
    }

}


=======
<?php
class Log
{
    private $l; //tablica tablic - 1 wiersz - jedna pozycja dziennika

    public function __construct()
    {
        $this->l = array();
    }

    public function log(string $message, string $sender = 'none', string $type = 'info')
    {
        $entry = array(
            'timestamp' => time(),
            'message'   => $message,
            'sender'    => $sender,
            'type'      => $type,
        );
        array_push($this->l, $entry);
    }

    public function getLog($lines = 10) : array
    {
        return array_slice($this->l, $lines * -1);
    }

}


>>>>>>> dd5786440ba388018ccbd215792f79b9b6efcfeb
?>