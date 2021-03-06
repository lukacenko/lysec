<?php

namespace Model\Repository;

use Nette;
use Nette\Security\Passwords;

/**
 * Users authenticator.
 */
class UserManager extends \Nette\Object implements \Nette\Security\IAuthenticator {

    const
            TABLE_NAME = 'users',
            COLUMN_ID = 'id',
            COLUMN_NAME = 'login',
            COLUMN_PASSWORD_HASH = 'password',
            COLUMN_ROLE = 'role',
            COLUMN_EMAIL = 'email',
            COLUMN_NEWSLETTER = 'newsletter';
    

    /** @var Nette\Database\Context */
    private $database;

    public function __construct(\Nette\Database\Context $database) {
        $this->database = $database;
    }

    /**
     * Performs an authentication.
     * @return Nette\Security\Identity
     * @throws Nette\Security\AuthenticationException
     */
    public function authenticate(array $credentials) {
        list($username, $password) = $credentials;
        $row = $this->database->table(self::TABLE_NAME)->where(self::COLUMN_NAME, $username)->fetch();
        if (!$row) {
            throw new \Nette\Security\AuthenticationException('Užívateľské meno je nesprávne.', self::IDENTITY_NOT_FOUND);
        } elseif (!Passwords::verify($password, $row[self::COLUMN_PASSWORD_HASH])) {
        throw new \Nette\Security\AuthenticationException('Heslo je nesprávne.', self::INVALID_CREDENTIAL);
        } elseif (Passwords::needsRehash($row[self::COLUMN_PASSWORD_HASH])) {
            $row->update([
                self::COLUMN_PASSWORD_HASH => Passwords::hash($password),
            ]);
        }
        $arr = $row->toArray();
        unset($arr[self::COLUMN_PASSWORD_HASH]);
        return new \Nette\Security\Identity($row[self::COLUMN_ID], $row[self::COLUMN_ROLE], $arr);
    }
    
    public function issetUser($user){

        $row = $this->database->table(self::TABLE_NAME)->where(self::COLUMN_NAME, $user)->fetch();
        return $row;
        
    }
    
    public function issetEmail($email){

        $row = $this->database->table(self::TABLE_NAME)->where(self::COLUMN_EMAIL, $email)->fetch();
        return $row;
        
    }
    public function updateUniqidStr($forgot_pass_identity,$email){
 
        $result = $this->database->query(' UPDATE users SET forgot_pass_identity = "'.$forgot_pass_identity.'" WHERE email = "' . $email . '"');
    }

    /**
     * Adds new user.
     * @param  string
     * @param  string
     * @return void
     */
    public function add($email, $username, $password, $role, $newsletter ) {
        try {
            $this->database->table(self::TABLE_NAME)->insert([
                self::COLUMN_EMAIL => $email,
                self::COLUMN_NAME => $username,
                self::COLUMN_PASSWORD_HASH => Passwords::hash($password),
                self::COLUMN_ROLE => $role,
                self::COLUMN_NEWSLETTER => $newsletter
            ]);
        } catch (\Nette\Database\UniqueConstraintViolationException $e) {
            throw new DuplicateNameException;
        }
    }
}

