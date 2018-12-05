<?php

/* @websiteWidgets/button/templates/default.twig.html */
class __TwigTemplate_ed72cb9108100ebd4b1056663293f4298eb973368d52aa0e058d47ef154f9db3 extends Twig_Template
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
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", array(), "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-button moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "preset", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAlignClass", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", array(), "method"), "html", null, true);
        echo "\" data-widget=\"button\">
    ";
        // line 2
        if (($context["isPreview"] ?? null)) {
            // line 3
            echo "        <span class=\"moto-widget-button-link moto-size-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "size", array()), "html", null, true);
            echo "\"><span class=\"fa moto-widget-theme-icon\"></span> <span class=\"moto-widget-button-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "label", array()), "html", null, true);
            echo "</span></span>
    ";
        } else {
            // line 5
            echo "        <a ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "getLinkAttributes", array(0 => $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "link", array())), "method"), "html", null, true);
            echo " class=\"moto-widget-button-link moto-size-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "size", array()), "html", null, true);
            echo " moto-link\"><span class=\"fa moto-widget-theme-icon\"></span> <span class=\"moto-widget-button-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "label", array()), "html", null, true);
            echo "</span></a>
    ";
        }
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/button/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  42 => 5,  34 => 3,  32 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/button/templates/default.twig.html", "/var/www/html/template/mt-includes/widgets/button/templates/default.twig.html");
    }
}
