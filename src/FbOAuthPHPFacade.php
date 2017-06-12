<?php
namespace Trungpv1601\FbOAuth;

class FbOAuthPHPFacade extends \Illuminate\Support\Facades\Facade
{
	protected static function getFacadeAccessor()
	{
		return Facebook::class;
	}
}