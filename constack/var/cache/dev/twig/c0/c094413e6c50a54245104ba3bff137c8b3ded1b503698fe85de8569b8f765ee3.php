<?php

/* @CocoricoUser/Frontend/Common/_register.html.twig */
class __TwigTemplate_f2db1e3bf09fbf33a792aa522af95543738f299257c820a336a46f4290c7ed67 extends Twig_Template
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
        $__internal_418735f3e57cb37ab7f0e7109fd0b5150b4345893c917962b5910e24086bf84a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418735f3e57cb37ab7f0e7109fd0b5150b4345893c917962b5910e24086bf84a->enter($__internal_418735f3e57cb37ab7f0e7109fd0b5150b4345893c917962b5910e24086bf84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoUser/Frontend/Common/_register.html.twig"));

        $__internal_7bd44a3fe96bc7a2cbeb31f2d365fe1af18867f54b6d1d3439dd644a3538fea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd44a3fe96bc7a2cbeb31f2d365fe1af18867f54b6d1d3439dd644a3538fea3->enter($__internal_7bd44a3fe96bc7a2cbeb31f2d365fe1af18867f54b6d1d3439dd644a3538fea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoUser/Frontend/Common/_register.html.twig"));

        // line 2
        echo "
<div role=\"tabpanel\" class=\"tab-pane";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["register_class"]) || array_key_exists("register_class", $context) ? $context["register_class"] : (function () { throw new Twig_Error_Runtime('Variable "register_class" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" id=\"home\">

    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 5, $this->getSourceContext()); })()), 'errors');
        echo "

    <div class=\"tab-holder\">
        <div class=\"column\">
            <h3>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.signup.title", array(), "cocorico_user"), "html", null, true);
        echo "</h3>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 12, $this->getSourceContext()); })()), "personType", array()), 'errors');
        echo "</div>
                <span class=\"label\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 14, $this->getSourceContext()); })()), "personType", array()), 'label');
        echo "
                </span>

                <div class=\"field-holder\" data-id=\"person-type\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 18, $this->getSourceContext()); })()), "personType", array()), 'widget', array("attr" => array("class" => "form-control form-control-radio required")));
        // line 22
        echo "
                </div>
            </div>

            <div class=\"field-row validate-row\" data-id=\"company-name\">
                <div class=\"error-container\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 27, $this->getSourceContext()); })()), "companyName", array()), 'errors');
        echo "</div>
                <span class=\"label\">
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 29, $this->getSourceContext()); })()), "companyName", array()), 'label');
        echo "
                </span>

                <div class=\"field-holder\">
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 33, $this->getSourceContext()); })()), "companyName", array()), 'widget', array("attr" => array("class" => "form-control", "data-parsley-required-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.company_name.blank", array(), "validators"))));
        // line 38
        echo "
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 43, $this->getSourceContext()); })()), "lastName", array()), 'errors');
        echo "</div>
                <span class=\"label\">

                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 46, $this->getSourceContext()); })()), "lastName", array()), 'label', array("label_attr" => array("data-label-legal" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("form.last_name.legal", array(), "cocorico_user"))));
        // line 50
        echo "
                </span>

                <div class=\"field-holder\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 54, $this->getSourceContext()); })()), "lastName", array()), 'widget', array("attr" => array("class" => "form-control required", "data-parsley-required-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.last_name.blank", array(), "validators"), "data-parsley-invalid-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.last_name.invalid", array(), "validators"))));
        // line 60
        echo "
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 65, $this->getSourceContext()); })()), "firstName", array()), 'errors');
        echo "</div>
                <span class=\"label\">
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 67, $this->getSourceContext()); })()), "firstName", array()), 'label', array("label_attr" => array("data-label-legal" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("form.first_name.legal", array(), "cocorico_user"))));
        // line 71
        echo "
                </span>

                <div class=\"field-holder\">
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 75, $this->getSourceContext()); })()), "firstName", array()), 'widget', array("attr" => array("class" => "form-control required", "data-parsley-required-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.first_name.blank", array(), "validators"), "data-parsley-invalid-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.first_name.invalid", array(), "validators"))));
        // line 81
        echo "
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 86, $this->getSourceContext()); })()), "birthday", array()), 'errors');
        echo "</div>
                <span class=\"label\">
                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 88, $this->getSourceContext()); })()), "birthday", array()), 'label', array("label_attr" => array("data-label-legal" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("form.birthday.legal", array(), "cocorico_user"))));
        // line 92
        echo "
                </span>

                <div class=\"field-holder\">
                    <div class=\"field-day\">
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 97, $this->getSourceContext()); })()), "birthday", array()), "day", array()), 'widget', array("attr" => array("class" => "form-control required no-arrow")));
        // line 101
        echo "
                    </div>
                    <div class=\"field-month\">
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 104, $this->getSourceContext()); })()), "birthday", array()), "month", array()), 'widget', array("attr" => array("class" => "form-control required no-arrow")));
        // line 108
        echo "
                    </div>
                    <div class=\"field-year\">
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 111, $this->getSourceContext()); })()), "birthday", array()), "year", array()), 'widget', array("attr" => array("class" => "form-control required no-arrow")));
        // line 115
        echo "
                    </div>
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 121, $this->getSourceContext()); })()), "nationality", array()), 'errors');
        echo "</div>
                <span class=\"label\">
                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 123, $this->getSourceContext()); })()), "nationality", array()), 'label', array("label_attr" => array("data-label-legal" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("form.nationality.legal", array(), "cocorico_user"))));
        // line 127
        echo "
                </span>

                <div class=\"field-holder\">
                    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 131, $this->getSourceContext()); })()), "nationality", array()), 'widget', array("attr" => array("class" => "form-control required no-arrow")));
        // line 135
        echo "
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 140, $this->getSourceContext()); })()), "countryOfResidence", array()), 'errors');
        echo "</div>
                <span class=\"label\">
                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 142, $this->getSourceContext()); })()), "countryOfResidence", array()), 'label', array("label_attr" => array("data-label-legal" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("form.country_of_residence.legal", array(), "cocorico_user"))));
        // line 146
        echo "
                </span>

                <div class=\"field-holder\">
                    ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 150, $this->getSourceContext()); })()), "countryOfResidence", array()), 'widget', array("attr" => array("class" => "form-control required no-arrow", "data-parsley-required-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.countryOfResidence.blank", array(), "validators"), "data-parsley-invalid-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.countryOfResidence.invalid", array(), "validators"))));
        // line 156
        echo "
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 161, $this->getSourceContext()); })()), "phonePrefix", array()), 'errors');
        echo "</div>
                <span class=\"label\" style=\"margin-top:0\">";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 162, $this->getSourceContext()); })()), "phonePrefix", array()), 'label');
        echo "</span>

                <div class=\"field-holder code\">
                    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 165, $this->getSourceContext()); })()), "phonePrefix", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 169
        echo "
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 174, $this->getSourceContext()); })()), "phone", array()), 'errors');
        echo "</div>
                <span class=\"label\">";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 175, $this->getSourceContext()); })()), "phone", array()), 'label');
        echo "</span>

                <div class=\"field-holder\">
                    ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 178, $this->getSourceContext()); })()), "phone", array()), 'widget', array("attr" => array("class" => "form-control", "data-parsley-type" => "digits", "data-parsley-type-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.phone.invalid", array(), "validators"))));
        // line 184
        echo "
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 189, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "</div>
                <span class=\"label\">";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 190, $this->getSourceContext()); })()), "email", array()), 'label');
        echo "</span>

                <div class=\"field-holder\">
                    ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 193, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control required", "data-parsley-required-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.email.blank", array(), "validators"), "data-parsley-invalid-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.email.invalid", array(), "validators"), "data-parsley-type-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.email.invalid", array(), "validators"))));
        // line 200
        echo "
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 205, $this->getSourceContext()); })()), "timeZone", array()), 'errors');
        echo "</div>
                <span class=\"label\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 206, $this->getSourceContext()); })()), "timeZone", array()), 'label');
        echo "</span>

                <div class=\"field-holder\">
                    ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 209, $this->getSourceContext()); })()), "timeZone", array()), 'widget', array("attr" => array("class" => "form-control no-arrow")));
        // line 211
        echo "
                </div>
            </div>

            ";
        // line 216
        echo "            <div class=\"field-row validate-row\">
                <div class=\"error-container\">";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 217, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'errors');
        echo "</div>
                <span class=\"label\">";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 218, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'label');
        echo "</span>

                <div class=\"field-holder\">
                    ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 221, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control required", "data-parsley-required-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.plainPassword.first.blank", array(), "validators"), "data-parsley-invalid-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.plainPassword.first.invalid", array(), "validators"))));
        // line 227
        echo "
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 232, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'errors');
        echo "</div>
                <span class=\"label\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 233, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'label');
        echo "</span>

                <div class=\"field-holder\">
                    ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 236, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control required", "data-parsley-equalto" => ("#" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 239
(isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 239, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), "vars", array()), "id", array())), "data-parsley-equalto-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("fos_user.password.mismatch", array(), "validators"), "data-parsley-required-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.plainPassword.second.blank", array(), "validators"), "data-parsley-invalid-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico_user.plainPassword.second.invalid", array(), "validators"))));
        // line 244
        echo "
                </div>
            </div>
        </div>

        <div class=\"column\">
            <h3>";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.facebook.login.title", array(), "cocorico_user"), "html", null, true);
        echo "</h3>
            <a href=\"#\" onclick=\"fb_login();\" class=\"btn-facebook\">
                <i class=\"icon-facebook\"></i>
                ";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.facebook.login", array(), "cocorico_user"), "html", null, true);
        echo "
            </a>

            <div id=\"fb-root\"></div>
        </div>
    </div>
</div>
";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 260, $this->getSourceContext()); })()), 'rest');
        
        $__internal_418735f3e57cb37ab7f0e7109fd0b5150b4345893c917962b5910e24086bf84a->leave($__internal_418735f3e57cb37ab7f0e7109fd0b5150b4345893c917962b5910e24086bf84a_prof);

        
        $__internal_7bd44a3fe96bc7a2cbeb31f2d365fe1af18867f54b6d1d3439dd644a3538fea3->leave($__internal_7bd44a3fe96bc7a2cbeb31f2d365fe1af18867f54b6d1d3439dd644a3538fea3_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoUser/Frontend/Common/_register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 260,  339 => 253,  333 => 250,  325 => 244,  323 => 239,  322 => 236,  316 => 233,  312 => 232,  305 => 227,  303 => 221,  297 => 218,  293 => 217,  290 => 216,  284 => 211,  282 => 209,  276 => 206,  272 => 205,  265 => 200,  263 => 193,  257 => 190,  253 => 189,  246 => 184,  244 => 178,  238 => 175,  234 => 174,  227 => 169,  225 => 165,  219 => 162,  215 => 161,  208 => 156,  206 => 150,  200 => 146,  198 => 142,  193 => 140,  186 => 135,  184 => 131,  178 => 127,  176 => 123,  171 => 121,  163 => 115,  161 => 111,  156 => 108,  154 => 104,  149 => 101,  147 => 97,  140 => 92,  138 => 88,  133 => 86,  126 => 81,  124 => 75,  118 => 71,  116 => 67,  111 => 65,  104 => 60,  102 => 54,  96 => 50,  94 => 46,  88 => 43,  81 => 38,  79 => 33,  72 => 29,  67 => 27,  60 => 22,  58 => 18,  51 => 14,  46 => 12,  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico_user' %}

<div role=\"tabpanel\" class=\"tab-pane{{ register_class }}\" id=\"home\">

    {{ form_errors(form_registration) }}

    <div class=\"tab-holder\">
        <div class=\"column\">
            <h3>{{ 'user.signup.title'|trans }}</h3>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">{{ form_errors(form_registration.personType) }}</div>
                <span class=\"label\">
                    {{ form_label(form_registration.personType) }}
                </span>

                <div class=\"field-holder\" data-id=\"person-type\">
                    {{ form_widget(form_registration.personType, {
                        'attr': {
                            'class': \"form-control form-control-radio required\"
                        }
                    }) }}
                </div>
            </div>

            <div class=\"field-row validate-row\" data-id=\"company-name\">
                <div class=\"error-container\">{{ form_errors(form_registration.companyName) }}</div>
                <span class=\"label\">
                    {{ form_label(form_registration.companyName) }}
                </span>

                <div class=\"field-holder\">
                    {{ form_widget(form_registration.companyName, {
                        'attr': {
                            'class': 'form-control',
                            'data-parsley-required-message': 'cocorico_user.company_name.blank'|trans({},'validators')
                        }
                    }) }}
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">{{ form_errors(form_registration.lastName) }}</div>
                <span class=\"label\">

                    {{ form_label(form_registration.lastName, null, {
                        'label_attr': {
                            'data-label-legal': 'form.last_name.legal'|trans
                        }
                    }) }}
                </span>

                <div class=\"field-holder\">
                    {{ form_widget(form_registration.lastName, {
                        'attr': {
                            'class': 'form-control required',
                            'data-parsley-required-message': 'cocorico_user.last_name.blank'|trans({},'validators'),
                            'data-parsley-invalid-message': 'cocorico_user.last_name.invalid'|trans({}, 'validators')
                        }
                    }) }}
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">{{ form_errors(form_registration.firstName) }}</div>
                <span class=\"label\">
                    {{ form_label(form_registration.firstName, null, {
                        'label_attr': {
                            'data-label-legal': 'form.first_name.legal'|trans
                        }
                    }) }}
                </span>

                <div class=\"field-holder\">
                    {{ form_widget(form_registration.firstName, {
                        'attr': {
                            'class': \"form-control required\",
                            'data-parsley-required-message': 'cocorico_user.first_name.blank'|trans({},'validators'),
                            'data-parsley-invalid-message': 'cocorico_user.first_name.invalid'|trans({}, 'validators')
                        }
                    }) }}
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">{{ form_errors(form_registration.birthday) }}</div>
                <span class=\"label\">
                    {{ form_label(form_registration.birthday, null, {
                        'label_attr': {
                            'data-label-legal': 'form.birthday.legal'|trans
                        }
                    }) }}
                </span>

                <div class=\"field-holder\">
                    <div class=\"field-day\">
                        {{ form_widget(form_registration.birthday.day, {
                            'attr': {
                                'class': \"form-control required no-arrow\"
                            }
                        } ) }}
                    </div>
                    <div class=\"field-month\">
                        {{ form_widget(form_registration.birthday.month, {
                            'attr': {
                                'class': \"form-control required no-arrow\",
                            }
                        } ) }}
                    </div>
                    <div class=\"field-year\">
                        {{ form_widget(form_registration.birthday.year, {
                            'attr': {
                                'class': \"form-control required no-arrow\"
                            }
                        } ) }}
                    </div>
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">{{ form_errors(form_registration.nationality) }}</div>
                <span class=\"label\">
                    {{ form_label(form_registration.nationality, null, {
                        'label_attr': {
                            'data-label-legal': 'form.nationality.legal'|trans
                        }
                    }) }}
                </span>

                <div class=\"field-holder\">
                    {{ form_widget(form_registration.nationality, {
                        'attr': {
                            'class': \"form-control required no-arrow\"
                        }
                    }) }}
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">{{ form_errors(form_registration.countryOfResidence) }}</div>
                <span class=\"label\">
                    {{ form_label(form_registration.countryOfResidence, null, {
                        'label_attr': {
                            'data-label-legal': 'form.country_of_residence.legal'|trans
                        }
                    }) }}
                </span>

                <div class=\"field-holder\">
                    {{ form_widget(form_registration.countryOfResidence, {
                        'attr': {
                            'class': \"form-control required no-arrow\",
                            'data-parsley-required-message': 'cocorico_user.countryOfResidence.blank'|trans({},'validators'),
                            'data-parsley-invalid-message': 'cocorico_user.countryOfResidence.invalid'|trans({}, 'validators')
                        }
                    }) }}
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">{{ form_errors(form_registration.phonePrefix) }}</div>
                <span class=\"label\" style=\"margin-top:0\">{{ form_label(form_registration.phonePrefix) }}</span>

                <div class=\"field-holder code\">
                    {{ form_widget(form_registration.phonePrefix, {
                        'attr': {
                            'class': \"form-control\"
                        }
                    }) }}
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">{{ form_errors(form_registration.phone) }}</div>
                <span class=\"label\">{{ form_label(form_registration.phone) }}</span>

                <div class=\"field-holder\">
                    {{ form_widget(form_registration.phone, {
                        'attr': {
                            'class': \"form-control\",
                            'data-parsley-type': 'digits',
                            'data-parsley-type-message': 'cocorico_user.phone.invalid'|trans({},'validators')
                        }
                    }) }}
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">{{ form_errors(form_registration.email) }}</div>
                <span class=\"label\">{{ form_label(form_registration.email) }}</span>

                <div class=\"field-holder\">
                    {{ form_widget(form_registration.email, {
                        'attr': {
                            'class': \"form-control required\",
                            'data-parsley-required-message': 'cocorico_user.email.blank'|trans({},'validators'),
                            'data-parsley-invalid-message': 'cocorico_user.email.invalid'|trans({}, 'validators'),
                            'data-parsley-type-message': 'cocorico_user.email.invalid'|trans({}, 'validators')
                        }
                    }) }}
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">{{ form_errors(form_registration.timeZone) }}</div>
                <span class=\"label\">{{ form_label(form_registration.timeZone) }}</span>

                <div class=\"field-holder\">
                    {{ form_widget(form_registration.timeZone, {
                        'attr': {'class': \"form-control no-arrow\"}
                    }) }}
                </div>
            </div>

            {# dont work when empty value #}
            <div class=\"field-row validate-row\">
                <div class=\"error-container\">{{ form_errors(form_registration.plainPassword.first) }}</div>
                <span class=\"label\">{{ form_label(form_registration.plainPassword.first) }}</span>

                <div class=\"field-holder\">
                    {{ form_widget(form_registration.plainPassword.first, {
                        'attr': {
                            'class': \"form-control required\",
                            'data-parsley-required-message': 'cocorico_user.plainPassword.first.blank'|trans({},'validators'),
                            'data-parsley-invalid-message': 'cocorico_user.plainPassword.first.invalid'|trans({}, 'validators')
                        }
                    }) }}
                </div>
            </div>

            <div class=\"field-row validate-row\">
                <div class=\"error-container\">{{ form_errors(form_registration.plainPassword.second) }}</div>
                <span class=\"label\">{{ form_label(form_registration.plainPassword.second) }}</span>

                <div class=\"field-holder\">
                    {{ form_widget(form_registration.plainPassword.second , {
                        'attr': {
                            'class': \"form-control required\",
                            'data-parsley-equalto': \"#\"~ form_registration.plainPassword.first.vars.id,
                            'data-parsley-equalto-message': 'fos_user.password.mismatch'|trans({},'validators'),
                            'data-parsley-required-message': 'cocorico_user.plainPassword.second.blank'|trans({},'validators'),
                            'data-parsley-invalid-message': 'cocorico_user.plainPassword.second.invalid'|trans({}, 'validators')
                        }
                    }) }}
                </div>
            </div>
        </div>

        <div class=\"column\">
            <h3>{{ 'user.facebook.login.title'|trans }}</h3>
            <a href=\"#\" onclick=\"fb_login();\" class=\"btn-facebook\">
                <i class=\"icon-facebook\"></i>
                {{ 'user.facebook.login'|trans }}
            </a>

            <div id=\"fb-root\"></div>
        </div>
    </div>
</div>
{{ form_rest(form_registration) }}", "@CocoricoUser/Frontend/Common/_register.html.twig", "/cocorico/src/Cocorico/UserBundle/Resources/views/Frontend/Common/_register.html.twig");
    }
}
