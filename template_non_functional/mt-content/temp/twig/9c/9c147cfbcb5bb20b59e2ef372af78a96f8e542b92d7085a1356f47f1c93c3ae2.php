<?php

/* @websiteWidgets/accordion/templates/default.twig.css */
class __TwigTemplate_de899b86dfa73befe9de884e329ecc33e820997bdcb5cc41228f3642903c0f68 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", array(0 => ".moto-widget-accordion", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", array())), "method"), "html", null, true);
        echo " {

    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-accordion__header"), "method"), "html", null, true);
        echo "
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-accordion__header-icon"), "method"), "html", null, true);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "collapse_icon", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-accordion__collapse-icon"), "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-accordion__header"), "method"), "html", null, true);
        echo "
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-accordion__header-icon"), "method"), "html", null, true);
        echo "
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "collapse_icon", array()), "tablet", array()), "base", array()), 1 => ".moto-widget-accordion__collapse-icon"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-accordion__header"), "method"), "html", null, true);
        echo "
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-accordion__header-icon"), "method"), "html", null, true);
        echo "
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "collapse_icon", array()), "mobile-h", array(), "array"), "base", array()), 1 => ".moto-widget-accordion__collapse-icon"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-accordion__header"), "method"), "html", null, true);
        echo "
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-accordion__header-icon"), "method"), "html", null, true);
        echo "
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "collapse_icon", array()), "mobile-v", array(), "array"), "base", array()), 1 => ".moto-widget-accordion__collapse-icon"), "method"), "html", null, true);
        echo "
    }
    .moto-widget-accordion__item {
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "desktop", array()), "base", array())), "method"), "html", null, true);
        echo "
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-accordion__header-title"), "method"), "html", null, true);
        echo "
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content_opened", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-accordion__content"), "method"), "html", null, true);
        echo "

        &:hover {
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", array()), "desktop", array()), "hover", array())), "method"), "html", null, true);
        echo "
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-accordion__header"), "method"), "html", null, true);
        echo "
            ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-accordion__header-title"), "method"), "html", null, true);
        echo "
            ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-accordion__header-icon"), "method"), "html", null, true);
        echo "
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "collapse_icon", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-accordion__collapse-icon"), "method"), "html", null, true);
        echo "
            ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content_opened", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-accordion__content"), "method"), "html", null, true);
        echo "
        }

        &.moto-widget-accordion__item_open {
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_opened", array()), "desktop", array()), "base", array())), "method"), "html", null, true);
        echo "

            ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title_opened", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-accordion__header-title"), "method"), "html", null, true);
        echo "
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_opened", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-accordion__header"), "method"), "html", null, true);
        echo "
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon_opened", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-accordion__header-icon"), "method"), "html", null, true);
        echo "
            ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "collapse_icon_opened", array()), "desktop", array()), "base", array()), 1 => ".moto-widget-accordion__collapse-icon"), "method"), "html", null, true);
        echo "

            &:hover {
                ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_opened", array()), "desktop", array()), "hover", array())), "method"), "html", null, true);
        echo "
                ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title_opened", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-accordion__header-title"), "method"), "html", null, true);
        echo "
                ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_opened", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-accordion__header"), "method"), "html", null, true);
        echo "
                ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon_opened", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-accordion__header-icon"), "method"), "html", null, true);
        echo "
                ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "collapse_icon_opened", array()), "desktop", array()), "hover", array()), 1 => ".moto-widget-accordion__collapse-icon"), "method"), "html", null, true);
        echo "
            }
        }
    }
}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/accordion/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 50,  160 => 49,  156 => 48,  152 => 47,  148 => 46,  142 => 43,  138 => 42,  134 => 41,  130 => 40,  125 => 38,  118 => 34,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  92 => 26,  88 => 25,  84 => 24,  78 => 21,  74 => 20,  70 => 19,  64 => 16,  60 => 15,  56 => 14,  50 => 11,  46 => 10,  42 => 9,  37 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/accordion/templates/default.twig.css", "/var/www/html/template/mt-includes/widgets/accordion/templates/default.twig.css");
    }
}
