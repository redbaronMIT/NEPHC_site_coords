<?php

/* @websiteWidgets/image/templates/default.twig.html */
class __TwigTemplate_45dcfbe00f6d857d35abb23b2b45626b36a3074b64bc38351b32d279ca4e59fb extends Twig_Template
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
        echo "\" class=\"moto-widget moto-widget-image moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "preset", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAlignClass", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", array(), "method"), "html", null, true);
        echo "\" data-widget=\"image\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "src", array())) {
            // line 3
            echo "        ";
            if ((($context["isPreview"] ?? null) || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "link", array()), "action", array()) == "none"))) {
                // line 4
                echo "            <span class=\"moto-widget-image-link\">
                <img ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "lazyImageSrcAttribute", array(0 => $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "src", array())), "method"), "html", null, true);
                echo " class=\"moto-widget-image-picture ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getLazyLoadingCssClass", array(), "method"), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "title", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "alt", array()), "html", null, true);
                echo "\"";
                if (($context["isPreview"] ?? null)) {
                    echo " draggable=\"false\"";
                }
                echo ">
            </span>
        ";
            } else {
                // line 8
                echo "            <a class=\"moto-widget-image-link moto-link\" ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "getLinkAttributes", array(0 => $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "link", array())), "method"), "html", null, true);
                echo ">
                <img ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "lazyImageSrcAttribute", array(0 => $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "src", array())), "method"), "html", null, true);
                echo " class=\"moto-widget-image-picture ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getLazyLoadingCssClass", array(), "method"), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "title", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "alt", array()), "html", null, true);
                echo "\">
            </a>
        ";
            }
            // line 12
            echo "    ";
        } else {
            // line 13
            echo "        <div class=\"moto-widget-empty\"></div>
    ";
        }
        // line 15
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/image/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  82 => 13,  79 => 12,  65 => 9,  60 => 8,  42 => 5,  39 => 4,  36 => 3,  34 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/image/templates/default.twig.html", "/var/www/html/template/mt-includes/widgets/image/templates/default.twig.html");
    }
}
