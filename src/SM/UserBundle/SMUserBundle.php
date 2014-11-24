<?php

namespace SM\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SMUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
