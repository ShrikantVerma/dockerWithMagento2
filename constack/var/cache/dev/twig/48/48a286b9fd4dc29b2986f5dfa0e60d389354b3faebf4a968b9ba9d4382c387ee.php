<?php

/* CocoricoCoreBundle:Form:fields_price.html.twig */
class __TwigTemplate_51095c639f6a18ed0e8626797a2d36688d20e312cbe5339c5a8bcdb4a7e67a06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CocoricoCoreBundle:Form:fields.html.twig", "CocoricoCoreBundle:Form:fields_price.html.twig", 1);
        $this->blocks = array(
            'price_widget' => array($this, 'block_price_widget'),
            'price_range_widget' => array($this, 'block_price_range_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CocoricoCoreBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bc591b3510da4889673c5968aa3f4a101c8095700d89da7655a30e3cc13b77b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc591b3510da4889673c5968aa3f4a101c8095700d89da7655a30e3cc13b77b->enter($__internal_7bc591b3510da4889673c5968aa3f4a101c8095700d89da7655a30e3cc13b77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Form:fields_price.html.twig"));

        $__internal_702a15152fdd5e8395ce3bddf6436a1fca7a62124d20785b197a645272b57485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702a15152fdd5e8395ce3bddf6436a1fca7a62124d20785b197a645272b57485->enter($__internal_702a15152fdd5e8395ce3bddf6436a1fca7a62124d20785b197a645272b57485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Form:fields_price.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bc591b3510da4889673c5968aa3f4a101c8095700d89da7655a30e3cc13b77b->leave($__internal_7bc591b3510da4889673c5968aa3f4a101c8095700d89da7655a30e3cc13b77b_prof);

        
        $__internal_702a15152fdd5e8395ce3bddf6436a1fca7a62124d20785b197a645272b57485->leave($__internal_702a15152fdd5e8395ce3bddf6436a1fca7a62124d20785b197a645272b57485_prof);

    }

    // line 8
    public function block_price_widget($context, array $blocks = array())
    {
        $__internal_0ee6597137026e10a38d40dde0d7c7f6202794aa483fee0c7664dbf531faf71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee6597137026e10a38d40dde0d7c7f6202794aa483fee0c7664dbf531faf71d->enter($__internal_0ee6597137026e10a38d40dde0d7c7f6202794aa483fee0c7664dbf531faf71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "price_widget"));

        $__internal_c6c67f041fab9ce0ac64f299dd647c8befd2b43ad30bbc529735f9f27ef72d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c67f041fab9ce0ac64f299dd647c8befd2b43ad30bbc529735f9f27ef72d2e->enter($__internal_c6c67f041fab9ce0ac64f299dd647c8befd2b43ad30bbc529735f9f27ef72d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "price_widget"));

        // line 9
        $context["help_text"] = "";
        // line 10
        echo "    ";
        if (array_key_exists("help", $context)) {
            // line 11
            echo "        ";
            $context["help_text"] = (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new Twig_Error_Runtime('Variable "help" does not exist.', 11, $this->getSourceContext()); })());
            // line 12
            echo "    ";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "help", array(), "any", true, true)) {
            // line 13
            echo "        ";
            $context["help_text"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), "help", array());
            // line 14
            echo "    ";
        }
        // line 15
        echo "
    ";
        // line 17
        echo "    ";
        $context["vatInclusionText"] = $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->vatInclusionText(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "request", array()), "getLocale", array(), "method"));
        // line 18
        echo "    ";
        if ( !(null === ((array_key_exists("include_vat", $context)) ? (_twig_default_filter((isset($context["include_vat"]) || array_key_exists("include_vat", $context) ? $context["include_vat"] : (function () { throw new Twig_Error_Runtime('Variable "include_vat" does not exist.', 18, $this->getSourceContext()); })()), null)) : (null)))) {
            // line 19
            echo "        ";
            $context["vatInclusionText"] = $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->vatInclusionText(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "request", array()), "getLocale", array(), "method"), null, (isset($context["include_vat"]) || array_key_exists("include_vat", $context) ? $context["include_vat"] : (function () { throw new Twig_Error_Runtime('Variable "include_vat" does not exist.', 19, $this->getSourceContext()); })()));
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if ((isset($context["help_text"]) || array_key_exists("help_text", $context) ? $context["help_text"] : (function () { throw new Twig_Error_Runtime('Variable "help_text" does not exist.', 22, $this->getSourceContext()); })())) {
            // line 23
            echo "        <span class=\"info\">
            ";
            // line 24
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 24, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "
            <span class=\"vat\">
                ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["vatInclusionText"]) || array_key_exists("vatInclusionText", $context) ? $context["vatInclusionText"] : (function () { throw new Twig_Error_Runtime('Variable "vatInclusionText" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
            echo "
            </span>
            <button title=\"\" data-placement=\"right\" data-toggle=\"tooltip\" class=\"tooltip-button\"
                    type=\"button\" data-original-title=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans((isset($context["help_text"]) || array_key_exists("help_text", $context) ? $context["help_text"] : (function () { throw new Twig_Error_Runtime('Variable "help_text" does not exist.', 29, $this->getSourceContext()); })()), array(), "cocorico"), "html", null, true);
            echo "\">?
            </button>
        </span>
    ";
        } elseif ( !twig_get_attribute($this->env, $this->getSourceContext(),         // line 32
($context["attr"] ?? null), "nosign", array(), "any", true, true)) {
            // line 33
            echo "        <span class=\"sign\">
            ";
            // line 34
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 34, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "
            <span class=\"vat\">
                ";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["vatInclusionText"]) || array_key_exists("vatInclusionText", $context) ? $context["vatInclusionText"] : (function () { throw new Twig_Error_Runtime('Variable "vatInclusionText" does not exist.', 36, $this->getSourceContext()); })()), "html", null, true);
            echo "
            </span>
        </span>
    ";
        }
        // line 40
        echo "
    <div class=\"field-holder\">";
        // line 42
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 42, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 43
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 43, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 43, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 43, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>
    </div>";
        
        $__internal_c6c67f041fab9ce0ac64f299dd647c8befd2b43ad30bbc529735f9f27ef72d2e->leave($__internal_c6c67f041fab9ce0ac64f299dd647c8befd2b43ad30bbc529735f9f27ef72d2e_prof);

        
        $__internal_0ee6597137026e10a38d40dde0d7c7f6202794aa483fee0c7664dbf531faf71d->leave($__internal_0ee6597137026e10a38d40dde0d7c7f6202794aa483fee0c7664dbf531faf71d_prof);

    }

    // line 47
    public function block_price_range_widget($context, array $blocks = array())
    {
        $__internal_b2799064664d8b8e1e03356366ae5ab4298a2e87e20b3434226df3aaf29bebfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2799064664d8b8e1e03356366ae5ab4298a2e87e20b3434226df3aaf29bebfb->enter($__internal_b2799064664d8b8e1e03356366ae5ab4298a2e87e20b3434226df3aaf29bebfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "price_range_widget"));

        $__internal_1bcaa2c70b99f2503dad35a704ef38477b1a7c42d797e53c4ee721670439ed13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcaa2c70b99f2503dad35a704ef38477b1a7c42d797e53c4ee721670439ed13->enter($__internal_1bcaa2c70b99f2503dad35a704ef38477b1a7c42d797e53c4ee721670439ed13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "price_range_widget"));

        // line 48
        $context["price_min_default"] = ((isset($context["priceMin"]) || array_key_exists("priceMin", $context) ? $context["priceMin"] : (function () { throw new Twig_Error_Runtime('Variable "priceMin" does not exist.', 48, $this->getSourceContext()); })()) / 100);
        // line 49
        echo "    ";
        $context["price_max_default"] = ((isset($context["priceMax"]) || array_key_exists("priceMax", $context) ? $context["priceMax"] : (function () { throw new Twig_Error_Runtime('Variable "priceMax" does not exist.', 49, $this->getSourceContext()); })()) / 100);
        // line 50
        echo "
    ";
        // line 51
        $context["price_min"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "min", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "min", array(), "any", false, true), "vars", array(), "any", false, true), "value", array()), (isset($context["price_min_default"]) || array_key_exists("price_min_default", $context) ? $context["price_min_default"] : (function () { throw new Twig_Error_Runtime('Variable "price_min_default" does not exist.', 51, $this->getSourceContext()); })()))) : ((isset($context["price_min_default"]) || array_key_exists("price_min_default", $context) ? $context["price_min_default"] : (function () { throw new Twig_Error_Runtime('Variable "price_min_default" does not exist.', 51, $this->getSourceContext()); })())));
        // line 52
        echo "    ";
        $context["price_max"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "max", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "max", array(), "any", false, true), "vars", array(), "any", false, true), "value", array()), (isset($context["price_max_default"]) || array_key_exists("price_max_default", $context) ? $context["price_max_default"] : (function () { throw new Twig_Error_Runtime('Variable "price_max_default" does not exist.', 52, $this->getSourceContext()); })()))) : ((isset($context["price_max_default"]) || array_key_exists("price_max_default", $context) ? $context["price_max_default"] : (function () { throw new Twig_Error_Runtime('Variable "price_max_default" does not exist.', 52, $this->getSourceContext()); })())));
        // line 53
        echo "    ";
        $context["average_search_price"] = (((isset($context["price_min"]) || array_key_exists("price_min", $context) ? $context["price_min"] : (function () { throw new Twig_Error_Runtime('Variable "price_min" does not exist.', 53, $this->getSourceContext()); })()) + (isset($context["price_max"]) || array_key_exists("price_max", $context) ? $context["price_max"] : (function () { throw new Twig_Error_Runtime('Variable "price_max" does not exist.', 53, $this->getSourceContext()); })())) / 2);
        // line 54
        echo "    ";
        $context["currentCurrencySymbol"] = $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->currencySymbolFunction((isset($context["currentCurrency"]) || array_key_exists("currentCurrency", $context) ? $context["currentCurrency"] : (function () { throw new Twig_Error_Runtime('Variable "currentCurrency" does not exist.', 54, $this->getSourceContext()); })()));
        // line 55
        echo "
    <div class=\"range-holder\">
        <strong class=\"title\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->getSourceContext()); })()), "min", array()), 'label');
        echo "</strong>
        <!-- range-box -->
        <div class=\"range-box\">
            <div class=\"range-bar ui-slider\" data-min=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["price_min_default"]) || array_key_exists("price_min_default", $context) ? $context["price_min_default"] : (function () { throw new Twig_Error_Runtime('Variable "price_min_default" does not exist.', 60, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-max=\"";
        echo twig_escape_filter($this->env, (isset($context["price_max_default"]) || array_key_exists("price_max_default", $context) ? $context["price_max_default"] : (function () { throw new Twig_Error_Runtime('Variable "price_max_default" does not exist.', 60, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
                 data-value=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["average_search_price"]) || array_key_exists("average_search_price", $context) ? $context["average_search_price"] : (function () { throw new Twig_Error_Runtime('Variable "average_search_price" does not exist.', 61, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-step=\"10\">
                <span class=\"ui-slider-handle\">
                    <span class=\"value value-left\">
                        <span class=\"text\"></span>
                        ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["currentCurrencySymbol"]) || array_key_exists("currentCurrencySymbol", $context) ? $context["currentCurrencySymbol"] : (function () { throw new Twig_Error_Runtime('Variable "currentCurrencySymbol" does not exist.', 65, $this->getSourceContext()); })()), "html", null, true);
        echo "
                    </span>
                </span>
                <span class=\"ui-slider-handle\">
                    <span class=\"value value-right\">
                        <span class=\"text\"></span>
                        ";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["currentCurrencySymbol"]) || array_key_exists("currentCurrencySymbol", $context) ? $context["currentCurrencySymbol"] : (function () { throw new Twig_Error_Runtime('Variable "currentCurrencySymbol" does not exist.', 71, $this->getSourceContext()); })()), "html", null, true);
        echo "
                    </span>
                </span>
                <input type=\"hidden\" id=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->getSourceContext()); })()), "min", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"value-min\"
                       name=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), "min", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
                       value=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["price_min"]) || array_key_exists("price_min", $context) ? $context["price_min"] : (function () { throw new Twig_Error_Runtime('Variable "price_min" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
                <input type=\"hidden\" id=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->getSourceContext()); })()), "max", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"value-max\"
                       name=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->getSourceContext()); })()), "max", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
                       value=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["price_max"]) || array_key_exists("price_max", $context) ? $context["price_max"] : (function () { throw new Twig_Error_Runtime('Variable "price_max" does not exist.', 79, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
            </div>
            <div class=\"range-price\">
                <span class=\"price\">";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["price_min_default"]) || array_key_exists("price_min_default", $context) ? $context["price_min_default"] : (function () { throw new Twig_Error_Runtime('Variable "price_min_default" does not exist.', 82, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["currentCurrencySymbol"]) || array_key_exists("currentCurrencySymbol", $context) ? $context["currentCurrencySymbol"] : (function () { throw new Twig_Error_Runtime('Variable "currentCurrencySymbol" does not exist.', 82, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
                <span class=\"price right\">";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["price_max_default"]) || array_key_exists("price_max_default", $context) ? $context["price_max_default"] : (function () { throw new Twig_Error_Runtime('Variable "price_max_default" does not exist.', 83, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["currentCurrencySymbol"]) || array_key_exists("currentCurrencySymbol", $context) ? $context["currentCurrencySymbol"] : (function () { throw new Twig_Error_Runtime('Variable "currentCurrencySymbol" does not exist.', 83, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>";
        
        $__internal_1bcaa2c70b99f2503dad35a704ef38477b1a7c42d797e53c4ee721670439ed13->leave($__internal_1bcaa2c70b99f2503dad35a704ef38477b1a7c42d797e53c4ee721670439ed13_prof);

        
        $__internal_b2799064664d8b8e1e03356366ae5ab4298a2e87e20b3434226df3aaf29bebfb->leave($__internal_b2799064664d8b8e1e03356366ae5ab4298a2e87e20b3434226df3aaf29bebfb_prof);

    }

    public function getTemplateName()
    {
        return "CocoricoCoreBundle:Form:fields_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 83,  242 => 82,  236 => 79,  232 => 78,  228 => 77,  224 => 76,  220 => 75,  216 => 74,  210 => 71,  201 => 65,  194 => 61,  188 => 60,  182 => 57,  178 => 55,  175 => 54,  172 => 53,  169 => 52,  167 => 51,  164 => 50,  161 => 49,  159 => 48,  150 => 47,  129 => 43,  127 => 42,  124 => 40,  117 => 36,  112 => 34,  109 => 33,  107 => 32,  101 => 29,  95 => 26,  90 => 24,  87 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 15,  64 => 14,  61 => 13,  58 => 12,  55 => 11,  52 => 10,  50 => 9,  41 => 8,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CocoricoCoreBundle:Form:fields.html.twig' %}

{% trans_default_domain 'cocorico' %}

{#
    Price widget
#}
{%- block price_widget -%}
    {% set help_text=\"\" %}
    {% if help is defined %}
        {% set  help_text = help %}
    {% elseif  attr.help is defined %}
        {% set  help_text = attr.help %}
    {% endif %}

    {#VAT include or exclude text#}
    {% set vatInclusionText = vatInclusionText(app.request.getLocale() ) %}
    {% if include_vat|default(null) is not null %}
        {% set vatInclusionText = vatInclusionText(app.request.getLocale(), null, include_vat ) %}
    {% endif %}

    {% if help_text %}
        <span class=\"info\">
            {{ money_pattern|replace({ '{{ widget }}':''}) }}
            <span class=\"vat\">
                {{ vatInclusionText }}
            </span>
            <button title=\"\" data-placement=\"right\" data-toggle=\"tooltip\" class=\"tooltip-button\"
                    type=\"button\" data-original-title=\"{{ help_text|trans }}\">?
            </button>
        </span>
    {% elseif attr.nosign is not defined %}
        <span class=\"sign\">
            {{ money_pattern|replace({ '{{ widget }}':''}) }}
            <span class=\"vat\">
                {{ vatInclusionText }}
            </span>
        </span>
    {% endif %}

    <div class=\"field-holder\">
        {%- set type = type|default('text') -%}
        <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
    </div>
{%- endblock -%}

{%- block price_range_widget -%}
    {% set price_min_default = priceMin / 100 %}
    {% set price_max_default = priceMax / 100 %}

    {% set price_min = form.min.vars.value|default(price_min_default) %}
    {% set price_max = form.max.vars.value|default(price_max_default) %}
    {% set average_search_price = (price_min + price_max) / 2 %}
    {% set currentCurrencySymbol = currencySymbol(currentCurrency) %}

    <div class=\"range-holder\">
        <strong class=\"title\">{{ form_label(form.min) }}</strong>
        <!-- range-box -->
        <div class=\"range-box\">
            <div class=\"range-bar ui-slider\" data-min=\"{{ price_min_default }}\" data-max=\"{{ price_max_default }}\"
                 data-value=\"{{ average_search_price }}\" data-step=\"10\">
                <span class=\"ui-slider-handle\">
                    <span class=\"value value-left\">
                        <span class=\"text\"></span>
                        {{ currentCurrencySymbol }}
                    </span>
                </span>
                <span class=\"ui-slider-handle\">
                    <span class=\"value value-right\">
                        <span class=\"text\"></span>
                        {{ currentCurrencySymbol }}
                    </span>
                </span>
                <input type=\"hidden\" id=\"{{ form.min.vars.id }}\" class=\"value-min\"
                       name=\"{{ form.min.vars.full_name }}\"
                       value=\"{{ price_min }}\">
                <input type=\"hidden\" id=\"{{ form.max.vars.id }}\" class=\"value-max\"
                       name=\"{{ form.max.vars.full_name }}\"
                       value=\"{{ price_max }}\">
            </div>
            <div class=\"range-price\">
                <span class=\"price\">{{ price_min_default }} {{ currentCurrencySymbol }}</span>
                <span class=\"price right\">{{ price_max_default }} {{ currentCurrencySymbol }}</span>
            </div>
        </div>
    </div>
{%- endblock -%}", "CocoricoCoreBundle:Form:fields_price.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Form/fields_price.html.twig");
    }
}
