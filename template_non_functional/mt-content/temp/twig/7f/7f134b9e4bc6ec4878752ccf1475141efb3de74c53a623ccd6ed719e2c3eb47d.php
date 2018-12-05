<?php

/* @websiteWidgets/social_links_extended/templates/default.twig.css */
class __TwigTemplate_14226294d9770b8d014bbe5af9b65a8c3f60664cea64f10bc2eea9d1a6d0db22 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", array(0 => ".moto-widget-social-links-extended", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", array())), "method"), "html", null, true);
        echo " {

    .moto-widget-social-links-extended__item {
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "desktop", array())), "method"), "html", null, true);
        echo "
        @media screen and (max-width: @const_media_tablet_max_width) {
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "tablet", array())), "method"), "html", null, true);
        echo "
        }
        @media screen and (max-width: @const_media_mobile-h_max_width) {
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "mobile-h", array(), "array")), "method"), "html", null, true);
        echo "
        }
        @media screen and (max-width: @const_media_mobile-v_max_width) {
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "mobile-v", array(), "array")), "method"), "html", null, true);
        echo "
        }
        &:last-child {
             margin-bottom: 0;
             margin-right: 0;
        }
    }

    &.moto-align-left .moto-widget-social-links-extended__item {
        margin-left: 0;
    }
    &.moto-align-center .moto-widget-social-links-extended__item {
        margin-right: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "desktop", array()), "base", array()), "margin-right", array(), "array"), "html", null, true);
        echo " / 2;
        margin-left:  ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "desktop", array()), "base", array()), "margin-left", array(), "array"), "html", null, true);
        echo " / 2;
        ";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "tablet", array()), "base", array()), "margin-right", array(), "array") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "tablet", array()), "base", array()), "margin-left", array(), "array"))) {
            // line 29
            echo "            @media screen and (max-width: @const_media_tablet_max_width) {
                margin-right: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "tablet", array()), "base", array()), "margin-right", array(), "array"), "html", null, true);
            echo " / 2;
                margin-left:  ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "tablet", array()), "base", array()), "margin-left", array(), "array"), "html", null, true);
            echo " / 2;
            }
        ";
        }
        // line 34
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "mobile-h", array(), "array"), "base", array()), "margin-right", array(), "array") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "tablet", array()), "base", array()), "margin-left", array(), "array"))) {
            // line 35
            echo "            @media screen and (max-width: @const_media_mobile-h_max_width) {
                margin-right: ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "mobile-h", array(), "array"), "base", array()), "margin-right", array(), "array"), "html", null, true);
            echo " / 2;
                margin-left:  ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "mobile-h", array(), "array"), "base", array()), "margin-left", array(), "array"), "html", null, true);
            echo " / 2;
            }
        ";
        }
        // line 40
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "mobile-v", array(), "array"), "base", array()), "margin-right", array(), "array") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "tablet", array()), "base", array()), "margin-left", array(), "array"))) {
            // line 41
            echo "            @media screen and (max-width: @const_media_mobile-v_max_width) {
                margin-right: ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "mobile-v", array(), "array"), "base", array()), "margin-right", array(), "array"), "html", null, true);
            echo " / 2;
                margin-left:  ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", array()), "mobile-v", array(), "array"), "base", array()), "margin-left", array(), "array"), "html", null, true);
            echo " / 2;
            }
        ";
        }
        // line 46
        echo "    }
    &.moto-align-right .moto-widget-social-links-extended__item {
        margin-right: 0;
        &:first-child {
            margin-left: 0;
        }
    }

    ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "desktop", array()), 1 => ".moto-widget-social-links-extended__link"), "method"), "html", null, true);
        echo "

    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "tablet", array()), 1 => ".moto-widget-social-links-extended__link"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "mobile-h", array(), "array"), 1 => ".moto-widget-social-links-extended__link"), "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "mobile-v", array(), "array"), 1 => ".moto-widget-social-links-extended__link"), "method"), "html", null, true);
        echo "
    }
    ";
        // line 65
        if ($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", array()), "enableAutoSize", array())) {
            // line 66
            echo "        .moto-widget-social-links-extended__link {
            width: auto;
            height: auto;
        }
    ";
        }
        // line 71
        echo "}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/social_links_extended/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 71,  152 => 66,  150 => 65,  145 => 63,  139 => 60,  133 => 57,  127 => 54,  117 => 46,  111 => 43,  107 => 42,  104 => 41,  101 => 40,  95 => 37,  91 => 36,  88 => 35,  85 => 34,  79 => 31,  75 => 30,  72 => 29,  70 => 28,  66 => 27,  62 => 26,  47 => 14,  41 => 11,  35 => 8,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/social_links_extended/templates/default.twig.css", "/var/www/html/template/mt-includes/widgets/social_links_extended/templates/default.twig.css");
    }
}
