<?php

/* @BazingaGeocoder/Collector/geocoder.html.twig */
class __TwigTemplate_9176dcdf42afec2414fae4aa99c9a936d9108b8f78b0db0a655ce40a846e88bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "@BazingaGeocoder/Collector/geocoder.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e4457496fde45a322854b3423bd895e6f876881d6269514759bc370d8bcca33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4457496fde45a322854b3423bd895e6f876881d6269514759bc370d8bcca33->enter($__internal_2e4457496fde45a322854b3423bd895e6f876881d6269514759bc370d8bcca33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BazingaGeocoder/Collector/geocoder.html.twig"));

        $__internal_ffc52647012353f6d80cc95808e7ce4bac5ee917dcd92d858eafcd40b1f530f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc52647012353f6d80cc95808e7ce4bac5ee917dcd92d858eafcd40b1f530f2->enter($__internal_ffc52647012353f6d80cc95808e7ce4bac5ee917dcd92d858eafcd40b1f530f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BazingaGeocoder/Collector/geocoder.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e4457496fde45a322854b3423bd895e6f876881d6269514759bc370d8bcca33->leave($__internal_2e4457496fde45a322854b3423bd895e6f876881d6269514759bc370d8bcca33_prof);

        
        $__internal_ffc52647012353f6d80cc95808e7ce4bac5ee917dcd92d858eafcd40b1f530f2->leave($__internal_ffc52647012353f6d80cc95808e7ce4bac5ee917dcd92d858eafcd40b1f530f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc0d43880629b8fdc0d1b3c45d21d6bde2f63a5a6c5c6c6c65620c4281474982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0d43880629b8fdc0d1b3c45d21d6bde2f63a5a6c5c6c6c65620c4281474982->enter($__internal_cc0d43880629b8fdc0d1b3c45d21d6bde2f63a5a6c5c6c6c65620c4281474982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_36f6c4583fc724b8687cdcc2731458b64a620ab583f141bd6aab1d8ea86d039a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f6c4583fc724b8687cdcc2731458b64a620ab583f141bd6aab1d8ea86d039a->enter($__internal_36f6c4583fc724b8687cdcc2731458b64a620ab583f141bd6aab1d8ea86d039a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["queryLabel"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "queries", array())) == 1)) ? ("query") : ("queries"));
        // line 5
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 5, $this->getSourceContext()); })()), "queries", array())) > 0)) {
            // line 6
            echo "        ";
            ob_start();
            // line 7
            echo "            ";
            echo twig_include($this->env, $context, "@BazingaGeocoder/Collector/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 8
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 8, $this->getSourceContext()); })()), "queries", array())), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["queryLabel"]) || array_key_exists("queryLabel", $context) ? $context["queryLabel"] : (function () { throw new Twig_Error_Runtime('Variable "queryLabel" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo " in</span>
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "totalDuration", array())), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">ms</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "        ";
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 15, $this->getSourceContext()); })()), "queries", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["queryLabel"]) || array_key_exists("queryLabel", $context) ? $context["queryLabel"] : (function () { throw new Twig_Error_Runtime('Variable "queryLabel" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Provider</th>
                        <th>Query</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "queries", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 28
                echo "                        <tr>
                            <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "providerName", array())), "html", null, true);
                echo "</td>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "queryString", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "duration", array()) == 0)) ? ("n/a") : ((twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "duration", array())) . " ms"))), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </tbody>
                </table>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 38
            echo "
        ";
            // line 39
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "@BazingaGeocoder/Collector/geocoder.html.twig", 39)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 39, $this->getSourceContext()); })()))));
        }
        
        $__internal_36f6c4583fc724b8687cdcc2731458b64a620ab583f141bd6aab1d8ea86d039a->leave($__internal_36f6c4583fc724b8687cdcc2731458b64a620ab583f141bd6aab1d8ea86d039a_prof);

        
        $__internal_cc0d43880629b8fdc0d1b3c45d21d6bde2f63a5a6c5c6c6c65620c4281474982->leave($__internal_cc0d43880629b8fdc0d1b3c45d21d6bde2f63a5a6c5c6c6c65620c4281474982_prof);

    }

    // line 43
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f681402d80e7640f00db90510a091c2d561adaaf3438308c55fd953dd372489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f681402d80e7640f00db90510a091c2d561adaaf3438308c55fd953dd372489->enter($__internal_2f681402d80e7640f00db90510a091c2d561adaaf3438308c55fd953dd372489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1753ff7f27a94d53e3604a3704a1c9721a477a44c0dbb927f7cf4220352f6404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1753ff7f27a94d53e3604a3704a1c9721a477a44c0dbb927f7cf4220352f6404->enter($__internal_1753ff7f27a94d53e3604a3704a1c9721a477a44c0dbb927f7cf4220352f6404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 44
        echo "    ";
        // line 45
        echo "    <span class=\"label ";
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 45, $this->getSourceContext()); })()), "queries", array())) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 47
        echo twig_include($this->env, $context, "@BazingaGeocoder/Collector/icon.svg");
        echo "
        </span>
        <strong>Geocoder</strong>
    </span>
