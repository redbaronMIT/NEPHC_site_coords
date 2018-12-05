<?php

/* @websiteWidgets/blog/templates/post_published_on.twig.html */
class __TwigTemplate_c1dfcd236ddc6aef24931e0d3e835f968353f738f51c6a6881456f5d72d57b69 extends Twig_Template
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
        echo "\" class=\"moto-widget moto-widget-blog-post_published_on moto-preset-default ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAlignClass", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", array(0 => "classes"), "method"), "html", null, true);
        echo "\" data-preset=\"default\" data-widget=\"blog.post_published_on\" data-spacing=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "short"), "method"), "html", null, true);
        echo "\">
    <div class=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "font_style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "font_style", array()), "moto-text_system_11")) : ("moto-text_system_11")), "html", null, true);
        echo "\">
        <span class=\"fa fa-calendar moto-widget-blog-post_published_on-icon\"></span><span class=\"moto-widget-blog-post_published_on-date\">
            ";
        // line 4
        if ($this->getAttribute(($context["currentPage"] ?? null), "isTemplate", array(), "method")) {
            // line 5
            echo "                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "2015-09-22", $this->getAttribute(($context["currentWidget"] ?? null), "getDateFormat", array(), "method")), "html", null, true);
            echo "
            ";
        } else {
            // line 7
            echo "                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "published", array()), $this->getAttribute(($context["currentWidget"] ?? null), "getDateFormat", array(), "method")), "html", null, true);
            echo "
            ";
        }
        // line 9
        echo "        </span>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/blog/templates/post_published_on.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  45 => 7,  39 => 5,  37 => 4,  32 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/blog/templates/post_published_on.twig.html", "/var/www/html/template/mt-includes/widgets/blog/templates/post_published_on.twig.html");
    }
}
