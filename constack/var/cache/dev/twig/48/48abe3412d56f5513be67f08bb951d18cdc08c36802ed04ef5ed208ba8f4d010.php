<?php

/* CocoricoCoreBundle:Form:fields_collection.html.twig */
class __TwigTemplate_eed3dfa5765ebcf93a05cdf5f39569c0220f7d2d4599851e2ab1fb9879386c2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CocoricoCoreBundle:Form:fields.html.twig", "CocoricoCoreBundle:Form:fields_collection.html.twig", 1);
        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
            '_listing_discount_discounts_widget' => array($this, 'block__listing_discount_discounts_widget'),
            '_listing_images_widget' => array($this, 'block__listing_images_widget'),
            '_user_images_widget' => array($this, 'block__user_images_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CocoricoCoreBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49d63c0f19bfd118a59c63c5f067735c57c1ab3e1a49a6261eda3170b5534ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d63c0f19bfd118a59c63c5f067735c57c1ab3e1a49a6261eda3170b5534ce2->enter($__internal_49d63c0f19bfd118a59c63c5f067735c57c1ab3e1a49a6261eda3170b5534ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Form:fields_collection.html.twig"));

        $__internal_33c8e2775407cfe9295dabd249c416827c6ded281dcb4be697ce6cd5a94fd31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c8e2775407cfe9295dabd249c416827c6ded281dcb4be697ce6cd5a94fd31b->enter($__internal_33c8e2775407cfe9295dabd249c416827c6ded281dcb4be697ce6cd5a94fd31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Form:fields_collection.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49d63c0f19bfd118a59c63c5f067735c57c1ab3e1a49a6261eda3170b5534ce2->leave($__internal_49d63c0f19bfd118a59c63c5f067735c57c1ab3e1a49a6261eda3170b5534ce2_prof);

        
        $__internal_33c8e2775407cfe9295dabd249c416827c6ded281dcb4be697ce6cd5a94fd31b->leave($__internal_33c8e2775407cfe9295dabd249c416827c6ded281dcb4be697ce6cd5a94fd31b_prof);

    }

    // line 39
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_50dfe113a7556dabc8dbe9a6bc0f9626a21e7a0eb004dccda22d6510b961465d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50dfe113a7556dabc8dbe9a6bc0f9626a21e7a0eb004dccda22d6510b961465d->enter($__internal_50dfe113a7556dabc8dbe9a6bc0f9626a21e7a0eb004dccda22d6510b961465d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_5593517a2e6a41d36c43434196a0a0b45eeb62a45bfa2ed9556f56d81c6ec181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5593517a2e6a41d36c43434196a0a0b45eeb62a45bfa2ed9556f56d81c6ec181->enter($__internal_5593517a2e6a41d36c43434196a0a0b45eeb62a45bfa2ed9556f56d81c6ec181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 40
        echo "    ";
        $context["self"] = $this;
        // line 41
        echo "
    ";
        // line 42
        ob_start();
        // line 43
        echo "        ";
        $context["data_prototype"] = "";
        // line 44
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 45
            echo "            ";
            $context["data_prototype"] = $context["self"]->macro_collectionItem(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), "vars", array()), "prototype", array()), (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 45, $this->getSourceContext()); })()));
            // line 46
            echo "        ";
        }
        // line 47
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-prototype=\"";
        echo twig_escape_filter($this->env, (isset($context["data_prototype"]) || array_key_exists("data_prototype", $context) ? $context["data_prototype"] : (function () { throw new Twig_Error_Runtime('Variable "data_prototype" does not exist.', 47, $this->getSourceContext()); })()));
        echo "\">

            <ul class=\"collection\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child_form"]) {
            // line 51
            echo "                    ";
            echo $context["self"]->macro_collectionItem($context["child_form"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 51, $this->getSourceContext()); })()));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </ul>

            ";
        // line 55
        if ( !(null === ((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 55, $this->getSourceContext()); })()), null)) : (null)))) {
            // line 56
            echo "                <div class=\"btn-block text-center collection-add-block\">
                    <a class=\"add\" title=\"Add\" href=\"javascript:void(0)\">
                        <div style=\"display: none;\"></div>
                        <span>";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("collection.add_item", array(), "cocorico"), "html", null, true);
            echo "</span>
                    </a>
                </div>
            ";
        }
        // line 63
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5593517a2e6a41d36c43434196a0a0b45eeb62a45bfa2ed9556f56d81c6ec181->leave($__internal_5593517a2e6a41d36c43434196a0a0b45eeb62a45bfa2ed9556f56d81c6ec181_prof);

        
        $__internal_50dfe113a7556dabc8dbe9a6bc0f9626a21e7a0eb004dccda22d6510b961465d->leave($__internal_50dfe113a7556dabc8dbe9a6bc0f9626a21e7a0eb004dccda22d6510b961465d_prof);

    }

    // line 138
    public function block__listing_discount_discounts_widget($context, array $blocks = array())
    {
        $__internal_3a70288e0c0c064ff129eab0a2bbea94d7d54c467bb2f3a48d57c66d4a764c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a70288e0c0c064ff129eab0a2bbea94d7d54c467bb2f3a48d57c66d4a764c81->enter($__internal_3a70288e0c0c064ff129eab0a2bbea94d7d54c467bb2f3a48d57c66d4a764c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_discount_discounts_widget"));

        $__internal_f454c3b2a0ad4afb80992a1af4c83657aeea05428f0b8f59e908ba8b714ec38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f454c3b2a0ad4afb80992a1af4c83657aeea05428f0b8f59e908ba8b714ec38e->enter($__internal_f454c3b2a0ad4afb80992a1af4c83657aeea05428f0b8f59e908ba8b714ec38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_discount_discounts_widget"));

        // line 139
        $context["self"] = $this;
        // line 140
        echo "
    ";
        // line 141
        $context["data_prototype"] = "";
        // line 142
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 143
            echo "        ";
            $context["data_prototype"] = $context["self"]->macro_discountCollectionItem(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "vars", array()), "prototype", array()), (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 143, $this->getSourceContext()); })()));
            // line 144
            echo "    ";
        }
        // line 145
        echo "
    <div ";
        // line 146
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-prototype=\"";
        echo twig_escape_filter($this->env, (isset($context["data_prototype"]) || array_key_exists("data_prototype", $context) ? $context["data_prototype"] : (function () { throw new Twig_Error_Runtime('Variable "data_prototype" does not exist.', 146, $this->getSourceContext()); })()));
        echo "\">
        <div class=\"collection\">
            ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child_form"]) {
            // line 149
            echo "                ";
            echo $context["self"]->macro_discountCollectionItem($context["child_form"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 149, $this->getSourceContext()); })()));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "        </div>

        ";
        // line 153
        if ( !(null === ((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 153, $this->getSourceContext()); })()), null)) : (null)))) {
            // line 154
            echo "            <div class=\"btn-block text-center collection-add-block\">
                <a class=\"add\" title=\"Add\" href=\"\">
                    <div style=\"display: none;\"></div>
                    <span>";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("collection.add_item", array(), "cocorico"), "html", null, true);
            echo "</span>
                </a>
            </div>
        ";
        }
        // line 161
        echo "    </div>";
        
        $__internal_f454c3b2a0ad4afb80992a1af4c83657aeea05428f0b8f59e908ba8b714ec38e->leave($__internal_f454c3b2a0ad4afb80992a1af4c83657aeea05428f0b8f59e908ba8b714ec38e_prof);

        
        $__internal_3a70288e0c0c064ff129eab0a2bbea94d7d54c467bb2f3a48d57c66d4a764c81->leave($__internal_3a70288e0c0c064ff129eab0a2bbea94d7d54c467bb2f3a48d57c66d4a764c81_prof);

    }

    // line 200
    public function block__listing_images_widget($context, array $blocks = array())
    {
        $__internal_95e01799db7106856525cf6d4ba8f30fe93a200408c5aecc996a18098828561e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e01799db7106856525cf6d4ba8f30fe93a200408c5aecc996a18098828561e->enter($__internal_95e01799db7106856525cf6d4ba8f30fe93a200408c5aecc996a18098828561e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_images_widget"));

        $__internal_04b072e926dc66624f9b522b6b5cb070955c92a5d1bb4d01bf49ef7be919e6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b072e926dc66624f9b522b6b5cb070955c92a5d1bb4d01bf49ef7be919e6d8->enter($__internal_04b072e926dc66624f9b522b6b5cb070955c92a5d1bb4d01bf49ef7be919e6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_images_widget"));

        // line 201
        echo "    ";
        $context["self"] = $this;
        // line 202
        echo "
    ";
        // line 203
        ob_start();
        // line 204
        echo "        ";
        $context["data_prototype"] = "";
        // line 205
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 206
            echo "            ";
            $context["data_prototype"] = $context["self"]->macro_imagesCollectionItem(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 206, $this->getSourceContext()); })()), "vars", array()), "prototype", array()), (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 206, $this->getSourceContext()); })()));
            // line 207
            echo "        ";
        }
        // line 208
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-prototype=\"";
        echo twig_escape_filter($this->env, (isset($context["data_prototype"]) || array_key_exists("data_prototype", $context) ? $context["data_prototype"] : (function () { throw new Twig_Error_Runtime('Variable "data_prototype" does not exist.', 208, $this->getSourceContext()); })()));
        echo "\">
            <!-- files-list -->
            <div class=\"files-list collection\">
                ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 211, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child_form"]) {
            // line 212
            echo "                    ";
            echo $context["self"]->macro_imagesCollectionItem($context["child_form"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 212, $this->getSourceContext()); })()));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "            </div>

            ";
        // line 216
        if ( !(null === ((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 216, $this->getSourceContext()); })()), null)) : (null)))) {
            // line 217
            echo "                <div class=\"btn-block text-center collection-add-blocks\">
                    <a class=\"add\" title=\"Add\" href=\"javascript:void(0)\">
                        <div style=\"display: none;\"></div>
                        <span>";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("collection.add_item", array(), "cocorico"), "html", null, true);
            echo "</span>
                    </a>
                </div>
            ";
        }
        // line 224
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_04b072e926dc66624f9b522b6b5cb070955c92a5d1bb4d01bf49ef7be919e6d8->leave($__internal_04b072e926dc66624f9b522b6b5cb070955c92a5d1bb4d01bf49ef7be919e6d8_prof);

        
        $__internal_95e01799db7106856525cf6d4ba8f30fe93a200408c5aecc996a18098828561e->leave($__internal_95e01799db7106856525cf6d4ba8f30fe93a200408c5aecc996a18098828561e_prof);

    }

    // line 232
    public function block__user_images_widget($context, array $blocks = array())
    {
        $__internal_789029967f7a229d8bca1ae4b245a056de6b9ef8f0cea0b1b260416fb136853c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789029967f7a229d8bca1ae4b245a056de6b9ef8f0cea0b1b260416fb136853c->enter($__internal_789029967f7a229d8bca1ae4b245a056de6b9ef8f0cea0b1b260416fb136853c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_images_widget"));

        $__internal_37ba7ef1624b026cbaba45135ec3451bd8bc7ccc9fdfe0291e45a76d148c980b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ba7ef1624b026cbaba45135ec3451bd8bc7ccc9fdfe0291e45a76d148c980b->enter($__internal_37ba7ef1624b026cbaba45135ec3451bd8bc7ccc9fdfe0291e45a76d148c980b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_images_widget"));

        // line 233
        echo "    ";
        $context["self"] = $this;
        // line 234
        echo "
    ";
        // line 235
        ob_start();
        // line 236
        echo "        ";
        $context["data_prototype"] = "";
        // line 237
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 238
            echo "            ";
            $context["data_prototype"] = $context["self"]->macro_profileImagesCollectionItem(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 238, $this->getSourceContext()); })()), "vars", array()), "prototype", array()), (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 238, $this->getSourceContext()); })()));
            // line 239
            echo "        ";
        }
        // line 240
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-prototype=\"";
        echo twig_escape_filter($this->env, (isset($context["data_prototype"]) || array_key_exists("data_prototype", $context) ? $context["data_prototype"] : (function () { throw new Twig_Error_Runtime('Variable "data_prototype" does not exist.', 240, $this->getSourceContext()); })()));
        echo "\">
            <!-- images-list -->
            <div class=\"list-inline collection files-list js-drag-holder\">
                ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 243, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child_form"]) {
            // line 244
            echo "                    ";
            echo $context["self"]->macro_imagesCollectionItem($context["child_form"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 244, $this->getSourceContext()); })()));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "            </div>

            ";
        // line 248
        if ( !(null === ((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 248, $this->getSourceContext()); })()), null)) : (null)))) {
            // line 249
            echo "                <div class=\"btn-block text-center collection-add-block\">
                    <a class=\"add\" title=\"Add\" href=\"javascript:void(0)\">
                        <div style=\"display: none;\"></div>
                        <span>";
            // line 252
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("collection.add_item", array(), "cocorico"), "html", null, true);
            echo "</span>
                    </a>
                </div>
            ";
        }
        // line 256
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_37ba7ef1624b026cbaba45135ec3451bd8bc7ccc9fdfe0291e45a76d148c980b->leave($__internal_37ba7ef1624b026cbaba45135ec3451bd8bc7ccc9fdfe0291e45a76d148c980b_prof);

        
        $__internal_789029967f7a229d8bca1ae4b245a056de6b9ef8f0cea0b1b260416fb136853c->leave($__internal_789029967f7a229d8bca1ae4b245a056de6b9ef8f0cea0b1b260416fb136853c_prof);

    }

    // line 7
    public function macro_collectionItem($__child_form__ = null, $__allow_delete__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "child_form" => $__child_form__,
            "allow_delete" => $__allow_delete__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3f6148efe590856959930a9f5c68b77a279550e4f9a8ce3c281454c645ddd0d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3f6148efe590856959930a9f5c68b77a279550e4f9a8ce3c281454c645ddd0d3->enter($__internal_3f6148efe590856959930a9f5c68b77a279550e4f9a8ce3c281454c645ddd0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collectionItem"));

            $__internal_81a2e33510094d68c77c3b0717f7d0aee02397fe4ec0694f6b4fc2ca9f5f1503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_81a2e33510094d68c77c3b0717f7d0aee02397fe4ec0694f6b4fc2ca9f5f1503->enter($__internal_81a2e33510094d68c77c3b0717f7d0aee02397fe4ec0694f6b4fc2ca9f5f1503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collectionItem"));

            // line 8
            echo "    ";
            ob_start();
            // line 9
            echo "        <li>
            ";
            // line 10
            $context["fieldNum"] = 1;
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["child_form"]) || array_key_exists("child_form", $context) ? $context["child_form"] : (function () { throw new Twig_Error_Runtime('Variable "child_form" does not exist.', 11, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 12
                echo "                ";
                if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 13
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "id", array()), "html", null, true);
                    echo "\">
                        ";
                    // line 14
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                    echo "
                        ";
                    // line 15
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
                    echo "
                        ";
                    // line 16
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
                    echo "
                    </div>
                    ";
                    // line 18
                    $context["fieldNum"] = ((isset($context["fieldNum"]) || array_key_exists("fieldNum", $context) ? $context["fieldNum"] : (function () { throw new Twig_Error_Runtime('Variable "fieldNum" does not exist.', 18, $this->getSourceContext()); })()) + 1);
                    // line 19
                    echo "                ";
                } else {
                    // line 20
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
                    echo "
                ";
                }
                // line 22
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
            ";
            // line 24
            if ( !(null === ((array_key_exists("allow_delete", $context)) ? (_twig_default_filter((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 24, $this->getSourceContext()); })()), null)) : (null)))) {
                // line 25
                echo "                <a class=\"remove\" title=\"Remove\" href=\"javascript:void(0)\" onclick=\"\$(this).parent().remove();\">
                    <span>";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("collection.remove_item", array(), "cocorico"), "html", null, true);
                echo "</span>
                </a>
            ";
            }
            // line 29
            echo "
        </li>

    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_81a2e33510094d68c77c3b0717f7d0aee02397fe4ec0694f6b4fc2ca9f5f1503->leave($__internal_81a2e33510094d68c77c3b0717f7d0aee02397fe4ec0694f6b4fc2ca9f5f1503_prof);

            
            $__internal_3f6148efe590856959930a9f5c68b77a279550e4f9a8ce3c281454c645ddd0d3->leave($__internal_3f6148efe590856959930a9f5c68b77a279550e4f9a8ce3c281454c645ddd0d3_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 71
    public function macro_discountCollectionItem($__child_form__ = null, $__allow_delete__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "child_form" => $__child_form__,
            "allow_delete" => $__allow_delete__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5c24483a49211a492e6a5d7e59223a3d9a05c340def791f0ea86672297e58bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_5c24483a49211a492e6a5d7e59223a3d9a05c340def791f0ea86672297e58bfd->enter($__internal_5c24483a49211a492e6a5d7e59223a3d9a05c340def791f0ea86672297e58bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "discountCollectionItem"));

            $__internal_3b59d6908b7229a2cb27541b046f16baf12417d07248915272f61c9357e9a0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3b59d6908b7229a2cb27541b046f16baf12417d07248915272f61c9357e9a0a7->enter($__internal_3b59d6908b7229a2cb27541b046f16baf12417d07248915272f61c9357e9a0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "discountCollectionItem"));

            // line 72
            echo "    ";
            $context["quantityText"] = array("%quantity_text%" => $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->addTimeUnitTextFilter(0));
            // line 73
            echo "    ";
            $context["quantitiesText"] = array("%quantity_text%" => $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->addTimeUnitTextFilter( -1));
            // line 74
            echo "
    ";
            // line 75
            ob_start();
            // line 76
            echo "        <ul class=\"discount-list list-inline js-removed-row\">
            ";
            // line 77
            $context["fieldNum"] = 1;
            // line 78
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["child_form"]) || array_key_exists("child_form", $context) ? $context["child_form"] : (function () { throw new Twig_Error_Runtime('Variable "child_form" does not exist.', 78, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 79
                echo "                ";
                // line 80
                echo "                ";
                if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 81
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "id", array()), "html", null, true);
                    echo "\">
                        ";
                    // line 82
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "name", array()) == "discount")) {
                        // line 83
                        echo "                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                        echo "
                            <span class=\"label\">";
                        // line 84
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
                        echo "</span>
                            <div class=\"field-holder\">
                                ";
                        // line 86
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', array("id" => "decrement", "attr" => array("data-ending" => "%", "type" => "number", "class" => "form-control jcf-real-element")));
                        // line 94
                        echo "
                            </div>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 96
$context["field"], "vars", array()), "name", array()) == "fromQuantity")) {
                        // line 97
                        echo "                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                        echo "
                            <span class=\"label\">
                                ";
                        // line 99
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', (twig_test_empty($_label_ = $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                         // line 100
$context["field"], "vars", array()), "label", array()), (isset($context["quantityText"]) || array_key_exists("quantityText", $context) ? $context["quantityText"] : (function () { throw new Twig_Error_Runtime('Variable "quantityText" does not exist.', 100, $this->getSourceContext()); })()), "cocorico_listing")) ? array() : array("label" => $_label_)));
                        echo "
                            </span>
                            <div class=\"field-holder\">
                                ";
                        // line 103
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', array("id" => "per-day-price2", "attr" => array("type" => "number", "class" => "form-control")));
                        // line 109
                        echo "
                            </div>
                        ";
                    }
                    // line 112
                    echo "                    </li>

                    ";
                    // line 114
                    $context["fieldNum"] = ((isset($context["fieldNum"]) || array_key_exists("fieldNum", $context) ? $context["fieldNum"] : (function () { throw new Twig_Error_Runtime('Variable "fieldNum" does not exist.', 114, $this->getSourceContext()); })()) + 1);
                    // line 115
                    echo "                ";
                } else {
                    // line 116
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
                    echo "
                ";
                }
                // line 118
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "
            ";
            // line 120
            if ( !(null === ((array_key_exists("allow_delete", $context)) ? (_twig_default_filter((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 120, $this->getSourceContext()); })()), null)) : (null)))) {
                // line 121
                echo "                ";
                // line 122
                echo "                <li>
                    <span class=\"label\">
                        ";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing_edit.form.from_quantity.bought", (isset($context["quantitiesText"]) || array_key_exists("quantitiesText", $context) ? $context["quantitiesText"] : (function () { throw new Twig_Error_Runtime('Variable "quantitiesText" does not exist.', 124, $this->getSourceContext()); })()), "cocorico_listing"), "html", null, true);
                echo "
                    </span>
                    <a class=\"close\" title=\"Remove\" href=\"javascript:void(0)\"
                       onclick=\"\$(this).closest('ul').remove();\">
                        <span class=\"hidden\">";
                // line 128
                echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("collection.remove_item", array(), "cocorico"), "html", null, true);
                echo "</span>
                        <i class=\"icon-cancel\"></i>
                    </a>
                </li>
            ";
            }
            // line 133
            echo "        </ul>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_3b59d6908b7229a2cb27541b046f16baf12417d07248915272f61c9357e9a0a7->leave($__internal_3b59d6908b7229a2cb27541b046f16baf12417d07248915272f61c9357e9a0a7_prof);

            
            $__internal_5c24483a49211a492e6a5d7e59223a3d9a05c340def791f0ea86672297e58bfd->leave($__internal_5c24483a49211a492e6a5d7e59223a3d9a05c340def791f0ea86672297e58bfd_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 167
    public function macro_imagesCollectionItem($__child_form__ = null, $__allow_delete__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "child_form" => $__child_form__,
            "allow_delete" => $__allow_delete__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bfc58cead398f3747074e000b08851d09152478120395332369eb6f12dc0694e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_bfc58cead398f3747074e000b08851d09152478120395332369eb6f12dc0694e->enter($__internal_bfc58cead398f3747074e000b08851d09152478120395332369eb6f12dc0694e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "imagesCollectionItem"));

            $__internal_3161610f4d05175fa825d6367b364e3b7c1fb0f7eedb90517a8d8a0b690f26c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3161610f4d05175fa825d6367b364e3b7c1fb0f7eedb90517a8d8a0b690f26c8->enter($__internal_3161610f4d05175fa825d6367b364e3b7c1fb0f7eedb90517a8d8a0b690f26c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "imagesCollectionItem"));

            // line 168
            echo "    ";
            ob_start();
            // line 169
            echo "        <div class=\"img-thumbnail\">

            ";
            // line 171
            if ( !(null === ((array_key_exists("allow_delete", $context)) ? (_twig_default_filter((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 171, $this->getSourceContext()); })()), null)) : (null)))) {
                // line 172
                echo "                <a href=\"javascript:void(0)\" onclick=\"\$(this).parent().remove();\" title=\"Remove\"
                   class=\"close remove\"
                   data-dismiss=\"alert\" aria-label=\"Close\">
                    <span class=\"hidden\">";
                // line 175
                echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("collection.remove_item", array(), "cocorico"), "html", null, true);
                echo "</span>
                    <i class=\"icon-cancel\"></i>
                </a>
            ";
            }
            // line 179
            echo "
            ";
            // line 180
            $context["fieldNum"] = 1;
            // line 181
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["child_form"]) || array_key_exists("child_form", $context) ? $context["child_form"] : (function () { throw new Twig_Error_Runtime('Variable "child_form" does not exist.', 181, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 182
                echo "                ";
                if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 183
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                    echo "
                    ";
                    // line 184
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
                    echo "
                    <!-- img-thumbnail -->
                    ";
                    // line 186
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
                    echo "
                    ";
                    // line 187
                    $context["fieldNum"] = ((isset($context["fieldNum"]) || array_key_exists("fieldNum", $context) ? $context["fieldNum"] : (function () { throw new Twig_Error_Runtime('Variable "fieldNum" does not exist.', 187, $this->getSourceContext()); })()) + 1);
                    // line 188
                    echo "                ";
                } else {
                    // line 189
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
                    echo "
                ";
                }
                // line 191
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_3161610f4d05175fa825d6367b364e3b7c1fb0f7eedb90517a8d8a0b690f26c8->leave($__internal_3161610f4d05175fa825d6367b364e3b7c1fb0f7eedb90517a8d8a0b690f26c8_prof);

            
            $__internal_bfc58cead398f3747074e000b08851d09152478120395332369eb6f12dc0694e->leave($__internal_bfc58cead398f3747074e000b08851d09152478120395332369eb6f12dc0694e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "CocoricoCoreBundle:Form:fields_collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  703 => 192,  697 => 191,  691 => 189,  688 => 188,  686 => 187,  682 => 186,  677 => 184,  672 => 183,  669 => 182,  664 => 181,  662 => 180,  659 => 179,  652 => 175,  647 => 172,  645 => 171,  641 => 169,  638 => 168,  619 => 167,  602 => 133,  594 => 128,  587 => 124,  583 => 122,  581 => 121,  579 => 120,  576 => 119,  570 => 118,  564 => 116,  561 => 115,  559 => 114,  555 => 112,  550 => 109,  548 => 103,  542 => 100,  541 => 99,  535 => 97,  533 => 96,  529 => 94,  527 => 86,  522 => 84,  517 => 83,  515 => 82,  510 => 81,  507 => 80,  505 => 79,  500 => 78,  498 => 77,  495 => 76,  493 => 75,  490 => 74,  487 => 73,  484 => 72,  465 => 71,  446 => 29,  440 => 26,  437 => 25,  435 => 24,  432 => 23,  426 => 22,  420 => 20,  417 => 19,  415 => 18,  410 => 16,  406 => 15,  402 => 14,  397 => 13,  394 => 12,  389 => 11,  387 => 10,  384 => 9,  381 => 8,  362 => 7,  350 => 256,  343 => 252,  338 => 249,  336 => 248,  332 => 246,  323 => 244,  319 => 243,  310 => 240,  307 => 239,  304 => 238,  301 => 237,  298 => 236,  296 => 235,  293 => 234,  290 => 233,  281 => 232,  269 => 224,  262 => 220,  257 => 217,  255 => 216,  251 => 214,  242 => 212,  238 => 211,  229 => 208,  226 => 207,  223 => 206,  220 => 205,  217 => 204,  215 => 203,  212 => 202,  209 => 201,  200 => 200,  190 => 161,  183 => 157,  178 => 154,  176 => 153,  172 => 151,  163 => 149,  159 => 148,  152 => 146,  149 => 145,  146 => 144,  143 => 143,  140 => 142,  138 => 141,  135 => 140,  133 => 139,  124 => 138,  112 => 63,  105 => 59,  100 => 56,  98 => 55,  94 => 53,  85 => 51,  81 => 50,  72 => 47,  69 => 46,  66 => 45,  63 => 44,  60 => 43,  58 => 42,  55 => 41,  52 => 40,  43 => 39,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CocoricoCoreBundle:Form:fields.html.twig' %}

{% trans_default_domain 'cocorico' %}


{#Common Collection widget item#}
{% macro collectionItem(child_form, allow_delete) %}
    {% spaceless %}
        <li>
            {% set fieldNum = 1 %}
            {% for field in child_form %}
                {% if \"hidden\" not in field.vars.block_prefixes %}
                    <div class=\"{{ field.vars.id }}\">
                        {{ form_errors(field) }}
                        {{ form_label(field) }}
                        {{ form_widget(field) }}
                    </div>
                    {% set fieldNum = fieldNum + 1 %}
                {% else %}
                    {{ form_widget(field) }}
                {% endif %}
            {% endfor %}

            {% if allow_delete|default(null) is not null %}
                <a class=\"remove\" title=\"Remove\" href=\"javascript:void(0)\" onclick=\"\$(this).parent().remove();\">
                    <span>{{ 'collection.remove_item'|trans }}</span>
                </a>
            {% endif %}

        </li>

    {% endspaceless %}
{% endmacro %}


{#
   Common Collection widget
#}
{% block collection_widget %}
    {% import _self as self %}

    {% spaceless %}
        {% set data_prototype = \"\" %}
        {% if prototype is defined %}
            {% set data_prototype =  self.collectionItem(form.vars.prototype, allow_delete) %}
        {% endif %}
        <div {{ block('widget_container_attributes') }} data-prototype=\"{{ data_prototype|e }}\">

            <ul class=\"collection\">
                {% for child_form in form %}
                    {{ self.collectionItem(child_form, allow_delete) }}
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
{% endblock collection_widget %}


{#
    Discounts collection widget
#}
{% macro discountCollectionItem(child_form, allow_delete) %}
    {% set quantityText = {'%quantity_text%': 0|add_time_unit_text} %}
    {% set quantitiesText = {'%quantity_text%': (-1)|add_time_unit_text} %}

    {% spaceless %}
        <ul class=\"discount-list list-inline js-removed-row\">
            {% set fieldNum = 1 %}
            {% for field in child_form %}
                {#{{ form_errors(field) }}#}
                {% if \"hidden\" not in field.vars.block_prefixes %}
                    <li class=\"{{ field.vars.id }}\">
                        {% if field.vars.name == \"discount\" %}
                            {{ form_errors(field) }}
                            <span class=\"label\">{{ form_label(field) }}</span>
                            <div class=\"field-holder\">
                                {{ form_widget(field,{
                                    'id': 'decrement',
                                    'attr': {
                                        'data-ending': '%',
                                        'type': 'number',
                                        'class': 'form-control jcf-real-element',

                                    }
                                }) }}
                            </div>
                        {% elseif field.vars.name == \"fromQuantity\" %}
                            {{ form_errors(field) }}
                            <span class=\"label\">
                                {{ form_label(field,
                                    field.vars.label|trans(quantityText, 'cocorico_listing')) }}
                            </span>
                            <div class=\"field-holder\">
                                {{ form_widget(field,{
                                    'id': 'per-day-price2',
                                    'attr': {
                                        'type': 'number',
                                        'class': 'form-control',
                                    }
                                }) }}
                            </div>
                        {% endif %}
                    </li>

                    {% set fieldNum = fieldNum + 1 %}
                {% else %}
                    {{ form_widget(field) }}
                {% endif %}
            {% endfor %}

            {% if allow_delete|default(null) is not null %}
                {#remove#}
                <li>
                    <span class=\"label\">
                        {{ 'listing_edit.form.from_quantity.bought'|trans(quantitiesText, 'cocorico_listing') }}
                    </span>
                    <a class=\"close\" title=\"Remove\" href=\"javascript:void(0)\"
                       onclick=\"\$(this).closest('ul').remove();\">
                        <span class=\"hidden\">{{ 'collection.remove_item'|trans }}</span>
                        <i class=\"icon-cancel\"></i>
                    </a>
                </li>
            {% endif %}
        </ul>
    {% endspaceless %}
{% endmacro %}


{%- block _listing_discount_discounts_widget -%}
    {% import _self as self %}

    {% set data_prototype = \"\" %}
    {% if prototype is defined %}
        {% set data_prototype =  self.discountCollectionItem(form.vars.prototype, allow_delete) %}
    {% endif %}

    <div {{ block('widget_container_attributes') }} data-prototype=\"{{ data_prototype|e }}\">
        <div class=\"collection\">
            {% for child_form in form %}
                {{ self.discountCollectionItem(child_form, allow_delete) }}
            {% endfor %}
        </div>

        {% if allow_add|default(null) is not null %}
            <div class=\"btn-block text-center collection-add-block\">
                <a class=\"add\" title=\"Add\" href=\"\">
                    <div style=\"display: none;\"></div>
                    <span>{{ 'collection.add_item'|trans }}</span>
                </a>
            </div>
        {% endif %}
    </div>
{%- endblock -%}

{#
    Images collection
#}
{% macro imagesCollectionItem(child_form, allow_delete) %}
    {% spaceless %}
        <div class=\"img-thumbnail\">

            {% if allow_delete|default(null) is not null %}
                <a href=\"javascript:void(0)\" onclick=\"\$(this).parent().remove();\" title=\"Remove\"
                   class=\"close remove\"
                   data-dismiss=\"alert\" aria-label=\"Close\">
                    <span class=\"hidden\">{{ 'collection.remove_item'|trans }}</span>
                    <i class=\"icon-cancel\"></i>
                </a>
            {% endif %}

            {% set fieldNum = 1 %}
            {% for field in child_form %}
                {% if \"hidden\" not in field.vars.block_prefixes %}
                    {{ form_errors(field) }}
                    {{ form_label(field) }}
                    <!-- img-thumbnail -->
                    {{ form_widget(field) }}
                    {% set fieldNum = fieldNum + 1 %}
                {% else %}
                    {{ form_widget(field) }}
                {% endif %}
            {% endfor %}
        </div>
    {% endspaceless %}
{% endmacro %}


{#
   Images Collection widget
#}
{% block _listing_images_widget %}
    {% import _self as self %}

    {% spaceless %}
        {% set data_prototype = \"\" %}
        {% if prototype is defined %}
            {% set data_prototype =  self.imagesCollectionItem(form.vars.prototype, allow_delete) %}
        {% endif %}
        <div {{ block('widget_container_attributes') }} data-prototype=\"{{ data_prototype|e }}\">
            <!-- files-list -->
            <div class=\"files-list collection\">
                {% for child_form in form %}
                    {{ self.imagesCollectionItem(child_form, allow_delete) }}
                {% endfor %}
            </div>

            {% if allow_add|default(null) is not null %}
                <div class=\"btn-block text-center collection-add-blocks\">
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
   Images Collection widget for user profile
#}
{% block _user_images_widget %}
    {% import _self as self %}

    {% spaceless %}
        {% set data_prototype = \"\" %}
        {% if prototype is defined %}
            {% set data_prototype =  self.profileImagesCollectionItem(form.vars.prototype, allow_delete) %}
        {% endif %}
        <div {{ block('widget_container_attributes') }} data-prototype=\"{{ data_prototype|e }}\">
            <!-- images-list -->
            <div class=\"list-inline collection files-list js-drag-holder\">
                {% for child_form in form %}
                    {{ self.imagesCollectionItem(child_form, allow_delete) }}
                {% endfor %}
            </div>

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
", "CocoricoCoreBundle:Form:fields_collection.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Form/fields_collection.html.twig");
    }
}
