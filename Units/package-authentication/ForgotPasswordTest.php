<?php namespace ZN\Authentication;

class ForgotPasswordTest extends \PHPUnit\Framework\TestCase
{
    public function testEmail()
    {
        $class = new ForgotPassword;
        
        $class->email($email = 'robot@znframework.com');
        
        $this->assertSame($email, Properties::$parameters['email']);
    }

    public function testVerification()
    {
        $class = new ForgotPassword;
        
        $class->verification($verification = 'x9');
        
        $this->assertSame($verification, Properties::$parameters['verification']);
    }

    public function testPasswordChangeProcess()
    {
        $class = new ForgotPassword;
        
        $class->passwordChangeProcess();
        
        $this->assertSame('before', Properties::$parameters['changePassword']);

        $class->passwordChangeProcess('after');
        
        $this->assertSame('after', Properties::$parameters['changePassword']);
    }

    public function testDo()
    {
        $class = new ForgotPassword;

        $this->assertSame(false, $class->do('robot@znframework', 'accounts/forgot-password'));
    }
}