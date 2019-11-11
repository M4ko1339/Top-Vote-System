<?php

Class Vote
{
    public function Link($site)
    {
        global $sites;

        return $sites[$site]['url'] . $sites[$site]['id'] . '&' . $sites[$site]['field1'] . '=' . uniqid();
    }
}
