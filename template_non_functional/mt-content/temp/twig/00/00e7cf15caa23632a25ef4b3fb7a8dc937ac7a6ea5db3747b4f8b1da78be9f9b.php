<?php

/* @websiteWidgets/blog/templates/category_list.twig.css */
class __TwigTemplate_ddc3f4e6bc9784c844a4b4cdd468007869043fa0fdb7cb32eb968dbdb29c5981 extends Twig_Template
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
        // line 1
        $context["properties"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), array($this->getAttribute(($context["item"] ?? null), "properties", array())));
        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", array(0 => ".moto-widget-blog-category_list", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", array())), "method"), "html", null, true);
        echo " {
    /* ITEM */
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "desktop", array()), 1 => ".moto-widget-blog-category_list__item"), "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "tablet", array()), 1 => ".moto-widget-blog-category_list__item"), "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "mobile-h", array(), "array"), 1 => ".moto-widget-blog-category_list__item"), "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "mobile-v", array(), "array"), 1 => ".moto-widget-blog-category_list__item"), "method"), "html", null, true);
        echo " }
    /* LINK */
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "link", array()), "desktop", array()), 1 => ".moto-widget-blog-category_list__item-link"), "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "link", array()), "tablet", array()), 1 => ".moto-widget-blog-category_list__item-link"), "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "link", array()), "mobile-h", array(), "array"), 1 => ".moto-widget-blog-category_list__item-link"), "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "link", array()), "mobile-v", array(), "array"), 1 => ".moto-widget-blog-category_list__item-link"), "method"), "html", null, true);
        echo " }
    /* TEXT */
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", array()), "desktop", array()), 1 => ".moto-widget-blog-category_list__item-text"), "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", array()), "tablet", array()), 1 => ".moto-widget-blog-category_list__item-text"), "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", array()), "mobile-h", array(), "array"), 1 => ".moto-widget-blog-category_list__item-text"), "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", array()), "mobile-v", array(), "array"), 1 => ".moto-widget-blog-category_list__item-text"), "method"), "html", null, true);
        echo " }
    /* ICON */
    .moto-widget-blog-category_list__item-link:hover {
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-blog-category_list__item-icon"), "method"), "html", null, true);
        echo "
    }
    .moto-widget-blog-category_list__item-icon {
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", array()), "desktop", array()), "base", array())), "method"), "html", null, true);
        echo "
        @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", array()), "tablet", array()), "base", array())), "method"), "html", null, true);
        echo " }
        @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", array()), "mobile-h", array(), "array"), "base", array())), "method"), "html", null, true);
        echo " }
        @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", array()), "mobile-v", array(), "array"), "base", array())), "method"), "html", null, true);
        echo " }
    }
}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/blog/templates/category_list.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  95 => 26,  91 => 25,  87 => 24,  81 => 21,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/blog/templates/category_list.twig.css", "/var/www/html/template/mt-includes/widgets/blog/templates/category_list.twig.css");
    }
}
