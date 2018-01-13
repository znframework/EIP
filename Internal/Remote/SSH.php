<?php namespace ZN\Shell;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\Config;
use ZN\Support;
use ZN\Remote\Exception\FileNotFoundException;
use ZN\Remote\Exception\FileRemoteUploadException;
use ZN\Remote\Exception\FileRemoteDownloadException;
use ZN\Remote\Exception\FolderChangeNameException;
use ZN\Remote\Exception\FolderNotFoundException;
use ZN\Remote\Exception\FolderAllreadyException;
use ZN\Remote\Exception\InvalidArgumentException;

class SSH implements SSHInterface
{
    //--------------------------------------------------------------------------------------------------------
    // Protected $connect
    //--------------------------------------------------------------------------------------------------------
    //
    // @const resource
    //
    //--------------------------------------------------------------------------------------------------------
    protected $connect = NULL;

    //--------------------------------------------------------------------------------------------------------
    // Protected $login
    //--------------------------------------------------------------------------------------------------------
    //
    // @const resource
    //
    //--------------------------------------------------------------------------------------------------------
    protected $login = NULL;

    //--------------------------------------------------------------------------------------------------------
    // Protected $stream
    //--------------------------------------------------------------------------------------------------------
    //
    // @const resource
    //
    //--------------------------------------------------------------------------------------------------------
    protected $stream = NULL;

    //--------------------------------------------------------------------------------------------------------
    // Protected $command
    //--------------------------------------------------------------------------------------------------------
    //
    // @const string
    //
    //--------------------------------------------------------------------------------------------------------
    protected $command = '';

    //--------------------------------------------------------------------------------------------------------
    // __construct()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $config: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function __construct(Array $config = [])
    {
        Support::func('ssh2_connect', 'SSH(Secure Shell)');

        parent::__construct();

        if( ! empty($config) )
        {
            $config = Config::get('Services', 'ssh', $config);
        }
        else
        {
            $config = Config::get('Services', 'ssh');
        }

        $this->_connect($config);
    }

    //--------------------------------------------------------------------------------------------------------
    // command()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function command(String $command) : SSH
    {
        $this->command .= $command.' ';

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // run()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function run(String $command = NULL)
    {
        if( ! empty($this->connect) )
        {
            if( ! empty($this->command) )
            {
                $command = rtrim($this->command);
            }

            $this->_defaultVariables();

            return $this->stream = ssh2_exec($this->connect, $command);
        }

        return false;
    }

    //--------------------------------------------------------------------------------------------------------
    // output()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function output(Int $length = 4096) : String
    {
        $stream = $this->stream;

        stream_set_blocking($stream, true);

        $data = "";

        while( $buffer = fread($stream, $length) )
        {
            $data .= $buffer;
        }

        fclose($stream);

        return $data;
    }

    //--------------------------------------------------------------------------------------------------------
    // upload()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $localPath : empty
    // @param string $remotePath: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function upload(String $localPath, String $remotePath) : Bool
    {
        if( @ssh2_scp_send($this->connect, $localPath, $remotePath) )
        {
            return true;
        }
        else
        {
            throw new FileRemoteUploadException(NULL, $localPath);
        }
    }

    //--------------------------------------------------------------------------------------------------------
    // dowload()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $remotePath: empty
    // @param string $localPath : empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function download(String $remotePath, String $localPath) : Bool
    {
        if( @ssh2_scp_recv($this->connect, $remotePath, $localPath) )
        {
            return true;
        }
        else
        {
            throw new FileRemoteDownloadException(NULL, $localPath);
        }
    }

    //--------------------------------------------------------------------------------------------------------
    // createFolder()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $path: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function createFolder(String $path, Int $mode = 0777, Bool $recursive = true) : Bool
    {
        if( @ssh2_sftp_mkdir($this->connect, $path, $mode, $recursive) )
        {
            return true;
        }
        else
        {
            throw new FolderAllreadyException(NULL, $path);
        }
    }

    //--------------------------------------------------------------------------------------------------------
    // deleteFolder()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $path: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function deleteFolder(String $path) : Bool
    {
        if( @ssh2_sftp_rmdir($this->connect, $path) )
        {
            return true;
        }
        else
        {
            throw new FolderNotFoundException(NULL, $path);
        }

    }

    //--------------------------------------------------------------------------------------------------------
    // rename()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $oldName: empty
    // @param string $newName: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function rename(String $oldName, String $newName) : Bool
    {
        if( @ssh2_sftp_rename($this->connect, $oldName, $newName) )
        {
            return true;
        }
        else
        {
            throw new FolderChangeNameException(NULL, $oldName);
        }
    }

    //--------------------------------------------------------------------------------------------------------
    // deleteFile()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $path: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function deleteFile(String $path) : Bool
    {
        if( @ssh2_sftp_unlink($this->connect, $path) )
        {
            return true;
        }
        else
        {
            throw new FileNotFoundException(NULL, $path);
        }
    }

    //--------------------------------------------------------------------------------------------------------
    // permission()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $path: empty
    // @param int $type   : 0755
    //
    //--------------------------------------------------------------------------------------------------------
    public function permission(String $path, Int $type = 0755) : Bool
    {
        if( @ssh2_sftp_chmod($this->connect, $path, $type) )
        {
            return true;
        }
        else
        {
            throw new InvalidArgumentException(NULL, '$this->connect');
        }
    }

    //--------------------------------------------------------------------------------------------------------
    // differentConnection()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $config: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function differentConnection(Array $config) : SSH
    {
        return new self($config);
    }

    //--------------------------------------------------------------------------------------------------------
    // close()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    protected function _close() : Bool
    {
        if( ! empty($this->connect) )
        {
            ssh2_exec($this->connect, 'exit');
            $this->connect = NULL;

            return true;
        }

        return false;
    }

    //--------------------------------------------------------------------------------------------------------
    // Protected connect()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $config: empty
    //
    //--------------------------------------------------------------------------------------------------------
    protected function _connect($config)
    {
        // ----------------------------------------------------------------------------
        // SSH BAĞLANTI AYARLARI YAPILANDIRILIYOR
        // ----------------------------------------------------------------------------
        $host      = $config['host'];
        $port      = $config['port'];
        $user      = $config['user'];
        $password  = $config['password'];
        $methods   = $config['methods'];
        $callbacks = $config['callbacks'];
        // ----------------------------------------------------------------------------

        // Bağlantı türü ayarına göre ssl veya normal
        // bağlatı yapılıp yapılmayacağı belirlenir.
        if(  ! empty($methods) && ! empty($callbacks))
        {
            $this->connect = ssh2_connect($host, $port, $methods, $callbacks);
        }
        elseif( ! empty($methods) )
        {
            $this->connect = ssh2_connect($host, $port, $methods);
        }
        else
        {
            $this->connect = ssh2_connect($host, $port);
        }

        if( empty($this->connect) )
        {
            throw new InvalidArgumentException(NULL, '$this->connect');
        }

        if( ! empty($user) )
        {
            $this->login = ssh2_auth_password($this->connect, $user, $password);
        }

        if( empty($this->login) )
        {
            throw new InvalidArgumentException(NULL, '$this->login');
        }

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Protected _defaultVariables()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    protected function _defaultVariables()
    {
        $this->command = '';
    }

    //--------------------------------------------------------------------------------------------------------
    // __destruct()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function __destruct()
    {
        $this->_close();
    }
}