";
        
        $__internal_1753ff7f27a94d53e3604a3704a1c9721a477a44c0dbb927f7cf4220352f6404->leave($__internal_1753ff7f27a94d53e3604a3704a1c9721a477a44c0dbb927f7cf4220352f6404_prof);

        
        $__internal_2f681402d80e7640f00db90510a091c2d561adaaf3438308c55fd953dd372489->leave($__internal_2f681402d80e7640f00db90510a091c2d561adaaf3438308c55fd953dd372489_prof);

    }

    // line 53
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad8b385d2880af3180aa935bfe6e8c81cbc7bcf34429c5834869d27e378078b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8b385d2880af3180aa935bfe6e8c81cbc7bcf34429c5834869d27e378078b4->enter($__internal_ad8b385d2880af3180aa935bfe6e8c81cbc7bcf34429c5834869d27e378078b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cde19efed1f50ee26111766587cfbb444cc4d1aabecdbf3b4e6e25f0bcb6813b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde19efed1f50ee26111766587cfbb444cc4d1aabecdbf3b4e6e25f0bcb6813b->enter($__internal_cde19efed1f50ee26111766587cfbb444cc4d1aabecdbf3b4e6e25f0bcb6813b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 54
        echo "    <style>
        .sf-toggle-content.sf-toggle-visible {
            display: table-row;
        }
    </style>
    <h2>Geocoder</h2>

    <div class=\"sf-tabs\">
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 62, $this->getSourceContext()); })()), "providers", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 63
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["provider"]), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 64, $this->getSourceContext()); })()), "providerQueries", array(0 => $context["provider"]), "method")), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These queries are executed by a provider named \"";
            // line 68
            echo twig_escape_filter($this->env, $context["provider"], "html", null, true);
            echo "\".
                </p>

            <table>
                <thead>
                    <tr>
                        <th style=\"min-width: 2rem;\"></th>
                        <th style=\"width: 40%\">Query</th>
                        <th style=\"width: 60%\">Result</th>
                        <th style=\"min-width: 4rem;\">Duration</th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 81, $this->getSourceContext()); })()), "providerQueries", array(0 => $context["provider"]), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 82
                echo "                    <tr>
                        <td class=\"font-normal text-small\" nowrap=\"\">
                            <span class=\"colored text-bold\"># ";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"font-normal\">
                            <span class=\"dump-inline\">
                                ";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "queryString", array()), "html", null, true);
                echo "
                            </span>
                        </td>
                        <td class=\"font-normal\">
                            <span class=\"dump-inline\">
                                ";
                // line 93
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "result", array(), "any", false, true), "message", array(), "any", true, true)) {
                    // line 94
                    echo "                                    Exception
                                ";
                } else {
                    // line 96
                    echo "                                    ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "resultCount", array()));
                    echo " Result(s)
                                ";
                }
                // line 98
                echo "                            </span>
                            <span class=\"metadata\">
                                <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#geocoder-";
                // line 100
                echo twig_escape_filter($this->env, $context["provider"], "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "-details\" data-toggle-alt-content=\"Hide\">Show</a>
                            </span>
                        </td>
                        <td class=\"font-normal text-small\" nowrap=\"\">
                            ";
                // line 104
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "duration", array())), "html", null, true);
                echo " ms
                        </td>
                    </tr>
                    <tr id=\"geocoder-";
                // line 107
                echo twig_escape_filter($this->env, $context["provider"], "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "-details\" class=\"context sf-toggle-content sf-toggle-hidden\">
                        <td></td>
                        <td>";
                // line 109
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "query", array()), 1));
                echo "</td>
                        ";
                // line 110
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "result", array(), "any", false, true), "message", array(), "any", true, true)) {
                    // line 111
                    echo "                        <td>";
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "result", array()), 1));
                    echo "</td>
                        ";
                } else {
                    // line 113
                    echo "                        <td>";
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "result", array()), 3));
                    echo "</td>
                        ";
                }
                // line 115
                echo "                        <td></td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                </tbody>
            </table>

            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 124
            echo "        <div class=\"empty\">
            <p>No queries were executed.</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "    </div>
