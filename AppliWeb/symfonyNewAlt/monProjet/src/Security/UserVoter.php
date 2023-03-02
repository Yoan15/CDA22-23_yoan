<?php

namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class UserVoter extends Voter
{
    protected function supports(string $attribute, $subject)
    {
        //TODO: Implement supports() method
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token)
    {
        //TODO: Implement voteOnAttribute() method
    }
}