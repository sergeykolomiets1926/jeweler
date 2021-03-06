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

/* /home/msweblab/public_html/themes/jeweler/partials/Home/about.htm */
class __TwigTemplate_7de8b68ba411c2ab5c045304f264ce661c63953b19b76cec10400ce9e5b22619 extends \Twig\Template
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
        echo "    <!-- About -->
    <section class=\"section\" id=\"about\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">О НАС</h3>
                <h2 class=\"section__title\">Ювелирная мастерская \"Masterandgold\"</h2>
                <div class=\"section__text\">
                    <p>Наша компания предлагает изготовление ювелирных украшений любой сложности, любого вида. Кольца, браслеты, серьги, броши из чистого золота, а также с инкрустированием драгоценными и полудрагоценными камнями. Мы работаем с часами, значками, медалями и другими предметами, в изготовлении которых нужна профессиональная рука ювелира. За более чем 15 лет выполнили тысячи заказов, и каждый раз клиенты остались довольны результатом. Предлагаем выгодные и удобные условия сотрудничества каждому.</p>
                </div>
            </div>
            <script src=\"https://apps.elfsight.com/p/platform.js\" defer></script>
            <div class=\"elfsight-app-663645ba-07c1-4da2-8740-05b180500044\"></div>
        </div><!-- Container -->
    </section>";
    }

    public function getTemplateName()
    {
        return "/home/msweblab/public_html/themes/jeweler/partials/Home/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
    <!-- About -->
    <section class=\"section\" id=\"about\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">О НАС</h3>
                <h2 class=\"section__title\">Ювелирная мастерская \"Masterandgold\"</h2>
                <div class=\"section__text\">
                    <p>Наша компания предлагает изготовление ювелирных украшений любой сложности, любого вида. Кольца, браслеты, серьги, броши из чистого золота, а также с инкрустированием драгоценными и полудрагоценными камнями. Мы работаем с часами, значками, медалями и другими предметами, в изготовлении которых нужна профессиональная рука ювелира. За более чем 15 лет выполнили тысячи заказов, и каждый раз клиенты остались довольны результатом. Предлагаем выгодные и удобные условия сотрудничества каждому.</p>
                </div>
            </div>
            <script src=\"https://apps.elfsight.com/p/platform.js\" defer></script>
            <div class=\"elfsight-app-663645ba-07c1-4da2-8740-05b180500044\"></div>
        </div><!-- Container -->
    </section>", "/home/msweblab/public_html/themes/jeweler/partials/Home/about.htm", "");
    }
}