";
        
        $__internal_cde19efed1f50ee26111766587cfbb444cc4d1aabecdbf3b4e6e25f0bcb6813b->leave($__internal_cde19efed1f50ee26111766587cfbb444cc4d1aabecdbf3b4e6e25f0bcb6813b_prof);

        
        $__internal_ad8b385d2880af3180aa935bfe6e8c81cbc7bcf34429c5834869d27e378078b4->leave($__internal_ad8b385d2880af3180aa935bfe6e8c81cbc7bcf34429c5834869d27e378078b4_prof);

    }

    public function getTemplateName()
    {
        return "@BazingaGeocoder/Collector/geocoder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 128,  348 => 124,  338 => 118,  322 => 115,  316 => 113,  310 => 111,  308 => 110,  304 => 109,  297 => 107,  291 => 104,  282 => 100,  278 => 98,  272 => 96,  268 => 94,  266 => 93,  258 => 88,  251 => 84,  247 => 82,  230 => 81,  214 => 68,  205 => 64,  202 => 63,  197 => 62,  187 => 54,  178 => 53,  163 => 47,  157 => 45,  155 => 44,  146 => 43,  135 => 39,  132 => 38,  126 => 34,  117 => 31,  113 => 30,  109 => 29,  106 => 28,  102 => 27,  85 => 15,  82 => 14,  79 => 13,  73 => 10,  69 => 9,  65 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set queryLabel = collector.queries|length == 1 ? 'query' : 'queries' %}
    {% if collector.queries|length > 0 %}
        {% set icon %}
            {{ include('@BazingaGeocoder/Collector/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.queries|length }}</span>
            <span class=\"sf-toolbar-label\">{{ queryLabel }} in</span>
            <span class=\"sf-toolbar-value\">{{ collector.totalDuration|number_format }}</span>
            <span class=\"sf-toolbar-label\">ms</span>
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>{{ collector.queries|length }} {{ queryLabel }}</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Provider</th>
                        <th>Query</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                    {% for query in collector.queries %}
                        <tr>
                            <td>{{ query.providerName|humanize }}</td>
                            <td>{{ query.queryString }}</td>
                            <td>{{ query.duration == 0 ? 'n/a' : query.duration|number_format ~ ' ms'}}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endset %}

        {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endif %}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label {{ collector.queries|length == 0 ? 'disabled' }}\">
        <span class=\"icon\">
            {{ include('@BazingaGeocoder/Collector/icon.svg') }}
        </span>
        <strong>Geocoder</strong>
    </span>
{% endblock %}

{% block panel %}
    <style>
        .sf-toggle-content.sf-toggle-visible {
            display: table-row;
        }
    </style>
    <h2>Geocoder</h2>

    <div class=\"sf-tabs\">
        {% for provider in collector.providers %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">{{ provider|humanize }} <span class=\"badge\">{{ collector.providerQueries(provider)|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These queries are executed by a provider named \"{{ provider }}\".
                </p>

            <table>
                <thead>
                    <tr>
                        <th style=\"min-width: 2rem;\"></th>
                        <th style=\"width: 40%\">Query</th>
                        <th style=\"width: 60%\">Result</th>
                        <th style=\"min-width: 4rem;\">Duration</th>
                    </tr>
                </thead>
                <tbody>
                {% for query in collector.providerQueries(provider) %}
                    <tr>
                        <td class=\"font-normal text-small\" nowrap=\"\">
                            <span class=\"colored text-bold\"># {{ loop.index }}</span>
                        </td>
                        <td class=\"font-normal\">
                            <span class=\"dump-inline\">
                                {{ query.queryString }}
                            </span>
                        </td>
                        <td class=\"font-normal\">
                            <span class=\"dump-inline\">
                                {% if query.result.message is defined %}
                                    Exception
                                {% else %}
                                    {{ dump(query.resultCount) }} Result(s)
                                {% endif %}
                            </span>
                            <span class=\"metadata\">
                                <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#geocoder-{{ provider }}-{{ loop.index }}-details\" data-toggle-alt-content=\"Hide\">Show</a>
                            </span>
                        </td>
                        <td class=\"font-normal text-small\" nowrap=\"\">
                            {{ query.duration|number_format }} ms
                        </td>
                    </tr>
                    <tr id=\"geocoder-{{ provider }}-{{ loop.index }}-details\" class=\"context sf-toggle-content sf-toggle-hidden\">
                        <td></td>
                        <td>{{ profiler_dump(query.query, maxDepth=1) }}</td>
                        {% if query.result.message is defined %}
                        <td>{{ profiler_dump(query.result, maxDepth=1) }}</td>
                        {% else %}
                        <td>{{ profiler_dump(query.result, maxDepth=3) }}</td>
                        {% endif %}
                        <td></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>

            </div>
        </div>
        {% else %}
        <div class=\"empty\">
            <p>No queries were executed.</p>
        </div>
        {% endfor %}
    </div>
{% endblock %}
", "@BazingaGeocoder/Collector/geocoder.html.twig", "/cocorico/vendor/willdurand/geocoder-bundle/Resources/views/Collector/geocoder.html.twig");
    }
}
