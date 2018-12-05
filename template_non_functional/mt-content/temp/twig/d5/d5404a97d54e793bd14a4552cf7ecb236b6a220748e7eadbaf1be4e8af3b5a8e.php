<?php

/* @websiteWidgets/blog/templates/post_tags.twig.css */
class __TwigTemplate_ac58db844fe5255fd7d9add457c4cd56681d620b528ff78c7aea9792a3336141 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", array(0 => ".moto-widget-blog-post_tags", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", array())), "method"), "html", null, true);
        echo " {
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "desktop", array()), 1 => ".moto-widget-blog-post_tags__item-link"), "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "tablet", array()), 1 => ".moto-widget-blog-post_tags__item-link"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "mobile-h", array(), "array"), 1 => ".moto-widget-blog-post_tags__item-link"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "mobile-v", array(), "array"), 1 => ".moto-widget-blog-post_tags__item-link"), "method"), "html", null, true);
        echo "
    }

    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "indents", array()), "desktop", array()), 1 => ".moto-widget-blog-post_tags__item"), "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "indents", array()), "tablet", array()), 1 => ".moto-widget-blog-post_tags__item"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "indents", array()), "mobile-h", array(), "array"), 1 => ".moto-widget-blog-post_tags__item"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "indents", array()), "mobile-v", array(), "array"), 1 => ".moto-widget-blog-post_tags__item"), "method"), "html", null, true);
        echo "
    }
    .moto-widget-blog-post_tags__title {
        margin-right: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "title_indents", array()), "desktop", array()), "base", array()), "margin-right", array(), "array"), "html", null, true);
        echo ";
        margin-bottom: ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "indents", array()), "desktop", array()), "base", array()), "margin-bottom", array(), "array"), "html", null, true);
        echo ";
    }
}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/blog/templates/post_tags.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  74 => 26,  68 => 23,  62 => 20,  56 => 17,  51 => 15,  45 => 12,  39 => 9,  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/blog/templates/post_tags.twig.css", "/var/www/html/template/mt-includes/widgets/blog/templates/post_tags.twig.css");
    }
}
