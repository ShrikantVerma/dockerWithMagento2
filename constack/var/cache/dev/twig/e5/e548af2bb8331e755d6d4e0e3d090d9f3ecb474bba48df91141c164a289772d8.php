<?php

/* CocoricoCoreBundle:Form:fields.html.twig */
class __TwigTemplate_f78a667f99261206110e7895c73a9075dc5515306776d73e2ce9df0547f0e25c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "CocoricoCoreBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_row' => array($this, 'block_form_row'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'file_widget' => array($this, 'block_file_widget'),
            'number_range_widget' => array($this, 'block_number_range_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7f61d5e15703cb44c1de4759e97b7671a2101180fe9e7217d39db5b62bcd54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f61d5e15703cb44c1de4759e97b7671a2101180fe9e7217d39db5b62bcd54e->enter($__internal_a7f61d5e15703cb44c1de4759e97b7671a2101180fe9e7217d39db5b62bcd54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Form:fields.html.twig"));

        $__internal_5982948b823f3e9cb25a4db21140d2a57534242efcefa058a00d8bbef16f20ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5982948b823f3e9cb25a4db21140d2a57534242efcefa058a00d8bbef16f20ad->enter($__internal_5982948b823f3e9cb25a4db21140d2a57534242efcefa058a00d8bbef16f20ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Form:fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7f61d5e15703cb44c1de4759e97b7671a2101180fe9e7217d39db5b62bcd54e->leave($__internal_a7f61d5e15703cb44c1de4759e97b7671a2101180fe9e7217d39db5b62bcd54e_prof);

        
        $__internal_5982948b823f3e9cb25a4db21140d2a57534242efcefa058a00d8bbef16f20ad->leave($__internal_5982948b823f3e9cb25a4db21140d2a57534242efcefa058a00d8bbef16f20ad_prof);

    }

    // line 7
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_28bf43ebd2ec292bc30934b3ee932088f4dd3adfbf54ff5ae847ecb056fa164f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28bf43ebd2ec292bc30934b3ee932088f4dd3adfbf54ff5ae847ecb056fa164f->enter($__internal_28bf43ebd2ec292bc30934b3ee932088f4dd3adfbf54ff5ae847ecb056fa164f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0e9bcae066f36866a74ae522da189fe34ef3b34bd1adc16a57fa9f521d4300a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9bcae066f36866a74ae522da189fe34ef3b34bd1adc16a57fa9f521d4300a7->enter($__internal_0e9bcae066f36866a74ae522da189fe34ef3b34bd1adc16a57fa9f521d4300a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 8
        echo "    ";
        ob_start();
        // line 9
        echo "        ";
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 9, $this->getSourceContext()); })()) === false)) {
            // line 10
            echo "            ";
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 10, $this->getSourceContext()); })())) {
                // line 11
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 11, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 11, $this->getSourceContext()); })())));
                // line 12
                echo "            ";
            }
            // line 13
            echo "
            ";
            // line 14
            $context["label_required"] = "";
            // line 15
            echo "            ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 15, $this->getSourceContext()); })())) {
                // line 16
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 16, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 17
                echo "                ";
                $context["label_required"] = ('' === $tmp = "<span> *</span>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 18
                echo "            ";
            }
            // line 19
            echo "
            ";
            // line 20
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 20, $this->getSourceContext()); })()))) {
                // line 21
                echo "                ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 21, $this->getSourceContext()); })()));
                // line 22
                echo "            ";
            }
            // line 23
            echo "
            ";
            // line 24
            echo "<label ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 25, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                // line 26
                if (($context["attrname"] != "data-icon")) {
                    // line 27
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo ">";
            // line 32
            if (twig_in_filter("data-icon", twig_get_array_keys_filter((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 32, $this->getSourceContext()); })())))) {
                // line 33
                echo "<i class=\"ico-beta ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 33, $this->getSourceContext()); })()), "data-icon", array(), "array"), "html", null, true);
                echo "\"></i>";
            }
            // line 37
            echo $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 37, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 37, $this->getSourceContext()); })()));
            // line 40
            echo twig_escape_filter($this->env, (isset($context["label_required"]) || array_key_exists("label_required", $context) ? $context["label_required"] : (function () { throw new Twig_Error_Runtime('Variable "label_required" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
            echo "

            ";
            // line 42
            echo "</label>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0e9bcae066f36866a74ae522da189fe34ef3b34bd1adc16a57fa9f521d4300a7->leave($__internal_0e9bcae066f36866a74ae522da189fe34ef3b34bd1adc16a57fa9f521d4300a7_prof);

        
        $__internal_28bf43ebd2ec292bc30934b3ee932088f4dd3adfbf54ff5ae847ecb056fa164f->leave($__internal_28bf43ebd2ec292bc30934b3ee932088f4dd3adfbf54ff5ae847ecb056fa164f_prof);

    }

    // line 50
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_491238c50f53daedcf83b6a6c5883a5db7e6900d948bfdf8a4ae40c38605d6f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491238c50f53daedcf83b6a6c5883a5db7e6900d948bfdf8a4ae40c38605d6f2->enter($__internal_491238c50f53daedcf83b6a6c5883a5db7e6900d948bfdf8a4ae40c38605d6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c8aea1e9812fbeedc2bf4e64b0b7d6cbd6c1fd153476c7f9023f99829a3d0c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8aea1e9812fbeedc2bf4e64b0b7d6cbd6c1fd153476c7f9023f99829a3d0c49->enter($__internal_c8aea1e9812fbeedc2bf4e64b0b7d6cbd6c1fd153476c7f9023f99829a3d0c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 51
        echo "    ";
        ob_start();
        // line 52
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 52, $this->getSourceContext()); })())) > 0)) {
            // line 53
            echo "            ";
            $context["existing_errors"] = array();
            // line 54
            echo "
            <div class=\"errors\">
                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 56, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 57
                echo "                    ";
                // line 58
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()) && !twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), (isset($context["existing_errors"]) || array_key_exists("existing_errors", $context) ? $context["existing_errors"] : (function () { throw new Twig_Error_Runtime('Variable "existing_errors" does not exist.', 58, $this->getSourceContext()); })())))) {
                    // line 59
                    echo "                        <i class=\"icon-error-field\"></i>
                        ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "messageParameters", array()), "cocorico"), "html", null, true);
                    echo "<br/>
                        ";
                    // line 61
                    $context["existing_errors"] = twig_array_merge((isset($context["existing_errors"]) || array_key_exists("existing_errors", $context) ? $context["existing_errors"] : (function () { throw new Twig_Error_Runtime('Variable "existing_errors" does not exist.', 61, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array())));
                    // line 62
                    echo "                    ";
                }
                // line 63
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            </div>
        ";
        } else {
            // line 66
            echo "            ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "vars", array()), "valid", array())) {
                // line 67
                echo "                <div class=\"flashes\">
                    <div class=\"alert alert-error-new\">
                        <i class=\"ico icon-error\"></i>

                        <p>
                            ";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("form.error", array(), "cocorico"), "html", null, true);
                echo "
                        </p>
                    </div>
                </div>
            ";
            }
            // line 77
            echo "        ";
        }
        // line 78
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c8aea1e9812fbeedc2bf4e64b0b7d6cbd6c1fd153476c7f9023f99829a3d0c49->leave($__internal_c8aea1e9812fbeedc2bf4e64b0b7d6cbd6c1fd153476c7f9023f99829a3d0c49_prof);

        
        $__internal_491238c50f53daedcf83b6a6c5883a5db7e6900d948bfdf8a4ae40c38605d6f2->leave($__internal_491238c50f53daedcf83b6a6c5883a5db7e6900d948bfdf8a4ae40c38605d6f2_prof);

    }

    // line 83
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5469e861edcb1949df667ec29b51f5beed0aae35e570b1277efe7b29a629ab8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5469e861edcb1949df667ec29b51f5beed0aae35e570b1277efe7b29a629ab8c->enter($__internal_5469e861edcb1949df667ec29b51f5beed0aae35e570b1277efe7b29a629ab8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f96ad56bdf71d8396e1ed26c4b53b17cc2785d43969be47568a627067d632f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96ad56bdf71d8396e1ed26c4b53b17cc2785d43969be47568a627067d632f2d->enter($__internal_f96ad56bdf71d8396e1ed26c4b53b17cc2785d43969be47568a627067d632f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 84
        echo "    ";
        ob_start();
        // line 85
        echo "        <div class=\"form-row\">
            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->getSourceContext()); })()), 'errors');
        echo "
            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->getSourceContext()); })()), 'label');
        echo "
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f96ad56bdf71d8396e1ed26c4b53b17cc2785d43969be47568a627067d632f2d->leave($__internal_f96ad56bdf71d8396e1ed26c4b53b17cc2785d43969be47568a627067d632f2d_prof);

        
        $__internal_5469e861edcb1949df667ec29b51f5beed0aae35e570b1277efe7b29a629ab8c->leave($__internal_5469e861edcb1949df667ec29b51f5beed0aae35e570b1277efe7b29a629ab8c_prof);

    }

    // line 94
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_960ff76696fc16854942ab8103a75d214a54fb0fdf7f5593125022fc4f9265e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960ff76696fc16854942ab8103a75d214a54fb0fdf7f5593125022fc4f9265e0->enter($__internal_960ff76696fc16854942ab8103a75d214a54fb0fdf7f5593125022fc4f9265e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b98f3a7608a00e258f29d3d0a760c38ea1a46c4da2389b4adf1cde109d368d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98f3a7608a00e258f29d3d0a760c38ea1a46c4da2389b4adf1cde109d368d36->enter($__internal_b98f3a7608a00e258f29d3d0a760c38ea1a46c4da2389b4adf1cde109d368d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 95
        ob_start();
        // line 96
        echo "        ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "

        ";
        // line 98
        $context["help_text"] = "";
        // line 99
        echo "        ";
        if (array_key_exists("help", $context)) {
            // line 100
            echo "            ";
            $context["help_text"] = (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new Twig_Error_Runtime('Variable "help" does not exist.', 100, $this->getSourceContext()); })());
            // line 101
            echo "        ";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "help", array(), "any", true, true)) {
            // line 102
            echo "            ";
            $context["help_text"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 102, $this->getSourceContext()); })()), "help", array());
            // line 103
            echo "        ";
        }
        // line 104
        echo "
        ";
        // line 105
        if ((isset($context["help_text"]) || array_key_exists("help_text", $context) ? $context["help_text"] : (function () { throw new Twig_Error_Runtime('Variable "help_text" does not exist.', 105, $this->getSourceContext()); })())) {
            // line 106
            echo "            <button title=\"\" data-placement=\"right\" data-toggle=\"tooltip\" class=\"tooltip-button\"
                    type=\"button\" data-original-title=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans((isset($context["help_text"]) || array_key_exists("help_text", $context) ? $context["help_text"] : (function () { throw new Twig_Error_Runtime('Variable "help_text" does not exist.', 107, $this->getSourceContext()); })()), array(), "cocorico"), "html", null, true);
            echo "\">?
            </button>
        ";
        }
        // line 110
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b98f3a7608a00e258f29d3d0a760c38ea1a46c4da2389b4adf1cde109d368d36->leave($__internal_b98f3a7608a00e258f29d3d0a760c38ea1a46c4da2389b4adf1cde109d368d36_prof);

        
        $__internal_960ff76696fc16854942ab8103a75d214a54fb0fdf7f5593125022fc4f9265e0->leave($__internal_960ff76696fc16854942ab8103a75d214a54fb0fdf7f5593125022fc4f9265e0_prof);

    }

    // line 113
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_ce7f98416c2a3419b817ce1e8dbe46d9783e1e4c34bc39f2911a0caf43a470d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7f98416c2a3419b817ce1e8dbe46d9783e1e4c34bc39f2911a0caf43a470d2->enter($__internal_ce7f98416c2a3419b817ce1e8dbe46d9783e1e4c34bc39f2911a0caf43a470d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_8182d8c97dca415d8d92d8e44cbce2ae02de9c6fe62ba09e6d7cf25ffbbda4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8182d8c97dca415d8d92d8e44cbce2ae02de9c6fe62ba09e6d7cf25ffbbda4cf->enter($__internal_8182d8c97dca415d8d92d8e44cbce2ae02de9c6fe62ba09e6d7cf25ffbbda4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 114
        ob_start();
        // line 115
        echo "        ";
        $this->displayParentBlock("choice_widget", $context, $blocks);
        echo "

        ";
        // line 117
        if (array_key_exists("help", $context)) {
            // line 118
            echo "            <span class=\"help\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new Twig_Error_Runtime('Variable "help" does not exist.', 118, $this->getSourceContext()); })()), array(), "cocorico"), "html", null, true);
            echo "</span>
        ";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(),         // line 119
($context["attr"] ?? null), "help", array(), "any", true, true)) {
            // line 120
            echo "            <span class=\"help\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 120, $this->getSourceContext()); })()), "help", array()), array(), "cocorico"), "html", null, true);
            echo "</span>
        ";
        }
        // line 122
        echo "
        ";
        // line 123
        if (array_key_exists("help_plain", $context)) {
            // line 124
            echo "            <span class=\"ending\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans((isset($context["help_plain"]) || array_key_exists("help_plain", $context) ? $context["help_plain"] : (function () { throw new Twig_Error_Runtime('Variable "help_plain" does not exist.', 124, $this->getSourceContext()); })()), array(), "cocorico"), "html", null, true);
            echo "</span>
        ";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(),         // line 125
($context["attr"] ?? null), "help_plain", array(), "any", true, true)) {
            // line 126
            echo "            <span class=\"ending\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 126, $this->getSourceContext()); })()), "help_plain", array()), array(), "cocorico"), "html", null, true);
            echo "</span>
        ";
        }
        // line 128
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8182d8c97dca415d8d92d8e44cbce2ae02de9c6fe62ba09e6d7cf25ffbbda4cf->leave($__internal_8182d8c97dca415d8d92d8e44cbce2ae02de9c6fe62ba09e6d7cf25ffbbda4cf_prof);

        
        $__internal_ce7f98416c2a3419b817ce1e8dbe46d9783e1e4c34bc39f2911a0caf43a470d2->leave($__internal_ce7f98416c2a3419b817ce1e8dbe46d9783e1e4c34bc39f2911a0caf43a470d2_prof);

    }

    // line 131
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_b2d603dc349c50863999766a36813e7f7780cc2860b80b8f533265c8168d62dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d603dc349c50863999766a36813e7f7780cc2860b80b8f533265c8168d62dd->enter($__internal_b2d603dc349c50863999766a36813e7f7780cc2860b80b8f533265c8168d62dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_58e70eba61ad1e4a7a3c9d4d84e4038e62f85d0aae5e8a860a7f26757f34eee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e70eba61ad1e4a7a3c9d4d84e4038e62f85d0aae5e8a860a7f26757f34eee9->enter($__internal_58e70eba61ad1e4a7a3c9d4d84e4038e62f85d0aae5e8a860a7f26757f34eee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 132
        echo "    ";
        ob_start();
        // line 133
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 133, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 134
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 134, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "
               data-jcf='{\"buttonText\": \"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.file.button.text", array(), "cocorico"), "html", null, true);
        echo "\", \"placeholderText\": \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.file.placeholder.text", array(), "cocorico"), "html", null, true);
        echo "\"}'/>

        ";
        // line 138
        echo "        ";
        if ( !(null === ((array_key_exists("image_url", $context)) ? (_twig_default_filter((isset($context["image_url"]) || array_key_exists("image_url", $context) ? $context["image_url"] : (function () { throw new Twig_Error_Runtime('Variable "image_url" does not exist.', 138, $this->getSourceContext()); })()), null)) : (null)))) {
            // line 139
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((isset($context["image_url"]) || array_key_exists("image_url", $context) ? $context["image_url"] : (function () { throw new Twig_Error_Runtime('Variable "image_url" does not exist.', 139, $this->getSourceContext()); })()), ((array_key_exists("imagine_filter", $context)) ? (_twig_default_filter((isset($context["imagine_filter"]) || array_key_exists("imagine_filter", $context) ? $context["imagine_filter"] : (function () { throw new Twig_Error_Runtime('Variable "imagine_filter" does not exist.', 139, $this->getSourceContext()); })()), "listing_xsmall")) : ("listing_xsmall"))), "html", null, true);
            echo "\"/>
        ";
        }
        // line 141
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_58e70eba61ad1e4a7a3c9d4d84e4038e62f85d0aae5e8a860a7f26757f34eee9->leave($__internal_58e70eba61ad1e4a7a3c9d4d84e4038e62f85d0aae5e8a860a7f26757f34eee9_prof);

        
        $__internal_b2d603dc349c50863999766a36813e7f7780cc2860b80b8f533265c8168d62dd->leave($__internal_b2d603dc349c50863999766a36813e7f7780cc2860b80b8f533265c8168d62dd_prof);

    }

    // line 148
    public function block_number_range_widget($context, array $blocks = array())
    {
        $__internal_52cf6ef577f5ba5fe1b64bbd798288fcffe3eaf5288ae64e0dbaea3a936dc94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52cf6ef577f5ba5fe1b64bbd798288fcffe3eaf5288ae64e0dbaea3a936dc94a->enter($__internal_52cf6ef577f5ba5fe1b64bbd798288fcffe3eaf5288ae64e0dbaea3a936dc94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_range_widget"));

        $__internal_f7e7c39925517697b00cff309f3288c5bd02904190778522740ae9fd9a19f624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e7c39925517697b00cff309f3288c5bd02904190778522740ae9fd9a19f624->enter($__internal_f7e7c39925517697b00cff309f3288c5bd02904190778522740ae9fd9a19f624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_range_widget"));

        // line 149
        echo "<div class=\"number-range\">
        <div class=\"col\">
            ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 151, $this->getSourceContext()); })()), "min", array()), 'errors');
        echo "
            ";
        // line 152
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 152, $this->getSourceContext()); })()), "min", array()), "vars", array()), "label", array())) {
            // line 153
            echo "                <strong class=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "min", array()), 'label');
            echo "</strong>
            ";
        }
        // line 155
        echo "            <div class=\"field-holder\">
                ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "min", array()), 'widget', array("attr" => array("class" => ("" . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 158
($context["form"] ?? null), "min", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "min", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "")) : (""))))));
        // line 160
        echo "
            </div>
        </div>

        <div class=\"col\">
            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 165, $this->getSourceContext()); })()), "max", array()), 'errors');
        echo "
            ";
        // line 166
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->getSourceContext()); })()), "max", array()), "vars", array()), "label", array())) {
            // line 167
            echo "                <strong class=\"title\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 167, $this->getSourceContext()); })()), "max", array()), 'label');
            echo "</strong>
            ";
        }
        // line 169
        echo "            <div class=\"field-holder\">
                ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 170, $this->getSourceContext()); })()), "max", array()), 'widget', array("attr" => array("class" => ("" . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 172
($context["form"] ?? null), "max", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "max", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "")) : (""))))));
        // line 174
        echo "
            </div>
        </div>
    </div>";
        
        $__internal_f7e7c39925517697b00cff309f3288c5bd02904190778522740ae9fd9a19f624->leave($__internal_f7e7c39925517697b00cff309f3288c5bd02904190778522740ae9fd9a19f624_prof);

        
        $__internal_52cf6ef577f5ba5fe1b64bbd798288fcffe3eaf5288ae64e0dbaea3a936dc94a->leave($__internal_52cf6ef577f5ba5fe1b64bbd798288fcffe3eaf5288ae64e0dbaea3a936dc94a_prof);

    }

    public function getTemplateName()
    {
        return "CocoricoCoreBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 174,  492 => 172,  491 => 170,  488 => 169,  482 => 167,  480 => 166,  476 => 165,  469 => 160,  467 => 158,  466 => 156,  463 => 155,  457 => 153,  455 => 152,  451 => 151,  447 => 149,  438 => 148,  426 => 141,  420 => 139,  417 => 138,  410 => 135,  403 => 134,  401 => 133,  398 => 132,  389 => 131,  378 => 128,  372 => 126,  370 => 125,  365 => 124,  363 => 123,  360 => 122,  354 => 120,  352 => 119,  347 => 118,  345 => 117,  339 => 115,  337 => 114,  328 => 113,  317 => 110,  311 => 107,  308 => 106,  306 => 105,  303 => 104,  300 => 103,  297 => 102,  294 => 101,  291 => 100,  288 => 99,  286 => 98,  280 => 96,  278 => 95,  269 => 94,  255 => 88,  251 => 87,  247 => 86,  244 => 85,  241 => 84,  232 => 83,  221 => 78,  218 => 77,  210 => 72,  203 => 67,  200 => 66,  196 => 64,  190 => 63,  187 => 62,  185 => 61,  181 => 60,  178 => 59,  175 => 58,  173 => 57,  169 => 56,  165 => 54,  162 => 53,  159 => 52,  156 => 51,  147 => 50,  135 => 42,  130 => 40,  128 => 37,  123 => 33,  121 => 32,  119 => 30,  109 => 27,  107 => 26,  103 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 16,  75 => 15,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  46 => 7,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% trans_default_domain 'cocorico' %}

{# Labels #}
{#@formatter:off#}
{% block form_label %}
    {% spaceless %}
        {% if label is not same as(false) %}
            {% if not compound %}
                {% set label_attr = label_attr|merge({'for': id}) %}
            {% endif %}

            {% set label_required = \"\" %}
            {% if required %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
                {% set label_required %}<span> *</span>{% endset %}
            {% endif %}

            {% if label is empty %}
                {% set label = name|humanize %}
            {% endif %}

            {{ '<label ' }}
            {%- for attrname, attrvalue in label_attr -%}
                {%- if attrname != 'data-icon' -%}
                    {{ attrname }}=\"{{ attrvalue }}\"
                {%- endif -%}
            {%- endfor -%}
            {{ '>' }}

            {%- if 'data-icon' in label_attr|keys -%}
                <i class=\"ico-beta {{ label_attr['data-icon'] }}\"></i>
            {%- endif -%}

            {%- autoescape false -%}
                {{ label|trans({}, translation_domain) }}
            {%- endautoescape -%}

            {{ label_required }}

            {{ '</label>' }}
        {%- endif -%}
    {% endspaceless %}
{% endblock %}
{#@formatter:on#}


{# Form Error #}
{% block form_errors %}
    {% spaceless %}
        {% if errors|length > 0 %}
            {% set existing_errors = [] %}

            <div class=\"errors\">
                {% for error in errors %}
                    {#duplicate errors#}
                    {% if error.message and error.message not in existing_errors %}
                        <i class=\"icon-error-field\"></i>
                        {{ error.message|trans(error.messageParameters) }}<br/>
                        {% set existing_errors = existing_errors|merge([error.message]) %}
                    {% endif %}
                {% endfor %}
            </div>
        {% else %}
            {% if not form.vars.valid %}
                <div class=\"flashes\">
                    <div class=\"alert alert-error-new\">
                        <i class=\"ico icon-error\"></i>

                        <p>
                            {{ 'form.error'|trans }}
                        </p>
                    </div>
                </div>
            {% endif %}
        {% endif %}
    {% endspaceless %}
{% endblock form_errors %}


{# Form Row #}
{% block form_row %}
    {% spaceless %}
        <div class=\"form-row\">
            {{ form_errors(form) }}
            {{ form_label(form) }}
            {{ form_widget(form) }}
        </div>
    {% endspaceless %}
{% endblock form_row %}

{# Help message #}
{% block form_widget_simple -%}
    {% spaceless %}
        {{ parent() }}

        {% set help_text=\"\" %}
        {% if help is defined %}
            {% set  help_text = help %}
        {% elseif  attr.help is defined %}
            {% set  help_text = attr.help %}
        {% endif %}

        {% if help_text %}
            <button title=\"\" data-placement=\"right\" data-toggle=\"tooltip\" class=\"tooltip-button\"
                    type=\"button\" data-original-title=\"{{ help_text|trans }}\">?
            </button>
        {% endif %}
    {% endspaceless %}
{%- endblock %}

{% block choice_widget -%}
    {% spaceless %}
        {{ parent() }}

        {% if help is defined %}
            <span class=\"help\">{{ help|trans }}</span>
        {% elseif  attr.help is defined %}
            <span class=\"help\">{{ attr.help|trans }}</span>
        {% endif %}

        {% if help_plain is defined %}
            <span class=\"ending\">{{ help_plain|trans }}</span>
        {% elseif  attr.help_plain is defined %}
            <span class=\"ending\">{{ attr.help_plain|trans }}</span>
        {% endif %}
    {% endspaceless %}
{%- endblock %}

{% block file_widget %}
    {% spaceless %}
        {%- set type = type|default('text') -%}
        <input type=\"{{ type }}\" {{ block('widget_attributes') }}
               data-jcf='{\"buttonText\": \"{{ 'listing.file.button.text'|trans }}\", \"placeholderText\": \"{{ 'listing.file.placeholder.text'|trans }}\"}'/>

        {#{{ block('form_widget') }}#}
        {% if image_url|default(null) is not null %}
            <img src=\"{{ image_url| imagine_filter(imagine_filter|default('listing_xsmall')) }}\"/>
        {% endif %}

    {% endspaceless %}
{% endblock %}

{#
    Number range widget
#}
{%- block number_range_widget -%}
    <div class=\"number-range\">
        <div class=\"col\">
            {{ form_errors(form.min) }}
            {% if form.min.vars.label %}
                <strong class=\"title\">{{ form_label(form.min) }}</strong>
            {% endif %}
            <div class=\"field-holder\">
                {{ form_widget(form.min,{
                    'attr': {
                        'class': '' ~ form.min.vars.attr.class|default(''),
                    }
                }) }}
            </div>
        </div>

        <div class=\"col\">
            {{ form_errors(form.max) }}
            {% if form.max.vars.label %}
                <strong class=\"title\">{{ form_label(form.max) }}</strong>
            {% endif %}
            <div class=\"field-holder\">
                {{ form_widget(form.max,{
                    'attr': {
                        'class': '' ~ form.max.vars.attr.class|default(''),
                    }
                }) }}
            </div>
        </div>
    </div>
{%- endblock -%}", "CocoricoCoreBundle:Form:fields.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Form/fields.html.twig");
    }
}
