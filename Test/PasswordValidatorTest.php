<?php

namespace qwer;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class PasswordValidatorTest extends TestCase
{
    private PasswordValidator $passwordValidator;

    
    protected function setUp():void
    {
        $this->passwordValidator=new PasswordValidator();
    }

    public static function additionProvider(): array
    {
        return [
            
            ['Af12345678',true],
            ['Dfaaaaa',false],
            ['123456789',false],
            ['srgsrfsefse',false],
            ['0A',false],
            ['awdaw awdawd123',false],
            ['kirpdda',false],
            ['bim bam bom',false],
            ['8 800 555 35 35',false],
        ];
    }
    
    #[DataProvider('additionProvider')]
    public function testValidate(string $x,bool $y): void
    {

        $this->assertSame($this->passwordValidator->validate($x),$y);
    }

}