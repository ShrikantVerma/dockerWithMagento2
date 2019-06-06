<?php

/* CocoricoTimeBundle:Form:fields_date_time.html.twig */
class __TwigTemplate_b2c7b8bc631929ca0fd843178f757a0c2f4d271d2f1b42b4fb73c9f5c8addd3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CocoricoCoreBundle:Form:fields.html.twig", "CocoricoTimeBundle:Form:fields_date_time.html.twig", 1);
        $this->blocks = array(
            '_time_ranges_widget' => array($this, 'block__time_ranges_widget'),
            'date_range_widget' => array($this, 'block_date_range_widget'),
            '_date_range_ajax_widget' => array($this, 'block__date_range_ajax_widget'),
            'time_range_widget' => array($this, 'block_time_range_widget'),
            '_time_range_hidden_widget' => array($this, 'block__time_range_hidden_widget'),
            '_time_range_ajax_widget' => array($this, 'block__time_range_ajax_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'weekdays_widget' => array($this, 'block_weekdays_widget'),
            '_listing_availabilities_prices_time_ranges_widget' => array($this, 'block__listing_availabilities_prices_time_ranges_widget'),
            '_listing_availabilities_status_time_ranges_widget' => array($this, 'block__listing_availabilities_status_time_ranges_widget'),
            '_listing_availabilities_prices_date_range_widget' => array($this, 'block__listing_availabilities_prices_date_range_widget'),
            '_listing_availabilities_status_date_range_widget' => array($this, 'block__listing_availabilities_status_date_range_widget'),
            '_date_range_availability_widget' => array($this, 'block__date_range_availability_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CocoricoCoreBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_944938df57359aad16762a179eaaf0a40cbfc587018ff2eaeb229bdc5035bf3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944938df57359aad16762a179eaaf0a40cbfc587018ff2eaeb229bdc5035bf3d->enter($__internal_944938df57359aad16762a179eaaf0a40cbfc587018ff2eaeb229bdc5035bf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoTimeBundle:Form:fields_date_time.html.twig"));

        $__internal_86444592bbd892d557cfa46b40d3ba38912741f957bec38b90fb9e1c83ceac54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86444592bbd892d557cfa46b40d3ba38912741f957bec38b90fb9e1c83ceac54->enter($__internal_86444592bbd892d557cfa46b40d3ba38912741f957bec38b90fb9e1c83ceac54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoTimeBundle:Form:fields_date_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_944938df57359aad16762a179eaaf0a40cbfc587018ff2eaeb229bdc5035bf3d->leave($__internal_944938df57359aad16762a179eaaf0a40cbfc587018ff2eaeb229bdc5035bf3d_prof);

        
        $__internal_86444592bbd892d557cfa46b40d3ba38912741f957bec38b90fb9e1c83ceac54->leave($__internal_86444592bbd892d557cfa46b40d3ba38912741f957bec38b90fb9e1c83ceac54_prof);

    }

    // line 70
    public function block__time_ranges_widget($context, array $blocks = array())
    {
        $__internal_757114aaae8512b56c67fb4e33d3d7db8b5112ebaa617e701760f9d8c36cb192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757114aaae8512b56c67fb4e33d3d7db8b5112ebaa617e701760f9d8c36cb192->enter($__internal_757114aaae8512b56c67fb4e33d3d7db8b5112ebaa617e701760f9d8c36cb192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_time_ranges_widget"));

        $__internal_bb328f6edb4cfa9d30d84b2afae6adb4877a93e0a3dbcb0e07abf66b4856094a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb328f6edb4cfa9d30d84b2afae6adb4877a93e0a3dbcb0e07abf66b4856094a->enter($__internal_bb328f6edb4cfa9d30d84b2afae6adb4877a93e0a3dbcb0e07abf66b4856094a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_time_ranges_widget"));

        // line 71
        echo "    ";
        $context["self"] = $this;
        // line 72
        echo "
    ";
        // line 73
        ob_start();
        // line 74
        echo "        ";
        $context["data_prototype"] = "";
        // line 75
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 76
            echo "            ";
            $context["data_prototype"] = $context["self"]->macro_timeRangesCollectionItem(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), "vars", array()), "prototype", array()), (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 76, $this->getSourceContext()); })()));
            // line 77
            echo "        ";
        }
        // line 78
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-prototype=\"";
        echo twig_escape_filter($this->env, (isset($context["data_prototype"]) || array_key_exists("data_prototype", $context) ? $context["data_prototype"] : (function () { throw new Twig_Error_Runtime('Variable "data_prototype" does not exist.', 78, $this->getSourceContext()); })()));
        echo "\">

            <ul class=\"collection\">
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child_form"]) {
            // line 82
            echo "                    ";
            echo $context["self"]->macro_timeRangesCollectionItem($context["child_form"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 82, $this->getSourceContext()); })()));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            </ul>

            ";
        // line 86
        if ( !(null === ((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 86, $this->getSourceContext()); })()), null)) : (null)))) {
            // line 87
            echo "                <div class=\"btn-block text-center collection-add-block\">
                    <a class=\"add\" title=\"Add\" href=\"javascript:void(0)\">
                        <div style=\"display: none;\"></div>
                        <span>";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("collection.add_item", array(), "cocorico"), "html", null, true);
            echo "</span>
                    </a>
                </div>
            ";
        }
        // line 94
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bb328f6edb4cfa9d30d84b2afae6adb4877a93e0a3dbcb0e07abf66b4856094a->leave($__internal_bb328f6edb4cfa9d30d84b2afae6adb4877a93e0a3dbcb0e07abf66b4856094a_prof);

        
        $__internal_757114aaae8512b56c67fb4e33d3d7db8b5112ebaa617e701760f9d8c36cb192->leave($__internal_757114aaae8512b56c67fb4e33d3d7db8b5112ebaa617e701760f9d8c36cb192_prof);

    }

    // line 102
    public function block_date_range_widget($context, array $blocks = array())
    {
        $__internal_d3f31d88069ee98134b4b08eff3c963c91d183fc3f5c58b92ed4be72eec61cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f31d88069ee98134b4b08eff3c963c91d183fc3f5c58b92ed4be72eec61cbd->enter($__internal_d3f31d88069ee98134b4b08eff3c963c91d183fc3f5c58b92ed4be72eec61cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_range_widget"));

        $__internal_053e79b56ae8fe6355f44ae5a1dae350d3c7a0f862ddec85f60a7ba3a9a9e984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053e79b56ae8fe6355f44ae5a1dae350d3c7a0f862ddec85f60a7ba3a9a9e984->enter($__internal_053e79b56ae8fe6355f44ae5a1dae350d3c7a0f862ddec85f60a7ba3a9a9e984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_range_widget"));

        // line 103
        echo "<div class=\"col datepicker-holder day-fields display-";
        echo twig_escape_filter($this->env, (isset($context["daysDisplayMode"]) || array_key_exists("daysDisplayMode", $context) ? $context["daysDisplayMode"] : (function () { throw new Twig_Error_Runtime('Variable "daysDisplayMode" does not exist.', 103, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        <div class=\"col\">
            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->getSourceContext()); })()), "start", array()), 'errors');
        echo "
            ";
        // line 106
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "start", array()), "vars", array()), "label", array())) {
            // line 107
            echo "                <strong class=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->getSourceContext()); })()), "start", array()), 'label');
            echo "</strong>
            ";
        }
        // line 109
        echo "
            <div class=\"input-append date field-holder\">
                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->getSourceContext()); })()), "start", array()), 'widget', array("type" => "text", "attr" => array("class" => ("form-control from " . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 114
($context["form"] ?? null), "start", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "start", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "")) : (""))), "placeholder" => "/      /")));
        // line 117
        echo "
                <span class=\"add-on\">
                    <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-calendar\"></i>
                </span>
            </div>
        </div>

        ";
        // line 124
        if (!twig_in_filter("date_hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 124, $this->getSourceContext()); })()), "end", array()), "vars", array()), "block_prefixes", array()))) {
            // line 125
            echo "            <div class=\"col\">
                ";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 126, $this->getSourceContext()); })()), "end", array()), 'errors');
            echo "
                ";
            // line 127
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), "end", array()), "vars", array()), "label", array())) {
                // line 128
                echo "                    <strong class=\"title\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "end", array()), 'label');
                echo "</strong>
                ";
            }
            // line 130
            echo "
                <div class=\"input-append date field-holder\">
                    ";
            // line 132
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 132, $this->getSourceContext()); })()), "end", array()), 'widget', array("type" => "text", "attr" => array("class" => ("form-control to " . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 135
($context["form"] ?? null), "end", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "end", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "")) : (""))), "placeholder" => "/      /")));
            // line 138
            echo "
                    <span class=\"add-on\">
                        <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-calendar\"></i>
                    </span>
                </div>
            </div>
        ";
        } else {
            // line 145
            echo "            ";
            // line 146
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "end", array()), 'errors');
            echo "
            ";
            // line 147
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "end", array()), 'widget');
            echo "
        ";
        }
        // line 149
        echo "    </div>

    ";
        // line 151
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "nb_days", array(), "any", true, true)) {
            // line 152
            echo "        ";
            if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 152, $this->getSourceContext()); })()), "nb_days", array()), "vars", array()), "block_prefixes", array()))) {
                // line 153
                echo "            <div class=\"col day-fields nb-days\">
                <strong class=\"title\">
                    ";
                // line 155
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "nb_days", array()), 'label');
                echo "
                </strong>

                ";
                // line 158
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "nb_days", array()), 'errors');
                echo "
                ";
                // line 159
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "nb_days", array()), 'widget');
                echo "
            </div>
        ";
            } else {
                // line 162
                echo "            ";
                // line 163
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "nb_days", array()), 'errors');
                echo "
            ";
                // line 164
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 164, $this->getSourceContext()); })()), "nb_days", array()), 'widget');
                echo "
        ";
            }
            // line 166
            echo "    ";
        }
        
        $__internal_053e79b56ae8fe6355f44ae5a1dae350d3c7a0f862ddec85f60a7ba3a9a9e984->leave($__internal_053e79b56ae8fe6355f44ae5a1dae350d3c7a0f862ddec85f60a7ba3a9a9e984_prof);

        
        $__internal_d3f31d88069ee98134b4b08eff3c963c91d183fc3f5c58b92ed4be72eec61cbd->leave($__internal_d3f31d88069ee98134b4b08eff3c963c91d183fc3f5c58b92ed4be72eec61cbd_prof);

    }

    // line 174
    public function block__date_range_ajax_widget($context, array $blocks = array())
    {
        $__internal_671a6b4513170368ca67b0b001f6707888f6c0c90ea41b93bf0100a1a65d1f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_671a6b4513170368ca67b0b001f6707888f6c0c90ea41b93bf0100a1a65d1f89->enter($__internal_671a6b4513170368ca67b0b001f6707888f6c0c90ea41b93bf0100a1a65d1f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_date_range_ajax_widget"));

        $__internal_82c81e4a3da0fd0ae508721dafaeda9c3f5b61f7827593e5e629a64b8d0967e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c81e4a3da0fd0ae508721dafaeda9c3f5b61f7827593e5e629a64b8d0967e4->enter($__internal_82c81e4a3da0fd0ae508721dafaeda9c3f5b61f7827593e5e629a64b8d0967e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_date_range_ajax_widget"));

        // line 175
        echo "<div class=\"datepicker-holder-ajax\">
        <div class=\"col\">
            ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 177, $this->getSourceContext()); })()), "start", array()), 'errors');
        echo "
            <strong class=\"title\">
                ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 179, $this->getSourceContext()); })()), "start", array()), 'label', array("required" => false));
        echo "
            </strong>

            <div class=\"input-append date field-holder\">
                <span class=\"add-on\">
                    <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-calendar\"></i>
                </span>

                ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 187, $this->getSourceContext()); })()), "start", array()), 'widget', array("id" => "start-date", "type" => "text", "attr" => array("class" => "form-control from", "placeholder" => "/      /", "title" => "start-date")));
        // line 195
        echo "
            </div>
        </div>
        ";
        // line 198
        if (!twig_in_filter("date_hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 198, $this->getSourceContext()); })()), "end", array()), "vars", array()), "block_prefixes", array()))) {
            // line 199
            echo "            <div class=\"col\">
                ";
            // line 200
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 200, $this->getSourceContext()); })()), "end", array()), 'errors');
            echo "
                <strong class=\"title\">
                    ";
            // line 202
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 202, $this->getSourceContext()); })()), "end", array()), 'label', array("required" => false));
            echo "
                </strong>

                <div class=\"input-append date field-holder\">
                    <span class=\"add-on\">
                        <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-calendar\"></i>
                    </span>

                    ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 210, $this->getSourceContext()); })()), "end", array()), 'widget', array("id" => "end-date", "type" => "text", "attr" => array("class" => "form-control to", "placeholder" => "/      /", "title" => "date")));
            // line 218
            echo "
                </div>
            </div>
        ";
        } else {
            // line 222
            echo "            ";
            // line 223
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 223, $this->getSourceContext()); })()), "end", array()), 'errors');
            echo "
            ";
            // line 224
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 224, $this->getSourceContext()); })()), "end", array()), 'widget', array("id" => "end-date"));
            // line 226
            echo "
        ";
        }
        // line 228
        echo "    </div>

    ";
        // line 230
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "nb_days", array(), "any", true, true)) {
            // line 231
            echo "        ";
            if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 231, $this->getSourceContext()); })()), "nb_days", array()), "vars", array()), "block_prefixes", array()))) {
                // line 232
                echo "            <div class=\"col day-fields nb-days\">
                <strong class=\"title\">
                    ";
                // line 234
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 234, $this->getSourceContext()); })()), "nb_days", array()), 'label');
                echo "
                </strong>

                ";
                // line 237
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 237, $this->getSourceContext()); })()), "nb_days", array()), 'errors');
                echo "
                ";
                // line 238
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 238, $this->getSourceContext()); })()), "nb_days", array()), 'widget');
                echo "
            </div>
        ";
            } else {
                // line 241
                echo "            ";
                // line 242
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 242, $this->getSourceContext()); })()), "nb_days", array()), 'errors');
                echo "
            ";
                // line 243
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 243, $this->getSourceContext()); })()), "nb_days", array()), 'widget');
                echo "
        ";
            }
            // line 245
            echo "    ";
        }
        
        $__internal_82c81e4a3da0fd0ae508721dafaeda9c3f5b61f7827593e5e629a64b8d0967e4->leave($__internal_82c81e4a3da0fd0ae508721dafaeda9c3f5b61f7827593e5e629a64b8d0967e4_prof);

        
        $__internal_671a6b4513170368ca67b0b001f6707888f6c0c90ea41b93bf0100a1a65d1f89->leave($__internal_671a6b4513170368ca67b0b001f6707888f6c0c90ea41b93bf0100a1a65d1f89_prof);

    }

    // line 254
    public function block_time_range_widget($context, array $blocks = array())
    {
        $__internal_2a94291352986fcf119d72f72736db8d75cb9c43c95cfdb24760e12724649052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a94291352986fcf119d72f72736db8d75cb9c43c95cfdb24760e12724649052->enter($__internal_2a94291352986fcf119d72f72736db8d75cb9c43c95cfdb24760e12724649052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_range_widget"));

        $__internal_bfc8f370841efda69d168db7423c9220fc6bede7cdac92aeb8a78a5d41b3b8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc8f370841efda69d168db7423c9220fc6bede7cdac92aeb8a78a5d41b3b8e7->enter($__internal_bfc8f370841efda69d168db7423c9220fc6bede7cdac92aeb8a78a5d41b3b8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_range_widget"));

        // line 255
        echo "<div class=\"col timepicker-holder time-fields display-";
        echo twig_escape_filter($this->env, (isset($context["timesDisplayMode"]) || array_key_exists("timesDisplayMode", $context) ? $context["timesDisplayMode"] : (function () { throw new Twig_Error_Runtime('Variable "timesDisplayMode" does not exist.', 255, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        <div class=\"col\">
            <strong class=\"title\">
                ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 258, $this->getSourceContext()); })()), "start", array()), 'label');
        echo "
            </strong>

            ";
        // line 261
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 261, $this->getSourceContext()); })()), "start", array()), 'errors');
        echo "
            <div class='input-group date' id='datetimepicker3'>
                ";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 263, $this->getSourceContext()); })()), "start_picker", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "--:--")));
        // line 268
        echo "
                <span class=\"add-on\">
                    <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-clock\"></i>
                 </span>
            </div>
            ";
        // line 274
        echo "            <div class=\"hidden\">
                ";
        // line 275
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 275, $this->getSourceContext()); })()), "start", array()), 'widget');
        echo "
            </div>
        </div>

        ";
        // line 279
        if (((isset($context["timesDisplayMode"]) || array_key_exists("timesDisplayMode", $context) ? $context["timesDisplayMode"] : (function () { throw new Twig_Error_Runtime('Variable "timesDisplayMode" does not exist.', 279, $this->getSourceContext()); })()) == "duration")) {
            // line 280
            echo "            ";
            // line 281
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "nb_minutes", array(), "any", true, true)) {
                // line 282
                echo "                ";
                // line 283
                echo "                ";
                if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 283, $this->getSourceContext()); })()), "nb_minutes", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 284
                    echo "                    <strong class=\"title\">
                        ";
                    // line 285
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 285, $this->getSourceContext()); })()), "nb_minutes", array()), 'label', (twig_test_empty($_label_ = twig_capitalize_string_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->addTimeUnitTextFilter( -1))) ? array() : array("label" => $_label_)));
                    echo "
                    </strong>
                ";
                }
                // line 288
                echo "
                ";
                // line 290
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), "nb_minutes", array()), 'errors');
                echo "
                ";
                // line 291
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), "nb_minutes", array()), 'widget');
                echo "
            ";
            }
            // line 293
            echo "
            ";
            // line 295
            echo "            <div class=\"hidden\">
                ";
            // line 296
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 296, $this->getSourceContext()); })()), "end", array()), 'widget');
            echo "
            </div>
        ";
        } else {
            // line 299
            echo "            <div class=\"col\">
                <strong class=\"title\">
                    ";
            // line 301
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 301, $this->getSourceContext()); })()), "end", array()), 'label');
            echo "
                </strong>

                ";
            // line 304
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 304, $this->getSourceContext()); })()), "end", array()), 'errors');
            echo "
                <div class='input-group date' id='datetimepicker3'>
                    ";
            // line 306
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 306, $this->getSourceContext()); })()), "end_picker", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "--:--")));
            // line 311
            echo "
                    <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-time\"></span>
                    </span>
                </div>
                ";
            // line 317
            echo "                <div class=\"hidden\">
                    ";
            // line 318
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 318, $this->getSourceContext()); })()), "end", array()), 'widget');
            echo "
                </div>
            </div>
        ";
        }
        // line 322
        echo "    </div>";
        
        $__internal_bfc8f370841efda69d168db7423c9220fc6bede7cdac92aeb8a78a5d41b3b8e7->leave($__internal_bfc8f370841efda69d168db7423c9220fc6bede7cdac92aeb8a78a5d41b3b8e7_prof);

        
        $__internal_2a94291352986fcf119d72f72736db8d75cb9c43c95cfdb24760e12724649052->leave($__internal_2a94291352986fcf119d72f72736db8d75cb9c43c95cfdb24760e12724649052_prof);

    }

    // line 329
    public function block__time_range_hidden_widget($context, array $blocks = array())
    {
        $__internal_6ba4a85c2f153d88be6f82595a1d52993f839ac4564b192aefd6b1da1c8fb3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba4a85c2f153d88be6f82595a1d52993f839ac4564b192aefd6b1da1c8fb3e5->enter($__internal_6ba4a85c2f153d88be6f82595a1d52993f839ac4564b192aefd6b1da1c8fb3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_time_range_hidden_widget"));

        $__internal_892f3da88eb45686eab61368d9a9f00c131cb8a21255a3d84a6637137f474ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892f3da88eb45686eab61368d9a9f00c131cb8a21255a3d84a6637137f474ac2->enter($__internal_892f3da88eb45686eab61368d9a9f00c131cb8a21255a3d84a6637137f474ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_time_range_hidden_widget"));

        
        $__internal_892f3da88eb45686eab61368d9a9f00c131cb8a21255a3d84a6637137f474ac2->leave($__internal_892f3da88eb45686eab61368d9a9f00c131cb8a21255a3d84a6637137f474ac2_prof);

        
        $__internal_6ba4a85c2f153d88be6f82595a1d52993f839ac4564b192aefd6b1da1c8fb3e5->leave($__internal_6ba4a85c2f153d88be6f82595a1d52993f839ac4564b192aefd6b1da1c8fb3e5_prof);

    }

    // line 336
    public function block__time_range_ajax_widget($context, array $blocks = array())
    {
        $__internal_9136e2928b6ac2b0a0d4861c62869381ec4fc9315601cb9c5e79aed5b8ef2c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9136e2928b6ac2b0a0d4861c62869381ec4fc9315601cb9c5e79aed5b8ef2c2e->enter($__internal_9136e2928b6ac2b0a0d4861c62869381ec4fc9315601cb9c5e79aed5b8ef2c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_time_range_ajax_widget"));

        $__internal_add94a353c9c84bbb720f87de15b238b679644a2aaf0c4c5e040c052b7993eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add94a353c9c84bbb720f87de15b238b679644a2aaf0c4c5e040c052b7993eb0->enter($__internal_add94a353c9c84bbb720f87de15b238b679644a2aaf0c4c5e040c052b7993eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_time_range_ajax_widget"));

        // line 337
        echo "<div class=\"timepicker-holder-ajax time-fields display-";
        echo twig_escape_filter($this->env, (isset($context["timesDisplayMode"]) || array_key_exists("timesDisplayMode", $context) ? $context["timesDisplayMode"] : (function () { throw new Twig_Error_Runtime('Variable "timesDisplayMode" does not exist.', 337, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        <div class=\"col\">
            ";
        // line 339
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 339, $this->getSourceContext()); })()), "start", array()), 'errors');
        echo "
            <strong class=\"title\">
                ";
        // line 341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 341, $this->getSourceContext()); })()), "start", array()), 'label', array("required" => false));
        echo "
            </strong>

            <div class='input-group date' id='datetimepicker3'>
                    <span class=\"add-on\">
                        <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-clock\"></i>
                    </span>
                ";
        // line 348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 348, $this->getSourceContext()); })()), "start_picker", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "--:--")));
        // line 353
        echo "
            </div>

            <div class=\"hidden\">
                ";
        // line 357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 357, $this->getSourceContext()); })()), "start", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col\">
            ";
        // line 361
        if (((isset($context["timesDisplayMode"]) || array_key_exists("timesDisplayMode", $context) ? $context["timesDisplayMode"] : (function () { throw new Twig_Error_Runtime('Variable "timesDisplayMode" does not exist.', 361, $this->getSourceContext()); })()) == "duration")) {
            // line 362
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 362, $this->getSourceContext()); })()), "nb_minutes", array()), 'errors');
            echo "

                ";
            // line 364
            if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 364, $this->getSourceContext()); })()), "nb_minutes", array()), "vars", array()), "block_prefixes", array()))) {
                // line 365
                echo "                    <strong class=\"title\">
                        ";
                // line 366
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 366, $this->getSourceContext()); })()), "nb_minutes", array()), 'label', array("required" => false) + (twig_test_empty($_label_ = twig_capitalize_string_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->addTimeUnitTextFilter( -1))) ? array() : array("label" => $_label_)));
                echo "
                    </strong>
                ";
            }
            // line 369
            echo "
                ";
            // line 370
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()), "nb_minutes", array()), 'widget');
            echo "
                ";
            // line 372
            echo "                <div class=\"hidden\">
                    ";
            // line 373
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 373, $this->getSourceContext()); })()), "end", array()), 'widget');
            echo "
                </div>
            ";
        } else {
            // line 376
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 376, $this->getSourceContext()); })()), "end", array()), 'errors');
            echo "
                <strong class=\"title\">
                    ";
            // line 378
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 378, $this->getSourceContext()); })()), "end", array()), 'label', array("required" => false));
            echo "
                </strong>

                <div class='input-group date' id='datetimepicker3'>
                        <span class=\"add-on\">
                            <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-clock\"></i>
                        </span>
                    ";
            // line 385
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 385, $this->getSourceContext()); })()), "end_picker", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "--:--")));
            // line 390
            echo "
                </div>
                ";
            // line 393
            echo "                <div class=\"hidden\">
                    ";
            // line 394
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 394, $this->getSourceContext()); })()), "end", array()), 'widget');
            echo "
                </div>
            ";
        }
        // line 397
        echo "        </div>
    </div>";
        
        $__internal_add94a353c9c84bbb720f87de15b238b679644a2aaf0c4c5e040c052b7993eb0->leave($__internal_add94a353c9c84bbb720f87de15b238b679644a2aaf0c4c5e040c052b7993eb0_prof);

        
        $__internal_9136e2928b6ac2b0a0d4861c62869381ec4fc9315601cb9c5e79aed5b8ef2c2e->leave($__internal_9136e2928b6ac2b0a0d4861c62869381ec4fc9315601cb9c5e79aed5b8ef2c2e_prof);

    }

    // line 404
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a2bafd1c4fbd51ee5a3bc3c87714a4178b53966b9fc7e4cbe5eb84376ce6c69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2bafd1c4fbd51ee5a3bc3c87714a4178b53966b9fc7e4cbe5eb84376ce6c69b->enter($__internal_a2bafd1c4fbd51ee5a3bc3c87714a4178b53966b9fc7e4cbe5eb84376ce6c69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_9028424e5f2f7424a643f2eb813a12418f9edf50c61cd52c1b88eedecba2ae61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9028424e5f2f7424a643f2eb813a12418f9edf50c61cd52c1b88eedecba2ae61->enter($__internal_9028424e5f2f7424a643f2eb813a12418f9edf50c61cd52c1b88eedecba2ae61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 405
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 405, $this->getSourceContext()); })()) == "single_text")) {
            // line 406
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 408
            if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 408, $this->getSourceContext()); })()) == "text")) {
                // line 409
                echo "            ";
                $context["vars"] = array("attr" => array("size" => 1));
                // line 410
                echo "        ";
            } else {
                // line 411
                echo "            ";
                $context["vars"] = array("attr" => array("class" => "no-scroll no-arrow"));
                // line 412
                echo "        ";
            }
            // line 413
            echo "
        <div ";
            // line 414
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 415
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 415, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 415, $this->getSourceContext()); })()));
            echo "
            ";
            // line 416
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 416, $this->getSourceContext()); })())) {
                // line 417
                echo "                :";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 417, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 417, $this->getSourceContext()); })()));
                echo "
            ";
            }
            // line 419
            echo "            ";
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 419, $this->getSourceContext()); })())) {
                // line 420
                echo "                :";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 420, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 420, $this->getSourceContext()); })()));
                echo "
            ";
            }
            // line 422
            echo "        </div>";
        }
        
        $__internal_9028424e5f2f7424a643f2eb813a12418f9edf50c61cd52c1b88eedecba2ae61->leave($__internal_9028424e5f2f7424a643f2eb813a12418f9edf50c61cd52c1b88eedecba2ae61_prof);

        
        $__internal_a2bafd1c4fbd51ee5a3bc3c87714a4178b53966b9fc7e4cbe5eb84376ce6c69b->leave($__internal_a2bafd1c4fbd51ee5a3bc3c87714a4178b53966b9fc7e4cbe5eb84376ce6c69b_prof);

    }

    // line 429
    public function block_weekdays_widget($context, array $blocks = array())
    {
        $__internal_64e18e422842b3bf67b4831208e3e93a4dcc7b852aacda71afd872f563def5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e18e422842b3bf67b4831208e3e93a4dcc7b852aacda71afd872f563def5d1->enter($__internal_64e18e422842b3bf67b4831208e3e93a4dcc7b852aacda71afd872f563def5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "weekdays_widget"));

        $__internal_1eb0e441acce56b510a31d7859519144a28d55433376344f43c40ebfce047544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb0e441acce56b510a31d7859519144a28d55433376344f43c40ebfce047544->enter($__internal_1eb0e441acce56b510a31d7859519144a28d55433376344f43c40ebfce047544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "weekdays_widget"));

        // line 430
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <ul class=\"list-inline check-list\">";
        // line 432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 432, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 433
            echo "                <li>";
            // line 434
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 435
            echo "<span class=\"label\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
            echo "</span>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 438
        echo "</ul>
    </div>";
        
        $__internal_1eb0e441acce56b510a31d7859519144a28d55433376344f43c40ebfce047544->leave($__internal_1eb0e441acce56b510a31d7859519144a28d55433376344f43c40ebfce047544_prof);

        
        $__internal_64e18e422842b3bf67b4831208e3e93a4dcc7b852aacda71afd872f563def5d1->leave($__internal_64e18e422842b3bf67b4831208e3e93a4dcc7b852aacda71afd872f563def5d1_prof);

    }

    // line 447
    public function block__listing_availabilities_prices_time_ranges_widget($context, array $blocks = array())
    {
        $__internal_b4a580f1222afee128a5c410daeb0469c2396e8c8611a253550c67073fdf5c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a580f1222afee128a5c410daeb0469c2396e8c8611a253550c67073fdf5c7f->enter($__internal_b4a580f1222afee128a5c410daeb0469c2396e8c8611a253550c67073fdf5c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_availabilities_prices_time_ranges_widget"));

        $__internal_bdfd45aae91873a7d9f71ce5e3fec5d707fa29aeb2394ef16c7b29cd67c0631f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfd45aae91873a7d9f71ce5e3fec5d707fa29aeb2394ef16c7b29cd67c0631f->enter($__internal_bdfd45aae91873a7d9f71ce5e3fec5d707fa29aeb2394ef16c7b29cd67c0631f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_availabilities_prices_time_ranges_widget"));

        // line 448
        echo "    ";
        $this->displayBlock("_time_ranges_widget", $context, $blocks);
        echo "
";
        
        $__internal_bdfd45aae91873a7d9f71ce5e3fec5d707fa29aeb2394ef16c7b29cd67c0631f->leave($__internal_bdfd45aae91873a7d9f71ce5e3fec5d707fa29aeb2394ef16c7b29cd67c0631f_prof);

        
        $__internal_b4a580f1222afee128a5c410daeb0469c2396e8c8611a253550c67073fdf5c7f->leave($__internal_b4a580f1222afee128a5c410daeb0469c2396e8c8611a253550c67073fdf5c7f_prof);

    }

    // line 454
    public function block__listing_availabilities_status_time_ranges_widget($context, array $blocks = array())
    {
        $__internal_636445a68f0cc56fedb7149a9157119aba1ab8761bf7037c1cf2b52d11382530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636445a68f0cc56fedb7149a9157119aba1ab8761bf7037c1cf2b52d11382530->enter($__internal_636445a68f0cc56fedb7149a9157119aba1ab8761bf7037c1cf2b52d11382530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_availabilities_status_time_ranges_widget"));

        $__internal_bc734688da58cd5fcd74f94c995207d694ea1e7364afd10fbd722a653856a4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc734688da58cd5fcd74f94c995207d694ea1e7364afd10fbd722a653856a4bc->enter($__internal_bc734688da58cd5fcd74f94c995207d694ea1e7364afd10fbd722a653856a4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_availabilities_status_time_ranges_widget"));

        // line 455
        echo "    ";
        $this->displayBlock("_time_ranges_widget", $context, $blocks);
        echo "
";
        
        $__internal_bc734688da58cd5fcd74f94c995207d694ea1e7364afd10fbd722a653856a4bc->leave($__internal_bc734688da58cd5fcd74f94c995207d694ea1e7364afd10fbd722a653856a4bc_prof);

        
        $__internal_636445a68f0cc56fedb7149a9157119aba1ab8761bf7037c1cf2b52d11382530->leave($__internal_636445a68f0cc56fedb7149a9157119aba1ab8761bf7037c1cf2b52d11382530_prof);

    }

    // line 462
    public function block__listing_availabilities_prices_date_range_widget($context, array $blocks = array())
    {
        $__internal_da708c2adcbc76fc4979257b10e7aceb4ef930b4cb999e2803f032251c97171c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da708c2adcbc76fc4979257b10e7aceb4ef930b4cb999e2803f032251c97171c->enter($__internal_da708c2adcbc76fc4979257b10e7aceb4ef930b4cb999e2803f032251c97171c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_availabilities_prices_date_range_widget"));

        $__internal_69e7980f6a94b94720860622da454e7e90eda0a83c938f0d7c4468d3998593be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e7980f6a94b94720860622da454e7e90eda0a83c938f0d7c4468d3998593be->enter($__internal_69e7980f6a94b94720860622da454e7e90eda0a83c938f0d7c4468d3998593be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_availabilities_prices_date_range_widget"));

        // line 463
        echo "    ";
        $this->displayBlock("_date_range_availability_widget", $context, $blocks);
        echo "
";
        
        $__internal_69e7980f6a94b94720860622da454e7e90eda0a83c938f0d7c4468d3998593be->leave($__internal_69e7980f6a94b94720860622da454e7e90eda0a83c938f0d7c4468d3998593be_prof);

        
        $__internal_da708c2adcbc76fc4979257b10e7aceb4ef930b4cb999e2803f032251c97171c->leave($__internal_da708c2adcbc76fc4979257b10e7aceb4ef930b4cb999e2803f032251c97171c_prof);

    }

    // line 469
    public function block__listing_availabilities_status_date_range_widget($context, array $blocks = array())
    {
        $__internal_1ac85120fb4f2608f0f9d8d362617781b3513c73a2d843bd09c1a52b04e94974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac85120fb4f2608f0f9d8d362617781b3513c73a2d843bd09c1a52b04e94974->enter($__internal_1ac85120fb4f2608f0f9d8d362617781b3513c73a2d843bd09c1a52b04e94974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_availabilities_status_date_range_widget"));

        $__internal_ecdb5981b84f39113a41703a24b01e6bd839535a9e53327da3d177bb08a43352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecdb5981b84f39113a41703a24b01e6bd839535a9e53327da3d177bb08a43352->enter($__internal_ecdb5981b84f39113a41703a24b01e6bd839535a9e53327da3d177bb08a43352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_availabilities_status_date_range_widget"));

        // line 470
        echo "    ";
        $this->displayBlock("_date_range_availability_widget", $context, $blocks);
        echo "
";
        
        $__internal_ecdb5981b84f39113a41703a24b01e6bd839535a9e53327da3d177bb08a43352->leave($__internal_ecdb5981b84f39113a41703a24b01e6bd839535a9e53327da3d177bb08a43352_prof);

        
        $__internal_1ac85120fb4f2608f0f9d8d362617781b3513c73a2d843bd09c1a52b04e94974->leave($__internal_1ac85120fb4f2608f0f9d8d362617781b3513c73a2d843bd09c1a52b04e94974_prof);

    }

    // line 477
    public function block__date_range_availability_widget($context, array $blocks = array())
    {
        $__internal_587d03ed5361c7d57ff9f06ac53114c3c92ea266f999341cfd3b3abb9b285169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587d03ed5361c7d57ff9f06ac53114c3c92ea266f999341cfd3b3abb9b285169->enter($__internal_587d03ed5361c7d57ff9f06ac53114c3c92ea266f999341cfd3b3abb9b285169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_date_range_availability_widget"));

        $__internal_f7e609fa39d506f8414c629a43362c37c0d32905f24ba7e2f7a8d12572e35a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e609fa39d506f8414c629a43362c37c0d32905f24ba7e2f7a8d12572e35a9b->enter($__internal_f7e609fa39d506f8414c629a43362c37c0d32905f24ba7e2f7a8d12572e35a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_date_range_availability_widget"));

        // line 478
        echo "<div class=\"col datepicker-holder day-fields display-";
        echo twig_escape_filter($this->env, (isset($context["daysDisplayMode"]) || array_key_exists("daysDisplayMode", $context) ? $context["daysDisplayMode"] : (function () { throw new Twig_Error_Runtime('Variable "daysDisplayMode" does not exist.', 478, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        <div class=\"col\">
            ";
        // line 480
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 480, $this->getSourceContext()); })()), "start", array()), 'errors');
        echo "
            <strong class=\"title\">";
        // line 481
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 481, $this->getSourceContext()); })()), "start", array()), 'label');
        echo "</strong>

            <div class=\"input-append date field-holder\">
                ";
        // line 484
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 484, $this->getSourceContext()); })()), "start", array()), 'widget', array("type" => "text", "attr" => array("class" => "form-control from", "placeholder" => "/      /")));
        // line 490
        echo "
                <span class=\"add-on\">
                    <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-calendar\"></i>
                </span>
            </div>
        </div>

        ";
        // line 497
        if (!twig_in_filter("date_hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 497, $this->getSourceContext()); })()), "end", array()), "vars", array()), "block_prefixes", array()))) {
            // line 498
            echo "            <div class=\"col\">
                ";
            // line 499
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 499, $this->getSourceContext()); })()), "end", array()), 'errors');
            echo "
                <strong class=\"title\">";
            // line 500
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 500, $this->getSourceContext()); })()), "end", array()), 'label');
            echo "</strong>

                <div class=\"input-append date field-holder\">
                    ";
            // line 503
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 503, $this->getSourceContext()); })()), "end", array()), 'widget', array("type" => "text", "attr" => array("class" => "form-control to", "placeholder" => "/      /")));
            // line 509
            echo "
                    <span class=\"add-on\">
                        <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-calendar\"></i>
                    </span>
                </div>
            </div>
        ";
        } else {
            // line 516
            echo "            ";
            // line 517
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 517, $this->getSourceContext()); })()), "end", array()), 'errors');
            echo "
            ";
            // line 518
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 518, $this->getSourceContext()); })()), "end", array()), 'widget');
            echo "
        ";
        }
        // line 520
        echo "    </div>

    ";
        // line 522
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "nb_days", array(), "any", true, true)) {
            // line 523
            echo "        ";
            if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 523, $this->getSourceContext()); })()), "nb_days", array()), "vars", array()), "block_prefixes", array()))) {
                // line 524
                echo "            <div class=\"col day-fields nb-days\">
                <strong class=\"title\">
                    ";
                // line 526
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 526, $this->getSourceContext()); })()), "nb_days", array()), 'label');
                echo "
                </strong>

                ";
                // line 529
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 529, $this->getSourceContext()); })()), "nb_days", array()), 'errors');
                echo "
                ";
                // line 530
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 530, $this->getSourceContext()); })()), "nb_days", array()), 'widget');
                echo "
            </div>
        ";
            } else {
                // line 533
                echo "            ";
                // line 534
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 534, $this->getSourceContext()); })()), "nb_days", array()), 'errors');
                echo "
            ";
                // line 535
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 535, $this->getSourceContext()); })()), "nb_days", array()), 'widget');
                echo "
        ";
            }
            // line 537
            echo "    ";
        }
        
        $__internal_f7e609fa39d506f8414c629a43362c37c0d32905f24ba7e2f7a8d12572e35a9b->leave($__internal_f7e609fa39d506f8414c629a43362c37c0d32905f24ba7e2f7a8d12572e35a9b_prof);

        
        $__internal_587d03ed5361c7d57ff9f06ac53114c3c92ea266f999341cfd3b3abb9b285169->leave($__internal_587d03ed5361c7d57ff9f06ac53114c3c92ea266f999341cfd3b3abb9b285169_prof);

    }

    // line 5
    public function macro_timeRangesCollectionItem($__child_form__ = null, $__allow_delete__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "child_form" => $__child_form__,
            "allow_delete" => $__allow_delete__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3d61a5a25c1b6b24b85b4176157d5c1baa1785154b09d18814b299c175ad33ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3d61a5a25c1b6b24b85b4176157d5c1baa1785154b09d18814b299c175ad33ae->enter($__internal_3d61a5a25c1b6b24b85b4176157d5c1baa1785154b09d18814b299c175ad33ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "timeRangesCollectionItem"));

            $__internal_0887b1d0d3ef694aba46853c9ab8f687603f8297e6ca87490c511ac349ff725d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0887b1d0d3ef694aba46853c9ab8f687603f8297e6ca87490c511ac349ff725d->enter($__internal_0887b1d0d3ef694aba46853c9ab8f687603f8297e6ca87490c511ac349ff725d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "timeRangesCollectionItem"));

            // line 6
            echo "    ";
            ob_start();
            // line 7
            echo "        <li class=\"timepicker-holder time-fields\">
            ";
            // line 8
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["child_form"]) || array_key_exists("child_form", $context) ? $context["child_form"] : (function () { throw new Twig_Error_Runtime('Variable "child_form" does not exist.', 8, $this->getSourceContext()); })()), 'errors');
            echo "
            ";
            // line 9
            $context["fieldNum"] = 1;
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["child_form"]) || array_key_exists("child_form", $context) ? $context["child_form"] : (function () { throw new Twig_Error_Runtime('Variable "child_form" does not exist.', 10, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 11
                echo "                ";
                if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 12
                    echo "                    ";
                    if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "name", array()) == "start") || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "name", array()) == "end"))) {
                        // line 13
                        echo "                        <div class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "id", array()), "html", null, true);
                        echo " hidden\">
                            ";
                        // line 14
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', array("attr" => array("class" => "time-field no-arrow")));
                        // line 18
                        echo "
                        </div>
                    ";
                    } elseif (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 20
$context["field"], "vars", array()), "name", array()) == "start_picker") || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "name", array()) == "end_picker"))) {
                        // line 21
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "name", array()) == "start_picker")) {
                            // line 22
                            echo "                            ";
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["child_form"]) || array_key_exists("child_form", $context) ? $context["child_form"] : (function () { throw new Twig_Error_Runtime('Variable "child_form" does not exist.', 22, $this->getSourceContext()); })()), "start", array()), 'errors');
                            echo "
                            ";
                            // line 23
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["child_form"]) || array_key_exists("child_form", $context) ? $context["child_form"] : (function () { throw new Twig_Error_Runtime('Variable "child_form" does not exist.', 23, $this->getSourceContext()); })()), "start", array()), 'label');
                            echo "
                        ";
                        } else {
                            // line 25
                            echo "                            ";
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["child_form"]) || array_key_exists("child_form", $context) ? $context["child_form"] : (function () { throw new Twig_Error_Runtime('Variable "child_form" does not exist.', 25, $this->getSourceContext()); })()), "end", array()), 'errors');
                            echo "
                            ";
                            // line 26
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["child_form"]) || array_key_exists("child_form", $context) ? $context["child_form"] : (function () { throw new Twig_Error_Runtime('Variable "child_form" does not exist.', 26, $this->getSourceContext()); })()), "end", array()), 'label');
                            echo "
                        ";
                        }
                        // line 28
                        echo "                        <div class='input-group date' id='datetimepicker3'>
                            ";
                        // line 29
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', array("attr" => array("class" => "form-control", "placeholder" => "--:--")));
                        // line 34
                        echo "
                            <span class=\"add-on\">
                                <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-clock\"></i>
                            </span>
                        </div>
                    ";
                    } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 39
