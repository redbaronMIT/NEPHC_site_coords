<?php

/* @websiteWidgets/blog/templates/post_content.twig.html */
class __TwigTemplate_95f8a9ed301dda2f780054d397534b09a93cfae5a11ae5ee78db682a7e457e2c extends Twig_Template
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
        if (($context["isServer"] ?? null)) {
            $context["ContentHelper"] = $this->loadTemplate("macros/helper.html.twig", "@websiteWidgets/blog/templates/post_content.twig.html", 1);
        }
        // line 2
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", array(), "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-blog-post_content moto-preset-";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "preset", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array(), "any", false, true), "preset", array()), "default")) : ("default")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo "\" data-widget=\"blog.post_content\">

    ";
        // line 4
        if ($this->getAttribute(($context["currentPage"] ?? null), "isTemplate", array(), "method")) {
            // line 5
            echo "        <div class=\"moto-widget-empty\"></div>
    ";
        } else {
            // line 7
            echo "        <section id=\"section-content\" class=\"content page-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "id", array()), "html", null, true);
            echo " moto-section\" data-widget=\"section\" data-container=\"section\">
            ";
            // line 8
            echo $context["ContentHelper"]->getRenderPageSection(($context["currentPage"] ?? null), $this->getAttribute(($context["currentPage"] ?? null), "type", array()));
            echo "
        </section>
    ";
        }
        // line 11
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/blog/templates/post_content.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  46 => 8,  41 => 7,  37 => 5,  35 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/blog/templates/post_content.twig.html", "/var/www/html/template/mt-includes/widgets/blog/templates/post_content.twig.html");
    }
}
