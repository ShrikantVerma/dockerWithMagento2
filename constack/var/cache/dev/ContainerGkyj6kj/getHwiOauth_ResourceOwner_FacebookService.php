<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hwi_oauth.resource_owner.facebook' shared service.

return $this->services['hwi_oauth.resource_owner.facebook'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\FacebookResourceOwner(${($_ = isset($this->services['hwi_oauth.http_client']) ? $this->services['hwi_oauth.http_client'] : $this->load(__DIR__.'/getHwiOauth_HttpClientService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, array('client_id' => 352775691816092, 'client_secret' => 'b9bbb15df57211e79d8f45782e7c1775', 'options' => array('csrf' => true), 'scope' => 'public_profile', 'infos_url' => 'https://graph.facebook.com/me?fields=id,link,name,email,first_name,last_name,verified,gender,locale,timezone,picture.height(500).width(500)', 'paths' => array('profilepicture' => 'picture.data.url')), 'facebook', new \HWI\Bundle\OAuthBundle\OAuth\RequestDataStorage\SessionStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}));