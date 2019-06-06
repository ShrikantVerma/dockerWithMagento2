<?php

/* @CocoricoCore/Frontend/ListingResult/_marker.html.twig */
class __TwigTemplate_22f1e9a546ef7af18d466326d17ce116c59b251d5ca5c24acba1a29822197bc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c0bb6cf39505466844ed17a6a7ae2f885dfcfa383dd180ec9ea88066145c80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0bb6cf39505466844ed17a6a7ae2f885dfcfa383dd180ec9ea88066145c80a->enter($__internal_7c0bb6cf39505466844ed17a6a7ae2f885dfcfa383dd180ec9ea88066145c80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/_marker.html.twig"));

        $__internal_4a06320e3170d22d9d499d981ab0c297e5c9ed3b294cf46371889f77efb934d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a06320e3170d22d9d499d981ab0c297e5c9ed3b294cf46371889f77efb934d7->enter($__internal_4a06320e3170d22d9d499d981ab0c297e5c9ed3b294cf46371889f77efb934d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/_marker.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    ";
        // line 3
        echo "    ";
        // line 4
        echo "        ";
        // line 9
        echo "        <div class=\"info-box-tpl hidden\">
            <div class=\"popup\">
                <ul>
                    <li class=\"listing-post small\" data-id=\"info-box\">
                        ";
        // line 14
        echo "                        <a href=\"%url%\" class=\"listing-box\">
                            <div class=\"frame\">
                                <div class=\"post-info\">

                                    <div class=\"img-holder\">
                                        <img src=\"/images/img.png\" alt=\"image description\" data-src=\"%data-src%\">
                                    </div>

                                    <div class=\"box\">
                                        <div class=\"box-holder\">
                                            <div class=\"head\">
                                                <ul class=\"rating list-inline\">
                                                    <li class=\"%rating1%\">
                                                    <span class=\"icon-star\">
                                                        <span class=\"hide\">1</span>
                                                    </span>
                                                    </li>
                                                    <li class=\"%rating2%\">
                                                    <span class=\"icon-star\">
                                                        <span class=\"hide\">2</span>
                                                    </span>
                                                    </li>
                                                    <li class=\"%rating3%\">
                                                    <span class=\"icon-star\">
                                                        <span class=\"hide\">3</span>
                                                    </span>
                                                    </li>
                                                    <li class=\"%rating4%\">
                                                    <span class=\"icon-star\">
                                                        <span class=\"hide\">4</span>
                                                    </span>
                                                    </li>
                                                    <li class=\"%rating5%\">
                                                    <span class=\"icon-star\">
                                                        <span class=\"hide\">5</span>
                                                    </span>
                                                    </li>
                                                </ul>
                                                <div class=\"time-price\">
                                                    <strong class=\"price\">%price%</strong>

                                                    <p>/";
        // line 55
        echo $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->addTimeUnitTextFilter(0);
        echo "</p>
                                                </div>
                                            </div>

                                            <div class=\"foot\">
                                                <strong class=\"title\">%category%</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"post-content\">
                                    <div class=\"textbox\">
                                        <h2>%title%</h2>
                                        <span class=\"%certified%\">
                                        <i class=\"icon-ok\"></i>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search.result.certified", array(), "cocorico_listing"), "html", null, true);
        echo "
                                    </span>
                                    </div>
                                </div>

                            </div>
                        </a>
                        ";
        // line 78
        echo "                    </li>
                </ul>
            </div>
        </div>

        ";
        // line 84
        echo "        <div class=\"info-box-wrapper hidden\">
            <div>
                <a class=\"close\" href=\"javascript:void(0)\">
                    <span class=\"hidden\">Close</span>
                    <i class=\"icon-cancel\"></i>
                </a>

                <div class=\"popup\">
                    <ul>
                        %info_box_content%
                    </ul>
            </div>
        </div>
    </div>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 101
        echo "
