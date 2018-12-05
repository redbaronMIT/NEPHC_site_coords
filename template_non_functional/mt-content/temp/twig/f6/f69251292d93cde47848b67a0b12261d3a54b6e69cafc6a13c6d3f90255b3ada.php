<?php

/* @websiteWidgets/disqus/templates/default.twig.html */
class __TwigTemplate_0573980bfdcbb49612447e8c0c34386d3a3fa239cd41736bd06680a0e72893ac extends Twig_Template
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
        echo "\" class=\"moto-widget moto-widget-disqus ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", array(0 => "classes"), "method"), "html", null, true);
        echo "\" data-widget=\"disqus\"";
        if ( !($context["isPreview"] ?? null)) {
            echo " data-params=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["currentWidget"] ?? null), "getParams", array(), "method")), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getPageUrl", array(0 => ($context["currentPage"] ?? null)), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 2
        if (($context["isPreview"] ?? null)) {
            // line 3
            echo "        <div class=\"moto-widget-cover\"></div>
    ";
        }
        // line 5
        echo "    ";
        if ($this->getAttribute(($context["currentWidget"] ?? null), "getParam", array(0 => "shortname"), "method")) {
            // line 6
            echo "        <div id=\"disqus_thread\"></div>
    ";
        } else {
            // line 8
            echo "        <div class=\"moto-widget-empty\"></div>
    ";
        }
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/disqus/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  49 => 8,  45 => 6,  42 => 5,  38 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/disqus/templates/default.twig.html", "/var/www/html/template/mt-includes/widgets/disqus/templates/default.twig.html");
    }
}
