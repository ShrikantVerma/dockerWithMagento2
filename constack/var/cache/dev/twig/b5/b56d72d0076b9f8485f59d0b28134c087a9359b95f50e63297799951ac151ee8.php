<?php

/* form_div_layout.html.twig */
class __TwigTemplate_308ff248693e4d08577a53893d8a3f7d39460666c7ab2bb2982f7c32556aaf6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3a93924a152b3925cd4b4dcc7e9059883c03f48a993fca32111de522927f6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a93924a152b3925cd4b4dcc7e9059883c03f48a993fca32111de522927f6af->enter($__internal_d3a93924a152b3925cd4b4dcc7e9059883c03f48a993fca32111de522927f6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_fd5c2f1068ef5eccf0d47e22c7ca33ad9ccc0e14affcd2d1547398c587fb45c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5c2f1068ef5eccf0d47e22c7ca33ad9ccc0e14affcd2d1547398c587fb45c7->enter($__internal_fd5c2f1068ef5eccf0d47e22c7ca33ad9ccc0e14affcd2d1547398c587fb45c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 242
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 247
        $this->displayBlock('color_widget', $context, $blocks);
        // line 254
        $this->displayBlock('form_label', $context, $blocks);
        // line 276
        $this->displayBlock('button_label', $context, $blocks);
        // line 280
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 288
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        $this->displayBlock('button_row', $context, $blocks);
        // line 302
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        $this->displayBlock('form', $context, $blocks);
        // line 314
        $this->displayBlock('form_start', $context, $blocks);
        // line 328
        $this->displayBlock('form_end', $context, $blocks);
        // line 335
        $this->displayBlock('form_errors', $context, $blocks);
        // line 345
        $this->displayBlock('form_rest', $context, $blocks);
        // line 366
        echo "
";
        // line 369
        $this->displayBlock('form_rows', $context, $blocks);
        // line 375
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 387
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_d3a93924a152b3925cd4b4dcc7e9059883c03f48a993fca32111de522927f6af->leave($__internal_d3a93924a152b3925cd4b4dcc7e9059883c03f48a993fca32111de522927f6af_prof);

        
        $__internal_fd5c2f1068ef5eccf0d47e22c7ca33ad9ccc0e14affcd2d1547398c587fb45c7->leave($__internal_fd5c2f1068ef5eccf0d47e22c7ca33ad9ccc0e14affcd2d1547398c587fb45c7_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_87a117226024c54a072f1f528331297719526c426961946ca71c8481beee04a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a117226024c54a072f1f528331297719526c426961946ca71c8481beee04a0->enter($__internal_87a117226024c54a072f1f528331297719526c426961946ca71c8481beee04a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_e95b26a397bf2f80b7a908ff4ac49280eca194346cf8a4a5a977e95043fb0b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95b26a397bf2f80b7a908ff4ac49280eca194346cf8a4a5a977e95043fb0b7e->enter($__internal_e95b26a397bf2f80b7a908ff4ac49280eca194346cf8a4a5a977e95043fb0b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_e95b26a397bf2f80b7a908ff4ac49280eca194346cf8a4a5a977e95043fb0b7e->leave($__internal_e95b26a397bf2f80b7a908ff4ac49280eca194346cf8a4a5a977e95043fb0b7e_prof);

        
        $__internal_87a117226024c54a072f1f528331297719526c426961946ca71c8481beee04a0->leave($__internal_87a117226024c54a072f1f528331297719526c426961946ca71c8481beee04a0_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_91e27dc0f7e28ad57111b9400ddcf59dda870e61919f5789399cdb0d4b3a2793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e27dc0f7e28ad57111b9400ddcf59dda870e61919f5789399cdb0d4b3a2793->enter($__internal_91e27dc0f7e28ad57111b9400ddcf59dda870e61919f5789399cdb0d4b3a2793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_57dcf29753766a98c8305f96f928adfbd5c86a4e509713f35ec7ae31bcba9e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57dcf29753766a98c8305f96f928adfbd5c86a4e509713f35ec7ae31bcba9e2a->enter($__internal_57dcf29753766a98c8305f96f928adfbd5c86a4e509713f35ec7ae31bcba9e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_57dcf29753766a98c8305f96f928adfbd5c86a4e509713f35ec7ae31bcba9e2a->leave($__internal_57dcf29753766a98c8305f96f928adfbd5c86a4e509713f35ec7ae31bcba9e2a_prof);

        
        $__internal_91e27dc0f7e28ad57111b9400ddcf59dda870e61919f5789399cdb0d4b3a2793->leave($__internal_91e27dc0f7e28ad57111b9400ddcf59dda870e61919f5789399cdb0d4b3a2793_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_0ba3228b8bcafcc7752aec28cd50885acbf2de44c0a779c4256631819ff5cac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba3228b8bcafcc7752aec28cd50885acbf2de44c0a779c4256631819ff5cac9->enter($__internal_0ba3228b8bcafcc7752aec28cd50885acbf2de44c0a779c4256631819ff5cac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_1830045b99b34822039eac3cd77b2cde809ecd8eb88f0f7dccf9cd09598818e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1830045b99b34822039eac3cd77b2cde809ecd8eb88f0f7dccf9cd09598818e4->enter($__internal_1830045b99b34822039eac3cd77b2cde809ecd8eb88f0f7dccf9cd09598818e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_1830045b99b34822039eac3cd77b2cde809ecd8eb88f0f7dccf9cd09598818e4->leave($__internal_1830045b99b34822039eac3cd77b2cde809ecd8eb88f0f7dccf9cd09598818e4_prof);

        
        $__internal_0ba3228b8bcafcc7752aec28cd50885acbf2de44c0a779c4256631819ff5cac9->leave($__internal_0ba3228b8bcafcc7752aec28cd50885acbf2de44c0a779c4256631819ff5cac9_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_7f9ab1a71fe8aace0e164d6935ab045a3245e1cbe00bf25f79eec5c543560d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9ab1a71fe8aace0e164d6935ab045a3245e1cbe00bf25f79eec5c543560d0c->enter($__internal_7f9ab1a71fe8aace0e164d6935ab045a3245e1cbe00bf25f79eec5c543560d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_a75f2679d3cc057964154e4de5b38f45e301369b8e973083726378c77328a666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75f2679d3cc057964154e4de5b38f45e301369b8e973083726378c77328a666->enter($__internal_a75f2679d3cc057964154e4de5b38f45e301369b8e973083726378c77328a666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_a75f2679d3cc057964154e4de5b38f45e301369b8e973083726378c77328a666->leave($__internal_a75f2679d3cc057964154e4de5b38f45e301369b8e973083726378c77328a666_prof);

        
        $__internal_7f9ab1a71fe8aace0e164d6935ab045a3245e1cbe00bf25f79eec5c543560d0c->leave($__internal_7f9ab1a71fe8aace0e164d6935ab045a3245e1cbe00bf25f79eec5c543560d0c_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9b94779f00313d9f59c5e9e123ada7676fe9baf5e34bb812d324bb385d6508dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b94779f00313d9f59c5e9e123ada7676fe9baf5e34bb812d324bb385d6508dc->enter($__internal_9b94779f00313d9f59c5e9e123ada7676fe9baf5e34bb812d324bb385d6508dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_838d7ecab04c9613f9f499ebb365bf1593c77ce5db1cda4a49d5a0d8e44fcf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838d7ecab04c9613f9f499ebb365bf1593c77ce5db1cda4a49d5a0d8e44fcf67->enter($__internal_838d7ecab04c9613f9f499ebb365bf1593c77ce5db1cda4a49d5a0d8e44fcf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_838d7ecab04c9613f9f499ebb365bf1593c77ce5db1cda4a49d5a0d8e44fcf67->leave($__internal_838d7ecab04c9613f9f499ebb365bf1593c77ce5db1cda4a49d5a0d8e44fcf67_prof);

        
        $__internal_9b94779f00313d9f59c5e9e123ada7676fe9baf5e34bb812d324bb385d6508dc->leave($__internal_9b94779f00313d9f59c5e9e123ada7676fe9baf5e34bb812d324bb385d6508dc_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_6e66f77489f3a6094a42c2af185d95309396162fc3c4dcaf3fbbc090ff851e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e66f77489f3a6094a42c2af185d95309396162fc3c4dcaf3fbbc090ff851e89->enter($__internal_6e66f77489f3a6094a42c2af185d95309396162fc3c4dcaf3fbbc090ff851e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_fec801eead25e635f3f7810e3ed2a67ff2b029f9579bafa121d9ff0ce1e762cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec801eead25e635f3f7810e3ed2a67ff2b029f9579bafa121d9ff0ce1e762cd->enter($__internal_fec801eead25e635f3f7810e3ed2a67ff2b029f9579bafa121d9ff0ce1e762cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_fec801eead25e635f3f7810e3ed2a67ff2b029f9579bafa121d9ff0ce1e762cd->leave($__internal_fec801eead25e635f3f7810e3ed2a67ff2b029f9579bafa121d9ff0ce1e762cd_prof);

        
        $__internal_6e66f77489f3a6094a42c2af185d95309396162fc3c4dcaf3fbbc090ff851e89->leave($__internal_6e66f77489f3a6094a42c2af185d95309396162fc3c4dcaf3fbbc090ff851e89_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e0153f180adbd6bc5fec5c78c2d92b723cd70f3b5618b321d7f0eea4488f9394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0153f180adbd6bc5fec5c78c2d92b723cd70f3b5618b321d7f0eea4488f9394->enter($__internal_e0153f180adbd6bc5fec5c78c2d92b723cd70f3b5618b321d7f0eea4488f9394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_186980deeb0b63abb16a86afa821c1e4866f8c87884557ddb6e78b14dddf7411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186980deeb0b63abb16a86afa821c1e4866f8c87884557ddb6e78b14dddf7411->enter($__internal_186980deeb0b63abb16a86afa821c1e4866f8c87884557ddb6e78b14dddf7411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_186980deeb0b63abb16a86afa821c1e4866f8c87884557ddb6e78b14dddf7411->leave($__internal_186980deeb0b63abb16a86afa821c1e4866f8c87884557ddb6e78b14dddf7411_prof);

        
        $__internal_e0153f180adbd6bc5fec5c78c2d92b723cd70f3b5618b321d7f0eea4488f9394->leave($__internal_e0153f180adbd6bc5fec5c78c2d92b723cd70f3b5618b321d7f0eea4488f9394_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_73bf54b80431af308dd63156e1557661bd2c1a55116c63fe25fecaa01956818e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73bf54b80431af308dd63156e1557661bd2c1a55116c63fe25fecaa01956818e->enter($__internal_73bf54b80431af308dd63156e1557661bd2c1a55116c63fe25fecaa01956818e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0d5f3f48bda4ac5727fd088f9f6c7702f058f0381d188fb14cc30e9febf18daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5f3f48bda4ac5727fd088f9f6c7702f058f0381d188fb14cc30e9febf18daa->enter($__internal_0d5f3f48bda4ac5727fd088f9f6c7702f058f0381d188fb14cc30e9febf18daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_0d5f3f48bda4ac5727fd088f9f6c7702f058f0381d188fb14cc30e9febf18daa->leave($__internal_0d5f3f48bda4ac5727fd088f9f6c7702f058f0381d188fb14cc30e9febf18daa_prof);

        
        $__internal_73bf54b80431af308dd63156e1557661bd2c1a55116c63fe25fecaa01956818e->leave($__internal_73bf54b80431af308dd63156e1557661bd2c1a55116c63fe25fecaa01956818e_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_de4ecd3a6eecb05cc04aa55dedc5ede8b85eb77aa1e20049e2e2d0bf0ca534a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de4ecd3a6eecb05cc04aa55dedc5ede8b85eb77aa1e20049e2e2d0bf0ca534a4->enter($__internal_de4ecd3a6eecb05cc04aa55dedc5ede8b85eb77aa1e20049e2e2d0bf0ca534a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_3d4f1633f5e151b4744d5501ba2a1a81ba1b53c257ec1c7fc5bccc50c0341ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4f1633f5e151b4744d5501ba2a1a81ba1b53c257ec1c7fc5bccc50c0341ac4->enter($__internal_3d4f1633f5e151b4744d5501ba2a1a81ba1b53c257ec1c7fc5bccc50c0341ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_aa6ab9a0ad0cd4dd2a73568d4246c6390998abadd458047f07dd1bd6fdf39f98 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_aa6ab9a0ad0cd4dd2a73568d4246c6390998abadd458047f07dd1bd6fdf39f98)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_aa6ab9a0ad0cd4dd2a73568d4246c6390998abadd458047f07dd1bd6fdf39f98);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3d4f1633f5e151b4744d5501ba2a1a81ba1b53c257ec1c7fc5bccc50c0341ac4->leave($__internal_3d4f1633f5e151b4744d5501ba2a1a81ba1b53c257ec1c7fc5bccc50c0341ac4_prof);

        
        $__internal_de4ecd3a6eecb05cc04aa55dedc5ede8b85eb77aa1e20049e2e2d0bf0ca534a4->leave($__internal_de4ecd3a6eecb05cc04aa55dedc5ede8b85eb77aa1e20049e2e2d0bf0ca534a4_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_640f049e754465fc4a8b7611db788a4a186abf9032bf1710f8e238d6585521e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640f049e754465fc4a8b7611db788a4a186abf9032bf1710f8e238d6585521e0->enter($__internal_640f049e754465fc4a8b7611db788a4a186abf9032bf1710f8e238d6585521e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c64fa04c5b003a3689eabca534c02c8b477ae8fad3b2bced4027006687b6427c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64fa04c5b003a3689eabca534c02c8b477ae8fad3b2bced4027006687b6427c->enter($__internal_c64fa04c5b003a3689eabca534c02c8b477ae8fad3b2bced4027006687b6427c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_c64fa04c5b003a3689eabca534c02c8b477ae8fad3b2bced4027006687b6427c->leave($__internal_c64fa04c5b003a3689eabca534c02c8b477ae8fad3b2bced4027006687b6427c_prof);

        
        $__internal_640f049e754465fc4a8b7611db788a4a186abf9032bf1710f8e238d6585521e0->leave($__internal_640f049e754465fc4a8b7611db788a4a186abf9032bf1710f8e238d6585521e0_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_122f28563f311163d9287c47e0878b78ea8f8c92a9bea76be67f703f2a5c469b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122f28563f311163d9287c47e0878b78ea8f8c92a9bea76be67f703f2a5c469b->enter($__internal_122f28563f311163d9287c47e0878b78ea8f8c92a9bea76be67f703f2a5c469b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_48ae612a9ae993958050d71d1ff8aaa258ca19a4f37d9b3028582eb07c0ddb4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ae612a9ae993958050d71d1ff8aaa258ca19a4f37d9b3028582eb07c0ddb4f->enter($__internal_48ae612a9ae993958050d71d1ff8aaa258ca19a4f37d9b3028582eb07c0ddb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_48ae612a9ae993958050d71d1ff8aaa258ca19a4f37d9b3028582eb07c0ddb4f->leave($__internal_48ae612a9ae993958050d71d1ff8aaa258ca19a4f37d9b3028582eb07c0ddb4f_prof);

        
        $__internal_122f28563f311163d9287c47e0878b78ea8f8c92a9bea76be67f703f2a5c469b->leave($__internal_122f28563f311163d9287c47e0878b78ea8f8c92a9bea76be67f703f2a5c469b_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ba360c2f51181caafad35c2a797c4c726ad984d8bea5b658c66ebb90f844da92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba360c2f51181caafad35c2a797c4c726ad984d8bea5b658c66ebb90f844da92->enter($__internal_ba360c2f51181caafad35c2a797c4c726ad984d8bea5b658c66ebb90f844da92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_428a5cebd628d31ad52cf76a34ff54ff1e45ffe3fc701245fa32737f9219482d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428a5cebd628d31ad52cf76a34ff54ff1e45ffe3fc701245fa32737f9219482d->enter($__internal_428a5cebd628d31ad52cf76a34ff54ff1e45ffe3fc701245fa32737f9219482d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_428a5cebd628d31ad52cf76a34ff54ff1e45ffe3fc701245fa32737f9219482d->leave($__internal_428a5cebd628d31ad52cf76a34ff54ff1e45ffe3fc701245fa32737f9219482d_prof);

        
        $__internal_ba360c2f51181caafad35c2a797c4c726ad984d8bea5b658c66ebb90f844da92->leave($__internal_ba360c2f51181caafad35c2a797c4c726ad984d8bea5b658c66ebb90f844da92_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_bef8039f28e2f7a6dff5938d8cd62196b28959bb757255986c92db025f60f0a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef8039f28e2f7a6dff5938d8cd62196b28959bb757255986c92db025f60f0a9->enter($__internal_bef8039f28e2f7a6dff5938d8cd62196b28959bb757255986c92db025f60f0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_04a1c65a9d309208c0ca7c419d98126ac11c3bdf087f69a63ab8de99502564fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a1c65a9d309208c0ca7c419d98126ac11c3bdf087f69a63ab8de99502564fc->enter($__internal_04a1c65a9d309208c0ca7c419d98126ac11c3bdf087f69a63ab8de99502564fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_04a1c65a9d309208c0ca7c419d98126ac11c3bdf087f69a63ab8de99502564fc->leave($__internal_04a1c65a9d309208c0ca7c419d98126ac11c3bdf087f69a63ab8de99502564fc_prof);

        
        $__internal_bef8039f28e2f7a6dff5938d8cd62196b28959bb757255986c92db025f60f0a9->leave($__internal_bef8039f28e2f7a6dff5938d8cd62196b28959bb757255986c92db025f60f0a9_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_0784526d7524acaed38b680505ad8e25e2fb3c30f9f3e38402f210a016be012c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0784526d7524acaed38b680505ad8e25e2fb3c30f9f3e38402f210a016be012c->enter($__internal_0784526d7524acaed38b680505ad8e25e2fb3c30f9f3e38402f210a016be012c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_140bd317a09baff89c01d659a01af3d50611c4e1f151b138914f9cb481d80879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140bd317a09baff89c01d659a01af3d50611c4e1f151b138914f9cb481d80879->enter($__internal_140bd317a09baff89c01d659a01af3d50611c4e1f151b138914f9cb481d80879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_140bd317a09baff89c01d659a01af3d50611c4e1f151b138914f9cb481d80879->leave($__internal_140bd317a09baff89c01d659a01af3d50611c4e1f151b138914f9cb481d80879_prof);

        
        $__internal_0784526d7524acaed38b680505ad8e25e2fb3c30f9f3e38402f210a016be012c->leave($__internal_0784526d7524acaed38b680505ad8e25e2fb3c30f9f3e38402f210a016be012c_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_ee2fd319d13280420178128a72106b837903deabdb53e1a22b8ddd682fa1659a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2fd319d13280420178128a72106b837903deabdb53e1a22b8ddd682fa1659a->enter($__internal_ee2fd319d13280420178128a72106b837903deabdb53e1a22b8ddd682fa1659a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_ec46a13e7fb7e9b9701c5bddf13b78a9d7671f22b93d4c3873fd5d8978216598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec46a13e7fb7e9b9701c5bddf13b78a9d7671f22b93d4c3873fd5d8978216598->enter($__internal_ec46a13e7fb7e9b9701c5bddf13b78a9d7671f22b93d4c3873fd5d8978216598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_ec46a13e7fb7e9b9701c5bddf13b78a9d7671f22b93d4c3873fd5d8978216598->leave($__internal_ec46a13e7fb7e9b9701c5bddf13b78a9d7671f22b93d4c3873fd5d8978216598_prof);

        
        $__internal_ee2fd319d13280420178128a72106b837903deabdb53e1a22b8ddd682fa1659a->leave($__internal_ee2fd319d13280420178128a72106b837903deabdb53e1a22b8ddd682fa1659a_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_3911df1da3aee17e0152fc2444fde6be8a2248211b5c372898a19980e22fdf92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3911df1da3aee17e0152fc2444fde6be8a2248211b5c372898a19980e22fdf92->enter($__internal_3911df1da3aee17e0152fc2444fde6be8a2248211b5c372898a19980e22fdf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_72cc02aed3bfab545e05ffacbca9b250d9d3464df03c80cc0d2414def195aa67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cc02aed3bfab545e05ffacbca9b250d9d3464df03c80cc0d2414def195aa67->enter($__internal_72cc02aed3bfab545e05ffacbca9b250d9d3464df03c80cc0d2414def195aa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_72cc02aed3bfab545e05ffacbca9b250d9d3464df03c80cc0d2414def195aa67->leave($__internal_72cc02aed3bfab545e05ffacbca9b250d9d3464df03c80cc0d2414def195aa67_prof);

        
        $__internal_3911df1da3aee17e0152fc2444fde6be8a2248211b5c372898a19980e22fdf92->leave($__internal_3911df1da3aee17e0152fc2444fde6be8a2248211b5c372898a19980e22fdf92_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_7387e2b3c24d05d319df558b6d6c099547243a0464ccf9f71a5e5c85c8915407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7387e2b3c24d05d319df558b6d6c099547243a0464ccf9f71a5e5c85c8915407->enter($__internal_7387e2b3c24d05d319df558b6d6c099547243a0464ccf9f71a5e5c85c8915407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_05869dc6e3c469199407167719d74d38bdf3f1498848a4958d2c14b5282a93bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05869dc6e3c469199407167719d74d38bdf3f1498848a4958d2c14b5282a93bb->enter($__internal_05869dc6e3c469199407167719d74d38bdf3f1498848a4958d2c14b5282a93bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_05869dc6e3c469199407167719d74d38bdf3f1498848a4958d2c14b5282a93bb->leave($__internal_05869dc6e3c469199407167719d74d38bdf3f1498848a4958d2c14b5282a93bb_prof);

        
        $__internal_7387e2b3c24d05d319df558b6d6c099547243a0464ccf9f71a5e5c85c8915407->leave($__internal_7387e2b3c24d05d319df558b6d6c099547243a0464ccf9f71a5e5c85c8915407_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_63d14158b92df85d95671b9690bc49f157b81be2cc728c89a44864d36c34643a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d14158b92df85d95671b9690bc49f157b81be2cc728c89a44864d36c34643a->enter($__internal_63d14158b92df85d95671b9690bc49f157b81be2cc728c89a44864d36c34643a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_df3075c9d319fb2338846d1c7e025f1bc1695c1ba4da273018056c006f92bd5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3075c9d319fb2338846d1c7e025f1bc1695c1ba4da273018056c006f92bd5f->enter($__internal_df3075c9d319fb2338846d1c7e025f1bc1695c1ba4da273018056c006f92bd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_df3075c9d319fb2338846d1c7e025f1bc1695c1ba4da273018056c006f92bd5f->leave($__internal_df3075c9d319fb2338846d1c7e025f1bc1695c1ba4da273018056c006f92bd5f_prof);

        
        $__internal_63d14158b92df85d95671b9690bc49f157b81be2cc728c89a44864d36c34643a->leave($__internal_63d14158b92df85d95671b9690bc49f157b81be2cc728c89a44864d36c34643a_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_879c0f0a2aa5653281b9c069927837aaba244c459bf6dc36633f930974b18174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879c0f0a2aa5653281b9c069927837aaba244c459bf6dc36633f930974b18174->enter($__internal_879c0f0a2aa5653281b9c069927837aaba244c459bf6dc36633f930974b18174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_d04c6028bfdc02a0faabc7a3397986cd2cd1a7ee90c8ec59569b97478eacebc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04c6028bfdc02a0faabc7a3397986cd2cd1a7ee90c8ec59569b97478eacebc8->enter($__internal_d04c6028bfdc02a0faabc7a3397986cd2cd1a7ee90c8ec59569b97478eacebc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d04c6028bfdc02a0faabc7a3397986cd2cd1a7ee90c8ec59569b97478eacebc8->leave($__internal_d04c6028bfdc02a0faabc7a3397986cd2cd1a7ee90c8ec59569b97478eacebc8_prof);

        
        $__internal_879c0f0a2aa5653281b9c069927837aaba244c459bf6dc36633f930974b18174->leave($__internal_879c0f0a2aa5653281b9c069927837aaba244c459bf6dc36633f930974b18174_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_86428942287b276f16b458da24e4c19501a3908928d3310ad251783633f8b51f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86428942287b276f16b458da24e4c19501a3908928d3310ad251783633f8b51f->enter($__internal_86428942287b276f16b458da24e4c19501a3908928d3310ad251783633f8b51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_133202f9dbbb28edc63592999d18ccaf32f56c0826fd642c585d01d1609580c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133202f9dbbb28edc63592999d18ccaf32f56c0826fd642c585d01d1609580c3->enter($__internal_133202f9dbbb28edc63592999d18ccaf32f56c0826fd642c585d01d1609580c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_133202f9dbbb28edc63592999d18ccaf32f56c0826fd642c585d01d1609580c3->leave($__internal_133202f9dbbb28edc63592999d18ccaf32f56c0826fd642c585d01d1609580c3_prof);

        
        $__internal_86428942287b276f16b458da24e4c19501a3908928d3310ad251783633f8b51f->leave($__internal_86428942287b276f16b458da24e4c19501a3908928d3310ad251783633f8b51f_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_526c76d9c108e3354ddd643c0077257e0fd18f4f90360fcbb591965aedd40331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526c76d9c108e3354ddd643c0077257e0fd18f4f90360fcbb591965aedd40331->enter($__internal_526c76d9c108e3354ddd643c0077257e0fd18f4f90360fcbb591965aedd40331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_cff1cfb34ba44a3f6b091962dd7b0af8ddfb89b32ea7f361d6830d9a37e461c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff1cfb34ba44a3f6b091962dd7b0af8ddfb89b32ea7f361d6830d9a37e461c0->enter($__internal_cff1cfb34ba44a3f6b091962dd7b0af8ddfb89b32ea7f361d6830d9a37e461c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_cff1cfb34ba44a3f6b091962dd7b0af8ddfb89b32ea7f361d6830d9a37e461c0->leave($__internal_cff1cfb34ba44a3f6b091962dd7b0af8ddfb89b32ea7f361d6830d9a37e461c0_prof);

        
        $__internal_526c76d9c108e3354ddd643c0077257e0fd18f4f90360fcbb591965aedd40331->leave($__internal_526c76d9c108e3354ddd643c0077257e0fd18f4f90360fcbb591965aedd40331_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_d60205ef439ea416273d2be46086ee9d324a05d1dca870ac4b1e048bf1e50afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60205ef439ea416273d2be46086ee9d324a05d1dca870ac4b1e048bf1e50afd->enter($__internal_d60205ef439ea416273d2be46086ee9d324a05d1dca870ac4b1e048bf1e50afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_86f1392d43f66f712e22a0ef44bff0217219a1f03b38f27fda8c259003b2bd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f1392d43f66f712e22a0ef44bff0217219a1f03b38f27fda8c259003b2bd6c->enter($__internal_86f1392d43f66f712e22a0ef44bff0217219a1f03b38f27fda8c259003b2bd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_86f1392d43f66f712e22a0ef44bff0217219a1f03b38f27fda8c259003b2bd6c->leave($__internal_86f1392d43f66f712e22a0ef44bff0217219a1f03b38f27fda8c259003b2bd6c_prof);

        
        $__internal_d60205ef439ea416273d2be46086ee9d324a05d1dca870ac4b1e048bf1e50afd->leave($__internal_d60205ef439ea416273d2be46086ee9d324a05d1dca870ac4b1e048bf1e50afd_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_3d709b8488ac63c06104ba0a940113f4caffea6d35040925ab8daa2766e7adfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d709b8488ac63c06104ba0a940113f4caffea6d35040925ab8daa2766e7adfb->enter($__internal_3d709b8488ac63c06104ba0a940113f4caffea6d35040925ab8daa2766e7adfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_40e9b8c37600924da13fe489af1751a8b7368551ddd57430edd46a8a8c616bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e9b8c37600924da13fe489af1751a8b7368551ddd57430edd46a8a8c616bd7->enter($__internal_40e9b8c37600924da13fe489af1751a8b7368551ddd57430edd46a8a8c616bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_40e9b8c37600924da13fe489af1751a8b7368551ddd57430edd46a8a8c616bd7->leave($__internal_40e9b8c37600924da13fe489af1751a8b7368551ddd57430edd46a8a8c616bd7_prof);

        
        $__internal_3d709b8488ac63c06104ba0a940113f4caffea6d35040925ab8daa2766e7adfb->leave($__internal_3d709b8488ac63c06104ba0a940113f4caffea6d35040925ab8daa2766e7adfb_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_05784dbc31a49b20441e4536757040996732e0cfba4341a1211beded0b31ad96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05784dbc31a49b20441e4536757040996732e0cfba4341a1211beded0b31ad96->enter($__internal_05784dbc31a49b20441e4536757040996732e0cfba4341a1211beded0b31ad96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_19543c3c3e0b9a9ccf9e60b8b9a73052811fcbfa23868ff0440974ef0635ac23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19543c3c3e0b9a9ccf9e60b8b9a73052811fcbfa23868ff0440974ef0635ac23->enter($__internal_19543c3c3e0b9a9ccf9e60b8b9a73052811fcbfa23868ff0440974ef0635ac23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_19543c3c3e0b9a9ccf9e60b8b9a73052811fcbfa23868ff0440974ef0635ac23->leave($__internal_19543c3c3e0b9a9ccf9e60b8b9a73052811fcbfa23868ff0440974ef0635ac23_prof);

        
        $__internal_05784dbc31a49b20441e4536757040996732e0cfba4341a1211beded0b31ad96->leave($__internal_05784dbc31a49b20441e4536757040996732e0cfba4341a1211beded0b31ad96_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_0f1fa280c3367362a2bcb0c38dd5e2991f4546a66e5092bf148af433dfdee0ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1fa280c3367362a2bcb0c38dd5e2991f4546a66e5092bf148af433dfdee0ad->enter($__internal_0f1fa280c3367362a2bcb0c38dd5e2991f4546a66e5092bf148af433dfdee0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_4296752209d4880a646b77dc479e543767b2b994aca265364ddff849cee98ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4296752209d4880a646b77dc479e543767b2b994aca265364ddff849cee98ed5->enter($__internal_4296752209d4880a646b77dc479e543767b2b994aca265364ddff849cee98ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4296752209d4880a646b77dc479e543767b2b994aca265364ddff849cee98ed5->leave($__internal_4296752209d4880a646b77dc479e543767b2b994aca265364ddff849cee98ed5_prof);

        
        $__internal_0f1fa280c3367362a2bcb0c38dd5e2991f4546a66e5092bf148af433dfdee0ad->leave($__internal_0f1fa280c3367362a2bcb0c38dd5e2991f4546a66e5092bf148af433dfdee0ad_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a14c8c67e6ce03db2c63ca33c58f3a5ea433a10bfe01b2bd0b38abd751d8eee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14c8c67e6ce03db2c63ca33c58f3a5ea433a10bfe01b2bd0b38abd751d8eee6->enter($__internal_a14c8c67e6ce03db2c63ca33c58f3a5ea433a10bfe01b2bd0b38abd751d8eee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_be7a9b4275e7c0eb4ba5ef9147d560e299a6e4381caf42ee138b38cf93ac03ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7a9b4275e7c0eb4ba5ef9147d560e299a6e4381caf42ee138b38cf93ac03ea->enter($__internal_be7a9b4275e7c0eb4ba5ef9147d560e299a6e4381caf42ee138b38cf93ac03ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })())))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 226, $this->getSourceContext()); })()));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 229, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })())) : ($this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_be7a9b4275e7c0eb4ba5ef9147d560e299a6e4381caf42ee138b38cf93ac03ea->leave($__internal_be7a9b4275e7c0eb4ba5ef9147d560e299a6e4381caf42ee138b38cf93ac03ea_prof);

        
        $__internal_a14c8c67e6ce03db2c63ca33c58f3a5ea433a10bfe01b2bd0b38abd751d8eee6->leave($__internal_a14c8c67e6ce03db2c63ca33c58f3a5ea433a10bfe01b2bd0b38abd751d8eee6_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_47baf33707d276ca29925644079a07ca872b0cce85081aa0f3eecf25e858f4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47baf33707d276ca29925644079a07ca872b0cce85081aa0f3eecf25e858f4d9->enter($__internal_47baf33707d276ca29925644079a07ca872b0cce85081aa0f3eecf25e858f4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_d66ba98c202e64906dbe9f511ae468037fb281ffc6e3d6e68a24d0e791a2ee6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66ba98c202e64906dbe9f511ae468037fb281ffc6e3d6e68a24d0e791a2ee6e->enter($__internal_d66ba98c202e64906dbe9f511ae468037fb281ffc6e3d6e68a24d0e791a2ee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_d66ba98c202e64906dbe9f511ae468037fb281ffc6e3d6e68a24d0e791a2ee6e->leave($__internal_d66ba98c202e64906dbe9f511ae468037fb281ffc6e3d6e68a24d0e791a2ee6e_prof);

        
        $__internal_47baf33707d276ca29925644079a07ca872b0cce85081aa0f3eecf25e858f4d9->leave($__internal_47baf33707d276ca29925644079a07ca872b0cce85081aa0f3eecf25e858f4d9_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_95a624bd784dfdeb47e00028770134cdbb7e1e1d77e14362f63a1e0dc4c4e82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a624bd784dfdeb47e00028770134cdbb7e1e1d77e14362f63a1e0dc4c4e82b->enter($__internal_95a624bd784dfdeb47e00028770134cdbb7e1e1d77e14362f63a1e0dc4c4e82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_46a4bcfa10f393f90ad653fc73f44cb75298ccbe8116f301bdfae02ceeae661d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a4bcfa10f393f90ad653fc73f44cb75298ccbe8116f301bdfae02ceeae661d->enter($__internal_46a4bcfa10f393f90ad653fc73f44cb75298ccbe8116f301bdfae02ceeae661d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_46a4bcfa10f393f90ad653fc73f44cb75298ccbe8116f301bdfae02ceeae661d->leave($__internal_46a4bcfa10f393f90ad653fc73f44cb75298ccbe8116f301bdfae02ceeae661d_prof);

        
        $__internal_95a624bd784dfdeb47e00028770134cdbb7e1e1d77e14362f63a1e0dc4c4e82b->leave($__internal_95a624bd784dfdeb47e00028770134cdbb7e1e1d77e14362f63a1e0dc4c4e82b_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_d6f1ad3cd1a06fec29f28a98ed15d612f3bd307049ed8218c39eaf889e1306f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f1ad3cd1a06fec29f28a98ed15d612f3bd307049ed8218c39eaf889e1306f0->enter($__internal_d6f1ad3cd1a06fec29f28a98ed15d612f3bd307049ed8218c39eaf889e1306f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_344fd989f71aca5a8cb2477801aa29f3652e1f46cdd58ec455230837c6658731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344fd989f71aca5a8cb2477801aa29f3652e1f46cdd58ec455230837c6658731->enter($__internal_344fd989f71aca5a8cb2477801aa29f3652e1f46cdd58ec455230837c6658731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_344fd989f71aca5a8cb2477801aa29f3652e1f46cdd58ec455230837c6658731->leave($__internal_344fd989f71aca5a8cb2477801aa29f3652e1f46cdd58ec455230837c6658731_prof);

        
        $__internal_d6f1ad3cd1a06fec29f28a98ed15d612f3bd307049ed8218c39eaf889e1306f0->leave($__internal_d6f1ad3cd1a06fec29f28a98ed15d612f3bd307049ed8218c39eaf889e1306f0_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_b879e1717e585ade50eb7222e08e0d04aac4713e6a6dc16f89327cfdc7bcd819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b879e1717e585ade50eb7222e08e0d04aac4713e6a6dc16f89327cfdc7bcd819->enter($__internal_b879e1717e585ade50eb7222e08e0d04aac4713e6a6dc16f89327cfdc7bcd819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_3a0dd57c512a3f705f0591e03910ca46c7f2a37326b3f3c5a16acf61310a27f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0dd57c512a3f705f0591e03910ca46c7f2a37326b3f3c5a16acf61310a27f2->enter($__internal_3a0dd57c512a3f705f0591e03910ca46c7f2a37326b3f3c5a16acf61310a27f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3a0dd57c512a3f705f0591e03910ca46c7f2a37326b3f3c5a16acf61310a27f2->leave($__internal_3a0dd57c512a3f705f0591e03910ca46c7f2a37326b3f3c5a16acf61310a27f2_prof);

        
        $__internal_b879e1717e585ade50eb7222e08e0d04aac4713e6a6dc16f89327cfdc7bcd819->leave($__internal_b879e1717e585ade50eb7222e08e0d04aac4713e6a6dc16f89327cfdc7bcd819_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_038f570efd761e142fa4788eda8157223ba38ae2eb7172b257ae3fcf7506e7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_038f570efd761e142fa4788eda8157223ba38ae2eb7172b257ae3fcf7506e7ca->enter($__internal_038f570efd761e142fa4788eda8157223ba38ae2eb7172b257ae3fcf7506e7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1146ac3824d0dc097df74725fb4c140f7bc340f90325ea05417bef298195460d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1146ac3824d0dc097df74725fb4c140f7bc340f90325ea05417bef298195460d->enter($__internal_1146ac3824d0dc097df74725fb4c140f7bc340f90325ea05417bef298195460d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 255
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 255, $this->getSourceContext()); })()) === false)) {
            // line 256
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 256, $this->getSourceContext()); })())) {
                // line 257
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 257, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 257, $this->getSourceContext()); })())));
            }
            // line 259
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 259, $this->getSourceContext()); })())) {
                // line 260
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 260, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 262
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 262, $this->getSourceContext()); })()))) {
                // line 263
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 263, $this->getSourceContext()); })()))) {
                    // line 264
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 264, $this->getSourceContext()); })()), array("%name%" =>                     // line 265
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 265, $this->getSourceContext()); })()), "%id%" =>                     // line 266
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 266, $this->getSourceContext()); })())));
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 269, $this->getSourceContext()); })()));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })())) {
                $__internal_949aada9a18e08e9a69bd02b5f2865422e45295d07b104ca1cf1c00b711d5ec7 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_949aada9a18e08e9a69bd02b5f2865422e45295d07b104ca1cf1c00b711d5ec7)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_949aada9a18e08e9a69bd02b5f2865422e45295d07b104ca1cf1c00b711d5ec7);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_1146ac3824d0dc097df74725fb4c140f7bc340f90325ea05417bef298195460d->leave($__internal_1146ac3824d0dc097df74725fb4c140f7bc340f90325ea05417bef298195460d_prof);

        
        $__internal_038f570efd761e142fa4788eda8157223ba38ae2eb7172b257ae3fcf7506e7ca->leave($__internal_038f570efd761e142fa4788eda8157223ba38ae2eb7172b257ae3fcf7506e7ca_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_a812e849aa157847334e2378e8287fd437fc8d7ad4a16a55fdf98d4afa53088f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a812e849aa157847334e2378e8287fd437fc8d7ad4a16a55fdf98d4afa53088f->enter($__internal_a812e849aa157847334e2378e8287fd437fc8d7ad4a16a55fdf98d4afa53088f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_69ce2a8cb948b52dbba8f581b7efcd21c07d6eed92fac210c7392e1f9c459b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ce2a8cb948b52dbba8f581b7efcd21c07d6eed92fac210c7392e1f9c459b34->enter($__internal_69ce2a8cb948b52dbba8f581b7efcd21c07d6eed92fac210c7392e1f9c459b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_69ce2a8cb948b52dbba8f581b7efcd21c07d6eed92fac210c7392e1f9c459b34->leave($__internal_69ce2a8cb948b52dbba8f581b7efcd21c07d6eed92fac210c7392e1f9c459b34_prof);

        
        $__internal_a812e849aa157847334e2378e8287fd437fc8d7ad4a16a55fdf98d4afa53088f->leave($__internal_a812e849aa157847334e2378e8287fd437fc8d7ad4a16a55fdf98d4afa53088f_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_f20e597cf2d833153e5db7869ba0fb941d906e5774e67ac515a3c97002b13336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20e597cf2d833153e5db7869ba0fb941d906e5774e67ac515a3c97002b13336->enter($__internal_f20e597cf2d833153e5db7869ba0fb941d906e5774e67ac515a3c97002b13336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_3007855a37771cf70d13e00d76e709c3d0bd1b2a99f4246b3128c4c4d553b061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3007855a37771cf70d13e00d76e709c3d0bd1b2a99f4246b3128c4c4d553b061->enter($__internal_3007855a37771cf70d13e00d76e709c3d0bd1b2a99f4246b3128c4c4d553b061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_3007855a37771cf70d13e00d76e709c3d0bd1b2a99f4246b3128c4c4d553b061->leave($__internal_3007855a37771cf70d13e00d76e709c3d0bd1b2a99f4246b3128c4c4d553b061_prof);

        
        $__internal_f20e597cf2d833153e5db7869ba0fb941d906e5774e67ac515a3c97002b13336->leave($__internal_f20e597cf2d833153e5db7869ba0fb941d906e5774e67ac515a3c97002b13336_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fb18a73b1c3772ba59c186cecc1f1679830ee82bf787a1fea6020223cfd7f372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb18a73b1c3772ba59c186cecc1f1679830ee82bf787a1fea6020223cfd7f372->enter($__internal_fb18a73b1c3772ba59c186cecc1f1679830ee82bf787a1fea6020223cfd7f372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_587e6d2572f39fa0261f772d3b5143b7b8dd883ada49d465967aeb3c30c00c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587e6d2572f39fa0261f772d3b5143b7b8dd883ada49d465967aeb3c30c00c2d->enter($__internal_587e6d2572f39fa0261f772d3b5143b7b8dd883ada49d465967aeb3c30c00c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 289
        echo "<div>";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), 'errors');
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'widget');
        // line 293
        echo "</div>";
        
        $__internal_587e6d2572f39fa0261f772d3b5143b7b8dd883ada49d465967aeb3c30c00c2d->leave($__internal_587e6d2572f39fa0261f772d3b5143b7b8dd883ada49d465967aeb3c30c00c2d_prof);

        
        $__internal_fb18a73b1c3772ba59c186cecc1f1679830ee82bf787a1fea6020223cfd7f372->leave($__internal_fb18a73b1c3772ba59c186cecc1f1679830ee82bf787a1fea6020223cfd7f372_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_98b62731bca48baac13f41de76df679c47579007c99cea544335628976dc4fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b62731bca48baac13f41de76df679c47579007c99cea544335628976dc4fbb->enter($__internal_98b62731bca48baac13f41de76df679c47579007c99cea544335628976dc4fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_42ee971d379ab114531d37602cbf8a79ad7b983746ad44ecf081bce3f64d27a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ee971d379ab114531d37602cbf8a79ad7b983746ad44ecf081bce3f64d27a4->enter($__internal_42ee971d379ab114531d37602cbf8a79ad7b983746ad44ecf081bce3f64d27a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_42ee971d379ab114531d37602cbf8a79ad7b983746ad44ecf081bce3f64d27a4->leave($__internal_42ee971d379ab114531d37602cbf8a79ad7b983746ad44ecf081bce3f64d27a4_prof);

        
        $__internal_98b62731bca48baac13f41de76df679c47579007c99cea544335628976dc4fbb->leave($__internal_98b62731bca48baac13f41de76df679c47579007c99cea544335628976dc4fbb_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5126f320dc36712995ecae1cf4d251ed0ffb59e48f0b6ba3e9fe4a3d3a97d8b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5126f320dc36712995ecae1cf4d251ed0ffb59e48f0b6ba3e9fe4a3d3a97d8b8->enter($__internal_5126f320dc36712995ecae1cf4d251ed0ffb59e48f0b6ba3e9fe4a3d3a97d8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_5f7f5be6aa5b967a00bafb37bc8bdaf6f99b29f6e5dacec549096f5741d906af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7f5be6aa5b967a00bafb37bc8bdaf6f99b29f6e5dacec549096f5741d906af->enter($__internal_5f7f5be6aa5b967a00bafb37bc8bdaf6f99b29f6e5dacec549096f5741d906af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_5f7f5be6aa5b967a00bafb37bc8bdaf6f99b29f6e5dacec549096f5741d906af->leave($__internal_5f7f5be6aa5b967a00bafb37bc8bdaf6f99b29f6e5dacec549096f5741d906af_prof);

        
        $__internal_5126f320dc36712995ecae1cf4d251ed0ffb59e48f0b6ba3e9fe4a3d3a97d8b8->leave($__internal_5126f320dc36712995ecae1cf4d251ed0ffb59e48f0b6ba3e9fe4a3d3a97d8b8_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_9b65f57a08f66ed60624c0e12a0aa1408c1daa7b435fa5e674571ed531c397f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b65f57a08f66ed60624c0e12a0aa1408c1daa7b435fa5e674571ed531c397f3->enter($__internal_9b65f57a08f66ed60624c0e12a0aa1408c1daa7b435fa5e674571ed531c397f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_51c0959f8d9fb105f75bcc1c903e2853d54282e21be8509ae8d1fa30015d1e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c0959f8d9fb105f75bcc1c903e2853d54282e21be8509ae8d1fa30015d1e6c->enter($__internal_51c0959f8d9fb105f75bcc1c903e2853d54282e21be8509ae8d1fa30015d1e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_51c0959f8d9fb105f75bcc1c903e2853d54282e21be8509ae8d1fa30015d1e6c->leave($__internal_51c0959f8d9fb105f75bcc1c903e2853d54282e21be8509ae8d1fa30015d1e6c_prof);

        
        $__internal_9b65f57a08f66ed60624c0e12a0aa1408c1daa7b435fa5e674571ed531c397f3->leave($__internal_9b65f57a08f66ed60624c0e12a0aa1408c1daa7b435fa5e674571ed531c397f3_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_5eb413ebdb1a79756b05f1bf797136d31bcadd6cb76a0d2e79ecc600b9b445c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb413ebdb1a79756b05f1bf797136d31bcadd6cb76a0d2e79ecc600b9b445c6->enter($__internal_5eb413ebdb1a79756b05f1bf797136d31bcadd6cb76a0d2e79ecc600b9b445c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_c4312e3ae68f30628e4659b71762fb6796985776fed4dd3d5435c2d2030f188e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4312e3ae68f30628e4659b71762fb6796985776fed4dd3d5435c2d2030f188e->enter($__internal_c4312e3ae68f30628e4659b71762fb6796985776fed4dd3d5435c2d2030f188e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 315
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 315, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 316
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 316, $this->getSourceContext()); })()));
        // line 317
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 317, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 318
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })());
        } else {
            // line 320
            $context["form_method"] = "POST";
        }
        // line 322
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 322, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 322, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 322, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 323
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 323, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_c4312e3ae68f30628e4659b71762fb6796985776fed4dd3d5435c2d2030f188e->leave($__internal_c4312e3ae68f30628e4659b71762fb6796985776fed4dd3d5435c2d2030f188e_prof);

        
        $__internal_5eb413ebdb1a79756b05f1bf797136d31bcadd6cb76a0d2e79ecc600b9b445c6->leave($__internal_5eb413ebdb1a79756b05f1bf797136d31bcadd6cb76a0d2e79ecc600b9b445c6_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_aaab4d3cf42291eb1a510114f36161055246318c1f5550bd1c13271c868437b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaab4d3cf42291eb1a510114f36161055246318c1f5550bd1c13271c868437b3->enter($__internal_aaab4d3cf42291eb1a510114f36161055246318c1f5550bd1c13271c868437b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_347691adee9a8a8b45d524870f5e91f75cc1bc1096408066cc00f2e4bbcedbbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347691adee9a8a8b45d524870f5e91f75cc1bc1096408066cc00f2e4bbcedbbb->enter($__internal_347691adee9a8a8b45d524870f5e91f75cc1bc1096408066cc00f2e4bbcedbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_347691adee9a8a8b45d524870f5e91f75cc1bc1096408066cc00f2e4bbcedbbb->leave($__internal_347691adee9a8a8b45d524870f5e91f75cc1bc1096408066cc00f2e4bbcedbbb_prof);

        
        $__internal_aaab4d3cf42291eb1a510114f36161055246318c1f5550bd1c13271c868437b3->leave($__internal_aaab4d3cf42291eb1a510114f36161055246318c1f5550bd1c13271c868437b3_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4dc5022cd831fbc21860ad79150f4c77a873738ff0ca27877bc7d36fd25736ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc5022cd831fbc21860ad79150f4c77a873738ff0ca27877bc7d36fd25736ea->enter($__internal_4dc5022cd831fbc21860ad79150f4c77a873738ff0ca27877bc7d36fd25736ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e63ac41d08aa2f2fb01a2dbfd2d0d8561969890f93613a7bfdce41982ffe7915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63ac41d08aa2f2fb01a2dbfd2d0d8561969890f93613a7bfdce41982ffe7915->enter($__internal_e63ac41d08aa2f2fb01a2dbfd2d0d8561969890f93613a7bfdce41982ffe7915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 336
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 336, $this->getSourceContext()); })())) > 0)) {
            // line 337
            echo "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "</ul>";
        }
        
        $__internal_e63ac41d08aa2f2fb01a2dbfd2d0d8561969890f93613a7bfdce41982ffe7915->leave($__internal_e63ac41d08aa2f2fb01a2dbfd2d0d8561969890f93613a7bfdce41982ffe7915_prof);

        
        $__internal_4dc5022cd831fbc21860ad79150f4c77a873738ff0ca27877bc7d36fd25736ea->leave($__internal_4dc5022cd831fbc21860ad79150f4c77a873738ff0ca27877bc7d36fd25736ea_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_edc1e2b51d46acb0a296e55a3c2b2369ba0940f0d986e69a536e5d03b421452e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc1e2b51d46acb0a296e55a3c2b2369ba0940f0d986e69a536e5d03b421452e->enter($__internal_edc1e2b51d46acb0a296e55a3c2b2369ba0940f0d986e69a536e5d03b421452e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_cfbc7a7cdaeddafc851f9d870d4ce35faf4974c5b2414a1bb9cd76c4394ac217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbc7a7cdaeddafc851f9d870d4ce35faf4974c5b2414a1bb9cd76c4394ac217->enter($__internal_cfbc7a7cdaeddafc851f9d870d4ce35faf4974c5b2414a1bb9cd76c4394ac217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })())))) {
            // line 353
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 353, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 354
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 354, $this->getSourceContext()); })()));
            // line 355
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 355, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 356
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })());
            } else {
                // line 358
                $context["form_method"] = "POST";
            }
            // line 361
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 361, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 361, $this->getSourceContext()); })()))) {
                // line 362
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 362, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_cfbc7a7cdaeddafc851f9d870d4ce35faf4974c5b2414a1bb9cd76c4394ac217->leave($__internal_cfbc7a7cdaeddafc851f9d870d4ce35faf4974c5b2414a1bb9cd76c4394ac217_prof);

        
        $__internal_edc1e2b51d46acb0a296e55a3c2b2369ba0940f0d986e69a536e5d03b421452e->leave($__internal_edc1e2b51d46acb0a296e55a3c2b2369ba0940f0d986e69a536e5d03b421452e_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_05a4354eabebe25f2d4b526f90ce85022eeab7019d521272a85a909c25c0ef80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a4354eabebe25f2d4b526f90ce85022eeab7019d521272a85a909c25c0ef80->enter($__internal_05a4354eabebe25f2d4b526f90ce85022eeab7019d521272a85a909c25c0ef80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_c6425158b3c72605530d594b40f79cd30afe4af9f4539d72e51f11b798763c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6425158b3c72605530d594b40f79cd30afe4af9f4539d72e51f11b798763c21->enter($__internal_c6425158b3c72605530d594b40f79cd30afe4af9f4539d72e51f11b798763c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c6425158b3c72605530d594b40f79cd30afe4af9f4539d72e51f11b798763c21->leave($__internal_c6425158b3c72605530d594b40f79cd30afe4af9f4539d72e51f11b798763c21_prof);

        
        $__internal_05a4354eabebe25f2d4b526f90ce85022eeab7019d521272a85a909c25c0ef80->leave($__internal_05a4354eabebe25f2d4b526f90ce85022eeab7019d521272a85a909c25c0ef80_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_be75288b627227f2499af959e6264f42adc0fa250a11a859e7655080351a4da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be75288b627227f2499af959e6264f42adc0fa250a11a859e7655080351a4da3->enter($__internal_be75288b627227f2499af959e6264f42adc0fa250a11a859e7655080351a4da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_981aefbe2347f0f586645ccd4e5da09121adb823487bfe5df4b0210c7e5e9bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981aefbe2347f0f586645ccd4e5da09121adb823487bfe5df4b0210c7e5e9bba->enter($__internal_981aefbe2347f0f586645ccd4e5da09121adb823487bfe5df4b0210c7e5e9bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 377
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 377, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 378
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 378, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_981aefbe2347f0f586645ccd4e5da09121adb823487bfe5df4b0210c7e5e9bba->leave($__internal_981aefbe2347f0f586645ccd4e5da09121adb823487bfe5df4b0210c7e5e9bba_prof);

        
        $__internal_be75288b627227f2499af959e6264f42adc0fa250a11a859e7655080351a4da3->leave($__internal_be75288b627227f2499af959e6264f42adc0fa250a11a859e7655080351a4da3_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_5c98da56cdf62e7a790e4b707757f456a768439fdaa0ab3cab95789e4d3da92f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c98da56cdf62e7a790e4b707757f456a768439fdaa0ab3cab95789e4d3da92f->enter($__internal_5c98da56cdf62e7a790e4b707757f456a768439fdaa0ab3cab95789e4d3da92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_c848342f1e62c813fbfe9c25f165d4d8f45300e5500ccba6a7a667c1b88bc1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c848342f1e62c813fbfe9c25f165d4d8f45300e5500ccba6a7a667c1b88bc1c5->enter($__internal_c848342f1e62c813fbfe9c25f165d4d8f45300e5500ccba6a7a667c1b88bc1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_c848342f1e62c813fbfe9c25f165d4d8f45300e5500ccba6a7a667c1b88bc1c5->leave($__internal_c848342f1e62c813fbfe9c25f165d4d8f45300e5500ccba6a7a667c1b88bc1c5_prof);

        
        $__internal_5c98da56cdf62e7a790e4b707757f456a768439fdaa0ab3cab95789e4d3da92f->leave($__internal_5c98da56cdf62e7a790e4b707757f456a768439fdaa0ab3cab95789e4d3da92f_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_2246092efccad2a12bd138ca091c2d71cbd9f43d1abef9bd477d1ccbb7de1fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2246092efccad2a12bd138ca091c2d71cbd9f43d1abef9bd477d1ccbb7de1fe2->enter($__internal_2246092efccad2a12bd138ca091c2d71cbd9f43d1abef9bd477d1ccbb7de1fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_feba4c471e1142981298c27b57e393a61ef8bcbba334b4949c046ef1f9fb9db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feba4c471e1142981298c27b57e393a61ef8bcbba334b4949c046ef1f9fb9db7->enter($__internal_feba4c471e1142981298c27b57e393a61ef8bcbba334b4949c046ef1f9fb9db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 388
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 388, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 389
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_feba4c471e1142981298c27b57e393a61ef8bcbba334b4949c046ef1f9fb9db7->leave($__internal_feba4c471e1142981298c27b57e393a61ef8bcbba334b4949c046ef1f9fb9db7_prof);

        
        $__internal_2246092efccad2a12bd138ca091c2d71cbd9f43d1abef9bd477d1ccbb7de1fe2->leave($__internal_2246092efccad2a12bd138ca091c2d71cbd9f43d1abef9bd477d1ccbb7de1fe2_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_cb67745b0bc1d44be59b48bf6fb9b671d57ff1ec309b73daa697e8446feeeebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb67745b0bc1d44be59b48bf6fb9b671d57ff1ec309b73daa697e8446feeeebe->enter($__internal_cb67745b0bc1d44be59b48bf6fb9b671d57ff1ec309b73daa697e8446feeeebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_1147b2286214701f6698587ace05387cf720415ce8fe037fd030b054d62f1516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1147b2286214701f6698587ace05387cf720415ce8fe037fd030b054d62f1516->enter($__internal_1147b2286214701f6698587ace05387cf720415ce8fe037fd030b054d62f1516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 393, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1147b2286214701f6698587ace05387cf720415ce8fe037fd030b054d62f1516->leave($__internal_1147b2286214701f6698587ace05387cf720415ce8fe037fd030b054d62f1516_prof);

        
        $__internal_cb67745b0bc1d44be59b48bf6fb9b671d57ff1ec309b73daa697e8446feeeebe->leave($__internal_cb67745b0bc1d44be59b48bf6fb9b671d57ff1ec309b73daa697e8446feeeebe_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1654 => 400,  1652 => 399,  1647 => 398,  1645 => 397,  1640 => 396,  1638 => 395,  1636 => 394,  1632 => 393,  1623 => 392,  1613 => 389,  1604 => 388,  1595 => 387,  1585 => 384,  1579 => 383,  1570 => 382,  1560 => 379,  1556 => 378,  1552 => 377,  1546 => 376,  1537 => 375,  1523 => 371,  1519 => 370,  1510 => 369,  1496 => 362,  1494 => 361,  1491 => 358,  1488 => 356,  1486 => 355,  1484 => 354,  1482 => 353,  1480 => 352,  1473 => 348,  1471 => 347,  1467 => 346,  1458 => 345,  1447 => 341,  1439 => 339,  1435 => 338,  1433 => 337,  1431 => 336,  1422 => 335,  1412 => 332,  1409 => 330,  1407 => 329,  1398 => 328,  1385 => 324,  1383 => 323,  1356 => 322,  1353 => 320,  1350 => 318,  1348 => 317,  1346 => 316,  1344 => 315,  1335 => 314,  1325 => 311,  1323 => 310,  1321 => 309,  1312 => 308,  1302 => 303,  1293 => 302,  1283 => 299,  1281 => 298,  1279 => 297,  1270 => 296,  1260 => 293,  1258 => 292,  1256 => 291,  1254 => 290,  1252 => 289,  1243 => 288,  1233 => 285,  1224 => 280,  1207 => 276,  1180 => 272,  1176 => 269,  1173 => 266,  1172 => 265,  1171 => 264,  1169 => 263,  1167 => 262,  1164 => 260,  1162 => 259,  1159 => 257,  1157 => 256,  1155 => 255,  1146 => 254,  1136 => 249,  1134 => 248,  1125 => 247,  1115 => 244,  1113 => 243,  1104 => 242,  1094 => 239,  1092 => 238,  1083 => 237,  1073 => 234,  1071 => 233,  1062 => 232,  1046 => 229,  1042 => 226,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 392,  162 => 387,  160 => 382,  158 => 375,  156 => 369,  153 => 366,  151 => 345,  149 => 335,  147 => 328,  145 => 314,  143 => 308,  141 => 302,  139 => 296,  137 => 288,  135 => 280,  133 => 276,  131 => 254,  129 => 247,  127 => 242,  125 => 237,  123 => 232,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is not same as(false) and label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/cocorico/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig");
    }
}
