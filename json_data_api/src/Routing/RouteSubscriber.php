<?php 

namespace Drupal\json_data_api\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
	function alterRoutes(RouteCollection $collection) {
   		if ($route = $collection->get('system.site_information_settings'))
    	$route->setDefault('_form', 'Drupal\json_data_api\Form\ExtendedSiteInformationForm');
   }

}

