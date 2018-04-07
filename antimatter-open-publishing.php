<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class AntimatterOpenPublishing extends Antimatter
{

  public static function getSubscribedEvents()
  {
      return [
          'onShortcodeHandlers' => ['onShortcodeHandlers', 0],
          'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
      ];
  }

  public function onShortcodeHandlers()
  {
      $this->grav['shortcode']->registerAllShortcodes('theme://shortcodes');
  }

  public function onTwigSiteVariables()
  {
      if ($this->isAdmin() && ($this->grav['config']->get('plugins.shortcode-core.enabled'))) {
          $this->grav['assets']->add('theme://editor-buttons/admin/js/shortcode-h5p.js');
      }
  }

}
?>
