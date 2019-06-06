<?php

/* @CocoricoCMS/Frontend/Footer/index.html.twig */
class __TwigTemplate_8048b519e5be95f4b5334506d2eda9c72c2a9f6a572813e17aee67643f32c146 extends Twig_Template
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
        $__internal_88a75849cf772eec19220a3a643f928065215902df972356afafc029e2cd629b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a75849cf772eec19220a3a643f928065215902df972356afafc029e2cd629b->enter($__internal_88a75849cf772eec19220a3a643f928065215902df972356afafc029e2cd629b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCMS/Frontend/Footer/index.html.twig"));

        $__internal_11ed16e58dd3d4f9115cdf58e532618965b36a0bb895f7461404906cc9da5ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ed16e58dd3d4f9115cdf58e532618965b36a0bb895f7461404906cc9da5ec8->enter($__internal_11ed16e58dd3d4f9115cdf58e532618965b36a0bb895f7461404906cc9da5ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCMS/Frontend/Footer/index.html.twig"));

        // line 1
        if (twig_length_filter($this->env, (isset($context["footers"]) || array_key_exists("footers", $context) ? $context["footers"] : (function () { throw new Twig_Error_Runtime('Variable "footers" does not exist.', 1, $this->getSourceContext()); })()))) {
            // line 2
            echo "    <aside class=\"aside-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <nav class=\"navarea\">
                        <ul class=\"list-unstyled pull-left\">
                            <li class=\"title\">";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("footer.title.various", array(), "cocorico"), "html", null, true);
            echo "</li>
                            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["footers"]) || array_key_exists("footers", $context) ? $context["footers"] : (function () { throw new Twig_Error_Runtime('Variable "footers" does not exist.', 9, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
                // line 10
                echo "                                <li>
                                    <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["footer"], "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["footer"], "title", array()), "html", null, true);
                echo "</a>
                                </li>
                                ";
                // line 13
                if (((0 == twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) % 3) &&  !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()))) {
                    // line 14
                    echo "                                    ";
                    echo "</ul>";
                    echo "
                                    ";
                    // line 15
                    echo "<ul class=\"list-unstyled pull-left\">";
                    echo "
                                    ";
                    // line 16
                    echo "<li class=\"title\">&nbsp;</li>";
                    echo "
                                ";
                }
                // line 18
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </aside>
";
        }
        
        $__internal_88a75849cf772eec19220a3a643f928065215902df972356afafc029e2cd629b->leave($__internal_88a75849cf772eec19220a3a643f928065215902df972356afafc029e2cd629b_prof);

        
        $__internal_11ed16e58dd3d4f9115cdf58e532618965b36a0bb895f7461404906cc9da5ec8->leave($__internal_11ed16e58dd3d4f9115cdf58e532618965b36a0bb895f7461404906cc9da5ec8_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCMS/Frontend/Footer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  82 => 18,  77 => 16,  73 => 15,  68 => 14,  66 => 13,  59 => 11,  56 => 10,  39 => 9,  35 => 8,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if footers|length %}
    <aside class=\"aside-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <nav class=\"navarea\">
                        <ul class=\"list-unstyled pull-left\">
                            <li class=\"title\">{{ 'footer.title.various'|trans({}, 'cocorico') }}</li>
                            {% for footer in footers %}
                                <li>
                                    <a href=\"{{ footer.link }}\">{{ footer.title }}</a>
                                </li>
                                {% if loop.index is divisible by(3) and not loop.last %}
                                    {{ '</ul>' }}
                                    {{ '<ul class=\"list-unstyled pull-left\">' }}
                                    {{ '<li class=\"title\">&nbsp;</li>' }}
                                {% endif %}
                            {% endfor %}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </aside>
{% endif %}", "@CocoricoCMS/Frontend/Footer/index.html.twig", "/cocorico/src/Cocorico/CMSBundle/Resources/views/Frontend/Footer/index.html.twig");
    }
}
