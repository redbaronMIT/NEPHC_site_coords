<?php

/* @websiteWidgets/countdown/templates/default.twig.css */
class __TwigTemplate_36145c07529ddcb6886245f7f6d310619b69b00ee0db85c1267b871c40418ea6 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", array(0 => ".moto-widget-countdown", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", array())), "method"), "html", null, true);
        echo " {

    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "digits", array()), "desktop", array()), 1 => ".countdown-item-amount"), "method"), "html", null, true);
        echo "
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", array()), "desktop", array()), 1 => ".countdown-item-unit"), "method"), "html", null, true);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "delimiter", array()), "desktop", array()), 1 => ".countdown-item-delimiter"), "method"), "html", null, true);
        echo "
    .countdown-item-block {
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "desktop", array())), "method"), "html", null, true);
        echo "
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "border", array()), "desktop", array())), "method"), "html", null, true);
        echo "
    }

    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "digits", array()), "tablet", array()), 1 => ".countdown-item-amount"), "method"), "html", null, true);
        echo "
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", array()), "tablet", array()), 1 => ".countdown-item-unit"), "method"), "html", null, true);
        echo "
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "delimiter", array()), "tablet", array()), 1 => ".countdown-item-delimiter"), "method"), "html", null, true);
        echo "
        .countdown-item-block {
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "tablet", array())), "method"), "html", null, true);
        echo "
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "border", array()), "tablet", array())), "method"), "html", null, true);
        echo "
        }
    }

    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "digits", array()), "mobile-h", array(), "array"), 1 => ".countdown-item-amount"), "method"), "html", null, true);
        echo "
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", array()), "mobile-h", array(), "array"), 1 => ".countdown-item-unit"), "method"), "html", null, true);
        echo "
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "delimiter", array()), "mobile-h", array(), "array"), 1 => ".countdown-item-delimiter"), "method"), "html", null, true);
        echo "
        .countdown-item-block {
            ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "mobile-h", array(), "array")), "method"), "html", null, true);
        echo "
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "border", array()), "mobile-h", array(), "array")), "method"), "html", null, true);
        echo "
        }
    }

    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "digits", array()), "mobile-v", array(), "array"), 1 => ".countdown-item-amount"), "method"), "html", null, true);
        echo "
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", array()), "mobile-v", array(), "array"), 1 => ".countdown-item-unit"), "method"), "html", null, true);
        echo "
        ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "delimiter", array()), "mobile-v", array(), "array"), 1 => ".countdown-item-delimiter"), "method"), "html", null, true);
        echo "
        .countdown-item-block {
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", array()), "mobile-v", array(), "array")), "method"), "html", null, true);
        echo "
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", array(0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "border", array()), "mobile-v", array(), "array")), "method"), "html", null, true);
        echo "
        }
    }
}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/countdown/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  116 => 38,  111 => 36,  107 => 35,  103 => 34,  95 => 29,  91 => 28,  86 => 26,  82 => 25,  78 => 24,  70 => 19,  66 => 18,  61 => 16,  57 => 15,  53 => 14,  46 => 10,  42 => 9,  37 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/countdown/templates/default.twig.css", "/var/www/html/template/mt-includes/widgets/countdown/templates/default.twig.css");
    }
}
