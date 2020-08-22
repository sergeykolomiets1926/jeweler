<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/making.htm */
class __TwigTemplate_fa2c3b264a421f6fe63b9bb27e6a56c542aea90a448914388d0b869fef7b7324 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<!-- Devices -->
<section class=\"section section--making\">
  <div class=\"container\">
    <div class=\"section__header\">
      <h3 class=\"section__suptitle\">ИЗГОТОВЛЕНИЕ</h3>
      <h2 class=\"section__title\">Как мы изготавливаем изделия</h2>
      <div class=\"section__text\">
        <p>
          Все наши украшения изготавливаются вручную, способом моделирования по
          воску или через 3D моделирование, что обеспечивает высокое качество
          исполнения и неповторимость каждого изделия.
        </p>
      </div>
    </div>

    <div class=\"making\">
      <img
        class=\"making__item\"
        src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/making-img.png");
        echo "\"
        alt=\"\"
      />
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/making.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!-- Devices -->
<section class=\"section section--making\">
  <div class=\"container\">
    <div class=\"section__header\">
      <h3 class=\"section__suptitle\">ИЗГОТОВЛЕНИЕ</h3>
      <h2 class=\"section__title\">Как мы изготавливаем изделия</h2>
      <div class=\"section__text\">
        <p>
          Все наши украшения изготавливаются вручную, способом моделирования по
          воску или через 3D моделирование, что обеспечивает высокое качество
          исполнения и неповторимость каждого изделия.
        </p>
      </div>
    </div>

    <div class=\"making\">
      <img
        class=\"making__item\"
        src=\"{{ 'assets/images/making-img.png' | theme }}\"
        alt=\"\"
      />
    </div>
  </div>
</section>", "/var/www/admin/data/www/msweblaboratory.freedomain.thehost/themes/jeweler/partials/Home/making.htm", "");
    }
}
