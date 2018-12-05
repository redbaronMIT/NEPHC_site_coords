<?php

/* @websiteWidgets/blog/templates/post_author.twig.html */
class __TwigTemplate_9a1e3720371d5201aa503369cef86adeffa584a6921c0153f7b05979528ccf32 extends Twig_Template
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
        echo "\" class=\"moto-widget moto-widget-blog-post-author moto-preset-default ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAlignClass", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", array(0 => "classes"), "method"), "html", null, true);
        echo "\" data-widget=\"blog.post_author\" data-preset=\"default\">
    <div class=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "font_style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "font_style", array()), "moto-text_system_11")) : ("moto-text_system_11")), "html", null, true);
        echo "\">
        <span class=\"fa fa-user moto-widget-blog-post-author-icon\"></span><span class=\"moto-widget-blog-post-author-text\">";
        // line 3
        if ($this->getAttribute(($context["currentPage"] ?? null), "isTemplate", array(), "method")) {
            echo "Admin";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentPage"] ?? null), "getAuthor", array()), "name", array()), "html", null, true);
        }
        echo "</span>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/blog/templates/post_author.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/blog/templates/post_author.twig.html", "/var/www/html/template/mt-includes/widgets/blog/templates/post_author.twig.html");
    }
}
