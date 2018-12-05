<?php

/* @websiteWidgets/map/templates/default.twig.html */
class __TwigTemplate_76c54d89eadb5977dfda120e3e71601ba815d293359e36a8d4d367b7aa2c4f98 extends Twig_Template
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
        echo "\" class=\"moto-widget moto-widget-map moto-preset-default ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", array(), "method"), "html", null, true);
        echo "\" data-widget=\"map\" data-spacing=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "short"), "method"), "html", null, true);
        echo "\">
    <div class=\"moto-widget-cover\"></div>
    <iframe class=\"moto-widget-map-frame ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getLazyLoadingCssClass", array(), "method"), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "height", array()), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "lazySrcAttribute", array(0 => twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getApiSrc", array(), "method"))), "method"), "html", null, true);
        echo "></iframe>
</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/map/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/map/templates/default.twig.html", "/var/www/html/template/mt-includes/widgets/map/templates/default.twig.html");
    }
}