";
        // line 103
        echo "<span id=\"data-markers\"
      data-markers=\"";
        // line 104
        echo twig_escape_filter($this->env, json_encode((isset($context["markers"]) || array_key_exists("markers", $context) ? $context["markers"] : (function () { throw new Twig_Error_Runtime('Variable "markers" does not exist.', 104, $this->getSourceContext()); })()), (twig_constant("JSON_UNESCAPED_UNICODE") | twig_constant("JSON_HEX_APOS"))), "html");
        echo "\"></span>";
        
        $__internal_7c0bb6cf39505466844ed17a6a7ae2f885dfcfa383dd180ec9ea88066145c80a->leave($__internal_7c0bb6cf39505466844ed17a6a7ae2f885dfcfa383dd180ec9ea88066145c80a_prof);

        
        $__internal_4a06320e3170d22d9d499d981ab0c297e5c9ed3b294cf46371889f77efb934d7->leave($__internal_4a06320e3170d22d9d499d981ab0c297e5c9ed3b294cf46371889f77efb934d7_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/ListingResult/_marker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 104,  138 => 103,  135 => 101,  117 => 84,  110 => 78,  100 => 70,  82 => 55,  39 => 14,  33 => 9,  31 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
    {% trans_default_domain 'cocorico_listing' %}
    {% autoescape 'html' %}
        {#
        HTML template used to create infobox content on map when a marker is clicked
        Variable %var% are replaced by the listing data
        @see Cocorico/GeoBundle/Resources/views/Common/js/_geocoding_js.html.twig
        #}
        <div class=\"info-box-tpl hidden\">
            <div class=\"popup\">
                <ul>
                    <li class=\"listing-post small\" data-id=\"info-box\">
                        {#Customisation start here#}
                        <a href=\"%url%\" class=\"listing-box\">
                            <div class=\"frame\">
                                <div class=\"post-info\">

                                    <div class=\"img-holder\">
                                        <img src=\"/images/img.png\" alt=\"image description\" data-src=\"%data-src%\">
                                    </div>

                                    <div class=\"box\">
                                        <div class=\"box-holder\">
                                            <div class=\"head\">
                                                <ul class=\"rating list-inline\">
                                                    <li class=\"%rating1%\">
                                                    <span class=\"icon-star\">
                                                        <span class=\"hide\">1</span>
                                                    </span>
                                                    </li>
                                                    <li class=\"%rating2%\">
                                                    <span class=\"icon-star\">
                                                        <span class=\"hide\">2</span>
                                                    </span>
                                                    </li>
                                                    <li class=\"%rating3%\">
                                                    <span class=\"icon-star\">
                                                        <span class=\"hide\">3</span>
                                                    </span>
                                                    </li>
                                                    <li class=\"%rating4%\">
                                                    <span class=\"icon-star\">
                                                        <span class=\"hide\">4</span>
                                                    </span>
                                                    </li>
                                                    <li class=\"%rating5%\">
                                                    <span class=\"icon-star\">
                                                        <span class=\"hide\">5</span>
                                                    </span>
                                                    </li>
                                                </ul>
                                                <div class=\"time-price\">
                                                    <strong class=\"price\">%price%</strong>

                                                    <p>/{{ (0)|add_time_unit_text|raw }}</p>
                                                </div>
                                            </div>

                                            <div class=\"foot\">
                                                <strong class=\"title\">%category%</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"post-content\">
                                    <div class=\"textbox\">
                                        <h2>%title%</h2>
                                        <span class=\"%certified%\">
                                        <i class=\"icon-ok\"></i>{{ 'listing.search.result.certified'|trans }}
                                    </span>
                                    </div>
                                </div>

                            </div>
                        </a>
                        {#End of customisation#}
                    </li>
                </ul>
            </div>
        </div>

        {#Above content are injected in %infoBoxContent% below#}
        <div class=\"info-box-wrapper hidden\">
            <div>
                <a class=\"close\" href=\"javascript:void(0)\">
                    <span class=\"hidden\">Close</span>
                    <i class=\"icon-cancel\"></i>
                </a>

                <div class=\"popup\">
                    <ul>
                        %info_box_content%
                    </ul>
            </div>
        </div>
    </div>

    {% endautoescape %}
{% endspaceless %}

{# Data Markers used to displayed markers on map#}
<span id=\"data-markers\"
      data-markers=\"{{ markers|json_encode(constant('JSON_UNESCAPED_UNICODE') b-or constant('JSON_HEX_APOS') )|e('html') }}\"></span>", "@CocoricoCore/Frontend/ListingResult/_marker.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/ListingResult/_marker.html.twig");
    }
}
