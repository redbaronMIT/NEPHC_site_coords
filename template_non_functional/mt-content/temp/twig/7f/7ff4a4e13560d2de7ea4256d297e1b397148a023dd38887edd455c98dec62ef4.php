<?php

/* @websiteWidgets/blog/templates/post_comments.twig.html */
class __TwigTemplate_9ff172edba3b561f3d71357c4b74c3d0678786f75d9031340c8940ad2615f477 extends Twig_Template
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
        echo "\" class=\"moto-widget moto-widget-blog-post_comments moto-preset-default ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", array(0 => "classes"), "method"), "html", null, true);
        echo "\" data-widget=\"blog.post_comments\" data-preset=\"default\">
    <div class=\"moto-widget-empty\"></div>
    ";
        // line 3
        if (( !($context["isPreview"] ?? null) && $this->getAttribute(($context["currentPage"] ?? null), "showComments", array()))) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, "disqus", array("spacing" => array("top" => "auto", "right" => "auto", "bottom" => "auto", "left" => "auto"), "visible_on" => "mobile-v", "params" => array("url" => "@dynamic")));
            echo "
    ";
        }
        // line 6
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/blog/templates/post_comments.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  31 => 4,  29 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/blog/templates/post_comments.twig.html", "/var/www/html/template/mt-includes/widgets/blog/templates/post_comments.twig.html");
    }
}