$context["field"], "vars", array()), "name", array()) == "date")) {
                        // line 40
                        echo "                        <div class=\"hidden\">
                            ";
                        // line 41
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', array("attr" => array("class" => "no-arrow")));
                        // line 45
                        echo "
                        </div>
                    ";
                    }
                    // line 48
                    echo "
                    ";
                    // line 49
                    $context["fieldNum"] = ((isset($context["fieldNum"]) || array_key_exists("fieldNum", $context) ? $context["fieldNum"] : (function () { throw new Twig_Error_Runtime('Variable "fieldNum" does not exist.', 49, $this->getSourceContext()); })()) + 1);
                    // line 50
                    echo "                ";
                } else {
                    // line 51
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
                    echo "
                ";
                }
                // line 53
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
            ";
            // line 55
            if ( !(null === ((array_key_exists("allow_delete", $context)) ? (_twig_default_filter((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 55, $this->getSourceContext()); })()), null)) : (null)))) {
                // line 56
                echo "                <a class=\"close\" title=\"Remove\" href=\"javascript:void(0)\"
                   onclick=\"\$(this).parent().remove();\">
                    <span class=\"hidden\">";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("collection.remove_item", array(), "cocorico"), "html", null, true);
                echo "</span>
                    <i class=\"icon-cancel\"></i>
                </a>
            ";
            }
            // line 62
            echo "        </li>

    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_0887b1d0d3ef694aba46853c9ab8f687603f8297e6ca87490c511ac349ff725d->leave($__internal_0887b1d0d3ef694aba46853c9ab8f687603f8297e6ca87490c511ac349ff725d_prof);

            
            $__internal_3d61a5a25c1b6b24b85b4176157d5c1baa1785154b09d18814b299c175ad33ae->leave($__internal_3d61a5a25c1b6b24b85b4176157d5c1baa1785154b09d18814b299c175ad33ae_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "CocoricoTimeBundle:Form:fields_date_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1140 => 62,  1133 => 58,  1129 => 56,  1127 => 55,  1124 => 54,  1118 => 53,  1112 => 51,  1109 => 50,  1107 => 49,  1104 => 48,  1099 => 45,  1097 => 41,  1094 => 40,  1092 => 39,  1085 => 34,  1083 => 29,  1080 => 28,  1075 => 26,  1070 => 25,  1065 => 23,  1060 => 22,  1057 => 21,  1055 => 20,  1051 => 18,  1049 => 14,  1044 => 13,  1041 => 12,  1038 => 11,  1033 => 10,  1031 => 9,  1027 => 8,  1024 => 7,  1021 => 6,  1002 => 5,  991 => 537,  986 => 535,  981 => 534,  979 => 533,  973 => 530,  969 => 529,  963 => 526,  959 => 524,  956 => 523,  954 => 522,  950 => 520,  945 => 518,  940 => 517,  938 => 516,  929 => 509,  927 => 503,  921 => 500,  917 => 499,  914 => 498,  912 => 497,  903 => 490,  901 => 484,  895 => 481,  891 => 480,  885 => 478,  876 => 477,  863 => 470,  854 => 469,  841 => 463,  832 => 462,  819 => 455,  810 => 454,  797 => 448,  788 => 447,  777 => 438,  767 => 435,  765 => 434,  763 => 433,  759 => 432,  754 => 430,  745 => 429,  734 => 422,  728 => 420,  725 => 419,  719 => 417,  717 => 416,  713 => 415,  709 => 414,  706 => 413,  703 => 412,  700 => 411,  697 => 410,  694 => 409,  692 => 408,  689 => 406,  687 => 405,  678 => 404,  667 => 397,  661 => 394,  658 => 393,  654 => 390,  652 => 385,  642 => 378,  636 => 376,  630 => 373,  627 => 372,  623 => 370,  620 => 369,  614 => 366,  611 => 365,  609 => 364,  603 => 362,  601 => 361,  594 => 357,  588 => 353,  586 => 348,  576 => 341,  571 => 339,  565 => 337,  556 => 336,  539 => 329,  529 => 322,  522 => 318,  519 => 317,  512 => 311,  510 => 306,  505 => 304,  499 => 301,  495 => 299,  489 => 296,  486 => 295,  483 => 293,  478 => 291,  473 => 290,  470 => 288,  464 => 285,  461 => 284,  458 => 283,  456 => 282,  453 => 281,  451 => 280,  449 => 279,  442 => 275,  439 => 274,  432 => 268,  430 => 263,  425 => 261,  419 => 258,  412 => 255,  403 => 254,  392 => 245,  387 => 243,  382 => 242,  380 => 241,  374 => 238,  370 => 237,  364 => 234,  360 => 232,  357 => 231,  355 => 230,  351 => 228,  347 => 226,  345 => 224,  340 => 223,  338 => 222,  332 => 218,  330 => 210,  319 => 202,  314 => 200,  311 => 199,  309 => 198,  304 => 195,  302 => 187,  291 => 179,  286 => 177,  282 => 175,  273 => 174,  262 => 166,  257 => 164,  252 => 163,  250 => 162,  244 => 159,  240 => 158,  234 => 155,  230 => 153,  227 => 152,  225 => 151,  221 => 149,  216 => 147,  211 => 146,  209 => 145,  200 => 138,  198 => 135,  197 => 132,  193 => 130,  187 => 128,  185 => 127,  181 => 126,  178 => 125,  176 => 124,  167 => 117,  165 => 114,  164 => 111,  160 => 109,  154 => 107,  152 => 106,  148 => 105,  142 => 103,  133 => 102,  121 => 94,  114 => 90,  109 => 87,  107 => 86,  103 => 84,  94 => 82,  90 => 81,  81 => 78,  78 => 77,  75 => 76,  72 => 75,  69 => 74,  67 => 73,  64 => 72,  61 => 71,  52 => 70,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CocoricoCoreBundle:Form:fields.html.twig' %}

{% trans_default_domain 'cocorico' %}

{% macro timeRangesCollectionItem(child_form, allow_delete) %}
    {% spaceless %}
        <li class=\"timepicker-holder time-fields\">
            {{ form_errors(child_form) }}
            {% set fieldNum = 1 %}
            {% for field in child_form %}
                {% if \"hidden\" not in field.vars.block_prefixes %}
                    {% if field.vars.name == \"start\" or field.vars.name == \"end\" %}
                        <div class=\"{{ field.vars.id }} hidden\">
                            {{ form_widget(field,{
                                'attr': {
                                    'class': 'time-field no-arrow',
                                }
                            }) }}
                        </div>
                    {% elseif field.vars.name == \"start_picker\" or field.vars.name == \"end_picker\" %}
                        {% if field.vars.name == \"start_picker\" %}
                            {{ form_errors(child_form.start) }}
                            {{ form_label(child_form.start) }}
                        {% else %}
                            {{ form_errors(child_form.end) }}
                            {{ form_label(child_form.end) }}
                        {% endif %}
                        <div class='input-group date' id='datetimepicker3'>
                            {{ form_widget(field,{
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': '--:--',
                                }
                            }) }}
                            <span class=\"add-on\">
                                <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-clock\"></i>
                            </span>
                        </div>
                    {% elseif field.vars.name == \"date\" %}
                        <div class=\"hidden\">
                            {{ form_widget(field,{
                                'attr': {
                                    'class': 'no-arrow',
                                }
                            }) }}
                        </div>
                    {% endif %}

                    {% set fieldNum = fieldNum + 1 %}
                {% else %}
                    {{ form_widget(field) }}
                {% endif %}
            {% endfor %}

            {% if allow_delete|default(null) is not null %}
                <a class=\"close\" title=\"Remove\" href=\"javascript:void(0)\"
                   onclick=\"\$(this).parent().remove();\">
                    <span class=\"hidden\">{{ 'collection.remove_item'|trans }}</span>
                    <i class=\"icon-cancel\"></i>
                </a>
            {% endif %}
        </li>

    {% endspaceless %}
{% endmacro %}

{#
   Time ranges
#}
{% block _time_ranges_widget %}
    {% import _self as self %}

    {% spaceless %}
        {% set data_prototype = \"\" %}
        {% if prototype is defined %}
            {% set data_prototype =  self.timeRangesCollectionItem(form.vars.prototype, allow_delete) %}
        {% endif %}
        <div {{ block('widget_container_attributes') }} data-prototype=\"{{ data_prototype|e }}\">

            <ul class=\"collection\">
                {% for child_form in form %}
                    {{ self.timeRangesCollectionItem(child_form, allow_delete) }}
                {% endfor %}
            </ul>

            {% if allow_add|default(null) is not null %}
                <div class=\"btn-block text-center collection-add-block\">
                    <a class=\"add\" title=\"Add\" href=\"javascript:void(0)\">
                        <div style=\"display: none;\"></div>
                        <span>{{ 'collection.add_item'|trans }}</span>
                    </a>
                </div>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}


{#
    Date range widget
#}
{%- block date_range_widget -%}
    <div class=\"col datepicker-holder day-fields display-{{ daysDisplayMode }}\">
        <div class=\"col\">
            {{ form_errors(form.start) }}
            {% if form.start.vars.label %}
                <strong class=\"title\">{{ form_label(form.start) }}</strong>
            {% endif %}

            <div class=\"input-append date field-holder\">
                {{ form_widget(form.start,{
                    'type': 'text',
                    'attr': {
                        'class': 'form-control from ' ~ form.start.vars.attr.class|default(''),
                        'placeholder': \"/      /\"
                    }
                }) }}
                <span class=\"add-on\">
                    <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-calendar\"></i>
                </span>
            </div>
        </div>

        {% if \"date_hidden\" not in form.end.vars.block_prefixes %}
            <div class=\"col\">
                {{ form_errors(form.end) }}
                {% if form.end.vars.label %}
                    <strong class=\"title\">{{ form_label(form.end) }}</strong>
                {% endif %}

                <div class=\"input-append date field-holder\">
                    {{ form_widget(form.end,{
                        'type': 'text',
                        'attr': {
                            'class': 'form-control to ' ~ form.end.vars.attr.class|default(''),
                            'placeholder': \"/      /\"
                        }
                    }) }}
                    <span class=\"add-on\">
                        <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-calendar\"></i>
                    </span>
                </div>
            </div>
        {% else %}
            {#hidden#}
            {{ form_errors(form.end) }}
            {{ form_widget(form.end) }}
        {% endif %}
    </div>

    {% if form.nb_days is defined %}
        {% if \"hidden\" not in form.nb_days.vars.block_prefixes %}
            <div class=\"col day-fields nb-days\">
                <strong class=\"title\">
                    {{ form_label(form.nb_days) }}
                </strong>

                {{ form_errors(form.nb_days) }}
                {{ form_widget(form.nb_days) }}
            </div>
        {% else %}
            {#hidden#}
            {{ form_errors(form.nb_days) }}
            {{ form_widget(form.nb_days) }}
        {% endif %}
    {% endif %}

{%- endblock -%}


{#
    Date range ajax widget
#}
{%- block _date_range_ajax_widget -%}
    <div class=\"datepicker-holder-ajax\">
        <div class=\"col\">
            {{ form_errors(form.start) }}
            <strong class=\"title\">
                {{ form_label(form.start, null, {'required': false}) }}
            </strong>

            <div class=\"input-append date field-holder\">
                <span class=\"add-on\">
                    <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-calendar\"></i>
                </span>

                {{ form_widget(form.start, {
                    'id': 'start-date',
                    'type': 'text',
                    'attr': {
                        'class': 'form-control from',
                        'placeholder': '/      /',
                        'title': 'start-date'
                    }
                }) }}
            </div>
        </div>
        {% if \"date_hidden\" not in form.end.vars.block_prefixes %}
            <div class=\"col\">
                {{ form_errors(form.end) }}
                <strong class=\"title\">
                    {{ form_label(form.end, null, {'required': false}) }}
                </strong>

                <div class=\"input-append date field-holder\">
                    <span class=\"add-on\">
                        <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-calendar\"></i>
                    </span>

                    {{ form_widget(form.end, {
                        'id': 'end-date',
                        'type': 'text',
                        'attr': {
                            'class': 'form-control to',
                            'placeholder': '/      /',
                            'title': 'date'
                        }
                    }) }}
                </div>
            </div>
        {% else %}
            {#hidden#}
            {{ form_errors(form.end) }}
            {{ form_widget(form.end, {
                'id': 'end-date'
            }) }}
        {% endif %}
    </div>

    {% if form.nb_days is defined %}
        {% if \"hidden\" not in form.nb_days.vars.block_prefixes %}
            <div class=\"col day-fields nb-days\">
                <strong class=\"title\">
                    {{ form_label(form.nb_days) }}
                </strong>

                {{ form_errors(form.nb_days) }}
                {{ form_widget(form.nb_days) }}
            </div>
        {% else %}
            {#hidden#}
            {{ form_errors(form.nb_days) }}
            {{ form_widget(form.nb_days) }}
        {% endif %}
    {% endif %}
{%- endblock -%}


{#
    Time range widget:
    If timesDisplayMode parameter is equal to 'duration' then end time field is hidden and duration field is added
    select time fields are replaced by timepicker
#}
{%- block time_range_widget -%}
    <div class=\"col timepicker-holder time-fields display-{{ timesDisplayMode }}\">
        <div class=\"col\">
            <strong class=\"title\">
                {{ form_label(form.start) }}
            </strong>

            {{ form_errors(form.start) }}
            <div class='input-group date' id='datetimepicker3'>
                {{ form_widget(form.start_picker,{
                    'attr': {
                        'class': 'form-control',
                        'placeholder': '--:--',
                    }
                }) }}
                <span class=\"add-on\">
                    <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-clock\"></i>
                 </span>
            </div>
            {#hide start time field#}
            <div class=\"hidden\">
                {{ form_widget(form.start) }}
            </div>
        </div>

        {% if timesDisplayMode == \"duration\" %}
            {#In new booking page there is no nb_minute fields#}
            {% if form.nb_minutes is defined %}
                {#display duration label if field is not hidden #}
                {% if \"hidden\" not in form.nb_minutes.vars.block_prefixes %}
                    <strong class=\"title\">
                        {{ form_label(form.nb_minutes, (-1)|add_time_unit_text|capitalize) }}
                    </strong>
                {% endif %}

                {#display duration field#}
                {{ form_errors(form.nb_minutes) }}
                {{ form_widget(form.nb_minutes) }}
            {% endif %}

            {#hide end time field#}
            <div class=\"hidden\">
                {{ form_widget(form.end) }}
            </div>
        {% else %}
            <div class=\"col\">
                <strong class=\"title\">
                    {{ form_label(form.end) }}
                </strong>

                {{ form_errors(form.end) }}
                <div class='input-group date' id='datetimepicker3'>
                    {{ form_widget(form.end_picker,{
                        'attr': {
                            'class': 'form-control',
                            'placeholder': '--:--',
                        }
                    }) }}
                    <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-time\"></span>
                    </span>
                </div>
                {#hide end time field#}
                <div class=\"hidden\">
                    {{ form_widget(form.end) }}
                </div>
            </div>
        {% endif %}
    </div>
{%- endblock -%}

{#
    Time range hidden widget:
    Used to disable default time_range block rendering
#}
{%- block _time_range_hidden_widget -%}{%- endblock -%}

{#
    Time range ajax widget:
    If timesDisplayMode parameter is equal to 'duration' then end time field is hidden and duration field is added
    select time fields are replaced by timepicker
#}
{%- block _time_range_ajax_widget -%}
    <div class=\"timepicker-holder-ajax time-fields display-{{ timesDisplayMode }}\">
        <div class=\"col\">
            {{ form_errors(form.start) }}
            <strong class=\"title\">
                {{ form_label(form.start, null, {'required': false}) }}
            </strong>

            <div class='input-group date' id='datetimepicker3'>
                    <span class=\"add-on\">
                        <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-clock\"></i>
                    </span>
                {{ form_widget(form.start_picker,{
                    'attr': {
                        'class': 'form-control',
                        'placeholder': '--:--',
                    }
                }) }}
            </div>

            <div class=\"hidden\">
                {{ form_widget(form.start) }}
            </div>
        </div>
        <div class=\"col\">
            {% if timesDisplayMode == \"duration\" %}
                {{ form_errors(form.nb_minutes) }}

                {% if \"hidden\" not in form.nb_minutes.vars.block_prefixes %}
                    <strong class=\"title\">
                        {{ form_label(form.nb_minutes, (-1)|add_time_unit_text|capitalize, {'required': false}) }}
                    </strong>
                {% endif %}

                {{ form_widget(form.nb_minutes) }}
                {#hide end time field#}
                <div class=\"hidden\">
                    {{ form_widget(form.end) }}
                </div>
            {% else %}
                {{ form_errors(form.end) }}
                <strong class=\"title\">
                    {{ form_label(form.end, null, {'required': false}) }}
                </strong>

                <div class='input-group date' id='datetimepicker3'>
                        <span class=\"add-on\">
                            <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-clock\"></i>
                        </span>
                    {{ form_widget(form.end_picker,{
                        'attr': {
                            'class': 'form-control',
                            'placeholder': '--:--',
                        }
                    }) }}
                </div>
                {#hide end time field#}
                <div class=\"hidden\">
                    {{ form_widget(form.end) }}
                </div>
            {% endif %}
        </div>
    </div>
{%- endblock -%}

{#
    Time widget
#}
{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {% if widget == 'text' %}
            {% set vars = {'attr': { 'size': 1 }} %}
        {% else %}
            {% set vars = {'attr': { 'class': 'no-scroll no-arrow'}} %}
        {% endif %}

        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}
            {% if with_minutes %}
                :{{ form_widget(form.minute, vars) }}
            {% endif %}
            {% if with_seconds %}
                :{{ form_widget(form.second, vars) }}
            {% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{#
    Weekdays check boxes
#}
{%- block weekdays_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"list-inline check-list\">
            {%- for child in form %}
                <li>
                    {{- form_widget(child) -}}
                    <span class=\"label\">{{- form_label(child) -}}</span>
                </li>
            {% endfor -%}
        </ul>
    </div>
{%- endblock -%}



{#
   Time ranges for prices edition
#}
{% block _listing_availabilities_prices_time_ranges_widget %}
    {{ block('_time_ranges_widget') }}
{% endblock %}

{#
   Time ranges for status edition
#}
{% block _listing_availabilities_status_time_ranges_widget %}
    {{ block('_time_ranges_widget') }}
{% endblock %}


{#
   Date ranges for prices edition
#}
{% block _listing_availabilities_prices_date_range_widget %}
    {{ block('_date_range_availability_widget') }}
{% endblock %}

{#
   Date ranges for status edition
#}
{% block _listing_availabilities_status_date_range_widget %}
    {{ block('_date_range_availability_widget') }}
{% endblock %}


{#
    Date range widget listing edition
#}
{%- block _date_range_availability_widget -%}
    <div class=\"col datepicker-holder day-fields display-{{ daysDisplayMode }}\">
        <div class=\"col\">
            {{ form_errors(form.start) }}
            <strong class=\"title\">{{ form_label(form.start) }}</strong>

            <div class=\"input-append date field-holder\">
                {{ form_widget(form.start,{
                    'type': 'text',
                    'attr': {
                        'class': 'form-control from',
                        'placeholder': \"/      /\"
                    }
                }) }}
                <span class=\"add-on\">
                    <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-calendar\"></i>
                </span>
            </div>
        </div>

        {% if \"date_hidden\" not in form.end.vars.block_prefixes %}
            <div class=\"col\">
                {{ form_errors(form.end) }}
                <strong class=\"title\">{{ form_label(form.end) }}</strong>

                <div class=\"input-append date field-holder\">
                    {{ form_widget(form.end,{
                        'type': 'text',
                        'attr': {
                            'class': 'form-control to',
                            'placeholder': \"/      /\"
                        }
                    }) }}
                    <span class=\"add-on\">
                        <i data-date-icon=\"icon-calendar\" data-time-icon=\"icon-time\" class=\"icon-calendar\"></i>
                    </span>
                </div>
            </div>
        {% else %}
            {#hidden#}
            {{ form_errors(form.end) }}
            {{ form_widget(form.end) }}
        {% endif %}
    </div>

    {% if form.nb_days is defined %}
        {% if \"hidden\" not in form.nb_days.vars.block_prefixes %}
            <div class=\"col day-fields nb-days\">
                <strong class=\"title\">
                    {{ form_label(form.nb_days) }}
                </strong>

                {{ form_errors(form.nb_days) }}
                {{ form_widget(form.nb_days) }}
            </div>
        {% else %}
            {#hidden#}
            {{ form_errors(form.nb_days) }}
            {{ form_widget(form.nb_days) }}
        {% endif %}
    {% endif %}

{%- endblock -%}
", "CocoricoTimeBundle:Form:fields_date_time.html.twig", "/cocorico/src/Cocorico/TimeBundle/Resources/views/Form/fields_date_time.html.twig");
    }
}
